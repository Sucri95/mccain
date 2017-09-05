@extends('layouts.app')


@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar Distribuidor</div>
                    <div class="panel-body">
                        <form method="POST" action="/edit/dealers" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <input class="form-input" type="hidden" name="id" id="iden">
                            <input class="form-input" type="text" name="name" id="name" placeholder="Nombre">
                            <input class="form-input" type="text" name="tlf"  id="tlf" placeholder="Número telefónico">
                            <input class="form-input" type="text" name="mail" id="mail" placeholder="Correo electrónico">
                            <input class="form-input" type="text" name="web"  id="web" placeholder="Dirección del sitio web">

                            <div class="button-container">
                                <button class="btn btn-primary" type="submit">Finalizar</button>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('jsfunctions')
    <script src="/js/dealers.js"></script>
@stop