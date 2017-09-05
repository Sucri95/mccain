@extends('layouts.app')


@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar Producto</div>
                    <div class="panel-body">
                        <form method="POST" action="/edit/products" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <input class="form-input" type="hidden" name="id" id="iden">

                            <input class="form-input" type="text" name="name" id="name" placeholder="Nombre del producto">
                            
                            <textarea class="description" name="about" id="about" placeholder="Descripción del producto"></textarea>

                            <input class="form-input" type="text" name="price" id="price" placeholder="Precio del producto">

                            <input class="form-input" type="text" name="point" id="point" placeholder="Puntos del producto">
                             
                            <span>Imagen del producto</span>

                            <div class="relative-container"><img class="images-con" id="back" src=""></div>
                             <div class="img-container">
                                 <div class="icon-container">
                                    <i class="fa fa-plus back-pic" aria-hidden="true"></i>
                                </div>
                             </div>
                             
                            <input type="hidden" id="array" name="array">

                            <input class="load_img hidden" type="file" accept="image/*" name="picture" multiple style="display: block;" size="20">

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
    <script src="/js/products.js"></script>
@stop