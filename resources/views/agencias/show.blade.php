@extends('scaffolds.basic')
@section('content')
<div class="card">
    <div class="card-header">Agencia - {{$agencias->nome_agencia}}</div>
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">Nome : {{ $agencias->nome_agencia }}</h5>
            <p class="card-text">Agencia : {{ $agencias->agencia }}</p>
            <p class="card-text">Banco : {{ $agencias->banco_id }}</p>
            <p class="card-text">Endereço : {{ $agencias->endereco }}</p>
            <p class="card-text">Telefone 1 : {{ $agencias->fone1 }}</p>
            <p class="card-text">Tipo : {{ $agencias->tipo1 == '1' ? 'Celular' : 'Fixo'}}</p>
            <p class="card-text">Telefone 2 : {{ $agencias->fone2 }}</p>
            <p class="card-text">Tipo : {{ $agencias->tipo2 == '1' ? 'Celular' : 'Fixo'}}</p>
        </div>
        </hr>
        <a href="{{ url('/agencia/') }}" title="Voltar"><button class="btn-danger btn-sm">Voltar</button></a>
    </div>
  </div>
@endsection