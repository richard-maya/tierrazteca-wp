<?php
/** 
* Template Name: Contacto Confirmación
*/
get_header(); ?>


<!-- NAV BAR
================================================== -->
<section id="main-logo" class="d-flex align-items-end hidden-sm-down">
    <div class="container">
        <div class="row">
            <div class="col-md-2 d-flex align-items-center">
                <a href="<?php echo esc_url( home_url() ); ?>">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/gph/grupo-azteca.png" alt="" class="img-fluid">
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

<nav class="navbar navbar-toggleable-md bg-faded sticky-top bg-primary navbar-inverse hidden-md-up" style="background-color:#F4941B !important;">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
        data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
        aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/gph/grupo-azteca.png" width="auto" height="50" class="d-inline-block align-top" alt="">
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


<!-- CONFIRMATION
================================================== -->
<section id="legal">
    <div class="container">
        <div class="row justify-content-center">
            <header class="wow fadeInUp">
                <h1 class="azteca-title text-center">
                    Tierra Azteca<br> <span>Confirmación</span>
                </h1>
            </header>
        </div>
        <div class="row justify-content-center d-flex align-items-center mb-4">
            <div class="col-12 col-md-6 text-center">
                <p class="azteca-paragraph wow fadeInUp"><strong>Muchas gracias por comunicarte con nosotros, tu mensaje ha sido enviado con éxito.</strong> <br><br>En breve te responderemos.</p>
                <a href="<?php echo esc_url( home_url() ); ?>">
                    <button class="btn btn-primary wow fadeInDown">Volver al Inicio</button>
                </a>
            </div>
            <div class="col-12 col-md-4">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/about/legal.jpg" alt="legal" class="img-fluid wow fadeIn rounded">
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>