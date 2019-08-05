@extends('cxj.layout')

@section('content')
 <div class="container">
<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSc61XLQ6NelExn1Havzwy5V1WN0YZjnYrubNw7zEMlDTd6cxA/viewform?embedded=true" class="ab-info-main py-md-5 py-5">Cargando...</iframe>
    </div>
    <!-- //main-content -->
    <!--/contact -->
    <section class="ab-info-main py-md-5 py-5">
        <div class="container">
            <div class="inner-sec-w3pvt py-lg-5">
                <h3 class="tittle text-center mb-lg-5 mb-3 inner-tittle"> Carga tu Mesa</h3>
                <p class="text-center px-lg-5" data-aos="fade-up">Júntate con dos o más amigxs para discutir sobre la ciudad donde viven: cómo es, cómo debería ser y cómo se comprometen con ella.
Las conclusiones de esas mesas serán tomadas en cuenta para la Propuesta de la Juventud que se construirá en el Campus Urbano.</p>
                <div class="contact-form mt-md-5">
                    <div class="contact-form-inner mx-auto text-left">
                        <form name="contactform " id="contactform" method="post" action="/cxj/mesa/">
                            @if ($errors->any())
            <div class="notification is-danger"> 
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

                            @csrf
                            <h2>Datos de Contacto</h2>
                            <br>
                            <div class="row">


                                <div class="col-lg-6 con-gd">
                                    <div class="form-group">
                                        <label>Nombre</label>
                                        <input type="text" class="form-control" placeholder="Josue" name="nombre">
                                    </div>
                                    <div class="form-group">
                                        <label>Mail</label>
                                        <input type="email" class="form-control" placeholder="Josue@CiudadxJovenes.com" name="mail">
                                    </div>
                                </div>
                                <div class="col-lg-6 con-gd">
                                    <div class="form-group">
                                        <label>Apellido</label>
                                        <input type="text" class="form-control" placeholder="Rivas" name="apellido">
                                    </div>
                                    <div class="form-group">
                                        <label>Telefono</label>
                                        <input type="text" class="form-control" placeholder="11-125-1253" name="telefono">
                                    </div>
                                </div>
                                <div class="col-lg-6 con-gd">
                                    <div class="form-group">
                                        <label>Participantes</label>
                                        <input type="text" class="form-control" placeholder="15" name="participantes">
                                    </div>
                                    <div class="form-group">
                                        <label>Mujeres</label>
                                        <input type="text" class="form-control" placeholder="7" name="mujeres">
                                    </div>
                                </div>
                                <div class="col-lg-6 con-gd">
                                    <div class="form-group">
                                        <label>Hombres</label>
                                        <input type="text" class="form-control" placeholder="5" name="hombres">
                                        </div>
                                    <div class="form-group">
                                        <label>Otrxs</label>
                                        <input type="text" class="form-control" placeholder="3" name="otrxs">
                                    </div>
                                </div>
                            </div>
                            <br>
            
                            <h2>Nuestra Propuesta</h2>
                            <br>
                            <div class="form-group">
                                 <label>Nuestra ciudad es: </label>
                                        <input type="text" class="form-control" name="propuesta_ciudad">
                                         <label>Título y tema de la propuesta (Máx. 2 líneas): </label>
                                        <input type="text" class="form-control" name="propuesta_titulo">
                                        <label>Problema (Máx. 2 líneas): </label>
                                        <input type="text" class="form-control" name="propuesta_problema">
                                        <label>Propuesta o solución (Máx. 4 líneas): </label>
                                        <input type="text" class="form-control" name="propuesta_solucion">
                                </div>
<br>
                            <h2>Nuestro Compromiso Ciudano</h2>
                            <br>
                            <div class="form-group">
                                 <label>Lxs jóvenes cumplimos el rol... </label>
                                        <input type="text" class="form-control" name="compromiso_jovenes">
                                         <label>y nos comprometemos a construir una ciudad... </label>
                                        <input type="text" class="form-control" name="compromiso_nosotros">
                                        <label>donde participemos en...</label>
                                        <input type="text" class="form-control" name="compromiso_donde">
                                        <label>Fecha </label>
                                        <input type="text" class="form-control" placeholder="10/06/2019" name="compromiso_fecha">
                                
                                            <br>
                            <h2>Desde la Reflexion Grupal</h2>
                            <br>
                                <p>
Desde la reflexión grupal, ¿cuál es la percepción del grupo sobre el futuro de las ciudades de América Latina y la participación de la juventud en su transformación? Aquí esperamos que nos cuentes todo aquello que consideras que sea interesante saber sobre la conversación grupal y que haya sido más significativo para los y las participantes.</p>
                                <textarea class="form-control" name="reflexion"></textarea>

                             <h2>Subi tus fotos</h2>   
                                        <label>FOTOGRAFÍA DEL GRUPO CON EL COMPROMISO</label>
                                        <input type="text" class="form-control" name="foto_grupo" >

                                        <label>FOTOGRAFÍA DEL MAPA </label>
                                        <input type="text" class="form-control" name="foto_mapa" >
                                        
                                        <label>FOTOGRAFÍA ANEXO 4 </label>
                                        <input type="text" class="form-control" name="foto_anexo" >
                            </div>

                            <button type="submit" class="btn btn-default">Cargar Mesa</button>
                        </form>
                    
                </div>
            </div>
        </div>
    </section>
    <!--//contact -->

@include('cxj.copyright')
</body>
</html>
@endsection