<?php
/** 
* Template Name: Tierra Vending
*/
get_header(); ?>


<!-- NAV BAR
================================================== -->
<section id="green-logo" class="d-flex align-items-end hidden-sm-down">
    <div class="container">
        <div class="row">
            <div class="col-md-2 d-flex align-items-center">
                <a href="<?php echo esc_url( home_url() ); ?>">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/gph/tierra-vending.png" alt="" class="img-fluid">
                </a>
            </div>
            <?php 
                wp_nav_menu( array(
                    'theme_location'  => 'primary',
                    'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
                    'container'       => 'nav',
                    'container_class' => 'col-12 col-md-10 d-flex justify-content-end',
                    'container_id'    => '',
                    'menu_class'      => 'col-12 col-md-10 d-flex justify-content-end',
                    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'          => new WP_Bootstrap_Navwalker(),
                ) );
            ?>
        </div>
    </div>
</section>

<nav class="navbar navbar-toggleable-md bg-faded sticky-top bg-primary navbar-inverse hidden-md-up" style="background-color:#79E66F !important;">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
        data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
        aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/gph/tierra-vending.png" width="auto" height="50" class="d-inline-block align-top" alt="">
    </a>
    <?php 
        wp_nav_menu( array(
            'theme_location'  => 'primary',
            'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
            'container'       => 'div',
            'container_class' => 'collapse navbar-collapse',
            'container_id'    => 'navbarNavDropdown',
            'menu_class'      => 'navbar-nav',
            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
            'walker'          => new WP_Bootstrap_Navwalker(),
        ) );
    ?>
</nav>


<!-- GALLERIA
================================================== -->
<section id="galleria" class="carousel slide wow fadeIn" data-ride="carousel">

    <!-- Images -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="slides" style="background: url('<?php echo esc_url(get_template_directory_uri()); ?>/img/vending/machine-1.jpg') center center no-repeat;">
            </div>
        </div>
        <div class="carousel-item">
            <div class="slides" style="background: url('<?php echo esc_url(get_template_directory_uri()); ?>/img/vending/machine-5.jpg') center center no-repeat;">
            </div>
        </div>
        <div class="carousel-item">
            <div class="slides" style="background: url('<?php echo esc_url(get_template_directory_uri()); ?>/img/vending/machine-2.jpg') center center no-repeat;">
            </div>
        </div>
        <div class="carousel-item">
            <div class="slides" style="background: url('<?php echo esc_url(get_template_directory_uri()); ?>/img/vending/machine-4.jpg') left bottom no-repeat;">
            </div>
        </div>
        <div class="carousel-item">
            <div class="slides" style="background: url('<?php echo esc_url(get_template_directory_uri()); ?>/img/vending/machine-3.jpg') center center no-repeat;">
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="carousel-control-prev" href="#galleria" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#galleria" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</section>


<!-- HEALTHY PROJECT
================================================== -->
<section id="healthy-project">
    <div class="container">
        <div class="row justify-content-center">
            <h2 class="vending-title wow fadeInDown">Propuesta Comercial: El Proyecto Saludable</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <p class="azteca-paragraph wow fadeInUp">Tierra Vending Toluca es una marca registrada en 2013 del grupo <a href="../tierra-azteca.html">“Tierra Azteca”</a> la cual surge de la necesidad de las plantas industriales por proporcionar a sus empleados productos balanceados y/o saludables  a  través de máquinas vending, logrando por medio de esta estrategia  la mejora de  sus índices de sobre peso lo que hace que se pueda contar  con un factor de bienestar a los trabajadores.</p>
            </div>
            <div class="col-md-6">
                <p class="azteca-paragraph wow fadeInUp">De manera que al día de hoy, ponemos a su disposición variedad de productos con la flexibilidad de que el cliente directamente escoja las opciones que considere adecuadas en base a su necesidad nutricional y/o dietas específicas. De esta forma satisfacemos tres necesidades: la incorporación de productos equilibrados, la comunicación de los mismos en las máquinas vending, y colaborar en el seguimiento de las dietas establecidas por el servicio médico.</p>
            </div>
        </div>
    </div>
</section>


<!-- FEATURES
================================================== -->
<section id="vending-menu">
    <div class="container">
        <div class="row justify-content-center">
            <div class="card-deck">
                <div class="col-md-4">
                    <div class="card wow fadeInLeft">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/vending/card-1.jpg" alt="machine-1" class="card-img-top img-fluid">
                        <div class="card-body">
                            <h4 class="vending-lead text-center">¿Qué máquina necesitas?</h4>
                            <p class="azteca-paragraph text-center">Conoce la opción ideal para tu empresa.</p>
                            <div class="row justify-content-center">
                                <a href="maquinas-vending.html#vending-machines">
                                    <button class="btn btn-vending" type="button" name="button">Ver más</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card wow fadeInUp">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/vending/card-2.jpg" alt="machine-1" class="card-img-top img-fluid">
                        <div class="card-body">
                            <h4 class="vending-lead text-center">Productos disponibles</h4>
                            <p class="azteca-paragraph text-center">Revisa la variedad de productos que tenemos disponibles para ti.</p>
                            <div class="row justify-content-center">
                                <a href="maquinas-vending.html#vending-products">
                                    <button class="btn btn-vending" type="button" name="button">Ver más</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card wow fadeInRight">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/vending/card-3.jpg" alt="machine-1" class="card-img-top img-fluid">
                        <div class="card-body">
                            <h4 class="vending-lead text-center">Empresas participantes</h4>
                            <p class="azteca-paragraph text-center">Entérate de quiénes ya cuentan con nuestros servicios.</p>
                            <div class="row justify-content-center">
                                <a href="../index.html#customers">
                                    <button class="btn btn-vending" type="button" name="button">Ver más</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- VENDING SPECS
================================================== -->
<section id="vending-specs">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <p class="azteca-paragraph wow fadeInUp">Nuestras máquinas con control de temperatura nos da la posibilidad de ofrecer una amplia gama de productos, desde botanas hasta bebidas.</p>
                <p class="vending-lead text-center wow fadeInUp">¡Una máquina, combinaciones ilimitadas!</p>
            </div>
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


<?php get_footer(); ?>