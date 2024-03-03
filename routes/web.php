<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

require __DIR__ . '/resources/productRotues.php';
require __DIR__ . '/resources/userRoutes.php';
require __DIR__ . '/resources/transactionRoutes.php';


Route::get('/', function () {
    return view('home');
});


// Route::prefix('/product')
//     ->as(':product')
//     ->group(
//         base_path('routes/resources/product/productRotues.php')
//     );
