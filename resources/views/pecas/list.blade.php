@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center">Lista de peças</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                   <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Quantidade</th>
                        <th scope="col">Codigo de Barra</th>                       
                        <th scope="col">Editar</th>
                        <th scope="col">Deletar</th>
                        </tr>
                    </thead>
                    <tbody>
                   
                    @foreach( $pecas as $p )
                  
                        <tr>
                        <th scope="row">{{ $p->id }}</th>
                        <td>{{ $p->nome }}</td>
                        <td>{{ $p->valor }}</td>
                        <td>{{ $p->quantidade }}</td>
                        <td>{{ $p->codigo }}</td>                    
                        <td>
                           <a href="pecas/{{ $p->id }}/edit" class="btn btn-info">Editar</button>
                        </td>
                        <td>
                            <form action="pecas/delete/{{ $p->id }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">Deletar</button>
                            </form>
                        </td>
                    
                    @endforeach
                    
                     </tbody>
                    </table>
                    <a href="{{ url('/') }}"><button type="button" class="btn btn-primary">Voltar</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
