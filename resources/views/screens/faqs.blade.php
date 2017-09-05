@extends('layouts.app')


@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Cargá una FAQS</div>
                    <div class="panel-body">
                        <form method="POST" action="/create/faqs" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <input class="form-input" type="text" name="question" placeholder="Pregunta">
                            <textarea class="description" name="answer" placeholder="Respuesta"></textarea>
                           
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