<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Questao;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class QuestaoController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'tipo_perfil' => ['required', 'integer'],
            'enunciado' => ['required', 'string', 'max:2000'],
            'resposta' => ['required', 'string', 'max:2000'],
        ]);

        $questao = Questao::create([
            'name' => $request->name,
            'tipo_perfil' => $request->tipo_perfil,
            'enunciado' => $request->enunciado,
            'resposta' => $request->resposta,
        ]);

        $questao->save();

        event(new Registered($questao));

        // Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
