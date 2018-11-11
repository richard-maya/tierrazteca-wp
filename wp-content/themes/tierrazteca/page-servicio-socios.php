<?php
/** 
* Template Name: Servicios a Socios
*/
get_header(); ?>


<!-- HEADING
================================================== -->
<section id="eventos-heading" class="parallax-window d-flex align-items-center wow fadeIn">
    <div class="container">
        <div class="row">
            <header class="wow fadeInUp">
                <h1 class="vending-heading text-center wow">
                    <span class="azteca-heading-white">Tierra Vending</span> <br> Servicio a Socios
                </h1>
            </header>
        </div>
    </div>
</section>


<!-- DESCRIPTION
================================================== -->
<section id="products-description">
    <div class="container">
        <div class="row justify-content-center">
            <div class="card-deck">
                <div class="col-md-4">
                    <div class="card wow fadeInLeft">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/vending/card-4.jpg" alt="machine-1" class="card-img-top img-fluid">
                        <div class="card-body">
                            <h4 class="vending-lead text-center">Apoyo Técnico</h4>
                            <p class="azteca-paragraph text-center">Servicio de mantenimiento.</p>
                            <div class="row justify-content-center">
                                <a href="../contacto-azteca.php#azteca-contact-form">
                                    <button class="btn btn-vending" type="button" name="button">Conocer más</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card wow fadeInUp">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/vending/card-5.jpg" alt="machine-1" class="card-img-top img-fluid">
                        <div class="card-body">
                            <h4 class="vending-lead text-center">Apoyo Nutricional</h4>
                            <p class="azteca-paragraph text-center">Te damos una opción de acuerdo a tus necesidades.</p>
                            <div class="row justify-content-center">
                                <a href="../contacto-azteca.php#azteca-contact-form">
                                    <button class="btn btn-vending" type="button" name="button">Conocer más</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card wow fadeInRight">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/vending/card-6.jpg" alt="machine-1" class="card-img-top img-fluid">
                        <div class="card-body">
                            <h4 class="vending-lead text-center">Apoyo a Socios</h4>
                            <p class="azteca-paragraph text-center">¿Cómo podemos ayudarte?</p>
                            <div class="row justify-content-center">
                                <a href="../contacto-azteca.php#azteca-contact-form">
                                    <button class="btn btn-vending" type="button" name="button">Conocer más</button>
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
            <h3 class="vending-subtitle wow fadeInDown">¿Interesado en nuestros productos o servicios?</h3>
        </div>

        <div class="row d-flex justify-content-center">
            <small class="wow fadeInDown azteca-paragraph text-center">Escríbenos un mensaje a nuestro contacto y nos pondremos en contacto contigo.</small>
        </div>

        <div class="row d-flex justify-content-center">
            <a href="../contacto-azteca.php#azteca-contact-form">
                <button class="btn btn-vending wow fadeInDown">¡Hablemos de negocios! <br>
                <small>Enviar Mensaje</small></button>
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


<script>
$('.parallax-window').parallax({
    imageSrc: '<?php echo esc_url(get_template_directory_uri()); ?>/img/headings/event-heading.jpg',
    positionY: 'center'
});
</script>


<?php get_footer(); ?>