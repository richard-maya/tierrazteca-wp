<?php
/** 
* Template Name: Máquinas y Productos
*/
get_header(); ?>


<!-- HEADING
================================================== -->
<section id="vending-heading" class="parallax-window d-flex align-items-center wow fadeIn">
    <div class="container">
        <div class="row">
            <header class="wow fadeInUp">
                <h1 class="vending-heading text-center wow">
                    <span class="azteca-heading-white">Tierra Vending</span> <br> Máquinas y Productos
                </h1>
            </header>
        </div>
    </div>
</section>


<!-- VENDING MACHINES
================================================== -->
<section id="vending-machines">
    <div class="container">
        <div class="row justify-content-center">
            <h2 class="vending-title wow fadeInUp">¿Qué máquina necesitas?</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-12">
                <ul class="nav nav-pills nav-fill mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="botanas-tab" data-toggle="pill" href="#botanas-pill" role="tab" aria-controls="pills-home" aria-expanded="true">Vending Botanas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="bebidas-tab" data-toggle="pill" href="#bebidas-pill" role="tab" aria-controls="pills-profile" aria-expanded="true">Vending Bebidas</a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">

                    <!-- Venging Botanas -->
                    <div class="tab-pane fade show active" id="botanas-pill" role="tabpanel" aria-labelledby="botanas-tab">
                        <div class="row justify-content-center">
                            <div class="col-md-8 push-md-4">
                                <p class="azteca-paragraph">Con estructura ensamblada en una base de poliuretano de una pulgada, doble vidrio frontal aislado de alta eficiencia y un sistema de programación amigable; nuestas máquinas vending la mejor opción si buscas gran capacidad y variedad de productos.</p>

                                <p class="azteca-list text-justify"><b>Dimensiones:</b><br> Alto: 183cm &nbsp; Ancho: 99cm &nbsp; Fondo: 91cm &nbsp; Peso: 314kg</p>

                                <p class="azteca-list text-jusfity"><b>Temperatura:</b><br> De 2ºC a 6ºC en área refrigerada.</p>

                                <p class="azteca-list text-justify"><b>Características:</b><br>
                                    <b>*</b>Registro de datos operativos (cortes eléctricos, apertura de puerta, registro de temperatura).<br>
                                    <b>*</b>Display de 2 líneas, 16 caracteres.<br>
                                    <b>*</b>Optimizacón de la exhibición en punto de venta.<br>
                                    <b>*</b>Charolas fácilmente ajustables.<br>
                                    <b>*</b>Configuraciones adaptables.<br>
                                    <b>*</b>División interna de temperatura.<br>
                                    <b>*</b>Programación de mercadeo (acomodo de la espiral según la necesidad del cliente).<br>
                                    <b>*</b>Sencillo manejo en programación.<br>
                                </p>
                            </div>
                            <div class="col-md-4 pull-md-8">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/vending/tab-1.jpg" alt="machine-3" class="img-fluid">
                            </div>
                        </div>
                    </div>

                    <!-- Vending Bebidas -->
                    <div class="tab-pane fade" id="bebidas-pill" role="tabpanel" aria-labelledby="bebidas-tab">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <p class="azteca-paragraph">Con estructura ensamblada en una base de poliuretano de una pulgada, doble vidrio frontal aislado de alta eficiencia y un sistema de programación amigable; nuestas máquinas vending la mejor opción si buscas gran capacidad y variedad de productos.</p>

                                <p class="azteca-list text-justify"><b>Dimensiones:</b><br> Alto: 183cm &nbsp; Ancho: 99cm &nbsp; Fondo: 91cm &nbsp; Peso: 314kg</p>

                                <p class="azteca-list text-jusfity"><b>Temperatura:</b><br> De 2ºC a 4ºC en área refrigerada.</p>

                                <p class="azteca-list text-justify"><b>Características:</b><br>
                                    <b>*</b>Registro de datos operativos (cortes eléctricos, apertura de puerta, registro de temperatura).<br>
                                    <b>*</b>Display de 2 líneas, 16 caracteres.<br>
                                    <b>*</b>Optimizacón de la exhibición en punto de venta.<br>
                                    <b>*</b>Charolas fácilmente ajustables.<br>
                                    <b>*</b>Configuraciones adaptables.<br>
                                    <b>*</b>División interna de temperatura.<br>
                                    <b>*</b>Programación de mercadeo (frenteo de proudctos, retraso de ventas y acomodo de la espiral según la necesidad del operador).<br>
                                    <b>*</b>Sencillo manejo en programación.<br>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/vending/tab-2.jpg" alt="machine-7" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- FEATURES
