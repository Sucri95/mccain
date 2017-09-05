@extends('layouts.app')


@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Cargá un nuevo Producto</div>
                    <div class="panel-body">
                        <form method="POST" action="/create/products" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <input class="form-input" type="text" name="name" placeholder="Nombre del producto">
                            
                            <textarea class="description" name="about" placeholder="Descripción del producto"></textarea>

                            <input class="form-input" type="text" name="price" placeholder="Precio del producto">

                            <input class="form-input" type="text" name="point" placeholder="Puntos del producto">
                             
                            <span>Imagen del producto</span>
                             <div class="img-container">
                                 <div class="icon-container">
                                    <i class="fa fa-plus back-pic" aria-hidden="true"></i>
                                </div>
                             </div>
                             
                            <input type="hidden" id="array" name="array">

                            <input class="load_img hidden" type="file" accept="image/*" name="picture" multiple style="display: block;" size="20">

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