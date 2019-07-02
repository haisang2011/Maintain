<?php

//use Illuminate\Support\Facades\Route; 

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

Route::get('/admin/loai', 'LoaiController@index')->name('backend.loai.index');
Route::get('/admin/loai/create', 'LoaiController@create')->name('backend.loai.create');
Route::post('/admin/loai/store', 'LoaiController@store')->name('backend.loai.store');
Route::get('/admin/loai/edit/{id}', 'LoaiController@edit')->name('backend.loai.edit');
Route::put('/admin/loai/update/{id}', 'LoaiController@update')->name('backend.loai.update');
Route::delete('/admin/loai/delete/{id}', 'LoaiController@destroy')->name('backend.loai.delete');

//Route Danh Cho Backend
Route::get('/admin/','BackendController@dashboard')->name('backend.dashboard');

//Route Schema Builder
Route::get('/test/get', function () {
    //pluck('column') return value all a column
    //exists() return 1 khi ton tai, null khi khong ton tai
    //doesntExists() nguoc lai nhung version nay` khong support
    //distinct() return khong trung`
    //select()
    $l_ma = DB::table('cusc_loai')->where([['l_ma','=',10],['l_ten','=','MasTer']])->get();
    echo "<pre>".dd($l_ma)."</pre>";
});