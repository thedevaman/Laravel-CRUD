<?php
namespace App\Http\Controllers;
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

// Route::get('/', function () {
//     return view('form');
// });

Route::get('/','StudentController@index')->name('studentIndex');
Route::post('add/student','StudentController@addStudent')->name('insertStudent');
Route::get('view/student','StudentController@viewStudent')->name('viewStudent');
Route::get('edit/student/{id}','StudentController@editStudent')->name('editStudent');
Route::post('update/student/{id}','StudentController@updateStudent')->name('updateStudent');
Route::post('update/student/{id}','StudentController@updateStudent')->name('updateStudent');
Route::get('delete/student/{id}','StudentController@deleteStudent')->name('deleteStudent');
