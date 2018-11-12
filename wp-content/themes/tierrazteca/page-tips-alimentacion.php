<?php
/** 
* Template Name: Tips de Alimentación
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


<!-- HEADING
================================================== -->
<section id="tips-heading" class="parallax-window d-flex align-items-center wow fadeIn">
    <div class="container">
        <div class="row">
            <header class="wow fadeInUp">
                <h1 class="azteca-heading text-center">
                    <span class="azteca-heading-white">Tierra Azteca</span> <br> Tips de Botanas Saludables
                </h1>
            </header>
        </div>
    </div>
</section>


<!-- DESCRIPTION
================================================== -->
<section class="tips-alimentacion">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <h2 class="azteca-title wow fadeInDown">Propiedades de los cacahuates</h2>
        </div>
        <div class="row d-flex align-items-center">
            <div class="col-12 col-md-7 offset-md-0">
                <p class="azteca-paragraph text-justify wow fadeInLeft">Considerado usualmente como una botana, el cacahuate suele reducirse a un snack más o menos saludable. Pero la verdad es que su lugar cultural no le hace justicia cuando conocemos sus verdaderas propiedades.</p>
                <p class="azteca-paragraph text-justify wow fadeInLeft">Desde tiempos de los aztecas ya se conocían los integrales efectos del cacahuate, y por ello se traía desde sudamérica, en una especia de comercio transnacional que ya había iniciado esta civilización hace 500 años (de hecho su nombre proviene del náhuatl tlacacáhuatl, la lengua hablada por los aztecas, y esta palabra significa cacao de la tierra, pues crece subterráneo).</p>
            </div>
            <div class="col-12 col-md-5 offset-md-0">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/products/corn.jpg" alt="maices-tierra-azteca" class="img-fluid wow fadeInRight">
            </div>
        </div>
        <div class="row d-flex align-items-center">
            <div class="col-12 col-md-7">
                <p class="azteca-paragraph text-justify wow fadeInLeft">El cacahuate, esta deliciosa semilla de la familia de las leguminosas, es sorprendente porque contiene reunidas casi todas las propiedades que tu organismo necesita (y que generalmente se encuentran sólo en un cúmulo variado de alimentos). Encontrarás en esta semilla (también conocida como maní) vitaminas, minerales, proteínas, antioxidantes, fibra, calcio y ácidos grasos benéficos.</p>
            </div>
            <div class="col-12 col-md-5">
                <p class="azteca-paragraph text-justify wow fadeInRight">Por su contenido inigualable de nutrientes benéficos, todo lo siguiente hará por ti:
                    <ul class="fa-ul wow fadeInUp">
                        <li><i class="fa-li fa fa-caret-right"></i>Es anticancerígeno</li>
                        <li><i class="fa-li fa fa-caret-right"></i>Es antioxidante</li>
                        <li><i class="fa-li fa fa-caret-right"></i>Reduce las enfermedades cardiacas</li>
                        <li><i class="fa-li fa fa-caret-right"></i>Reduce el colesterol</li>
                        <li><i class="fa-li fa fa-caret-right"></i>Fortalece tu mente</li>
                    </ul>
                </p>
            </div>
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
$('.parallax-window').parallax({
    imageSrc: '<?php echo esc_url(get_template_directory_uri()); ?>/img/headings/tips-heading.jpg',
    positionY: 'bottom'
});
</script>


<?php get_footer(); ?>