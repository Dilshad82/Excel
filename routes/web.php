<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('posts', 'PostController@index');
Route::get('posts/export-excel', 'PostController@exportExcel');




// Route::get('upload-form' , 'ExcelController@index');
// Route::post('upload-data' , 'ExcelController@importFile');

// Route::get('importExportView', 'ExcelController@importExportView');
// Route::get('export', 'ExcelController@export')->name('export');
// Route::post('import', 'ExcelController@import')->name('import');
