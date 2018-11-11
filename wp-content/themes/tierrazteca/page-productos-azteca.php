<?php
/** 
* Template Name: Productos Azteca
*/
get_header(); ?>


<!-- HEADING
================================================== -->
<section id="products-heading" class="parallax-window d-flex align-items-center wow fadeIn">
    <div class="container">
        <div class="row">
            <header class="wow fadeInUp">
                <h1 class="azteca-heading text-center">
                    <span class="azteca-heading-white">Tierra Azteca</span> <br> Botanas y Productos
                </h1>
            </header>
        </div>
    </div>
</section>


<!-- PRODUCTOS AZTECA
================================================== -->
<section id="proposal-botanas">
    <div class="container">
        <div class="row justify-content-center">
            <h2 class="azteca-title wow fadeInDown">Propuesta Comercial: La Botana Saludable</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-7">
                <p class="azteca-paragraph text-justify wow fadeInLeft">Tierra Azteca Botanas es una marca registrada en 2010, parte del grupo <a href="http://tierra-azteca.com">"Tierra Azteca"</a> la cual surge del interés de la población por consumir botanas saludables durante su horario laboral y/o incluirla dentro de su dieta diaria.</p>
                <p class="azteca-paragraph text-justify wow fadeInLeft">Por lo que ponemos a tu disposición 15 tipos de botanas diferentes, las cuales se pueden comercializar a granel y por bolsas individuales con el gramaje específico a tus necesidades.</p>
            </div>
        </div>
    </div>
</section>


<!-- PRODUCTOS AZTECA
================================================== -->
<section id="products-gallery">
    <div class="container">
        <div class="row justify-content-center">
            <div class="azteca-title wow fadeInDown">Galería</div>
        </div>
        <div class="row wow fadeIn justify-content-center">
            <div id="products-carousel" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#products-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#products-carousel" data-slide-to="1"></li>
                    <li data-target="#products-carousel" data-slide-to="2"></li>
                    <li data-target="#products-carousel" data-slide-to="3"></li>
                    <li data-target="#products-carousel" data-slide-to="4"></li>
                    <li data-target="#products-carousel" data-slide-to="5"></li>
                    <li data-target="#products-carousel" data-slide-to="6"></li>
                    <li data-target="#products-carousel" data-slide-to="7"></li>
                    <li data-target="#products-carousel" data-slide-to="8"></li>
                </ol>

                <!-- Images -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/products/gallery-1.jpg" alt="botanas-mexicanas-tierra-azteca" class="d-block img-fluid">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>Gran variedad de botanas</h3>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/products/gallery-2.jpg" alt="botanas-mexicanas-tierra-azteca" class="d-block img-fluid">
                        <div class="carousel-caption d-none d-md-block">
                            <h4>Cacahuate español</h4>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/products/gallery-3.jpg" alt="botanas-mexicanas-tierra-azteca" class="d-block img-fluid">
                        <div class="carousel-caption d-none d-md-block">
                            <h4>Maicitos</h4>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/products/gallery-5.jpg" alt="botanas-mexicanas-tierra-azteca" class="d-block img-fluid">
                        <div class="carousel-caption d-none d-md-block">
                            <h4>Palanquetas y alegrías</h4>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/products/gallery-4.jpg" alt="botanas-mexicanas-tierra-azteca" class="d-block img-fluid">
                        <div class="carousel-caption d-none d-md-block">
                            <h4>Arándanos con pasas, nuez de la india y semillas</h4>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/products/gallery-6.jpg" alt="botanas-mexicanas-tierra-azteca" class="d-block img-fluid">
                        <div class="carousel-caption d-none d-md-block">
                            <h4>Churritos enchilados</h4>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/products/gallery-7.jpg" alt="botanas-mexicanas-tierra-azteca" class="d-block img-fluid">
                        <div class="carousel-caption d-none d-md-block">
                            <h4>Chocopasitas</h4>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/products/gallery-9.jpg" alt="botanas-mexicanas-tierra-azteca" class="d-block img-fluid">
                        <div class="carousel-caption d-none d-md-block">
                            <h4>Garbanzo</h4>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/products/gallery-8.jpg" alt="botanas-mexicanas-tierra-azteca" class="d-block img-fluid">
                        <div class="carousel-caption d-none d-md-block">
                            <h4>Cacahuate japonés</h4>
                        </div>
                    </div>
                </div>

                <!-- Arrows -->
                <a class="carousel-control-prev" href="#products-carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#products-carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section>


<!-- FEATURES
================================================== -->
<section id="azteca-botanas-menu">
    <div class="container">
        <div class="row justify-content-center">
            <div class="card-deck justify-content-center">
                <div class="col-md-6">
                    <div class="card wow fadeInUp">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/products/gallery-3.jpg" alt="machine-1" class="card-img-top img-fluid">
                        <div class="card-body">
                            <h4 class="azteca-lead text-center">¿Qué botanas eliges?</h4>
                            <p class="azteca-paragraph text-center">Comercialización de 15 tipos de botanas.</p>
                            <div class="row justify-content-center">
                                <a href="../contacto-azteca.php#azteca-contact-form">
                                    <button class="btn btn-grupoa" type="button" name="button">Contactar</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- WRITE US A MESSAGE
================================================== -->
<section id="write-us">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <h3 class="azteca-subtitle wow fadeInDown">¿Interesado en nuestros productos o servicios?</h3>
        </div>

        <div class="row d-flex justify-content-center">
            <small class="wow fadeInDown azteca-paragraph text-center">Escríbenos un mensaje a nuestro contacto y nos pondremos en contacto contigo.</small>
        </div>

        <div class="row d-flex justify-content-center">
            <a href="../contacto-azteca.php#azteca-contact-form">
                <button class="btn btn-primary wow fadeInDown">¡Hablemos de negocios! <br>
                <small>Enviar Mensaje</small></button>
            </a>
        </div>
    </div>
</section>


<!-- SLOGAN
================================================== -->
<section id="slogan">
    <div class="container">
        <div class="row hidden-sm-down justify-content-center align-items-center">
            <div class="col-3 offset-1">
                <img class="wow fadeInLeft img-fluid" src="<?php echo esc_url(get_template_directory_uri()); ?>/gph/grupo-azteca.png" alt="tierra-azteca-logo">
            </div>
            <div class="col-6">
                <h2 class="azteca-subtitle text-center wow fadeInUp font-italic">Saludable en cada Selección</h2>
            </div>
        </div>

        <div class="row hidden-md-up justify-content-center">
            <div class="col-5">
                <img class="wow fadeInLeft img-fluid" src="<?php echo esc_url(get_template_directory_uri()); ?>/gph/grupo-azteca.png" alt="tierra-azteca-logo">
            </div>
            <div class="col-12">
                <h2 class="azteca-subtitle text-center wow fadeInUp">Saludable en cada Selección</h2>
            </div>
        </div>
    </div>
</section>

<script>
$('#products-heading').parallax({
    imageSrc: '<?php echo esc_url(get_template_directory_uri()); ?>/img/headings/products-heading.jpg',
    positionY: 'bottom'
});
</script>

<?php get_footer(); ?>