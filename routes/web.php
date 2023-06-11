<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QuestaoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Rotas da Web
|--------------------------------------------------------------------------
|
| Aqui é onde você pode registrar as rotas da web para sua aplicação. Todas
| essas rotas são carregadas pelo RouteServiceProvider e todas elas serão
| atribuídas ao grupo de middleware "web". Faça algo incrível!
|
*/

// Rota para a página inicial
Route::get('/', function () {
    return view('welcome');
});

// Rota para o painel do usuário
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Agrupamento de rotas que exigem autenticação
Route::middleware('auth')->group(function () {
    // Rota para editar o perfil do usuário
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Rota para atualizar o perfil do usuário
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Rota para excluir o perfil do usuário
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Rota para criar uma nova questão no painel do usuário
Route::post('/dashboard', [QuestaoController::class, 'store'])->name('dashboard.store');
// Recurso de rotas para manipular usuários
Route::resource('/users', UserController::class);
// Recurso de rotas para manipular questões no painel do usuário
Route::resource('/dashboard-questoes', QuestaoController::class);

// Arquivo de rotas de autenticação (login, registro, etc.)
require __DIR__.'/auth.php';
