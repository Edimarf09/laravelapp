@extends('bancos.layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h2>Laravel 9 CRUD - Banco</h2>
                </div>
                <div class="card-body">
                    <a href="{{ url('') }}" title="Home"><button class="btn btn-danger btn-sm">Voltar</button></a>
                    <a href="{{ url('/banco/create') }}" class="btn btn-success btn-sm" title="Adicionar Novo Banco">
                        <i class="fa fa-plus" aria-hidden="true"></i> Adicionar Novo Banco
                    </a>
                    <br/>
                    <br/>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Nome</th>
                                    <th>Numero</th>
                                    <th>ISPB</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($bancos as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->nome }}</td>
                                    <td>{{ $item->numero }}</td>
                                    <td>{{ $item->ispb }}</td>
                                    <td>
                                        <a href="{{ url('/banco/' . $item->id) }}" title="Ver {{ $item->nome }}"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>Ver</button></a>
                                        <a href="{{ url('/banco/' . $item->id . '/edit') }}" title="Editar Banco"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Editar</button></a>
                                        <form method="POST" action="{{ url('/banco' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Deletar Banco" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Deletar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection