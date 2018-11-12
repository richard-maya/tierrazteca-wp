<?php
/** 
* Template Name: Aviso Legal
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


<!-- LEGAL
================================================== -->
<section id="legal">
    <div class="container">
        <div class="row justify-content-center">
            <header class="wow fadeInUp">
                <h1 class="azteca-title text-center">
                    Tierra Azteca<br> <span>Aviso Legal</span>
                </h1>
            </header>
        </div>
        <div class="row justify-content-center">
            <p class="col-12 col-md-10 azteca-paragraph wow fadeInUp">Esta página ha sido desarrollada por <a href="https://iconica.mx" target="_blank" rel="author">Iconica Studio</a> <a href="https://iconica.mx" style="visibility:hidden; display:none;" target="_blank" rel="author">agencia diseño toluca metepec, diseño logotipos toluca metepec, diseño páginas web toluca metepec, agencia de marketing digital</a> a nombre de Tierra Azteca, por lo cual  no se  garantiza la exactitud de la información (principalmente precios o productos ofrecidos) que se encuentra en esta página ya que esta, está en constante actualización de acuerdo a las disposiciones determinadas por la parte comercial y operativa de Tierra Azteca.</p>
            <p class="col-12 col-md-10 azteca-paragraph wow fadeInUp">Todas las imágenes utilizadas para la ilustración de la página tienen las autorizaciones correspondientes y/o licencias de compra por lo cual se prohíbe  su reproducción parcial o total.</p>
        </div>
        <div class="row justify-content-center">
            <p class="col-12 col-md-6 azteca-paragraph wow fadeInUp">Bajo ninguna circunstancia Tierra Azteca  se hará responsable del uso ilegal de imágenes para la promoción y/o publicidad de los mismos productos bajo otra razón social. <br> <br>
            Cualquier comentario sobre expectativas es válido únicamente en mensaje y/o llamada telefónica realizado ( o)  al medio de contacto autorizado.</p>
            <div class="col-12 col-md-4">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/about/legal.jpg" alt="legal" class="img-fluid wow fadeIn rounded">
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>