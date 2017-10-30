<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group([], function() {

    Route::match(['get','post'], '/', ['uses'=>'IndexController@execute', 'as'=>'home']);
    Route::get('/page/{alias}', ['uses'=>'PageController@execute', 'as'=>'page']);

    Route::auth();
});

//admin/ser...
Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function() {
  //admin
    Route::get('/', function() {
        if (view()->exists('admin.index')) {
          $data = ['title'=>'Панель администратора'];
          return view('admin.index', $data);
        }
    });

    //admin/pages
    Route::group(['prefix'=>'pages'], function() {
      //admin/pages
        Route::get('/',['uses'=>'PagesController@execute', 'as'=>'pages']);
        //admin/pages/add
        Route::match(['get','post'], '/add', ['uses'=>'PagesAddController@execute', 'as'=>'pagesAdd']);
        //admin/edit/2
        Route::match(['get', 'post', 'delete'], '/edit/{page}', ['uses'=>'PagesEditController@execute', 'as'=>'pagesEdit']);
  });

      //admin/portfolio
      Route::group(['prefix'=>'portfolios'], function() {
        //admin/portfolio
          Route::get('/',['uses'=>'PortfolioController@execute', 'as'=>'portfolio']);
          //admin/portfolio/add
          Route::match(['get','post'], '/add', ['uses'=>'PortfolioAddController@execute', 'as'=>'portfolioAdd']);
          //admin/portfolio/edit/2
          Route::match(['get', 'post', 'delete'], '/edit/{portfolio}', ['uses'=>'PortfolioEditController@execute', 'as'=>'portfolioEdit']);
  });

      Route::group(['prefix'=>'services'], function() {
        //admin/services
          Route::get('/',['uses'=>'ServiceController@execute', 'as'=>'services']);
          //admin/service/add
          Route::match(['get','post'], '/add', ['uses'=>'ServiceAddController@execute', 'as'=>'serviceAdd']);
          //admin/service/edit/2
          Route::match(['get', 'post', 'delete'], '/edit/{service}', ['uses'=>'ServiceEditController@execute', 'as'=>'serviceEdit']);
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
