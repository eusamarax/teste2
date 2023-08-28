@extends('adminlte::page')

@section('content')
<div class="container">
    
Formulário de criação: <br>

<form method="POST" action="{{ url('/produto/create') }}">
    @csrf
 
  <label for="nome">Nome:</label><br>
  <input type="text" name="nome"><br>

  <label for="quantidade">Quantidade:</label><br>
  <input type="text" name="quantidade"><br>

  <label for="preco">Preço:</label><br>
  <input type="text" name="preco"><br>

  <input type="submit" value="Enviar">
 
</form>


</div>
@endsection