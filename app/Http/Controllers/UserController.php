<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Exibe a view de índice de usuários.
     */
    public function index()
    {
        // Obtém uma lista de usuários usando o model UserModel,
        // ordena-os pela data mais recente e os divide em páginas de 10 usuários.
        $users = UserModel::latest()->paginate(10);

        // Retorna uma view chamada 'users.index' e passa a lista de usuários para a view usando a função compact.
        return view('users.index', compact('users'));
    }

    /**
     * Exibe a view de detalhes de um usuário específico.
     */
    // public function show(UserModel $userModel)
    // {
           // Retorna uma view chamada 'users.show' e passa o objeto UserModel para a view usando uma matriz associativa.
    //     return view('users.show', [
    //         'userModel' => $userModel
    //     ]);
    // }

}
