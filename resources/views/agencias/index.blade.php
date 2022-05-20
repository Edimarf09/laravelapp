@extends('scaffolds.basic')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h2>Laravel 9 CRUD - Agencias</h2>
                </div>
                <div class="card-body">
                    <a href="{{ url('') }}" title="Home"><button class="btn btn-danger btn-sm">Voltar</button></a>
                    <a href="{{ url('/agencia/create') }}" class="btn btn-success btn-sm" title="Adicionar Novo Banco">
                        <i class="fa fa-plus" aria-hidden="true"></i> Adicionar Nova Agencia Bancaria
                    </a>
                    <br/>
                    <br/>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Nome</th>
                                    <th>Agencia</th>
                                    <th>Banco</th>
                                    <th>Endereço</th>
                                    <th>Telefone 1</th>
                                    <th>Tipo</th>
                                    <th>Telefone 2</th>
                                    <th>Tipo</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($agencias as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->nome_agencia }}</td>
                                    <td>{{ $item->agencia }}</td>
                                    <td>{{ $item->banco_id }}</td>
                                    <td>{{ $item->endereco }}</td>
                                    <td>{{ $item->fone1 }}</td>
                                    <td>{{ $item->tipo1 == '1' ? 'Celular' : 'Fixo'}}</td>
                                    <td>{{ $item->fone2 }}</td>
                                    <td>{{ $item->tipo2 == '1' ? 'Celular' : 'Fixo'}}</td>
                                    <td>
                                        <a href="{{ url('/agencia/' . $item->id) }}" title="Ver {{ $item->nome_agencia }}"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>Ver</button></a>
                                        <a href="{{ url('/agencia/' . $item->id . '/edit') }}" title="Editar {{ $item->nome_agencia }}"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Editar</button></a>
                                        <form method="POST" action="{{ url('/agencia' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Deletar {{ $item->nome_agencia }}" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i>Deletar</button>
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