================================================== -->
<section id="vending-features">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <h2 class="vending-title wow fadeInDown">Tenemos lo que necesitas</h2>
        </div>
        <div class="row">
            <div class="col-6 col-md-3">
                <div class="card wow fadeInUp">
                    <center>
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/vending/milk-products.png" alt="freepik-milk-products-vector" class="img-fluid">
                    </center>
                    <div class="card-block">
                        <p class="card-text">Hasta 52 productos a tu elección</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card wow fadeInUp">
                    <center>
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/vending/headphones.png" alt="freepik-headphones-vector" class="img-fluid">
                    </center>
                    <div class="card-block">
                        <p class="card-text">Servicio personalizado con visitas diarias a tus instalaciones</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card wow fadeInUp">
                    <center>
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/vending/cold.png" alt="freepik-cold-vector" class="img-fluid">
                    </center>
                    <div class="card-block">
                        <p class="card-text">Control de temperatura de refrigeración</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card wow fadeInUp">
                    <center>
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/vending/sensor.png" alt="freepik-sensor-vector" class="img-fluid">
                    </center>
                    <div class="card-block">
                        <p class="card-text">Sensores de caída</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- PRODUCTS
================================================== -->
<section id="vending-products">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <h2 class="vending-title wow fadeInDown">Revisa todos nuestros productos <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/vending/discount.png" alt="freepik-discount-vector" class="img-fluid discount-icon"> </h2>
        </div>

        <div class="row justify-content-center">
            <!-- Charolas T Ambiente -->
            <div class="col-12 col-md-6">
                <h3 class="vending-subtitle text-center wow fadeInDown">Charolas T Ambiente</h3>

                <div class="row justify-content-center">
                    <a href="#" data-toggle="modal" data-target="#modal-ambiente">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/vending/charolas-ambiente.jpg" alt="charolas-ambiente" class="img-fluid wow fadeIn">
                    </a>
                </div>

                <br>

                <div class="row modal-buttons-group justify-content-center">
                    <button type="button" class="btn btn-vending-outline btn-sm wow fadeInUp" data-toggle="modal" data-target="#modal-ambiente">Ver lista de productos</button>
                </div>

                <div class="clearfix"></div>
            </div>

            <!-- Charolas Frías -->
            <div class="col-12 col-md-6">
                <h3 class="vending-subtitle text-center wow fadeInDown">Charolas Frías</h3>

                <div class="row justify-content-center">
                    <a href="#" data-toggle="modal" data-target="#modal-fria">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/vending/charolas-frias.jpg" alt="charolas-frias" class="img-fluid wow fadeIn">
                    </a>
                </div>

                <br>

                <div class="row modal-buttons-group wow fadeInUp justify-content-center">
                    <button type="button" class="btn btn-vending-outline btn-sm" data-toggle="modal" data-target="#modal-fria">Ver lista de productos</button>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</section>


<!-- WRITE US A MESSAGE
================================================== -->
<section id="write-us">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <h3 class="vending-subtitle wow fadeInDown">¿Interesado en nuestros productos o servicios?</h3>
        </div>

        <div class="row d-flex justify-content-center">
            <small class="wow fadeInDown azteca-paragraph text-center">Escríbenos un mensaje y nos pondremos en contacto contigo.</small>
        </div>

        <div class="row d-flex justify-content-center">
            <a href="../contacto-azteca.php#azteca-contact-form">
                <button class="btn btn-vending wow fadeInDown">¡Hablemos de negocios!</button>
            </a>
        </div>
    </div>
</section>


<!-- SLOGAN
================================================== -->
<section id="green-slogan">
    <div class="container">
        <div class="row hidden-sm-down justify-content-center align-items-center">
            <div class="col-3 offset-1">
                <img class="wow fadeInLeft img-fluid" src="<?php echo esc_url(get_template_directory_uri()); ?>/gph/tierra-vending.png" alt="tierra-azteca-logo">
            </div>
            <div class="col-6">
                <h2 class="vending-subtitle text-center wow fadeInUp font-italic" style="color:white;">Saludable en cada Selección</h2>
            </div>
        </div>

        <div class="row hidden-md-up justify-content-center">
            <div class="col-5">
                <img class="wow fadeInLeft img-fluid" src="<?php echo esc_url(get_template_directory_uri()); ?>/gph/tierra-vending.png" alt="tierra-azteca-logo">
            </div>
            <div class="col-12">
                <h2 class="azteca-subtitle text-center wow fadeInUp" style="color:white;">Saludable en cada Selección</h2>
            </div>
        </div>
    </div>
</section>


