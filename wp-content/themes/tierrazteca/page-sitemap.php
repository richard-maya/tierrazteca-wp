<?php
/** 
* Template Name: Sitemap
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


<!-- SITEMAP
================================================== -->
<section id="sitemap-page">
    <div class="container">
        <div class="row justify-content-center">
            <header class="wow fadeInUp">
                <h1 class="azteca-title text-center">
                    Tierra Azteca<br> <span>Mapa del Sitio</span>
                </h1>
            </header>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-4">
                <p><strong>Grupo Tierra Azteca</strong></p>
                <ul class="fa-ul">
                    <li>
                        <i class="fa-li fa fa-dot-circle-o"></i><a href="<?php echo esc_url( home_url() ); ?>">Inicio</a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-dot-circle-o"></i><a href="aviso-legal">Aviso Legal</a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-dot-circle-o"></i><a href="aviso-de-privacidad">Aviso de Privacidad</a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-dot-circle-o"></i><a href="condiciones-de-uso">Condiciones de Uso</a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-dot-circle-o"></i><a href="contacto">Contacto</a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-dot-circle-o"></i><a href="sitemap">Mapa del Sitio</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <p><strong>Botanas Tierra Azteca</strong></p>
                <ul class="fa-ul">
                    <li>
                        <i class="fa-li fa fa-dot-circle-o"></i><a href="botanas-azteca">Botanas Tierra Azteca</a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-dot-circle-o"></i><a href="botanas-azteca/tips-de-alimentacion">Tips de Alimentación</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <p><strong>Máquinas Vending</strong></p>
                <ul class="fa-ul">
                    <li>
                        <i class="fa-li fa fa-dot-circle-o"></i><a href="maquinas-vending">Tierra Vending</a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-dot-circle-o"></i><a href="maquinas-vending/maquinas-y-productos">Máquinas y Productos</a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-dot-circle-o"></i><a href="maquinas-vending/servicio-a-socios">Servicios a Socios</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>