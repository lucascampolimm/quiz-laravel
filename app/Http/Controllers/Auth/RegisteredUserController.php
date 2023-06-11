<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Exibe a view de registro.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Manipula uma solicitação de registro recebida.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        // Valida os dados recebidos do formulário
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'tipo_perfil' => ['required', 'integer'],
        ]);

        // Cria um novo usuário com base nos dados recebidos
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'tipo_perfil' => $request->tipo_perfil,
        ]);

        // Dispara o evento Registered com o usuário recém-criado como argumento
        event(new Registered($user));

        // Realiza o login do usuário
        Auth::login($user);

        // Redireciona para a rota RouteServiceProvider::HOME
        return redirect(RouteServiceProvider::HOME);
    }
}
