<?php

/* Authentication Routes... */
$this->get('/', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login');
$this->post('logout', 'Auth\LoginController@logout')->name('logout');

/* Registration Routes... */
$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
$this->post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset');

Route::middleware(['auth'])->group(function ()
{
    /* Reports */
    Route::get('reports/download', 'ReportController@pdf')->name('reports.pdf');
    Route::get('reports', 'ReportController@index')->name('reports.index')->middleware('permission:reports.index');
    Route::get('reports/create', 'ReportController@create')->name('reports.create')->middleware('permission:reports.create');
    Route::post('reports/store', 'ReportController@store')->name('reports.store')->middleware('permission:reports.create');
    Route::get('reports/{report}', 'ReportController@show')->name('reports.show')->middleware('permission:reports.show');
    Route::get('reports/{report}/edit', 'ReportController@edit')->name('reports.edit')->middleware('permission:reports.edit');
    Route::put('reports/', 'ReportController@update')->name('reports.update')->middleware('permission:reports.edit');
    Route::get('reports/{report}/download', 'ReportController@download')->name('reports.download')->middleware('reports.download');

    /* Students */
    //Just for students
    Route::get('students', 'StudentController@index')->name('students.index')->middleware('permission:students.index');
    //For admin and tutor
    Route::get('students/{student}', 'ReportController@digitalId')->name('students.digitalId')->middleware('permission:students.digitalId');
});

Route::get('/home', 'HomeController@index')->name('home')->middleware('permission:home.index');
