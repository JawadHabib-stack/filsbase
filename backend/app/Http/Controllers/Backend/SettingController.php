<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class SettingController extends Controller
{
    public $module_title;

    public $module_name;

    public $module_path;

    public $module_icon;

    public $module_model;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'Settings';

        // module name
        $this->module_name = 'settings';

        // directory path of the module
        $this->module_path = 'settings';

        // module icon
        $this->module_icon = 'fas fa-cogs';

        // module model name, path
        $this->module_model = "App\Models\Setting";
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'List';

        $$module_name = $module_model::paginate();

        Log::info(label_case($module_title.' '.$module_action).' | User:'.Auth::user()->name.'(ID:'.Auth::user()->id.')');

        return view(
            "backend.{$module_path}.index",
            compact('module_title', 'module_name', "{$module_name}", 'module_path', 'module_icon', 'module_action', 'module_name_singular')
        );
    }

    public function store(Request $request)
    {
        $rules = Setting::getValidationRules();
        $data = $request->validate($rules);
        $validSettings = array_keys($rules);

        // SMTP fields that must also be written to .env
        $smtpMap = [
            'mail_mailer'     => 'MAIL_MAILER',
            'mail_host'       => 'MAIL_HOST',
            'mail_port'       => 'MAIL_PORT',
            'mail_username'   => 'MAIL_USERNAME',
            'mail_password'   => 'MAIL_PASSWORD',
            'mail_encryption' => 'MAIL_ENCRYPTION',
            'email'           => 'MAIL_FROM_ADDRESS',
            'mail_from_name'  => 'MAIL_FROM_NAME',
        ];

        foreach ($data as $key => $val) {
            if (in_array($key, $validSettings)) {
                Setting::add($key, $val, Setting::getDataType($key));
            }
            if (isset($smtpMap[$key])) {
                $this->setEnvValue($smtpMap[$key], $val ?? '');
            }
        }

        // Reconfigure mail on the fly
        config([
            'mail.mailers.smtp.host'       => $request->input('mail_host', config('mail.mailers.smtp.host')),
            'mail.mailers.smtp.port'       => $request->input('mail_port', config('mail.mailers.smtp.port')),
            'mail.mailers.smtp.username'   => $request->input('mail_username', config('mail.mailers.smtp.username')),
            'mail.mailers.smtp.password'   => $request->input('mail_password', config('mail.mailers.smtp.password')),
            'mail.mailers.smtp.encryption' => $request->input('mail_encryption', config('mail.mailers.smtp.encryption')),
            'mail.default'                 => $request->input('mail_mailer', config('mail.default')),
            'mail.from.address'            => $request->input('email', config('mail.from.address')),
            'mail.from.name'               => $request->input('mail_from_name', config('mail.from.name')),
        ]);

        return redirect()->back()->with('status', 'Settings saved successfully.');
    }

    private function setEnvValue(string $key, string $value): void
    {
        $envPath = base_path('.env');
        $env = file_get_contents($envPath);
        $value = str_contains($value, ' ') ? '"'.$value.'"' : ($value ?: 'null');

        if (preg_match("/^{$key}=.*/m", $env)) {
            $env = preg_replace("/^{$key}=.*/m", "{$key}={$value}", $env);
        } else {
            $env .= PHP_EOL."{$key}={$value}";
        }
        file_put_contents($envPath, $env);
    }
}
