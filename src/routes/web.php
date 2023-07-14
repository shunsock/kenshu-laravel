<?php

use App\Http\Controllers\showArticleController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\HomePageDTO;

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

// router is here: define routes => HTTP/Controllers/Controller.php
Route::get(
    uri: '/',
    action: function (Request $req) {
        $dto = new HomePageDTO(
            message: $req->query(key: 'message', default: '')
        );
        return showArticleController::index(dto: $dto);
    }
);
