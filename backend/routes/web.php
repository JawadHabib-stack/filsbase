<?php

use App\Http\Controllers\FilsbaseController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\LanguageController;
use App\Livewire\Privacy;
use App\Livewire\Terms;
use Illuminate\Support\Facades\Route;

/*
*
* Auth Routes
*
* --------------------------------------------------------------------
*/

require __DIR__.'/auth.php';

/*
*
* Filsbase Frontend Routes
*
* --------------------------------------------------------------------
*/


Route::get('/about', [FilsbaseController::class, 'about'])->name('filsbase.about');
Route::get('/services', [FilsbaseController::class, 'services'])->name('filsbase.services');
Route::get('/service-detail', [FilsbaseController::class, 'serviceSingle'])->name('filsbase.service-single');
Route::get('/blog', [FilsbaseController::class, 'blog'])->name('filsbase.blog');
Route::get('/blog/{slug}', [FilsbaseController::class, 'blogSingle'])->name('filsbase.blog-single');
Route::get('/case-study', [FilsbaseController::class, 'caseStudy'])->name('filsbase.case-study');
Route::get('/case-study-detail', [FilsbaseController::class, 'caseStudySingle'])->name('filsbase.case-study-single');
Route::get('/team', [FilsbaseController::class, 'team'])->name('filsbase.team');
Route::get('/team-detail', [FilsbaseController::class, 'teamSingle'])->name('filsbase.team-single');
Route::get('/pricing', [FilsbaseController::class, 'pricing'])->name('filsbase.pricing');
Route::get('/testimonials', [FilsbaseController::class, 'testimonials'])->name('filsbase.testimonials');
Route::get('/image-gallery', [FilsbaseController::class, 'imageGallery'])->name('filsbase.image-gallery');
Route::get('/video-gallery', [FilsbaseController::class, 'videoGallery'])->name('filsbase.video-gallery');
Route::get('/faqs', [FilsbaseController::class, 'faqs'])->name('filsbase.faqs');
Route::get('/contact', [FilsbaseController::class, 'contact'])->name('filsbase.contact');
Route::get('/404', [FilsbaseController::class, 'notFound'])->name('filsbase.404');

// home route
Route::get('home', [FilsbaseController::class, 'home'])->name('home');
Route::get('starter', [FilsbaseController::class, 'home'])->name('starter');

// Language Switch
Route::get('language/{language}', [LanguageController::class, 'switch'])->name('language.switch');

Route::redirect('dashboard', '/profile')->name('dashboard');

// pages
Route::get('terms', Terms::class)->name('terms');
Route::get('privacy', Privacy::class)->name('privacy');

Route::group(['namespace' => 'App\Http\Controllers\Frontend', 'as' => 'frontend.'], function () {
    Route::group(['middleware' => ['auth']], function () {
        /*
        *
        *  Users Routes
        *
        * ---------------------------------------------------------------------
        */
        $module_name = 'users';
        $controller_name = 'UserController';
        Route::get('profile/edit', ['as' => "{$module_name}.profileEdit", 'uses' => "{$controller_name}@profileEdit"]);
        Route::patch('profile/edit', ['as' => "{$module_name}.profileUpdate", 'uses' => "{$controller_name}@profileUpdate"]);
        Route::get('profile/changePassword', ['as' => "{$module_name}.changePassword", 'uses' => "{$controller_name}@changePassword"]);
        Route::patch('profile/changePassword', ['as' => "{$module_name}.changePasswordUpdate", 'uses' => "{$controller_name}@changePasswordUpdate"]);
        Route::get('profile/{username?}', ['as' => "{$module_name}.profile", 'uses' => "{$controller_name}@profile"]);
        Route::get("{$module_name}/emailConfirmationResend", ['as' => "{$module_name}.emailConfirmationResend", 'uses' => "{$controller_name}@emailConfirmationResend"]);
        Route::delete("{$module_name}/userProviderDestroy", ['as' => "{$module_name}.userProviderDestroy", 'uses' => "{$controller_name}@userProviderDestroy"]);
    });
});

Route::get('/', [FilsbaseController::class, 'home'])->name('frontend.index');

