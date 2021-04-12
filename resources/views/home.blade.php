@extends('layouts.app')

@section('content')


<div class="container">
    <h1 class="text-center">Auto Peças NEO</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('') }}
                    <div class="row" style="text-align:center;">
                        
                        <div class="col" >
                            <a href="{{ url('pecas/new') }}"><button type="button" class="btn btn-success">Cadastrar</button></a>
                        </div>
                        <div class="col">
                            <a href="{{ url('pecas') }}"><button type="button" class="btn btn-secondary">Listar Peças</button></a>
                        </div>
                       
                    </div>
                </div>

               
            </div>
        </div>
    </div>
</div>
@endsection
