<?php
use App\Models\User;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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
    return view('home');
});

Route::get('/home', function () {
    return view('home');
})->middleware(['auth'])->name('home');

Route::middleware('auth')->group(function () {

Route::get('/dashboard',[HomeController::class,'dashboard'])->name('dashboard');
Route::get('/show-profile',[HomeController::class,'showprofile'])->name('show.profile');
Route::post('/updateProfile',[HomeController::class,'updateProfile'])->name('updateProfile');


#cousre route
Route::resource('courses', \App\Http\Controllers\CourseController::class);


#this is admin routes#
Route::get('/create-user',[AdminController::class,'viewcreateuser'])->name('view.create.user');
Route::post('/users-store',[AdminController::class,'store'])->name('users.store');
Route::get('/all-users',[AdminController::class,'users'])->name('all.users');
Route::get('/user-edit/{id}/{name}',[AdminController::class,'edit'])->name('edit.user');
Route::put('/user-update',[AdminController::class,'userupdate'])->name('user.update');
});

require __DIR__.'/auth.php';
