@extends('cxj.layout')


@section('content')


    <!-- mian-content -->
    <div class="main-content-nicaragua" id="home">
   
        <!-- //header -->
        <!-- banner -->
        <section class="banner">
            <div class="container">
                <div class="row banner-grids">
                    <div class="col-lg-6 banner-info-w3ls" style="background: rgba(15, 20, 12, 0.5);">

                        <h3 class="mb-3">Ciudades x Jovenes</h3>

                        <h2 style="font-weight: 400;"> Haciendo nuestras Ciudades</h2>                        
                        <p class="mb-4"> Un Movimiento para que jóvenes de toda America Latina propongamos las ciudades que queremos y demostremos nuestro compromiso para lograrlo   </p>
                        <a href="#participa" class="btn"> Conocé Más!</a>
                    </div>
                   
                </div>
            </div>
        </section>
        <!-- //banner -->
    </div>
    <!--/ab -->
    <section class="about py-lg-5 py-md-5 py-5">
        <div id="participa" class="container">
            <div class="inner-sec-w3pvt py-lg-5 py-3">
                <h3 class="tittle text-center mb-lg-5 mb-3 px-lg-5">Haz una Mesa Ciudadana </h3>
                <div class="feature-grids row mt-3 mb-lg-5 mb-3 mt-lg-5 text-center">
                    <div class="col-lg-4" data-aos="fade-up">
                        <div class="bottom-gd px-3">
                            <span class="fa fa-download" aria-hidden="true"></span>
                            <h3 class="my-4">Descaga la Guia</h3>
                            <p>Aqui veras y entenderas paso a paso como lograr tu propia mesa ciudadana.</p>
                            <br>
                            <a href="{{ asset('CiudadesxJovenes.pdf') }}" class="button btn btn-light" download="CiudadesxJovenes">
                                Descargar
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4" data-aos="fade-up">
                        <div class="bottom-gd2-active px-3">
                            <span class="fa fa-save" aria-hidden="true"></span>
                            <h3 class="my-4">Carga tu Mesa Ciudadana</h3>
                            <p>En base a todas estas cargas realizaremos una mesa ciudadana que nos represente a todos y todas.</p>
                            <br>
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSc61XLQ6NelExn1Havzwy5V1WN0YZjnYrubNw7zEMlDTd6cxA/viewform" target="_blank" class="button btn btn-light">Cargala Aqui</a>
                        </div>
                    </div>
                    <div class="col-lg-4" data-aos="fade-up">
                        <div class="bottom-gd px-3">
                            <span class="fa fa-rocket" aria-hidden="true"></span>
                            <h3 class="my-4">Anotate al Campus Urbano</h3>
                            <p>Un espacio de #CiudadesXJovenes que visibiliza y contrapone las propuestas de participación ciudadana de las juventudes urbanas, para así entre todos hacer nuestras Ciudades.</p>
                        </div>
                    </div>

                </div>

        </div>
        <!-- //services -->
    </section>
    <!-- //ab -->
    <!--/counter-->
    <section class="stats py-lg-5">
        <div id="campus" class="container py-5">
            <h3 class="tittle text-center mb-lg-5 mb-3 px-lg-5">Que pasara en el Campus Urbano?</h3>
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="counter">
					  <span class="fa fa-calendar"></span>
                        <h3 class="timer count-title count-number">7</h3>
                        <p class="count-text">Dias</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="counter">
					  <span class="fa fa-microphone"></span>
                        <h3 class="timer count-title count-number">27</h3>
                        <p class="count-text">Conferencias</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="counter">
					 <span class="fa fa-flask"></span>
                        <h3 class="timer count-title count-number">20</h3>
                        <p class="count-text">Iniciativas Incubadas</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="counter">
					  <span class="fa fa-users"></span>
                        <h3 class="timer count-title count-number">100</h3>
                        <p class="count-text">Jovenes Nicaragüenses</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//counter-->


    @include('cxj.team')
    
    @include('cxj.agenda')
    @include('cxj.copyright')


@endsection
