<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\VendaController;
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

Route::get('/', function () { return view('site.index'); })->name('index');

Route::get('/produtos', [ProdutoController::class, 'index'])->name('site.produtos');
Route::get('/produtos/cadastrar', [ProdutoController::class, 'create'])->name('site.cadastrar-produto');
Route::post('/produtos/cadastrar', [ProdutoController::class, 'store'])->name('site.cadastrar-produto');
Route::get('/produtos/editar/{id}', [ProdutoController::class, 'edit'])->name('site.editar-produto');
Route::post('/produtos/editar/{id}', [ProdutoController::class, 'update'])->name('site.editar-produto');
Route::get('/produtos/delete/{id}', [ProdutoController::class, 'destroy'])->name('site.delete-produto');

Route::get('/clientes', [ClienteController::class, 'index'])->name('site.clientes');
Route::get('/clientes/cadastrar', [ClienteController::class, 'create'])->name('site.cadastrar-cliente');
Route::post('/clientes/cadastrar', [ClienteController::class, 'store'])->name('site.cadastrar-cliente');
Route::get('/clientes/editar/{id}', [ClienteController::class, 'edit'])->name('site.editar-cliente');
Route::post('/clientes/editar/{id}', [ClienteController::class, 'update'])->name('site.editar-cliente');
Route::get('/clientes/delete/{id}', [ClienteController::class, 'destroy'])->name('site.delete-cliente');

Route::get('/vendas', [VendaController::class, 'index'])->name('site.vendas');
Route::get('/vendas/visualizar/{id}', [VendaController::class, 'show'])->name('site.visualizar-venda');
Route::get('/vendas/atualizar/{id}', [VendaController::class, 'edit'])->name('site.atualizar-venda');
Route::post('/vendas/atualizar/{id}', [VendaController::class, 'update'])->name('site.atualizar-venda');
Route::get('/realizar-venda', [VendaController::class, 'create'])->name('site.realizar-venda');
Route::post('/realizar-venda', [VendaController::class, 'store'])->name('site.realizar-venda');
Route::get('/vendas/delete/{id}', [VendaController::class, 'destroy'])->name('site.delete-venda');