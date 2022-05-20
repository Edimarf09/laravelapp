@extends('scaffolds.basic')
@section('content')
<div class="card">
    <div class="card-header">Editar Agencia</div>
    <div class="card-body">
        <form action="{{ url('agencia/' .$agencias->id) }}" method="post">
          {!! csrf_field() !!}
          @method("PATCH")
          <input type="hidden" name="id" id="id" value="{{$agencias->id}}" id="id">
          <label>Nome da Agencia</label></br>
          <input type="text" name="nome_agencia" id="nome_agencia" value="{{$agencias->nome_agencia}}" class="@error('nome_agencia') is-invalid @enderror form-control"></br>
          <label>Agencia</label></br>
          <input type="text" name="agencia" id="agencia" value="{{$agencias->agencia}}" class="@error('agencia') is-invalid @enderror form-control"></br>
          <label>Banco</label></br>
          <input type="text" name="banco_id" id="banco_id" value="{{$agencias->banco_id}}" class="@error('banco_id') is-invalid @enderror form-control"></br>
          <label>Endereço</label></br>
          <input type="text" name="endereco" id="endereco" value="{{$agencias->endereco}}" class="@error('endereco') is-invalid @enderror form-control"></br>
          <hr style="height:3px">
          <label>Telefone 1</label></br>
          <input type="text" name="fone1" id="fone1" value="{{$agencias->fone1}}" class="@error('fone1') is-invalid @enderror form-control"></br>
          <input type="radio" name="tipo1" id="tipo1" {{$agencias->tipo1 == '1' ? 'checked="checked"' : ''}}" class="@error('tipo1') is-invalid @enderror form-check-input" value="1">
          <label>Celular</label></br>
          <input type="radio" name="tipo1" id="tipo1" {{$agencias->tipo1 == '2' ? 'checked="checked"' : ''}}" class="@error('tipo1') is-invalid @enderror form-check-input" value="2">
          <label>Fixo</label></br>
          <hr style="height:3px">
          <label>Telefone 2</label></br>
          <input type="text" name="fone2" id="fone2" value="{{$agencias->fone2}}" class="@error('telefone2') is-invalid @enderror form-control"></br>
          <input type="radio" name="tipo2" id="tipo2" {{$agencias->tipo2 == '1' ? 'checked="checked"' : ''}}" class="@error('tipo2') is-invalid @enderror form-check-input" value="1">
          <label>Celular</label></br>
          <input type="radio" name="tipo2" id="tipo2" {{$agencias->tipo2 == '2' ? 'checked="checked"' : ''}}" class="@error('tipo2') is-invalid @enderror form-check-input" value="2">
          <label>Fixo</label></br>
          <hr style="height:3px">
          @error('nome_agencia')
            <div class="alert alert-danger mt-1 mb-1">O campo nome da agencia é obrigatorio.</div>
          @enderror
          @error('agencia')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
          @enderror
          @error('banco_id')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
          @enderror
          @error('endereco')
            <div class="alert alert-danger mt-1 mb-1">O campo endereço é obrigatorio.</div>
          @enderror
          @error('fone1')
            <div class="alert alert-danger mt-1 mb-1">O campo telefone 1 é obrigatorio.</div>
          @enderror
          @error('tipo1')
            <div class="alert alert-danger mt-1 mb-1">Selecione um tipo de telefone 1</div>
          @enderror
          @error('fone2')
            <div class="alert alert-danger mt-1 mb-1">O campo telefone 2 é obrigatorio.</div>
          @enderror
          @error('tipo2')
            <div class="alert alert-danger mt-1 mb-1">Selecione um tipo de telefone 2</div>
          @enderror
          <input type="submit" value="Salvar" class="btn btn-success"></br>
        </form>
        <a href="{{ url('/agencia/') }}" title="Voltar"><button class="btn-danger btn-sm">Voltar</button></a>
    </div>
  </div>
@endsection