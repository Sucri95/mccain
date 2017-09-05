@extends('layouts.app')


@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Registro de distribuidores</div>
                    <div class="panel-body">
                        <form method="POST" action="/create/dealers" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <input class="form-input" type="text" name="name" placeholder="Nombre">
                            <input class="form-input" type="text" name="tlf" placeholder="Número telefónico">
                            <input class="form-input" type="text" name="mail" placeholder="Correo electrónico">
                            <input class="form-input" type="text" name="web" placeholder="Dirección del sitio web">

                            <div class="button-container">
                                <button class="btn btn-primary" type="submit">Cargar</button>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('jsfunctions')
    
@stop