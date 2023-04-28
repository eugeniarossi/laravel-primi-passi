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

    /*
    // passo dati alla view tramite array associativo
    $data = [
        'title' => 'Hello World!',
        'paragraph' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Non fugit sint aliquid perspiciatis quod corrupti nostrum iusto esse cumque hic ipsam nisi dolorum omnis, vel accusamus impedit adipisci ratione aperiam?'
    ];

    return view('home', $data);
    */

    // passo dati alla view senza array associativo
    $title = 'Hello World!';
    $paragraph = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Non fugit sint aliquid perspiciatis quod corrupti nostrum iusto esse cumque hic ipsam nisi dolorum omnis, vel accusamus impedit adipisci ratione aperiam?';

    return view('home', compact('title', 'paragraph'));
});
