@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel-body title">¡Bienvenido!</div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="position: relative; height: 50px;">
                <div class="title-container"><h4>Carga de Contenido</h4></div>
                <div class="buttonT-container"><a class="btn btn-primary" href="/makeview/previews">Ver Contenido</a></div>
                </div>
                <a class="links" href="/makeview/accelerators"><div class="panel-body">Aceleradores</div></a>
                <a class="links" href="/makeview/benefits"><div class="panel-body">Beneficios</div></a>
                <a class="links" href="/makeview/categories"><div class="panel-body">Categorias</div></a>
                <a class="links" href="/makeview/buywin"><div class="panel-body">Comprá y ganá</div></a>
                <a class="links" href="/makeview/dealers"><div class="panel-body">Distribuidores</div></a>
                <a class="links" href="/makeview/demos"><div class="panel-body">Demos</div></a>
                <a class="links" href="/makeview/faqs"><div class="panel-body">FAQs</div></a>
                <a class="links" href="/makeview/playwin"><div class="panel-body">Jugá y ganá</div></a>
                <a class="links" href="/makeview/news"><div class="panel-body">Novedades</div></a>
                <a class="links" href="/makeview/products"><div class="panel-body">Productos</div></a>
                <div class="button-container">
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
