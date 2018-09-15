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
/*
Route::get('/', function () {
    return view('welcome');
});
*/



Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::group(
[
	'prefix' => LaravelLocalization::setLocale(),
	//'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]//(Con este tambien funciona)
  'middleware' => [ 'localize' ] // Route translate middleware
],
function()
{
	/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/

/*
	Route::get('/', function()
	{

    return view('pages.index');
		//return View::make('welcome');
	});

*/
	Route::get('test',function(){
		return View::make('test');
	});

  Route::resource('dashboard', 'HomeController');
  Route::resource('institutions', 'InstitutionController');//Admin
  Route::resource('companies', 'CompanyController');
  Route::resource('branches', 'BranchController');
  Route::resource('currencies', 'CurrencyController');
  Route::resource('employees', 'EmployeeController');
  Route::resource('schedules', 'ScheduleController');
  Route::resource('students', 'StudentController');
  Route::resource('rooms', 		'RoomController');
  Route::resource('cuentas', 'CuentaController');
  Route::resource('docclasses', 'DocClassController');
  Route::resource('conditions', 'ConditionController');


});

/** OTHER PAGES THAT SHOULD NOT BE LOCALIZED **/
