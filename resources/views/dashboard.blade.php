<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if (Auth::user()->tipo_perfil == "1")
                        Aluno
                    @else
                        Professor
                        <x-tabs></x-tabs>
                    @endif
                </div>
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="">
                        <select>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="B">C</option>
                            <option value="B">D</option>
                        </select>
                    </form>

                    <br>
                    <?php
                        $lista = array("S", "D", "F", "G");
                    ?>

                    <select name="minhaLista" class="">
                        <option selected value="">Escolha...</option>
                        @foreach($lista as $valor)
                            @if ($valor == "D")
                                <option selected value="{{$valor}}">{{$valor}}</option>
                            @else
                                <option value="{{$valor}}">{{$valor}}</option>
                            @endif
                        @endforeach
                    </select>

                    <div style="padding-top: 16px;"><a href={{route('users.index')}}><x-primary-button> Listar Usuários </x-primary-button></a></div>

                    <div style="padding-top: 16px;">
                        <form style="padding: 0" method="post" action="{{ route('logout') }}" class="p-6">
                            @csrf
                            <x-primary-button> Logout </x-primary-button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <x-menu></x-menu>
</x-app-layout>
