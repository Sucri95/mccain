@extends('layouts.app')


@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar Beneficio</div>
                    <div class="panel-body">
                        <form method="POST" action="/edit/benefits" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <input type="hidden" name="id" id="iden">

                            <input class="form-input" type="text" id="title" name="title" placeholder="Título del beneficio">
                            <textarea class="description" name="about" id="about" placeholder="Descripción del beneficio"></textarea>
                            <select class="form-input" name="category" id="category">
                                 <option value="" disabled selected>Categoria del beneficio</option>
                                <option value="1">Bla</option>
                                <option value="2">Bla2</option>
                                <option value="3">Bla3</option>
                            </select>
                            <input class="form-input" type="text" name="href" id="href" placeholder="Link de redirección">

                            <input class="form-input" type="text" name="location" id="location" placeholder="Ubicación (Zona)">
                            <select class="form-input" name="type" id="type">
                                 <option value="" disabled selected>Tipo de beneficio</option>
                                <option value="1">50%</option>
                                <option value="2">2x1</option>
                                <option value="3">3x2</option>
                            </select> 

                            <span>Imagen de Background</span>

                            <div class="relative-container"><img class="images-con" id="back" src=""></div>

                             <div class="img-container">
                                 <div class="icon-container">
                                    <i class="fa fa-plus back-pic" aria-hidden="true"></i>
                                </div>
                             </div>
                             
                            <input type="hidden" id="array" name="array">

                            <input class="load_img hidden" type="file" accept="image/*" name="picture" size="20">
                            
                            <span>Logo del beneficio</span>

                            <div class="relative-container"><img class="images-con" id="log" src=""></div>

                             <div class="logo-container">
                                 <div class="icologo-container">
                                    <i class="fa fa-plus logo-pic" aria-hidden="true"></i>
                                </div>
                             </div>
                             
                            <input type="hidden" id="arraylogos" name="arraylogos">

                            <input class="load_logo hidden" type="file" accept="image/*" name="logos" multiple style="display: block;" size="20">
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
    <script src="/js/benefits.js"></script>
@stop