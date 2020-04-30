@extends('covid.layout')

@section('content')


    <!-- mian-content -->

    <div class="main-content-covid" id="home">
     <section class="banner">
            <div class="container">
                <div class="row banner-grids">
                    <div class="col-lg-12 banner-info-w3ls"  style="">
                        <h1 class="mt-3" style="COLOR: white; font-weight: bold; font-family: Novecentowide ">TECHO ANTE EL COVID 19</h1>
                    </div>
                   
                </div>
            </div>
        </section>
    </div>

    

    <section class="hand-crafted py-5" id="impacto">
        <div class="container">
            <div class="row accord-info">
                <div class="col-lg-5 banner-image">
                    <div class="img-effect">
                        <img src="{{ asset('img/MAPA.png') }}" alt="" class="img-fluid image1">
                    </div>

                </div>
                <div class="col-lg-7 pl-md-5">

                    <h3 class="tittle">SON <b class="donar"> {{ $desabastecimiento['familias'] }} </b> Familias Beneficiadas</h3>
                    <h4 class="sub-tittle" style='font-size: 0.7em;'>Nuestras acciones ante la pandemia buscan
                        recaudar fondos que contribuyan a disminuir la
                        vulnerabilidad de las familias que habitan en
                        asentamientos frente a la crisis del COVID-19</h4>
                    <h5  class="sub-sub-tittle" style='font-size: 0.8em;'>
                        <b> Conoce en tiempo real el impacto de los esfuerzos de
                        TECHO ante la pandemia. </b> <br>
                        Lo recaudado esta siendo destinada a la compra de
                        alimentos y productos esenciales para las zonas más
                        afectadas y prioritarias de la región, para construir más
                        viviendas de emergencia y para financiar proyectos
                        vinculados al acceso al agua cuando regresemos al trabajo
                        en las comunidades.</h5>
                    <h4 class="sub-tittle" style='font-weight: bold; font-size: 1.1em;'>MÁS DE <b class="donar"> 140.000 </b> PERSONAS
                        ALCANZADAS EN TODA AMÉRICA
                        LATINA Y EL CARIBE</h4>
                </div>
            </div>
        </div>
    </section>

    <div class="content-como" id="home">
        <section class="banner">
            <div class="container">
                <div class="row banner-grids">
                    <div class="col-lg-12 banner-info-w3ls"  style="">
                        <h1 class="mt-3" style="COLOR: white; font-weight: bold; font-family: Novecentowide ">¿CÓMO LO HEMOS LOGRADO?</h1>
                    </div>
                   
                </div>
            </div>
        </section>
    </div>


       <!--//counter-->
    <section class="stats problema" id="proceso">
        <div id="problema" class="container py-5">
            <div class="row text-center">

                <div class="col-md-1">
                </div>
                <div class="col-md-2 col-sm-6">
                    <div class="counter">
                      <img src="{{ asset('img/icono/5.png') }}" alt="" class="img-fluid image1">
                        <h3 class="timer count-title count-number">1</h3>
                        <p class="count-text"><b> Comunicación con liderazgos comunitarios.</b></p>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6">
                    <div class="counter">
                      <img src="{{ asset('img/icono/6.png') }}" alt="" class="img-fluid image1">
                        <h3 class="timer count-title count-number">2</h3>
                        <p class="count-text"><b> Monitoreo del estado de comunidades por parte del voluntariado</b></p>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6">
                    <div class="counter">
                      <img src="{{ asset('img/icono/7.png') }}" alt="" class="img-fluid image1">
                        <h3 class="timer count-title count-number donar">3</h3>
                        <p class="count-text"><b class="donar"> Mapeo de redes de Apoyo, públicas y privadas</b></p>
                    </div> 
                </div>
                <div class="col-md-2 col-sm-6">
                    <div class="counter">
                      <img src="{{ asset('img/icono/8.png') }}" alt="" class="img-fluid image1">
                        <h3 class="timer count-title count-number donar">4</h3>
                        <p class="count-text"><b class="donar"> Reconocimiento de necesidades prioritarias</b></p>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6">
                    <div class="counter">
                      <img src="{{ asset('img/icono/9.png') }}" alt="" class="img-fluid image1">
                        <h3 class="timer count-title count-number">5</h3>
                        <p class="count-text"><b> Coordinación entre líderes, TECHO y otros actores para la entrega de suministros.</b></p>
                    </div>
                </div>
                <div class="col-md-1">
                </div>
                <p  class="sub-sub-tittle" style='font-size: 0.8em;'><b> Hemos logrado alcanzar a más de 35,000 familias </b> gracias al apoyo de los liderazgos comunitarios con los que
                    trabajamos, nuestro equipo de voluntariado, el trabajo en red con el sector público y privado, el apoyo en
                    donaciones de miles de personas en América Latina e instituciones que nos permiten hacer entrega de los insumos
                    de manera segura y siguiendo lineamientos de prevención. <b> Conoce todas las redes de apoyo por país aquí.</b> </p>
            </div>
        </div>
    </section>

    <div class="content-acciones" id="home">
        <section class="banner">
            <div class="container">
                <div class="row banner-grids">
                    <div class="col-lg-12 banner-info-w3ls"  style="">
                        <h1 class="mt-3" style="COLOR: white; font-weight: bold; font-family: Novecentowide; ">CONOCE NUESTRAS ACCIONES ANTE ESTA EMERGENCIA</h1>
                    </div>
                   
                </div>
            </div>
        </section>
    </div>
    
    <section class=" py-lg-5" id="acciones">
        <div class="container ">
            <h4 class="sub-tittle text-center" style='font-size: 0.9em'><b>Desde el 16 de marzo de 2020, TECHO suspendió todas las actividades masivas y en comunidad, como
                compromiso con el cuidado y prevención con todo nuestro circulo de colaboración institucional. Aún así,
                nuestras operaciones continuan desde casa. Conoce nuestras acciones ante la emergencia del COVID19.<b></h4>
            <br>
            <div class="row text-center">
                <div class="col-md-4 col-sm-6 pl-2 pr-2">
                    <div class="counter">
                        <h3 class="timer count-title count-number" style="font-size: 1.5em"> APOYO FAMILIAR <br> ANTE EL COVID19</h3>
                        <img src="{{ asset('img/circle1.jpg') }}" alt="" class="image1 rounded-circle" style="max-width: 12em;">
                        <h5  class="sub-sub-tittle text-center" style='font-size: 0.9em; padding-top: 0.2em; font-family: Roboto; font-weight: bold;'>
                            Alimentos, productos esenciales para las zonas más afectadas y prioritarias de la región, mapeo de necesidad de vivienda, proyectos vinculados al acceso al agua.</h5>
                        <p class="sub-tittle" style="font-size: 0.7em" >Contacta a tu oficina local<br> si deseas más información</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 pl-2 pr-2">
                    <div class="counter">
                        <h3 class="timer count-title count-number" style="font-size: 1.5em"> ACOMPAÑAMIENTO <br> TERRITORIAL</h3>
                        <img src="{{ asset('img/circle2.png') }}" alt="" class="image1 rounded-circle" style="max-width: 12em;">
                        <h5  class="sub-sub-tittle text-center" style='font-size: 0.9em; padding-top: 0.2em; font-family: Roboto; font-weight: bold;'>
                            Hemos desplegado un sistema de acompañamiento diario junto a más de 450 liderazgos comunitarios, para poder conocer las necesidades comunitarias ante la pandemia
                        </h5>
                        <p class="sub-tittle" style="font-size: 0.7em" >Contacta a tu oficina local <br> si deseas más información</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 pl-2 pr-2">
                    <div class="counter">
                        <h3 class="timer count-title count-number" style="font-size: 1.5em"> VOLUNTARIADO <br> DESDE CASA</h3>
                        <img src="{{ asset('img/circle3.jpeg') }}" alt="" class="image1 rounded-circle"  style="max-width: 12em;">
                        <h5  class="sub-sub-tittle text-center" style='font-size: 0.9em; padding-top: 0.2em; font-family: Roboto; font-weight: bold;'>
                            Las juventudes de América Latina siguen siendo claves para la construcción de ciudades justas e inclusivas. El voluntariado continua desde casa.
                        </h5>
                        <p class="sub-tittle" style="font-size: 0.7em" >Contacta a tu oficina local<br> si deseas más información</p>
                    </div>
                </div>
            </div>


 
        </div>
    </section>


    <div class="content-mas-vulnerables" id="home">
        <section class="banner">
            <div class="container">
                <div class="row banner-grids">
                    <div class="col-lg-12 banner-info-w3ls"  style="">
                        <h1 class="mt-3" style="COLOR: white; font-weight: bold; font-family: Novecentowide ">LAS FAMILIAS MÁS VULNERABLES ANTE LA PANDEMIA</h1>
                    </div>
                   
                </div>
            </div>
        </section>
    </div>

    <section class="stats py-lg-5" id="vulnerabilidad">
        
        <div id="problema" class="container">
            <h4 class="sub-tittle text-center" style='font-size: 1em'><b>TECHO trabaja con más de 500 comunidades en América Latina y El Caribe. A través de un sistema de
                Acompañamiento Territorial despegado ante el COVD-19, contamos con un mapa regional de necesidades de
                abastecimiento y prevención para mas de 85 mil familias.<b></h4>
                    <h5  class="sub-sub-tittle text-center" style='font-size: 0.9em;'>
                        Son las familias que viven en situación de pobreza, habitantes de asentamientos informales, altamente vulnerables ante la
                        pandemia. El desabastecimiento de comida, servicios básicos, la falta de acceso a insumos de higiene en previsión al COVID19, la
                        falta de vivienda digna para resguardase del virus; son parte de las necesidades que las familias tienen hoy. <br><b>Conoce más sobre
                        nustra campaña de recaudación entrando a <a href="www.techo.org/covid19"> techo.org/covid19 </a></b></h5>
                        <br>
            <h3 class="tittle text-center mb-lg-5 mb-4 px-lg-5" style="font-size: 3em;">cantidad de familias con necesidad de apoyo</h3>
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="counter">
                        <h3 class="timer count-title count-number" style="font-size: 2em"> ALIMENTOS</h3>
                        <img src="{{ asset('img/icono/2.png') }}" alt="" class="img-fluid image1">
                        <h3 class="timer count-title count-number">{{ $desabastecimiento['alimento'] }}</h3>
                        <p class="count-text" style="font-size: 1em" >Familias</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="counter">
                        <h3 class="timer count-title count-number" style="font-size: 2em"> HIGIENE</h3>
                        <img src="{{ asset('img/icono/1.png') }}" alt="" class="img-fluid image1">
                        <h3 class="timer count-title count-number">{{ $desabastecimiento['limpieza'] }}</h3>
                        <p class="count-text" style="font-size: 1em" >Familias</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="counter">
                        <h3 class="timer count-title count-number" style="font-size: 2em"> AGUA</h3>
                        <img src="{{ asset('img/icono/3.png') }}" alt="" class="img-fluid image1">
                        <h3 class="timer count-title count-number">{{ $desabastecimiento['agua'] }}</h3>
                        <p class="count-text" style="font-size: 1em" >Familias</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="counter">
                        <h3 class="timer count-title count-number" style="font-size: 2em"> VIVIENDA</h3>
                        <img src="{{ asset('img/icono/4.png') }}" alt="" class="img-fluid image1">
                        <h3 class="timer count-title count-number">1500</h3>
                        <p class="count-text" style="font-size: 1em" >Familias</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//counter-->
        <!-- //header -->
        <!-- banner -->
        <!-- //banner -->
    
