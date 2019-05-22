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

Route::get('/', function () {
        $test = DB::select('select * from `characters`.`osoby`');
        # return view('welcome');
        return $test;
});
Route::get('/{name}', function ($name) {
	$test = DB::select('select * from `characters`.`osoby` where `json`->"$.name"=\''.$name.'\'');
	# return view('welcome');
	return $test;
});
