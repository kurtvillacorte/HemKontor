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

//WEBSITE ROUTES

Route::get('/website', 'PagesController@index');

Route::get('/cart.blade.php', 'PagesController@cart');

Route::get('/checkout.blade.php', 'PagesController@checkout');

Route::get('/product-details.blade.php', 'PagesController@productdetails');

Route::get('/shop.blade.php', 'PagesController@shop');

Route::get('/index.blade.php', 'PagesController@index');

Route::resource('clientorders', 'ClientOrdersController');

Route::resource('clientorderdetails', 'ClientOrderDetailsController');

Route::get('/payments', 'PayMayaTestController@redirectToPayMaya');
//SYSTEM ROUTES

Route::resource('productionjoborders', 'ProductionJobOrdersController');

Route::resource('productionindex', 'ProductionIndexController');

Route::resource('productionorders', 'ProductionOrdersController');

Route::resource('productionorderdetails', 'ProductionOrderDetailsController');

Route::resource('products', 'ProductsController');

Route::get('/showFurniture', 'PagesController@showFurniture');

Route::get('/addFurniture', 'PagesController@addFurniture');

Route::get('/systemindex.blade.php', 'PagesController@systemindex');

Route::get('/charts-chartjs.blade.php', 'PagesController@chartjs');

Route::get('/charts-flot.blade.php', 'PagesController@chartsflot');

Route::get('/charts-peity.blade.php', 'PagesController@chartspeity');

Route::get('/font-fontawesome.blade.php', 'PagesController@fontawesome');

Route::get('/font-themify.blade.php', 'PagesController@fontthemify');

Route::get('/forms-advanced.blade.php', 'PagesController@formsadvanced');

Route::get('/forms-basic.blade.php', 'PagesController@formsbasic');

Route::get('/maps-gmap.blade.php', 'PagesController@mapsgmap');

Route::get('/maps-vector.blade.php', 'PagesController@mapsvector');

Route::get('/page-login.blade.php', 'PagesController@pagelogin');

Route::get('/page-register.blade.php', 'PagesController@pageregister');

Route::get('/pages-forget.blade.php', 'PagesController@pagesforget');

Route::get('/tables-basic.blade.php', 'PagesController@tablesbasic');

Route::get('/tables-data.blade.php', 'PagesController@tablesdata');

Route::get('/ui-alerts.blade.php', 'PagesController@uialerts');

Route::get('/ui-badges.blade.php', 'PagesController@uibadges');

Route::get('/ui-buttons.blade.php', 'PagesController@uibuttons');

Route::get('/ui-cards.blade.php', 'PagesController@uicards');

Route::get('/ui-grids.blade.php', 'PagesController@uigrids');

Route::get('/ui-modals.blade.php', 'PagesController@uimodals');

Route::get('/ui-progressbar.blade.php', 'PagesController@uiprogressbar');

Route::get('/ui-social-buttons.blade.php', 'PagesController@uisocialbuttons');

Route::get('/ui-switches.blade.php', 'PagesController@uiswitches');

Route::get('/ui-tabs.blade.php', 'PagesController@uitabs');

Route::get('/ui-typgraphy.blade.php', 'PagesController@uitypgraphy');

Route::get('/widgets.blade.php', 'PagesController@widgets');