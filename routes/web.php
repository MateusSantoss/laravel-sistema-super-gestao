<?php

use App\Http\Controllers\PrincipalController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TesteController;
Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');

Route::get('/sobre-nos', [SobreNosController::class, 'sobreNos'])->name('site.sobrenos');

Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');

Route::get('/login', [LoginController::class, 'login'])->name('site.login');
//teste
Route::get('/testec', function () {
    return view("site.views");
});


Route::prefix('/app')->group(function () {
    Route::get('/clientes', function () {
        return "Clientes";
    })->name('app.clientes');

    Route::get('/fornecedores', [FornecedorController::class, 'index'])->name('app.fornecedores');

    Route::get('/produtos', function () {
        return "Produtos";
    })->name('app.produtos');
});


Route::get('/teste/{p1}/{p2}', [TesteController::class, 'teste'])->name('teste');
Route::fallback(function () {
    echo 'A rota acessada não existe. <a href="'.route('site.index').'">Clique aqui para ir para página inicial</a>';

});
//Route::redirect('/rota2', '/rota1');



/*
get
post
put
patch
delete
options
*/


