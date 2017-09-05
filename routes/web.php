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
/*Laravel Routes */
	Route::get('/', function () {
	    return view('welcome');
	});

	Auth::routes();

	Route::get('/home', 'HomeController@index');

	Auth::routes();

	Route::get('/home', 'HomeController@index');
/*End Laravel Routes */


/*McCain Routes*/

	Route::get('/makeview/previews', 'ServiceController@preview');
	Route::get('/previews', 'ServiceController@showAll');
	Route::get('/delete', 'ServiceController@deleteX');

	/*------------------------------Accelerators------------------------------*/
	Route::get('/load/accelerators', 'ServiceController@loadAccelerator');
	Route::get('/makeview/accelerators', 'ServiceController@makeAccelerator');
	Route::get('/editview/accelerators', 'ServiceController@editViewAcce');
	Route::post('/create/accelerators', 'ServiceController@createAccelerator');
	Route::post('/edit/accelerators', 'ServiceController@editAccelerator');
	/*------------------------------Accelerators------------------------------*/

	/*------------------------------Benefit------------------------------*/
	Route::get('/load/benefits', 'ServiceController@loadBenefit');
	Route::get('/editview/benefits', 'ServiceController@editViewBen');
	Route::get('/makeview/benefits', 'ServiceController@makeBenefit');
	Route::post('/create/benefits', 'ServiceController@createBenefit');
	Route::post('/edit/benefits', 'ServiceController@editBenefit');
	/*------------------------------Benefit------------------------------*/

	/*------------------------------Categories------------------------------*/
	Route::get('/load/categories', 'ServiceController@loadCategory');
	Route::get('/editview/categories', 'ServiceController@editViewCat');
	Route::get('/makeview/categories', 'ServiceController@makeCategory');
	Route::post('/create/categories', 'ServiceController@createCategory');
	Route::post('/edit/categories', 'ServiceController@editCategory');
	/*------------------------------Categories------------------------------*/

	/*------------------------------Faqs------------------------------*/
	Route::get('/load/faqs', 'ServiceController@loadFaqs');
	Route::get('/editview/faqs', 'ServiceController@editViewFaqs');
	Route::get('/makeview/faqs', 'ServiceController@makeFaqs');
	Route::post('/create/faqs', 'ServiceController@createFaqs');
	Route::post('/edit/faqs', 'ServiceController@editFaqs');
	/*------------------------------Faqs------------------------------*/

	/*------------------------------News------------------------------*/
	Route::get('/load/news', 'ServiceController@loadNews');
	Route::get('/editview/news', 'ServiceController@editViewNews');
	Route::get('/makeview/news', 'ServiceController@makeNews');
	Route::post('/create/news', 'ServiceController@createNews');
	Route::post('/edit/news', 'ServiceController@editNews');
	/*------------------------------News------------------------------*/

	/*------------------------------Products------------------------------*/
	Route::get('/load/products', 'ServiceController@loadProducts');
	Route::get('/editview/products', 'ServiceController@editViewProducts');	
	Route::get('/makeview/products', 'ServiceController@makeProducts');
	Route::post('/create/products', 'ServiceController@createProducts');
	Route::post('/edit/products', 'ServiceController@editProducts');
	/*------------------------------Products------------------------------*/

	/*------------------------------Demos------------------------------*/
	Route::get('/load/demos', 'ServiceController@loadDemo');
	Route::get('/editview/demos', 'ServiceController@editViewDemo');
	Route::get('/makeview/demos', 'ServiceController@makeDemos');
	Route::post('/create/demos', 'ServiceController@createDemos');
	Route::post('/edit/demos', 'ServiceController@editDemo');
	/*------------------------------Demos------------------------------*/
	
	/*------------------------------Dealers------------------------------*/
	Route::get('/load/dealers', 'ServiceController@loadDealers');
	Route::get('/editview/dealers', 'ServiceController@editViewDealers');	
	Route::get('/makeview/dealers', 'ServiceController@makeDealers');
	Route::post('/create/dealers', 'ServiceController@createDealers');
	Route::post('/edit/dealers', 'ServiceController@editDealers');
	/*------------------------------Dealers------------------------------*/
	
	/*------------------------------Trivias------------------------------*/
	Route::get('/load/wins', 'ServiceController@loadWin');
	Route::get('/editview/win', 'ServiceController@editViewWin');
	Route::get('/makeview/playwin', 'ServiceController@makePlayWin');
	Route::get('/makeview/buywin', 'ServiceController@makeBuyWin');
	Route::post('/create/playwin', 'ServiceController@createWin');
	Route::post('/edit/win', 'ServiceController@editWin');
	/*------------------------------Trivias------------------------------*/	

/*End McCain Routes*/