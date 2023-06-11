<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Questao;
use App\Models\QuestaoModel;
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
     * Exibe a view de registro.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Exibe a view das questões.
     */
    public function index()
    {
        $questoes = QuestaoModel::latest()->paginate(10);
        return view('components.tabs-aluno', compact('questoes'));
    }

    /**
     * Armazena uma nova questão no banco de dados.
     */
    public function store(Request $request): RedirectResponse
    {
        // Valida os dados recebidos do formulário
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'tipo_perfil' => ['required', 'integer'],
            'enunciado' => ['required', 'string', 'max:2000'],
            'resposta' => ['required', 'string', 'max:2000'],
        ]);

        // Cria uma nova instância da classe Questao
        $questao = Questao::create([
            'name' => $request->name,
            'tipo_perfil' => $request->tipo_perfil,
            'enunciado' => $request->enunciado,
            'resposta' => $request->resposta,
        ]);

        // Salva a questão no banco de dados
        $questao->save();

        // Dispara o evento Registered com a instância da questão como argumento
        event(new Registered($questao));

        // Realiza o login do usuário
        // Auth::login($user);

        // Redireciona para a rota RouteServiceProvider::HOME
        return redirect(RouteServiceProvider::HOME);
    }
}