/*
*
* Backend Routes
* These routes need view-backend permission
* --------------------------------------------------------------------
*/
Route::group(['namespace' => 'App\Http\Controllers\Backend', 'prefix' => 'admin', 'as' => 'backend.', 'middleware' => ['auth', 'can:view_backend']], function () {
    /**
     * Backend Dashboard
     * Namespaces indicate folder structure.
     */
    Route::get('/', 'BackendController@index')->name('home');
    Route::get('dashboard', 'BackendController@index')->name('dashboard');

    /*
     *
     *  Settings Routes
     *
     * ---------------------------------------------------------------------
     */
    Route::group(['middleware' => ['can:edit_settings']], function () {
        $module_name = 'settings';
        $controller_name = 'SettingController';
        Route::get("{$module_name}", "{$controller_name}@index")->name("{$module_name}.index");
        Route::post("{$module_name}", "{$controller_name}@store")->name("{$module_name}.store");
    });

    /*
    *
    *  Notification Routes
    *
    * ---------------------------------------------------------------------
    */
    $module_name = 'notifications';
    $controller_name = 'NotificationsController';
    Route::get("{$module_name}", ['as' => "{$module_name}.index", 'uses' => "{$controller_name}@index"]);
    Route::get("{$module_name}/markAllAsRead", ['as' => "{$module_name}.markAllAsRead", 'uses' => "{$controller_name}@markAllAsRead"]);
    Route::delete("{$module_name}/deleteAll", ['as' => "{$module_name}.deleteAll", 'uses' => "{$controller_name}@deleteAll"]);
    Route::get("{$module_name}/{id}", ['as' => "{$module_name}.show", 'uses' => "{$controller_name}@show"]);

    /*
    *
    *  Backup Routes
    *
    * ---------------------------------------------------------------------
    */
    $module_name = 'backups';
    $controller_name = 'BackupController';
    Route::get("{$module_name}", ['as' => "{$module_name}.index", 'uses' => "{$controller_name}@index"]);
    Route::get("{$module_name}/create", ['as' => "{$module_name}.create", 'uses' => "{$controller_name}@create"]);
    Route::get("{$module_name}/download/{file_name}", ['as' => "{$module_name}.download", 'uses' => "{$controller_name}@download"]);
    Route::get("{$module_name}/delete/{file_name}", ['as' => "{$module_name}.delete", 'uses' => "{$controller_name}@delete"]);

    /*
    *
    *  Roles Routes
    *
    * ---------------------------------------------------------------------
    */
    $module_name = 'roles';
    $controller_name = 'RolesController';
    Route::resource("{$module_name}", "{$controller_name}");

    /*
    *
    *  Users Routes
    *
    * ---------------------------------------------------------------------
    */
    $module_name = 'users';
    $controller_name = 'UserController';
    Route::get("{$module_name}/{id}/resend-email-confirmation", ['as' => "{$module_name}.emailConfirmationResend", 'uses' => "{$controller_name}@emailConfirmationResend"]);
    Route::delete("{$module_name}/user-provider-destroy", ['as' => "{$module_name}.userProviderDestroy", 'uses' => "{$controller_name}@userProviderDestroy"]);
    Route::get("{$module_name}/{id}/change-password", ['as' => "{$module_name}.changePassword", 'uses' => "{$controller_name}@changePassword"]);
    Route::patch("{$module_name}/{id}/change-password", ['as' => "{$module_name}.changePasswordUpdate", 'uses' => "{$controller_name}@changePasswordUpdate"]);
    Route::get("{$module_name}/trashed", ['as' => "{$module_name}.trashed", 'uses' => "{$controller_name}@trashed"]);
    Route::patch("{$module_name}/{id}/trashed", ['as' => "{$module_name}.restore", 'uses' => "{$controller_name}@restore"]);
    Route::get("{$module_name}/index_data", ['as' => "{$module_name}.index_data", 'uses' => "{$controller_name}@index_data"]);
    Route::get("{$module_name}/index_list", ['as' => "{$module_name}.index_list", 'uses' => "{$controller_name}@index_list"]);
    Route::patch("{$module_name}/{id}/block", ['as' => "{$module_name}.block", 'uses' => "{$controller_name}@block", 'middleware' => ['can:block_users']]);
    Route::patch("{$module_name}/{id}/unblock", ['as' => "{$module_name}.unblock", 'uses' => "{$controller_name}@unblock", 'middleware' => ['can:block_users']]);
    Route::resource("{$module_name}", "{$controller_name}");
});

/**
 * File Manager Routes.
 */
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth', 'can:view_backend']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
