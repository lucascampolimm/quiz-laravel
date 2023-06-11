<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <!-- Verifica o tipo de perfil do usuário logado -->
                    @if (Auth::user()->tipo_perfil == "1")
                    Aluno
                    <!-- Loop para exibir as questões -->
                    @foreach($questoes as $questao)
                    <form method="POST" action="{{ route('dashboard.store') }}">
                        @csrf

                        <div>
                            <input type="hidden" name="name" value={{ Auth::user()->name }}>
                            <input type="hidden" name="tipo_perfil" value='{{ Auth::user()->tipo_perfil }}'>
                            <x-text-area id="enunciado" name="resposta" rows="4" cols="50" maxlenght="2000" class="block mt-1 w-full" type="text" required autofocus/>
                            <x-input-label for="enunciado" :value={{'Enunciado'}} />
                            <input type="hidden" name="enunciado" value={{ $questao->enunciado }}>
                            <x-input-error :messages={{'faz o L'}} class="mt-2" />
                        </div>
                        <div style="margin-top: 10px">
                            <x-primary-button class="">
                            {{ __('Enviar') }}
                            </x-primary-button>
                        </div>
                    </form>
                    @endforeach

                    @else
                    Professor
                    <!-- Componente de abas para o perfil do professor -->
                    <x-tabs></x-tabs>
                    @endif
                    <!-- Botão para listar usuários -->
                    <div style="padding-top: 16px;"><a href={{route('users.index')}}><x-primary-button> Listar Usuários </x-primary-button></a></div>
                    <!-- Formulário para fazer logout -->
                    <div style="padding-top: 16px;">
                        <form style="padding: 0; display: flex; justify-content: flex-end; margin-top: -50px" method="post" action="{{ route('logout') }}" class="p-6">
                            @csrf
                            <x-primary-button> Sair </x-primary-button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Componente de menu -->
    <x-menu></x-menu>
</x-app-layout>
