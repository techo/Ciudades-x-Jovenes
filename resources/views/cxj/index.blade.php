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
                        <h2>{{ __('Make your city') }} </h2>
                        <h3 class="mb-3">{{ __('Ciudades x Jovenes') }}</h3>
                        <p class="mb-4"> {{ __('cxj.what') }}</p>
                        <a href="#participa" class="btn">{{ __('cxj.roll') }}</a>
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
            <h3 class="tittle text-center mb-lg-5 mb-3 px-lg-5">Que pasara en el Campus Urbano?</h3>
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="counter">
					  <span class="fa fa-calendar"></span>
                        <h3 class="timer count-title count-number">12</h3>
                        <p class="count-text">Dias</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="counter">
					  <span class="fa fa-microphone"></span>
                        <h3 class="timer count-title count-number">120</h3>
                        <p class="count-text">Conferencias</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="counter">
					 <span class="fa fa-flask"></span>
                        <h3 class="timer count-title count-number">1280</h3>
                        <p class="count-text">Laboratorios</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="counter">
					  <span class="fa fa-users"></span>
                        <h3 class="timer count-title count-number">10200</h3>
                        <p class="count-text">Jovenes</p>
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

                    <h3 class="mb-md-5 tittle">Plan Your Holiday Trip Now Exceptional Adventure</h3>

                    <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla mollis dapibus nunc, ut rhoncus turpis sodales quis.Integer sit amet mattis quam, sit amet ultricies velit. Praesent ullamcorper dui turpis.</p>
                    <p class="mt-3">Integer sit amet mattis quam, sit amet ultricies velit. Praesent ullamcorper dui turpis.
                        <p>
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
            <h3 class="tittle  text-center mb-lg-5 mb-3">Our Clients Say</h3>

            <div class="testimonials_grid_w3ls mt-lg-0 mt-4">
                <div class="p-md-5 p-4">
                    <p class="sub-test"><span class="fa fa-quote-left" aria-hidden="true"></span> Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod possimus, omnis voluptas.Integer sit amet mattis quam, sit amet ultricies velit.
                    </p>
                    <div class="row mt-4">
                        <div class="col-3 testi-img-res">
                            <img src="{{ asset('img/cxj/te2.jpg') }}" alt="" class="img-fluid" />
                        </div>
                        <div class="col-9 testi_grid mt-xl-3 mt-lg-2 mt-md-4 mt-2">
                            <h5 class="mb-2">Soluta Nobis</h5>
                            <p>Libero Tempore</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- //testimonials -->
    <!--footer -->
    <footer>
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
    </footer>
    <!-- //footer -->

    @include('cxj.copyright')
@endsection