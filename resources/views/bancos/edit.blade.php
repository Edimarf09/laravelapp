@extends('bancos.layout')
@section('content')
<div class="card">
    <div class="card-header">Editar Banco</div>
    <div class="card-body">
        <form action="{{ url('banco/' .$bancos->id) }}" method="post">
          {!! csrf_field() !!}
          @method("PATCH")
          <input type="hidden" name="id" id="id" value="{{$bancos->id}}" id="id" />
          <label>Nome</label></br>
          <input type="text" name="nome" id="nome" value="{{$bancos->nome}}" class="@error('nome') is-invalid @enderror form-control"></br>
          <label>Número</label></br>
          <input type="text" name="numero" id="numero" value="{{$bancos->numero}}" class="@error('numero') is-invalid @enderror form-control"></br>
          <label>ISPB</label></br>
          <input type="number" name="mobile" id="mobile" value="{{$bancos->ispb}}" class="@error('ispb') is-invalid @enderror form-control" min="001" max="999"></br>
          @error('numero')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
          @enderror
          @error('nome')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
          @enderror
          @error('ispb')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
          @enderror
          <input type="submit" value="Salvar" class="btn btn-success"></br>
        </form>
        <a href="{{ url('/banco/') }}" title="Voltar"><button class="btn-danger btn-sm">Voltar</button></a>
    </div>
  </div>
@endsection