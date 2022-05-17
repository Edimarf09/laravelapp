@extends('bancos.layout')
@section('content')
<div class="card">
    <div class="card-header">Pagina Bancos</div>
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">Nome : {{ $bancos->nome }}</h5>
            <p class="card-text">Número : {{ $bancos->numero }}</p>
            <p class="card-text">ISPB : {{ $bancos->ispb }}</p>
        </div>
        </hr>
        <a href="{{ url('/banco/') }}" title="Voltar"><button class="btn-danger btn-sm">Voltar</button></a>
    </div>
  </div>
@endsection