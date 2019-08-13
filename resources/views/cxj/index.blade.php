@extends('cxj.layout')

@section('content')


    <!-- mian-content -->
    <div class="main-content" id="home">
   
        <!-- //header -->
        <!-- banner -->
        <section class="banner">
            <div class="container">
                <div class="row banner-grids">
                    <div class="col-lg-6 banner-info-w3ls">
                        <h2> Construí tu Ciudad</h2>
                        <h1 class="mb-3" style="COLOR: WHITE;">Ciudades x Jovenes</h3>
                        <p class="mb-4"> Un Movimiento para que jóvenes de toda America Latina propongamos las ciudades que queremos y demostremos nuestro compromiso para lograrlo</p>
                        <a href="#participa" class="btn">Conocé más!</a>
                    </div>
                   
                </div>
            </div>
        </section>
        <!-- //banner -->
    </div>
    
    @include('cxj.agenda')
    
   
    <!--//counter-->
    <section class="stats py-lg-5">
        <div id="campus" class="container py-5">
            <h3 class="tittle text-center mb-lg-5 mb-4 px-lg-5">Impacto #CiudadesxJovenes</h3>
            <div class="row text-center">
                <div class="col-md-4 col-sm-6">
                    <div class="counter">
					  <span class="fa fa-users"></span>
                        <h3 class="timer count-title count-number">10200</h3>
                        <p class="count-text">Jovenes</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="counter">
					 <span class="fa fa-flask"></span>
                        <h3 class="timer count-title count-number">867</h3>
                        <p class="count-text">Iniciativas Generadas</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="counter">
					  <span class="fa fa-globe"></span>
                        <h3 class="timer count-title count-number">18</h3>
                        <p class="count-text">Paises</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//counter-->

    @include('cxj.team')   
    
    

    <!--//portfolio-->
    <!-- /hand-crafted -->
    <section class="hand-crafted py-5">
        <div class="container py-lg-5">
            <div class="row accord-info">
                <div class="col-lg-6 pl-md-5">

                    <h3 class="mb-md-5 tittle">Plan de Acción Regional</h3>

                    
<p>
A través del encuentro de
cientos de jóvenes, nació el PARJ, para
la implementación de la NAU. </p>
<p>Este documento es un puntapié inicial
para abrir nuevas formas de interpretación y desarrollo de propuestas, que propicien la participación efectiva de las juventudes en las políticas urbanas de América
Latina durante los próximos años.</p>

                        <a href="https://www.techo.org/wp-content/uploads/2019/07/PARJ_5-arreglado_compressed.pdf" target="_blank" class="btn">Leer PARJ</a>
                </div>
                <div class="col-lg-6 banner-image">
                    <div class="img-effect">
                        <img src="{{ asset('img/cxj/img3.jpg') }}" alt="" class="img-fluid image1">
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- //hand-crafted -->

    <!-- testimonials -->
    <div class="testimonials py-md-5 py-5">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="tittle  text-center mb-lg-5 mb-3">La Juventud dice</h3>

            <div class="testimonials_grid_w3ls mt-lg-0 mt-4">
                <div class="p-md-5 p-4">
                    <p class="sub-test"><span class="fa fa-quote-left" aria-hidden="true"></span> Las juventudes conciben los espacios
                    públicos como lugares claves para el encuentro. Estos espacios son considerados relevantes por concentrar la oferta cultural destacada en cada ciudad. 
                    </p>
                    <div class="row mt-4">
                        <div class="col-3 testi-img-res">
                            <img src="{{ asset('img/cxj/te2.jpg') }}" alt="" class="img-fluid" />
                        </div>
                        <div class="col-9 testi_grid mt-xl-3 mt-lg-2 mt-md-4 mt-2">
                            <h5 class="mb-2">Valeria</h5>
                            <p>Participante Campus 2018</p>
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