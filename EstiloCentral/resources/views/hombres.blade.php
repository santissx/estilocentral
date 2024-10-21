@extends('layouts.inicio')


@section('title', 'Inicio')

@section('content')
<div class="contenido-locales">
         
         <div class="local" >
             <a href="{{ route('minimal') }}">
             <div class="uicard">
                     <img src="{{ asset('imagenes/indudepor.jpeg') }}" alt="">
                 <div class="card_text">
                     <h2>España y Eva peron</h2>
                     <p>B san martin</p>
                     <a href="https://maps.app.goo.gl/9wgAxiaKcAWrrAFr5"><img src="{{ asset('imagenes/marcador-de-posicion.png') }}" alt="marcador-de-posicion.png"></a>
                 </div>
         </div>
     </a>
     </div>
     
     <div class="local" >
         <a href="{{ route('minimal') }}">
         <div class="uicard">
                 <img src="{{ asset('imagenes/hombreapuesto.png') }}" alt="">
             <div class="card_text">
                 <h2>España y Eva peron</h2>
                 <p>B san martin</p>
                 <a href="https://maps.app.goo.gl/9wgAxiaKcAWrrAFr5"><img src="{{ asset('imagenes/marcador-de-posicion.png') }}" alt="marcador-de-posicion.png"></a>
             </div>
     </div>
 </a>
 </div>
     <div class="local">
     <a href="{{ route('minimal') }}">
         <div class="uicard">
                 <img src="{{ asset('imagenes/macowens.png') }}" alt="">
             <div class="card_text">
                 <h2>España y Eva peron</h2>
                 <p>B san martin</p>
                 <a href="https://maps.app.goo.gl/9wgAxiaKcAWrrAFr5"><img src="{{ asset('imagenes/marcador-de-posicion.png') }}" alt="marcador-de-posicion.png"></a>
             </div>
     </div>
 </a>
     </div>
     <div class="local">
     <a href="{{ route('minimal') }}">
         <div class="uicard">
                 <img src="{{ asset('imagenes/devre.png') }}" alt="">
             <div class="card_text">
                 <h2>España y Eva peron</h2>
                 <p>B san martin</p>
                 <a href="https://maps.app.goo.gl/9wgAxiaKcAWrrAFr5"><img src="{{ asset('imagenes/marcador-de-posicion.png') }}" alt="marcador-de-posicion.png"></a>
             </div>
     </div>
 </a>
     </div>
     <div class="local">

     </div>
     <div class="local">

     </div>
     <div class="local">

     </div>
     <div class="local">

     </div>
     
 </div>


    
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/locales.css') }}">
@endpush
    