@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center">Cadastrar</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    @if( Request::is('*/edit'))
                    <form action="{{ url('pecas/update') }}/{{ $peca->id }}" method="post">
                    @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome:</label>
                            <input type="text" name="nome" class="form-control" value="{{ $peca->nome }}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Valor: </label>
                            <input type="double" name="valor" class="form-control" value="{{ $peca->valor }}">
                        </div>
                        <div class="form-group">
                            <label  class="form-label">Descrição: </label>
                            <input type="text" name="descricao" class="form-control" value="{{ $peca->descricao }}" >
                        </div>
                        <div class="form-group">
                            <label  class="form-label">Quantidade:</label>
                            <input type="number" name="quantidade" class="form-control" value="{{ $peca->quantidade }}">
                        </div>
                        <div class="form-group">
                            <label  class="form-label">Codigo de Barra </label>
                            <input type="text" name="codigo" class="form-control"  value="{{ $peca->codigo }}">
                        </div>

                        <button type="submit" class="btn btn-primary">Atualizar</button>
                        <a href="{{ url('pecas') }}"><button type="button" class="btn btn-danger">Cancelar</button></a>
                    </form>

                    @else

                    <form action="{{ url('pecas/add') }}" method="post">
                    @csrf
                        <div class="form-group">
                            <label >Nome:</label>
                            <input type="text" name="nome" class="form-control">
                        </div>
                        <div class="form-group">
                            <label  class="form-label">Valor: </label>
                            <input type="double" name="valor" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label  class="form-label">Descrição: </label>
                            <input type="text" name="descricao" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label  class="form-label">Quantidade:</label>
                            <input type="number" name="quantidade" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label  class="form-label">Codigo de Barra </label>
                            <input type="text" name="codigo" class="form-control" >
                        </div>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                        <a href="{{ url('/') }}"><button type="button" class="btn btn-danger">Cancelar</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endsection
