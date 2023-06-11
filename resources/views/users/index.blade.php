<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>

                <div class="p-6 text-gray-900 dark:text-gray-100">

                        <!-- Exemplo de um formulário de seleção -->
                        <!--
                        <form action="">
                        <select>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="B">C</option>
                            <option value="B">D</option>
                        </select>
                        </form>
                        -->

                    <br>

                    <!-- Exemplo de um loop em PHP -->
                    <!--
                    <?php
                        $lista = array("S", "D", "F", "G");
                    ?>
                    -->

                    <!-- Exemplo de um formulário de seleção usando um loop em PHP -->
                    <!--
                    <select name="minhaLista" class="">
                        <option selected value="">Escolha...</option>

                        // Loop para iterar sobre os valores da lista
                        @foreach($lista as $valor)

                            // Verifica se o valor atual é igual a "D"
                            @if ($valor == "D")

                                // Se for igual a "D", define a opção como selecionada
                                <option selected value="{{$valor}}">{{$valor}}</option>
                            @else

                                // Caso contrário, exibe a opção normalmente
                                <option value="{{$valor}}">{{$valor}}</option>
                            @endif
                        @endforeach
                    </select>
                    -->

                    <!-- Tabela com loop para exibir os usuários -->
                    <tbody>
                        <!-- Loop para iterar sobre os usuários -->
                        @foreach($users as $user)
                            <tr>
                                <!-- Exibe o ID do usuário -->
                                <th scope="row">{{ $user->id }}</th>
                                <!-- Exibe o nome do usuário -->
                                <td>{{ $user->name }}</td>
                                <!-- Exibe o e-mail do usuário -->
                                <td>{{ $user->email }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
