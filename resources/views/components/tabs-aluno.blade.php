<div class="w-1/2 mx-auto mt-4  rounded">
    @foreach($questoes as $questao)
    <!-- Loop através das questões -->

    <form method="POST" action="{{ route('dashboard.store') }}">
        @csrf
        <!-- Formulário de envio dos dados -->
        <div>
            <input type="hidden" name="name" value={{ Auth::user()->name }}>
            <input type="hidden" name="tipo_perfil" value='{{ Auth::user()->tipo_perfil }}'>
            <x-text-area id="enunciado" name="resposta" rows="4" cols="50" maxlenght="2000" class="block mt-1 w-full" type="text" required autofocus/>
            <x-input-label for="enunciado" :value={{'Enunciado'}} />
            <input type="hidden" name="enunciado" value={{ $questao->enunciado }}>
            <x-input-error :messages={{'faz o L'}} class="mt-2" />
        </div>
        <div style="margin-top: 10px">

            <!-- Botão de envio do formulário -->
            <x-primary-button class="">
            {{ __('Enviar') }}
            </x-primary-button>
        </div>
    </form>
    @endforeach
</div>
