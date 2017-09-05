@extends('layouts.app')


@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar Demo</div>
                    <div class="panel-body">
                        <form method="POST" action="/edit/demos" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <input class="form-input" type="hidden" name="id" id="iden">

                            <input class="form-input" type="text" name="title" id="title" placeholder="Título del demo">
                            
                            <textarea class="description" name="about" id="about" placeholder="Descripción del demo"></textarea>
                             
                            <span>Imagen de Background</span>

                            <div class="relative-container"><img class="images-con" id="back" src=""></div>

                             <div class="img-container">
                                 <div class="icon-container">
                                    <i class="fa fa-plus back-pic" aria-hidden="true"></i>
                                </div>
                             </div>
                             
                            <input type="hidden" id="array" name="array">

                            <input class="load_img hidden" type="file" accept="image/*" name="picture" size="20">
                                        
                            <span>Logo del acelerador</span>

                            <div class="relative-container"><img class="images-con" id="log" src=""></div>

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
    <script src="/js/demos.js"></script>
@stop