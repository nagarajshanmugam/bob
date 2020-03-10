<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('employeeList', 'employeeController@employeeDetails');

Route::get('insert', function(){

DB::insert('insert into customer(memberCount, customerName, project) values (?, ?, ?)', ['25','Nagaraj Shanmugam', 'Laravel']);

});

Route::get('read', function(){

$results = DB::select('select * from customer where id=?',[1]);
//return $results;
foreach($results as $result){

return $result->customerName;
}

});