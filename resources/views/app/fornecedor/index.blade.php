<h3>Fornecedor</h3>

@php
/*
  if(isset($varaiavel)) {} //Retornar true se a variavel estiver definida.

  if(empty($varaiavel)) {} //Retornar true se a variavel estiver definida.
  Exemplos de vazio:
  - ''
  - 0
  - 0.0
  - '0'
  - null
  - false
  - array()
  - $var
*/
@endphp

@isset($fornecedores) {{-- Se a variavel $fornecedores estiver denifinida então:--}}

    @forelse ($fornecedores as $indice => $fornecedor)
      Iteração atual: {{ $loop->iteration }}
      <br>
      Fornecedor: {{ $fornecedor['nome'] }}
      <br>
      Status: {{ $fornecedor['status'] }}
      <br>
      CNPJ: {{ $fornecedor['cnpj'] ?? ''}}
      <br>
      Telefone: ({{ $fornecedor['ddd'] ?? ''}}) {{$fornecedor['telefone'] ?? ''}}
      <br>
      @if($loop->first)
        Primeira iteração do loop
      @endif
      @if($loop->last)
        Ultima iteração do loop
        <br>
        Total de registros: {{ $loop->count }}
      @endif
      <hr>
    @empty
        Não existem fornecedores cadastrados!!!
    @endforelse
@endisset





  
