<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\EmployeeController;
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
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', [AboutController::class, 'about']);

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/business/{category}/{news}', [BusinessController::class, 'business']);

Route::get('create-person', [PersonController::class, 'create']);
Route::post('store-person', [PersonController::class, 'store']);
Route::get('persons', [PersonController::class, 'all']);

Route::get('edit-person/{id}', [PersonController::class, 'edit']);
Route::post('update-person/{id}', [PersonController::class, 'update']);
Route::get('delete-person/{id}', [PersonController::class, 'delete']);

Route::get('website-home', [WebsiteController::class, 'home']);
Route::get('website-about', [WebsiteController::class, 'about']);
Route::get('website-contact', [WebsiteController::class, 'contact']);

Route::get('admin-home', [AdminController::class, 'home']);
Route::get('admin-button', [AdminController::class, 'button']);
Route::get('admin-card', [AdminController::class, 'card']);
Route::get('admin-color', [AdminController::class, 'color']);
Route::get('admin-border', [AdminController::class, 'border']);
Route::get('admin-animation', [AdminController::class, 'animation']);
Route::get('admin-other', [AdminController::class, 'other']);
Route::get('admin-404', [AdminController::class, 'error']);
Route::get('admin-blank', [AdminController::class, 'blank']);
Route::get('admin-chart', [AdminController::class, 'chart']);
Route::get('admin-table', [AdminController::class, 'table']);
Route::get('admin-login', [AdminController::class, 'login']);
Route::get('admin-register', [AdminController::class, 'register']);
Route::get('admin-forgotPass', [AdminController::class, 'forgotPass']);


Route::get('register', [AuthController::class, 'register']);
Route::post('register-store', [AuthController::class, 'registerstore']);

Route::get('login', [AuthController::class, 'login']);
Route::post('login-store', [AuthController::class, 'loginstore']);

Route::get('dashboard', [AuthController::class, 'dashboard']);
Route::get('users/{status}', [AuthController::class, 'users']);
Route::get('approve-user/{userid}', [AuthController::class, 'approve']);

Route::get('create-category', [CategoryController::class, 'create']);
Route::post('store-category', [CategoryController::class, 'store']);

Route::get('create-product', [ProductController::class, 'create']);
Route::post('store-product', [ProductController::class, 'store']);

Route::get('upload', [ImageUploadController::class, 'upload']);
Route::post('upload-image', [ImageUploadController::class, 'store']);

Route::get('generate-pdf', [PDFController::class, 'generatePDF']);
Route::get('pdf', [PDFController::class, 'pdf']);

Route::get('create-employee', [EmployeeController::class, 'employeeCreate']);