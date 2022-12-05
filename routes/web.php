<?php

use App\Http\Controllers\AllUserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HijaiyahController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');
Route::post('/contact/post', [HomeController::class, 'contactpost'])->name('contact.post');

Route::get('/hijaiyah', [HijaiyahController::class, 'show'])->name('home.hijaiyah');

Route::get('/login_page', [AuthController::class, 'login'])->name('login');
Route::post('/login_page/post', [AuthController::class, 'loginpost'])->name('login.post');

Route::get('/register_page', [AuthController::class, 'register'])->name('register');
Route::post('/register_page/post', [AuthController::class, 'registerpost'])->name('register.post');

Route::get('/logout_account', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth', 'checkRole:admin']], function(){

    //Dashboard
    Route::get('/dashboard/index', [DashboardController::class, 'index'])->name('dashboard.index');

    //Users
    Route::get('/dashboard/all_user', [AllUserController::class, 'index'])->name('alluser.index');
    Route::post('/dashboard/all_user/change', [AllUserController::class, 'change'])->name('alluser.change');

    //Contact
    Route::get('/dashboard/contact', [ContactController::class, 'index'])->name('contact.index');

    //Hijaiyah
    Route::get('/dashboard/hijaiyah', [HijaiyahController::class, 'index'])->name('hijaiyah.index');
    Route::post('/dashboard/hijaiyah/insert', [HijaiyahController::class, 'insert'])->name('hijaiyah.insert');
    Route::post('/dashboard/hijaiyah/update/{id}', [HijaiyahController::class, 'update'])->name('hijaiyah.update');
    Route::get('/dashboard/hijaiyah/destroy/{id}', [HijaiyahController::class, 'destroy'])->name('hijaiyah.destroy');

    //Profile
    Route::get('/dashboard/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::post('/dashboard/profile/update_avatar', [ProfileController::class, 'avatar'])->name('profile.avatar');
    Route::post('/dashboard/profile/update_info', [ProfileController::class, 'info'])->name('profile.info');

    //Change Password
    Route::get('/dashboard/change_password', [ChangePasswordController::class, 'index'])->name('changepassword.index');
    Route::post('/dashboard/change_password/update', [ChangePasswordController::class, 'update'])->name('changepassword.update');
});
