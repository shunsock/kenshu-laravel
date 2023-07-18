<?php

use App\Http\Controllers\showArticleController;
use App\Http\Controllers\SignupController;
use App\Models\SignupDTO;
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
        // redirect to signup page if not logged in
        if (session(key: 'username') === null) {
            return redirect(
                to: '/signup'
            );
        }

        // input data to DTO
        $dto = new HomePageDTO(
            message: $req->query(key: 'message', default: '')
        );

        // return view
        return showArticleController::index(dto: $dto);
    }
);

Route::get(
    uri: '/signup',
    action: function () {
        return SignupController::showSignupPage();
    }
);

Route::post(
    uri: '/signup',
    action: function (Request $req) {
        $dto = new SignupDTO(
            inputtedUserNameFromForm: $req->input(key: 'username'),
            inputtedPasswordFromForm: $req->input(key: 'password'),
            inputtedEmailFromForm: $req->input(key: 'email'),
        );
        SignupController::SignupUser(dto: $dto);
    }
);
