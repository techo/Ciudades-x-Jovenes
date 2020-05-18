@extends('covid.layout')

@section('content')


    <!-- mian-content -->

<div class="main-content-covid" id="home">
    <div class="container">
        <nav class="navbar navbar-expand-md ">
            <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <div>
                            <a class="navbar-brand" href=""><img style="width: 5em;" src="{{ asset('img/techo-logo_blanco.png') }}" alt="TECHO"></a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#impacto">Impacto <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#historias">Historias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#acciones">Acciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#vulnerabilidad">Vulnerabilidad</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#donar"><b>DONAR </b></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>


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

    

    <section class="hand-crafted-1 pt-5" id="impacto">
        <div class="container">
                <div class="pl-md-5 text-center">

                    <h3 class="tittle">SON <b class="donar"> {{ $desabastecimiento['familias'] }} </b> Familias Beneficiadas</h3>
                    <h4 class="sub-tittle"><b>Nuestras acciones ante la pandemia buscan
                        recaudar fondos que contribuyan a disminuir la
                        vulnerabilidad de las familias que habitan en
                        asentamientos frente a la crisis del COVID-19.
                        Hemos llegado a <b class="donar"> {{ $desabastecimiento['personasTotales'] }} </b>  personas en toda América Latina y El Caribe. Llegando a <b class="donar"> {{ $desabastecimiento['personasxdia'] }} </b>  personas por día con kits de apoyo ante la pandemia.
                    </b>
                    </h4>
                        <br>
                    <h5  class="sub-sub-tittle">
                        Lo recaudado esta siendo destinado a la compra de alimentos, productos de higiene y para financiar proyectos vinculados al acceso al agua.

                         Son más de <b> 75 mil personas que necesitan reabastecerse semanalmente con estos insumos de primera necesidad.</b></h5>
                    <div class="text-center pt-3">
                        <a href="https://techo.org/monitorcovid19" class="btn contact-form" style="background-color: #0092dd; color: white; font-family: Novecentowide; font-weight: bold;" target="_blanck">
                        MONITOR DE IMPACTO</a>
                    </div>    
                </div>
        </div>
    </section>

    


    <section class="hand-crafted-1 py-5" id="historias">
        <div class="container">
            <div class="row accord-info">
                
                <div class="col-lg-6 pl-md-5 align-middle">
                    <h4 class="sub-tittle" style='font-weight: bold; font-size: 1.3em; font-family: Novecentowide;'>PALABRAS DE VOLUNTAD Y ESPERANZA</h4>
                    <h4  class="sub-tittle">
                        Vecinas y vecinos, liderazgos barriales; que siguen trabajando por hacer llegar el apoyo a sus comunidades. Estas son sus reacciones, 
                        sus emociones y sentimientos ante el gran apoyo que miles de personas han brindado por hacer llegar a diferentes rincones del continente, oportunidades
                        para vivir una cuarentena más justa.
                    </h5>
                    <div class="text-right">
                        <a href="https://techo-19.funraise.org/fundraiser/teamtecho" class="btn contact-form" style="background-color: #EA6D4F; color: white; font-family: Novecentowide; font-weight: bold;" target="_blanck">DONA AHORA</a>
                    </div>
                </div>
                <div class="col-lg-6 banner-image">
                   <iframe width="90%" height="100%" src="https://www.youtube.com/embed/UsrnAiJN1U8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

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
    <section class="stats problema pt-3" id="proceso">
        <div id="problema" class="container">
            <div class="row text-center">
                <p  class="sub-sub-tittle" style='font-size: 1.2em;line-height: normal;'><b> Hemos logrado alcanzar a más de {{ $desabastecimiento['familias'] }} familias </b> gracias al apoyo de los liderazgos comunitarios con los que
                    trabajamos, nuestro equipo de voluntariado, el trabajo en red con el sector público y privado, el apoyo en
                    donaciones de miles de personas en América Latina e instituciones que nos permiten hacer entrega de los insumos
                    de manera segura y siguiendo lineamientos de prevención.<br> <b> Conoce todas las redes de apoyo por país aquí.</b> </p>

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
            </div>
        </div>
    </section>

    
    <section id="acciones pt-2">
        <div class="container ">
            <h3 class="tittle text-center mb-lg-5 mb-4 px-lg-5" style="font-size: 2.5em;">NUESTRAS ACCIONES ANTE ESTA EMERGENCIA</h3>

            <h4 class="sub-sub-tittle text-center" style='font-size: 0.9em'>Desde el 16 de marzo de 2020, TECHO suspendió todas las actividades masivas y en comunidad, como
                compromiso con el cuidado y prevención con todo nuestro circulo de colaboración institucional. 
                <br>
                <b>Aún así,
                nuestras operaciones continuan desde casa. <b></h4>
            <br>
            <div class="row text-center">
                <div class="col-md-4 col-sm-6 pl-2 pr-2">
                    <div class="counter">
                        <h3 class="timer count-title count-number pb-2" style="font-size: 1.5em"> APOYO FAMILIAR <br> ANTE EL COVID19</h3>
                        <img src="{{ asset('img/circle1.jpg') }}" alt="" class="image1 rounded-circle pb-2" style="max-width: 12em;">
                        <h5  class="sub-sub-tittle text-center pt-2 " style='font-size: 0.9em; padding-top: 0.2em; font-weight:bold;'>
                            Alimentos, productos esenciales para las zonas más afectadas y prioritarias de la región, mapeo de necesidad de vivienda, proyectos vinculados al acceso al agua.</h5>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 pl-2 pr-2">
                    <div class="counter">
                        <h3 class="timer count-title count-number pb-2" style="font-size: 1.5em"> ACOMPAÑAMIENTO <br> TERRITORIAL</h3>
                        <img src="{{ asset('img/circle2.png') }}" alt="" class="image1 rounded-circle pb-2" style="max-width: 12em;">
                        <h5  class="sub-sub-tittle text-center pt-2" style='font-size: 0.9em; padding-top: 0.2em; font-weight:bold;'>
                            Hemos desplegado un sistema de acompañamiento diario junto a más de 450 liderazgos comunitarios, para poder conocer las necesidades comunitarias ante la pandemia
                        </h5>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 pl-2 pr-2">
                    <div class="counter">
                        <h3 class="timer count-title count-number pb-2" style="font-size: 1.5em"> VOLUNTARIADO <br> DESDE CASA</h3>
                        <img src="{{ asset('img/circle3.jpeg') }}" alt="" class="image1 rounded-circle pb-2"  style="max-width: 12em;">
                        <h5  class="sub-sub-tittle text-center pt-2" style='font-size: 0.9em; padding-top: 0.2em; font-weight:bold;'>
                            Las juventudes de América Latina siguen siendo claves para la construcción de ciudades justas e inclusivas. El voluntariado continua desde casa.
                        </h5>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <p class="sub-tittle" style="font-size: 1em; font-weight: normal;" >Contacta a tu oficina local si deseas más información <a href="https://www.techo.org/contacto/"><b> aquí </b></a> </p>
            </div>


 
        </div>
    </section>

    <div class="content-voluntad" id="vulnerabilidad">
        <section class="banner">
            <div class="container">
                <div class="row banner-grids">
                    <div class="col-lg-6 banner-info-w3ls"  style="margin-top: 2em;">
                        <h2 class="mt-0" style="COLOR: white; font-weight: bold;     font-size: 1.5em;font-family: Novecentowide; ">
                            "somos personas qUE vivimos el día a día y que te digan que todo tu trabajo para, es triste, porque no sabes qué le vas a dar a tu hijo al otro día"
                        </h2>
                        <h2 class="mt-0" style="COLOR: white; text-transform: none; font-size: 1.2em;font-family: Montserrat; ">
                            Liliana Benítez, Lideresa Comunitaria
                        </h2>
                    </div>
                   
                </div>
            </div>
        </section>
    </div>


    <section class="hand-crafted-1 stats py-lg-5 py-4" id="donar">
        
        <div id="problema" class="container">
            <h4 class="sub-tittle text-center" style='font-family: Montserrat;'>
                <b>Son las familias que viven en situación de pobreza, habitantes de asentamientos informales, altamente vulnerables ante la pandemia. El desabastecimiento de comida, servicios básicos, la falta de acceso a insumos de higiene en previsión al COVID19, la falta de vivienda digna para resguardase del virus; son parte de las necesidades que las familias tienen hoy.
                <b>
            </h4>

            <h3 class="tittle text-center">TU APORTE ES MÁS IMPORTANTE QUE NUNCA</h3>
            
            <h4  class="sub-tittle text-center" style='font-family: Montserrat;'>
                        Apoya las iniciativas de apoyo directo a familias que viven en situación de pobreza en América Latina. Nuestro compromiso por un mundo justo y sin pobreza nos compromete a dirigir nuestros recursos y capacidades en apoyo a los y las habitantes de asentamientos populares en América Latina.
            </h4>
            <br>
            <div class="text-center">
                <a href="https://techo-19.funraise.org/fundraiser/teamtecho" class="btn contact-form" style="background-color: #0092dd; color: white; font-family: Novecentowide; font-weight: bold;" target="_blanck">DONA AHORA</a>
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
                <li><a class="footer" href="https://www.techo.org/infocovid19/" target="_blanck"> Acciones Institucionales </a> </li>
                <li><a class="footer" href="https://www.techo.org/infocovid19/" target="_blanck"> Acciones de Prevención </a> </li>
                <li><a class="footer" href="https://docs.google.com/document/d/1HD7y3apq217i-gtDXWOB4cpYPoUUdPMa3q4KrI8WzFw/edit" target="_blanck"> Protocolos </a> </li>
                <li><a class="footer" href="https://www.techo.org/contacto/" target="_blanck"> Países </a> </li>
            </ul>
        </div>
        <div class="col-md-4 footer-grid_section">
            <ul style="list-style-type:none;">
                <li> 
                    <img style="width: 5em" src="{{ asset('img/techo-logo_blanco.png') }}" alt="TECHO">
                </li>
                <li>
                    <a href="https://www.facebook.com/TECHO.org/" target="_blanck">
                        <span class="fa fa-facebook-square"></span>
                    </a>
                    <a href="https://twitter.com/techo" target="_blanck">
                        <span class="fa fa-twitter-square"></span>
                    </a>
                    <a href="https://instagram.com/techo_org" target="_blanck">
                        <span class="fa fa-instagram"></span>
                    </a>
                    <a href="https://www.youtube.com/channel/UCV73wZNsK7F7SzvRaRtOqgg" target="_blanck">
                        <span class="fa fa-youtube-play"></span>
                    </a>
                </li>
                <li>
                    <a href="https://www.techo.org" target="_blanck" class="footer">techo.org</a> 
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