<!--     <div class="content-voluntad" id="home">
        <section class="banner">
            <div class="container">
                <div class="row banner-grids">
                    <div class="col-lg-12 banner-info-w3ls"  style="">
                        <h1 class="mt-3" style="COLOR: white; font-weight: bold; font-family: Novecentowide;padding-top: 1.1em; ">VOLUNTAD Y TRABAJO ANTE EL COVID19</h1>
                    </div>
                   
                </div>
            </div>
        </section>
    </div> -->
    
    <div class="content-ayuda" id="home">
        <section class="banner">
            <div class="container">
                <div class="row banner-grids">
                    <div class="col-lg-12 banner-info-w3ls"  style="">
                        <h1 class="mt-3" style="COLOR: white; font-weight: bold; font-family: Novecentowide;padding-top: 1.1em; ">AYUDA DESDE CASA</h1>
                    </div>
                   
                </div>
            </div>
        </section>
    </div>

    <section class="stats py-lg-5" id="donar">
        
        <div id="problema" class="container">
            <h4 class="sub-tittle text-center" style='font-size: 1em; font-family: Roboto;'><b>Apoya las iniciativas de apoyo directo a familias que viven en situación de pobreza en América Latina.Nuestro
                compromiso por un mundo justo y sin pobreza nos compromete a dirigir nuestros recursos y capacidades en
                apoyo a los y las habitantes de asentamientos populares en América Latina .<b></h4>
            <h5  class="sub-sub-tittle text-center" style='font-size: 0.9em; font-family: Roboto;'>
                        Puedes ayudar a que nuestros equipos en toda la región puedan seguir en contacto directo con las familias y
                        liderazgos comunitarios, promoviendo nuestro sistema de Acompañamiento Territorial ante el COVID-19.</h5>
            <br>
            <div class="text-center">
                <button class="btn contact-form" style="background-color: #0092dd; color: white; font-family: Novecentowide;">DONA AHORA</button>
            </div>
        </div>
    </section>

    <div class="cpy-right py-3">
    <div class="container">
        <div class="row no-gutters">
        <div class="col-md-6">
            <p class="copy-w3layouts" style="color: white">Más sobre TECHO ante el COVID-19
            </p>
            <ul style="list-style-type:none;">
                <li><a class="footer" href=""> Acciones Institucionales </a> </li>
                <li><a class="footer" href=""> Acciones de Prevención </a> </li>
                <li><a class="footer" href=""> Protocolos </a> </li>
                <li><a class="footer" href=""> Países </a> </li>
            </ul>
        </div>
        <div class="col-md-4 footer-grid_section">
            <ul style="list-style-type:none;">
                <li> 
                    <img style="width: 5em" src="{{ asset('img/techo-logo_blanco.png') }}" alt="TECHO">
                </li>
                <li>
                    <a href="https://www.facebook.com/TECHO.org/">
                        <span class="fa fa-facebook-square"></span>
                    </a>
                    <a href="https://twitter.com/techo">
                        <span class="fa fa-twitter-square"></span>
                    </a>
                    <a href="https://instagram.com/techo_org">
                        <span class="fa fa-instagram"></span>
                    </a>
                    <a href="https://www.youtube.com/channel/UCV73wZNsK7F7SzvRaRtOqgg">
                        <span class="fa fa-youtube-play"></span>
                    </a>
                </li>
                <li>
                    <a href="techo.org" class="footer">techo.org</a> 
                </li>
                <li>
                    <p class="footer">© 2020. All rights reserved | Design by TECHO </p>
                </li>
            </ul>
        </div>
        </div>     
    </div>
    </div>

@endsection