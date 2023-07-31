<?php

use App\Http\Controllers\DeleteArticleController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\showArticleController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\CreateArticleController;
use App\Models\ArticlePageDTO;
use App\Models\CreateArticleDTO;
use App\Models\LoggedUserDTO;
use App\Models\LoggingDTO;
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
        // input data to DTO
        $dto = new HomePageDTO(
            message: $req->query(key: 'message', default: '')
        );

        // return view
        return showArticleController::index(dto: $dto);
    }
)->middleware(middleware: 'checkusername');

Route::get(
    uri: '/article',
    action: function(Request $req) {
        $dto = new ArticlePageDTO(
            id: $req->query(key: 'id', default: ''),
            username: $req->session()->get(key: 'username')
        );
        return showArticleController::showArticleById(dto: $dto);
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
        return SignupController::SignupUser(dto: $dto);
    }
);


Route::get(
    uri: '/logout',
    action: function () {
        session()->flush('username');
        return redirect(
            to: '/login'
        );
    }
);


Route::get(
    uri: '/login',
    action: function () {
        return LoginController::showLoginPage();
    }
);


Route::post(
    uri: '/login',
    action: function (Request $req) {
        $dto = new LoggingDTO(
            inputtedNameFromForm: $req->input(key: 'username'),
            inputtedPasswordFromForm: $req->input(key: 'password'),
        );
        return LoginController::login(dto: $dto);
    }
);

Route::get(
    uri: '/create_article',
    action: function (Request $req) {
        $dto = new LoggedUserDTO(
            username: $req->session()->get(key: 'username')
        );
        return CreateArticleController::showPage(dto: $dto);
    }
)->middleware(middleware: 'checkusername');

Route::post(
    uri: '/create_article',
    action: function (Request $req) {
        $dto = new CreateArticleDTO(
            title: $req->input(key: 'title'),
            thumbnail: 'image/test_image_balloon.jpg',
            body: $req->input(key: 'content'),
            author: $req->session()->get(key: 'username')
        );
        return CreateArticleController::createArticle(dto: $dto);
    }
)->middleware(middleware: 'checkusername');

Route::get(
    uri: '/delete_article',
    action: function (Request $req) {
        return DeleteArticleController::run(
            id: $req->query(key: 'id')
        );
    }
)->middleware(middleware: 'checkifeditorisauthor');
