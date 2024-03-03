<?php

use App\Http\Controllers\categoryController;
use Illuminate\Support\Facades\Route;

Route::prefix('/product')
    ->group(
        fn () =>
        Route::prefix('category')
            ->group(
                fn () => [
                    Route::get(
                        '/food-beverage',
                        [categoryController::class, 'foodBeverage']
                    ),
                    Route::get(
                        '/beauty-health',
                        [categoryController::class, 'beautyHealth']
                    ),
                    Route::get(
                        '/home-care',
                        [categoryController::class, 'homeCare']
                    ),
                    Route::get(
                        '/baby-kid',
                        [categoryController::class, 'babyKid']
                    ),
                ]
            )
    );
