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

    

    <section class="hand-crafted py-5">
        <div class="container">
            <div class="row accord-info">
                <div class="col-lg-5 banner-image">
                    <div class="img-effect">
                        <img src="{{ asset('img/MAPA.png') }}" alt="" class="img-fluid image1">
                    </div>

                </div>
                <div class="col-lg-7 pl-md-5">

                    <h3 class="tittle">SON <b class="donar"> 35.000 </b> Familias Beneficiadas</h3>
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
    <section class="stats problema">
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

    <section class="stats py-lg-5" id="problema">
        
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
                        <h3 class="timer count-title count-number">9500</h3>
                        <p class="count-text" style="font-size: 1em" >Familias</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="counter">
                        <h3 class="timer count-title count-number" style="font-size: 2em"> HIGIENE</h3>
                        <img src="{{ asset('img/icono/1.png') }}" alt="" class="img-fluid image1">
                        <h3 class="timer count-title count-number">6300</h3>
                        <p class="count-text" style="font-size: 1em" >Familias</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="counter">
                        <h3 class="timer count-title count-number" style="font-size: 2em"> AGUA</h3>
                        <img src="{{ asset('img/icono/3.png') }}" alt="" class="img-fluid image1">
                        <h3 class="timer count-title count-number">3400</h3>
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
    
    @include('covid.agenda')
    
   


    <!--//portfolio-->
    <!-- /hand-crafted -->
    <section class="hand-crafted py-5">
        <div class="container py-lg-5">
            <div class="row accord-info">
                <div class="col-lg-6 pl-md-5">

                    <h2 class="mb-md-5 tittle">¿Y si no tienes 2 metros para distanciarse?</h2>

                    


                        <a href="" target="_blank" class="btn btn-primary">Realizar Donacion</a>
                </div>
                <div class="col-lg-6 banner-image">
                    <div class="img-effect">
                        <img src="{{ asset('img/niñxsAdentro.jpg') }}" alt="" class="img-fluid image1">
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- //hand-crafted -->
   <section class="hand-crafted-2 py-5">
        <div class="container py-lg-5">
            <div class="row accord-info">
                
                <div class="col-lg-6 banner-image">
                    <div class="img-effect">
                        <img src="{{ asset('img/JuntandoAgua.jpg') }}" alt="" class="img-fluid image1">
                    </div>

                </div>
                <div class="col-lg-6 pl-md-5">

                    <h2 class="mb-md-5 tittle">¿Y si no tienes Agua?</h2>

                    


                        <a href="" target="_blank" class="btn btn-primary">Realizar Donacion</a>
                </div>

            </div>
        </div>
    </section>



    <!-- testimonials -->
    <div class="testimonials py-md-5 py-5">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="tittle  text-center mb-lg-5 mb-3">Los Asentamientos dicen</h3>

            <div class="testimonials_grid_w3ls mt-lg-0 mt-4">
                <div class="p-md-5 p-4">
                    <p class="sub-test"><span class="fa fa-quote-left" aria-hidden="true"></span> Hoy en dia 
                        no podemos evitar en trabajar en conjunto.
                    </p>
                    <div class="row mt-4">
                        <div class="col-3 testi-img-res">
                            <img src="{{ asset('img/cxj/te2.jpg') }}" alt="" class="img-fluid" />
                        </div>
                        <div class="col-9 testi_grid mt-xl-3 mt-lg-2 mt-md-4 mt-2">
                            <h5 class="mb-2">Valeria</h5>
                            <p>Comedor La Esperanza, Argentina</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    
    <!-- //testimonials -->
    <!--footer -->
 <!--    <footer>
        <div class="footer_1its py-5">
            <div class="container py-md-4">

                <div class="row footer-top mb-md-5 mb-4">
                    <div class="col-lg-4 col-md-6 footer-grid_section_1its" data-aos="fade-right">
                        <div class="footer-title-w3pvt">
                            <h3>Address</h3>
                        </div>
                        <div class="footer-text">
                            <p>Address : 1234 lock, Charlotte, North Carolina, United States</p>
                            <p>Phone : +12 534894364</p>
                            <p>Email : <a href="mailto:info@example.com">info@example.com</a></p>
                            <p>Fax : +12 534894364</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-md-0 mt-4 footer-grid_section_1its">
                        <div class="footer-title-w3pvt">
                            <h3>Quick Links</h3>
                        </div>
                         <div class="row no-gutters">
                            <ul class="links">
                                <li><a href="index.html">Home </a></li>
                                <li><a href="about.html">About </a></li>
                                <li><a href="features.html">Services</a></li>

                                <li><a href="gallery.html">Gallery</a></li>
                                <li><a href="contact.html">Contact </a></li>
                            </ul>
                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 mt-lg-0 mt-4 col-sm-12 footer-grid_section_1its" data-aos="fade-left">
                        <div class="footer-title-w3pvt">
                            <h3>Newsletter</h3>
                        </div>
                        <div class="footer-text">
                            <p>By subscribing to our mailing list you will always get latest news and updates from us.</p>
                            <form action="#" method="post">
                                <input type="email" name="Email" placeholder="Enter your email..." required="">
                                <button class="btn1"><span class="fa fa-paper-plane-o" aria-hidden="true"></span></button>
                                <div class="clearfix"> </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer> -->
    <!-- //footer -->

    @include('cxj.copyright')
@endsection