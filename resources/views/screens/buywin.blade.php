@extends('layouts.app')


@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Cargá "Comprá y Ganá"</div>
                    <div class="panel-body">
                        <form method="POST" action="/create/playwin" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <input class="form-input" type="hidden" name="type" value="buy">

                            <input class="form-input" type="text" name="title" placeholder="Título">
                            
                            <textarea class="description" name="about" placeholder="Descripción del producto"></textarea>

                            <input class="form-input" type="text" name="href" placeholder="Link de redirección">

                            <input class="form-input" type="text" name="button" placeholder="Título del botón">

                            <input class="form-input" type="text" name="item" placeholder="Item">

                            <input class="form-input" type="text" name="point" placeholder="Puntos">
                             
                            <span>Imagen del producto</span>
                             <div class="img-container">
                                 <div class="icon-container">
                                    <i class="fa fa-plus back-pic" aria-hidden="true"></i>
                                </div>
                             </div>
                             
                            <input type="hidden" id="array" name="array">

                            <input class="load_img hidden" type="file" accept="image/*" name="picture" multiple style="display: block;" size="20">
                            
                            <span>Logo del acelerador</span>
                             <div class="logo-container">
                                 <div class="icologo-container">
                                    <i class="fa fa-plus logo-pic" aria-hidden="true"></i>
                                </div>
                             </div>
                             
                            <input type="hidden" id="arraylogos" name="arraylogos">

                            <input class="load_logo hidden" type="file" accept="image/*" name="logos" size="20">

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="principal">Principal
                                </label>
                            </div>    
                            
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