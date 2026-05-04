<?php

namespace Modules\Payment\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;

class PaymentsController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'Payments';

        // module name
        $this->module_name = 'payments';

        // directory path of the module
        $this->module_path = 'payment::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\Payment\Models\Payment";
    }

}
