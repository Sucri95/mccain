@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel-body title">Contenido</div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-heading" style="position: relative; height: 50px;">
                    <div class="title-container title-preview"><h5>Aceleradores</h5></div>
                    <div class="buttonT-container"><a class="btn btn-primary" href="/makeview/accelerators">Cargar +</a></div>
                </div>
                
                <div id="body-acce" class="panel-body">
                
                </div>

                <div class="panel-heading border-top" style="position: relative; height: 50px;">
                    <div class="title-container title-preview"><h5>Beneficios</h5></div>
                    <div class="buttonT-container"><a class="btn btn-primary" href="/makeview/benefits">Cargar +</a></div>
                </div>
                
                <div id="body-ben" class="panel-body">
                    
                </div>

                <div class="panel-heading border-top" style="position: relative; height: 50px;">
                    <div class="title-container title-preview"><h5>Categorías</h5></div>
                    <div class="buttonT-container"><a class="btn btn-primary" href="/makeview/categories">Cargar +</a></div>
                </div>
                
                <div id="body-cat" class="panel-body">
                    
                </div>

                <div class="panel-heading border-top" style="position: relative; height: 50px;">
                    <div class="title-container title-preview"><h5>Demos</h5></div>
                    <div class="buttonT-container"><a class="btn btn-primary" href="/makeview/demos">Cargar +</a></div>
                </div>
                
                <div id="body-demos" class="panel-body">
                   
                </div>

                <div class="panel-heading border-top" style="position: relative; height: 50px;">
                    <div class="title-container title-preview"><h5>Distribuidores</h5></div>
                    <div class="buttonT-container"><a class="btn btn-primary" href="/makeview/dealers">Cargar +</a></div>
                </div>
                
                <div id="body-deal" class="panel-body">
                    
                </div>

                <div class="panel-heading border-top" style="position: relative; height: 50px;">
                    <div class="title-container title-preview"><h5>FAQs</h5></div>
                    <div class="buttonT-container"><a class="btn btn-primary" href="/makeview/faqs">Cargar +</a></div>
                </div>

                <div id="body-faq" class="panel-body">

                </div>

                <div class="panel-heading border-top" style="position: relative; height: 50px;">
                    <div class="title-container title-preview"><h5>Productos</h5></div>
                    <div class="buttonT-container"><a class="btn btn-primary" href="/makeview/products">Cargar +</a></div>
                </div>
                
                <div id="body-products" class="panel-body">
                    
                </div>

                <div class="panel-heading border-top" style="position: relative; height: 50px;">
                    <div class="title-container title-preview"><h5>Novedades</h5></div>
                    <div class="buttonT-container"><a class="btn btn-primary" href="/makeview/news">Cargar +</a></div>
                </div>
                
                <div id="body-news" class="panel-body">
                   
                </div>

                <div class="panel-heading border-top" style="position: relative; height: 50px;">
                    <div class="title-container title-preview"><h5>Comprá y Ganá</h5></div>
                    <div class="buttonT-container"><a class="btn btn-primary" href="/makeview/buywin">Cargar +</a></div>
                </div>
                
                <div id="body-buywin" class="panel-body">
                    
                </div>

                <div class="panel-heading border-top" style="position: relative; height: 50px;">
                    <div class="title-container title-preview"><h5>Jugá y Ganá</h5></div>
                    <div class="buttonT-container"><a class="btn btn-primary" href="/makeview/playwin">Cargar +</a></div>
                </div>
                
                <div id="body-playwin" class="panel-body">
                    
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

@section('jsfunctions')
    
@stop