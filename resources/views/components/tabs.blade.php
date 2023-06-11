
<div class="w-1/2 mx-auto mt-4  rounded">
    <!-- Abas -->
    <ul id="tabs" class="inline-flex w-full px-1 pt-2 ">
      <li class="px-4 py-2 font-semibold rounded-t opacity-50"><a id="default-tab" href="#first">Questão Dissertativa</a></li>
      <li class="px-4 py-2 font-semibold rounded-t opacity-50"><a href="#second">Questão de Múltipla Escolha</a></li>
    </ul>

    <!-- Conteúdo das abas -->
    <div id="tab-contents">
      <div id="first" class="p-4">
        Insira o enunciado da questão:

        <form method="POST" action="{{ route('dashboard.store') }}">
            @csrf

            <div>
                <input type="hidden" name="name" value={{ Auth::user()->name }}>
                <input type="hidden" name="tipo_perfil" value='{{ Auth::user()->tipo_perfil }}'>
                <input type="hidden" name="resposta" value='Em branco'>
                <x-input-label for="enunciado" :value={{'Enunciado'}} />
                <x-text-area id="enunciado" rows="4" cols="50" maxlenght="2000" class="block mt-1 w-full" type="text" name="enunciado" required autofocus/>
                <x-input-error :messages={{'faz o L'}} class="mt-2" />
            </div>
            <div style="margin-top: 10px">

                <!-- Botão de envio do formulário -->
                <x-primary-button class="">
                {{ __('Enviar') }}
                </x-primary-button>
            </div>
        </form>
      </div>
      <div id="second" class="hidden p-4">
        Insira as alterenativas:

        <form method="POST" action="{{ route('dashboard.store') }}">
            @csrf

            <div>
                Enunciado
                <x-input-label for="enunciado" :value={{'Enunciado'}} />
                <x-text-area id="enunciado" rows="4" cols="50" maxlenght="2000" class="block mt-1 w-full" type="text" name="enunciado" required autofocus/>
                <x-input-error :messages={{'faz o L'}} class="mt-2" />
                Alternativa 1
                <x-input-label for="op1" :value={{'Alternativa 1'}} />
                <x-text-input id="op1" class="block mt-1 w-full" type="text" name="op1" required />
                Alternativa 2
                <x-input-label for="op2" :value={{'Alternativa 2'}} />
                <x-text-input id="op2" class="block mt-1 w-full" type="text" name="op2" required />
                Alternativa 3
                <x-input-label for="op3" :value={{'Alternativa 3'}} />
                <x-text-input id="op3" class="block mt-1 w-full" type="text" name="op3" required />
                Alternativa 4
                <x-input-label for="op4" :value={{'Alternativa 4'}} />
                <x-text-input id="op4" class="block mt-1 w-full" type="text" name="op4" required />
                Alternativa 5
                <x-input-label for="op5" :value={{'Alternativa 5'}} />
                <x-text-input id="op5" class="block mt-1 w-full" type="text" name="op5" required />
            </div>
            <div style="margin-top: 10px">

                <!-- Botão de envio do formulário -->
                <x-primary-button class="">
                {{ __('Enviar') }}
                </x-primary-button>
            </div>
        </form>

      </div>
    </div>
  </div>

  <!-- Script para manipulação das abas -->
  <script>
    let tabsContainer = document.querySelector("#tabs");
    let tabTogglers = tabsContainer.querySelectorAll("a");
    let tabButtons = tabsContainer.querySelectorAll("li");
    console.log(tabTogglers);

    // Adiciona o evento de clique em cada aba
    tabTogglers.forEach(function(toggler) {
        toggler.addEventListener("click", function(e) {
            e.preventDefault();

            let tabName = this.getAttribute("href");
            let tabContents = document.querySelector("#tab-contents");

            for (let i = 0; i < tabContents.children.length; i++) {
                // Remove a classe ativa das abas e dos conteúdos

                tabTogglers[i].parentElement.classList.remove("border-blue-400", "border-b",  "-mb-px", "opacity-100");
                tabButtons[i].classList.remove("border-blue-400", "border-b-2",  "-mb-px", "opacity-100");
                tabContents.children[i].classList.remove("hidden");
                if ("#" + tabContents.children[i].id === tabName) {

                    // Adiciona a classe ativa à aba selecionada
                    tabButtons[i].classList.add("border-blue-400", "border-b-2",  "-mb-px", "opacity-100");
                    continue;
                }

                // Oculta os conteúdos das abas não selecionadas
                tabContents.children[i].classList.add("hidden");
            }

            // Adiciona a classe ativa à aba selecionada
            e.target.parentElement.classList.add("border-blue-400", "border-b-4", "-mb-px", "opacity-100");
        });
    });

    // Seleciona a primeira aba como padrão
    document.getElementById("default-tab").click();
</script>