<!-- MODAL WINDOWS
================================================== -->
<!-- Charolas T Ambiente -->
<div class="modal fade" id="modal-ambiente" tabindex="-1" role="dialog" aria-labelledby="modal-ambiente" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Charolas T Ambiente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <h4>Lista de Productos</h4>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-4">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td scope="row">Pasitas con chocolate</td>
                                </tr>
                                <tr>
                                    <td scope="row">Arándano con chocolate blanco</td>
                                </tr>
                                <tr>
                                    <td scope="row">Barritas de amaranto y semillas</td>
                                </tr>
                                <tr>
                                    <td scope="row">Barritas de avena y semillas</td>
                                </tr>
                                <tr>
                                    <td scope="row">Churritos con chile</td>
                                </tr>
                                <tr>
                                    <td scope="row">Chícharo tostado salado</td>
                                </tr>
                                <tr>
                                    <td scope="row">Energy mix (mezcla de nuez de la India, arándano y semillas)</td>
                                </tr>
                                <tr>
                                    <td scope="row">Habas tostadas con chile</td>
                                </tr>
                                <tr>
                                    <td scope="row">Garbanzo con chile</td>
                                </tr>
                                <tr>
                                    <td scope="row">Cacahuate japonés</td>
                                </tr>
                                <tr>
                                    <td scope="row">Maicitos tostados con chile</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-4">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td scope="row">Mezcla de semillas tostadas</td>
                                </tr>
                                <tr>
                                    <td scope="row">Pepitas tostadas saladas</td>
                                </tr>
                                <tr>
                                    <td scope="row">Cacahuate estilo Oaxaca</td>
                                </tr>
                                <tr>
                                    <td scope="row">Alegría (barra de amaranto bicolor chocolate + vainilla)</td>
                                </tr>
                                <tr>
                                    <td scope="row">Alegría tabique (barra de amaranto tamaño grande)</td>
                                </tr>
                                <tr>
                                    <td scope="row">Alegría tradicional</td>
                                </tr>
                                <tr>
                                    <td scope="row">Barra de hojuelas de maíz tostado</td>
                                </tr>
                                <tr>
                                    <td scope="row">Palanqueta de cacahuate</td>
                                </tr>
                                <tr>
                                    <td scope="row">Rueditas (galletas integrales con mermelada)</td>
                                </tr>
                                <tr>
                                    <td scope="row">Papas Sabritas</td>
                                </tr>
                                <tr>
                                    <td scope="row">Galletonuez (galleta integral con nuez)</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-4">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td scope="row">Barra de linaza rellena (galleta rellena de jalea)</td>
                                </tr>
                                <tr>
                                    <td scope="row">All Bran</td>
                                </tr>
                                <tr>
                                    <td scope="row">Galleta con arándanos Nature Valley</td>
                                </tr>
                                <tr>
                                    <td scope="row">Galletas Oreo</td>
                                </tr>
                                <tr>
                                    <td scope="row">Halls pastillas refrescantes</td>
                                </tr>
                                <tr>
                                    <td scope="row">Chicles Trident (12 y 6 pzas)</td>
                                </tr>
                                <tr>
                                    <td scope="row">Special K</td>
                                </tr>
                                <tr>
                                    <td scope="row">Barra Frutela con trozos de manzana, moras y fresas</td>
                                </tr>
                                <tr>
                                    <td scope="row">Galletas Emperador nuez, vainilla, chocolate (10 pzas)</td>
                                </tr>
                                <tr>
                                    <td scope="row">Galletas Arcoiris (8 pzas)</td>
                                </tr>
                                <tr>
                                    <td scope="row">Mamut</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Charolas Frías -->
<div class="modal fade" id="modal-fria" tabindex="-1" role="dialog" aria-labelledby="modal-fria" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Charolas Frías</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <h4>Lista de Productos</h4>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-4">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td scope="row">Bebida de soya sabor mango, durazno o manzana</td>
                                </tr>
                                <tr>
                                    <td scope="row">Agua natural</td>
                                </tr>
                                <tr>
                                    <td scope="row">Bonafont (guayaba, jamaica o naranja)</td>
                                </tr>
                                <tr>
                                    <td scope="row">Boing (guayaba, uva, naranja, mango o durazno)</td>
                                </tr>
                                <tr>
                                    <td scope="row">Gelatina de fresa, coco o vainilla</td>
                                </tr>
                                <tr>
                                    <td scope="row">DanUp (fresa o piña coco)</td>
                                </tr>
                                <tr>
                                    <td scope="row">Sándwich de jamón y queso</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-4">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td scope="row">Activia (ciruela o fresa)</td>
                                </tr>
                                <tr>
                                    <td scope="row">Yogurt griego Oikos de arándano, fresa o coco</td>
                                </tr>
                                <tr>
                                    <td scope="row">Benegastrosol</td>
                                </tr>
                                <tr>
                                    <td scope="row">Danonino bebible</td>
                                </tr>
                                <tr>
                                    <td scope="row">Yogurt Danone bebile de varios sabores</td>
                                </tr>
                                <tr>
                                    <td scope="row">Yogurt Danone fondo frutado de varios sabores</td>
                                </tr>
                                <tr>
                                    <td scope="row">Flan Danette</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-4">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td scope="row">Manzana</td>
                                </tr>
                                <tr>
                                    <td scope="row">Yakult</td>
                                </tr>
                                <tr>
                                    <td scope="row">Tubitos de queso</td>
                                </tr>
                                <tr>
                                    <td scope="row">Bebida sabor chocolate</td>
                                </tr>
                                <tr>
                                    <td scope="row">Coca Cola regular</td>
                                </tr>
                                <tr>
                                    <td scope="row">Refrescos sabor Mundet, Sprite, Peñafiel y Squirt de lata</td>
                                </tr>
                                <tr>
                                    <td scope="row">Jarritos 600 ml</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>


<script>
$('.parallax-window').parallax({
    imageSrc: '<?php echo esc_url(get_template_directory_uri()); ?>/img/headings/vending-heading.jpg',
    positionY: 'center'
});
</script>


<?php get_footer(); ?>