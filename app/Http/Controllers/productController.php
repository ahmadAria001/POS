<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class productController extends Controller
{
    public function __invoke()
    {
        Route::get('/food-beverage', 'productController@foodBeverage')->name('food.beverage');
    }

    public function foodBeverage(Request $req)
    {
        error_log($req->route());

        error_log('This is food beverage');
        return '<h1>This is food beverage</h1>';
    }
}
