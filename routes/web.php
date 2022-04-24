<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CustomController;
use App\Http\Controllers\Admin\ClassController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\BooksController;

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

Route::get('/', [CustomController::class, 'index']);

Route::get('/about/us', [CustomController::class, 'about'])->name('about.us');

Route::get('/contact/us', [CustomController::class, 'contact'])->name('contact.us');

Route::get('/country', [CustomController::class, 'country'])->middleware('country')->name('country');
Route::get('/controller', [CustomController::class, 'controller'])->name('controller');

Route::get('/dashboard', [CustomController::class])->middleware(['auth'])->name('dashboard');

Route::get('/csrf_token', [CustomController::class, 'csrf'])->name('csrf_token');
Route::get('/about.store', [CustomController::class, 'StudentStore'])->name('about.store');
Route::post('/contact.store', [CustomController::class, 'contact_store'])->name('contact.store');

Route::post('/student', [CustomController::class, 'StudentStore'])->name('student.store');

//__class crud routes__//
Route::get('/class', [ClassController::class, 'index'])->name('class.index');
Route::get('/create/class', [ClassController::class, 'create'])->name('create.class');
Route::post('/store/class', [ClassController::class, 'store'])->name('store.class');
Route::get('/class/delete/{id}', [ClassController::class, 'delete'])->name('class.delete');
Route::get('/class/edit/{id}', [ClassController::class, 'edit'])->name('class.edit');
Route::post('/class/update/{id}', [ClassController::class, 'update'])->name('class.update');

//__Students crud__//
Route::resource('students', StudentController::class);

//Teachers crud__//
Route::resource('teachers', TeacherController::class);

Route::resource('books', BooksController::class);

Route::get('/home', [CustomController::class, 'home'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// 01. 1ta Domain & Hosting
// 02. Admin Panel -> Laravel
// 03. Android Apps
