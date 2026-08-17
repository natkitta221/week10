<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/about2', [AdminController::class, 'about2'] )->name("about2");
Route::get('/blog2', [AdminController::class, 'blog2'] )->name("blog2");
Route::get('/create', [AdminController::class, 'create'] )->name("create");
Route::post('/insert', [AdminController::class, 'insert']);  

Route::get('/test-db', function () {
    try {
        DB::connection()->getPdo();
        return "เชื่อมต่อฐานข้อมูลสำเร็จ! Database name: " . DB::connection()->getDatabaseName();
    } catch (\Exception $e) {
        return "ไม่สามารถเชื่อมต่อฐานข้อมูลได้: " . $e->getMessage();
    }
});


Route::get('/delete/{id}', [AdminController::class, 'delete'])->name('delete');
Route::get('/change/{id}', [AdminController::class, 'change'])->name('change');
Route::get('/edit/{id}', [AdminController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [AdminController::class, 'update'])->name('update');

