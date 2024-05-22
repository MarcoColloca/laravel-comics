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

Route::get('/', function () {
    return view('welcome');
})->name('home');




Route::get('/comics', function () {

    $comics = config('comics');

    @dump($comics);

    return view('comics', compact('comics'));
})->name('comics');



Route::get('/about', function () {

    $data = [
        
        'cards' => [
            [
                'name' => 'Master',
                'img' => '/img/master.jpg',
                'description' => 'Some quick example text to build on the card title and make up the bulk of the card content.'
            ],
            [
                'name' => 'Critical 1',
                'img' => '/img/critical.jpg',
                'description' => 'Some quick example text to build on the card title and make up the bulk of the card content.'
            ],
            [
                'name' => 'd20 Dice',
                'img' => '/img/d20.jpg',
                'description' => 'Some quick example text to build on the card title and make up the bulk of the card content.'
            ]
        ]
    ];

    return view('about', $data);
})->name('about');