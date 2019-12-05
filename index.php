<?php 
require __DIR__ . "/vendor/autoload.php";
use app\Route;

Route::GET("/", "Pages@index");
Route::GET('/add', 'Pages@add');

Route::GET('/api/get', 'Products@get');
Route::POST('/api/add', 'Products@insert');
Route::POST('/api/delete', 'Products@destroy');

Route::ValidationPath();
 ?>