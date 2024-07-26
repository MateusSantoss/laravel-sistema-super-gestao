<h3>
    fornecedor
</h3>



@php
   /*if () {

   }*/

@endphp

@isset($fornecedores)

        @forelse($fornecedores as $indices => $fornecedor)
            Loop: {{$loop->iteration}}
            <br />
            @dd($loop)
            Fornecedor:
            Status: {{$fornecedor['status']}}
            <br />

            CNPJ: {{ $fornecedor['cnpj'] ?? 'Dado não preenchido'}}
            <br/>

            Telefone: {{$fornecedor['ddd'] ?? 'ddd não informado'}}
            {{$fornecedor['telefone'] ?? 'Número de telefone não informado'}}
            <br />
            @if($loop->first)
                Primeira iteração do loop
            @endif

            @if($loop->last)
                Úlima iteração do loop

                <br>

                Total de registros: {{ $loop->count }}
            @endif
            <hr>



            @empty
                Não existe fornecedores cadastrados
        @endforelse

@endisset









