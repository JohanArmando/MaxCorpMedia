<?php
/*Maxmedia*/

Route::get('/',[
    'as'   => '/',
    'uses' => 'Maxmedia\FrontController@showIndex'
]);
Route::get('/about',[
    'as'   => 'about',
    'uses' => 'Maxmedia\FrontController@showAbout'
]);Route::get('/advertiser',[
    'as'   => 'advertiser',
    'uses' => 'Maxmedia\FrontController@showAdvertiser'
]);Route::get('/contact',[
    'as'   => 'contact',
    'uses' => 'Maxmedia\FrontController@showContact'
]);Route::get('/publishers',[
    'as'   => 'publisher',
    'uses' => 'Maxmedia\FrontController@showPublisher'
]);
/*Inicio de sesion*/

Route::get('password/email','Auth\PasswordController@getEmail');
Route::post('password/email','Auth\PasswordController@postEmail');
Route::get('password/reset/{token}','Auth\PasswordController@getReset');
Route::post('password/reset','Auth\PasswordController@postReset');

Route::get('sum_by_publisher',[
    'as'    => 'sumando',
    'uses'  => 'HomeController@sumPublisher'
]);
Route::get('login',[
  'as'   => 'login',
  'uses' => 'LoginController@showLogin'
]);
Route::post('sing-in',[
    'as' => 'sing',
    'uses' => 'LoginController@sing'
]);
//Logout
Route::get('logout',[
    'as'   => 'logout',
    'uses' => 'LoginController@logout'
]);

Route::get('impressions/{id}',[
    'as'    => 'imp',
    'uses'  => 'FileSystemController@files'
]);
Route::get('imp/{id}',[
    'as'    => 'imp',
    'uses'  => 'FileSystemController@show'
]);
Route::get('delete_script',[
    'as'    => 'del',
    'uses'  => 'FileSystemController@borrar'
]);

Route::get('xYz/{id}',[
    'as'    => 'contador',
    'uses'  => 'HomeController@count'
]);
Route::get('sum_total',[
    'as'    => 'sumando',
    'uses'  => 'HomeController@countTotal'
]);
Route::resource('mail','MailController');
/*Admin*/
  Route::get('real_report',[
        'as'    => 'real',
        'uses'  => 'AnalitycsController@google'
    ]);
    Route::get('xyz_probando',[
        'as' => 'probando',
        'uses' => 'AnalitycsController@index' ]);

Route::group(['namespace' => 'admin', 'middleware' => ['auth','admin'], 'prefix' => 'admin'], function()
{
 
    Route::get('placement',[
    'as'    => 'placement',
    'uses'  => 'FrontController@index'
    ]);
    Route::get('order/update/{product}/{quantity}', [
        'as' => 'update-quantity',
        'uses' => 'PaymentController@update'
    ]);
    Route::post('order/show', [
        'as' => 'paid',
        'uses' => 'PaymentController@store'
    ]);
    Route::post('revenue',['as' => 'revenue','uses'=>'FrontController@newRevenue']);
    Route::resource('payment','PaymentController');
    Route::resource('placement','FrontController');
    Route::get('web/placement/{id}','FrontController');
    Route::resource('ad','AdController');
    Route::resource('home','ReportController');
    Route::resource('category','CategoryController');
    Route::get('web/dir/{id}','WebController@dir');
    Route::resource('user','UserController');
    Route::resource('web','WebController');
    Route::get('report','ReportController@reports');
    Route::get('reports/{id}','ReportController@ReportsAjax');
    Route::get('reportad/{id}/{idweb}','ReportController@ReportsAjaxAd');
    Route::get('reportdate/{id}/{idad}/{date}','ReportController@ReportsAjaxDate');
    Route::post('reporttodate','ReportController@ReportsDate');

});

/*Cliente*/


Route::group(['namespace' => 'Client', 'middleware' => ['auth'], 'prefix' => 'client'], function()
{

    Route::get('placement',[
        'as'    => 'placement2',
        'uses'  => 'OtherController@showPlacement'
    ]);
    Route::post('placement-code',[
        'as'    => 'place',
        'uses'  => 'OtherController@code'
    ]);
    Route::resource('home','ReportController');
    Route::resource('mail','MailController');
    Route::resource('mailpayment','MailPaymentController');
    Route::post('account/{id}/password','AccountController@password');
    Route::resource('account','AccountController');
    Route::get('report','ReportController@reports');
    Route::get('reports/{id}','ReportController@ReportsAjax');
    Route::get('reportad/{id}/{idweb}','ReportController@ReportsAjaxAd');
    Route::get('reportdate/{id}/{idad}/{date}','ReportController@ReportsAjaxDate');
    Route::post('reporttodate','ReportController@ReportsDate');
    Route::resource('payment','PaymentController');
});
