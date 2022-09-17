<?php
use App\Http\Controllers\PessoaController;
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

Route::get('/index',[PessoaController::class, 'index'])->name('index.pessoa');
Route::get('/create',[PessoaController::class, 'create'])->name('create.pessoa');
Route::post('/create',[PessoaController::class, 'store'])->name('store.pessoa');
Route::get('/index/edit/{id}',[PessoaController::class, 'edit'])->name('edit.pessoa');
Route::put('/index/edit/{id}',[PessoaController::class, 'update'])->name('update.pessoa');
Route::delete('/index/delete/{id}',[PessoaController::class, 'destroy'])->name('delete.pessoa');
