<?php

// use App\Http\Controllers\Api\ChartController;
use App\Models\Kategori;
use App\Models\Materi;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\QuestionerController;
use App\Http\Controllers\ResponderController;

use App\Http\Controllers\DashboardController;
// ===================
// Halaman Index & Login
// ===================
Route::get('/', function () {
    return view('login');
})->name('login');


// Di Public
Route::get('/questioner', [QuestionerController::class, 'create'])->name('questioner');
Route::post('/questioner', [QuestionerController::class, 'store'])->name('questioner.store');
Route::get('/questioner/{id}', [QuestionerController::class, 'show'])->name('questioner.result');



// ===================
// Proses Login Manual
// ===================
Route::post('/', function (Request $request) {
    $username = $request->username;
    $password = $request->password;

    if ($username === 'admin' && $password === '6969') {
        session(['is_admin' => true]);
        return redirect('/admin');
    }

    return back()->withErrors(['login' => 'Username atau Password salah!']);
})->name('login.proses');

// ===================
// Logout
// ===================
Route::get('/logout', function () {
    session()->forget('is_admin');
    return redirect('/');
})->name('logout');


Route::get('/admin', function () {
    if (!session('is_admin')) return redirect('/');
    return app(DashboardController::class)->index();
})->name('admin.index');
// ===================
// CRUD Data questioner
// ===================
Route::get('/admin/questioner', function () {
    if (!session('is_admin')) return redirect('/');
    return app(QuestionerController::class)->index();
})->name('admin.questioner.index');

Route::post('/admin/questioner', function (Request $request) {
    if (!session('is_admin')) return redirect('/');
    return app(QuestionerController::class)->store($request);
})->name('admin.questioner.store');

Route::put('/admin/questioner/{id}', function (Request $request, $id) {
    if (!session('is_admin')) return redirect('/');
    return app(QuestionerController::class)->update($request, $id);
})->name('admin.questioner.update');

Route::delete('/admin/questioner/{id}', function ($id) {
    if (!session('is_admin')) return redirect('/');
    return app(QuestionerController::class)->destroy($id);
})->name('admin.questioner.destroy');

// ===================
// Data Responder
// ===================
Route::get('/admin/responder', function () {
    if (!session('is_admin')) return redirect('/');
    return app(ResponderController::class)->index();
})->name('responder.index');

Route::delete('/admin/responder/{id}', function ($id) {
    if (!session('is_admin')) return redirect('/');
    return app(ResponderController::class)->destroy($id);
})->name('responder.destroy');

Route::get('/admin/responder/export/pdf', function (Request $request) {
    if (!session('is_admin')) return redirect('/');
    return app(ResponderController::class)->exportPdf($request);
})->name('responder.export.pdf');