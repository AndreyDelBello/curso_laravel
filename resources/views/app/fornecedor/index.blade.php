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
    @for ($i = 0; isset($fornecedores[$i]); < 10; $i++) 
      Fornecedor: {{ $fornecedores[$i]['nome'] }}
      <br>
      Status: {{ $fornecedores[$i]['status'] }}
      <br>
      CNPJ: {{ $fornecedores[$i]['cnpj'] ?? ''}}
      <br>
      Telefone: ({{ $fornecedores[$i]['ddd'] ?? ''}}) {{$fornecedores[$i]['telefone'] ?? ''}}
      <hr>
    @endfor
@endisset





  
