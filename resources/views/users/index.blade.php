<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
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
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <th scope="row">{{ $user->id }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
