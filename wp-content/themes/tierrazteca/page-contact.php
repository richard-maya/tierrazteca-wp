<?php
/** 
* Template Name: Contact
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
<section id="contact-heading" class="parallax-window d-flex align-items-center wow fadeIn">
    <div class="container">
        <div class="row">
            <header class="wow fadeInUp">
                <h1 class="grupoa-heading text-center wow">
                    <span class="azteca-heading-white">Tierra Azteca</span> <br> Contacto
                </h1>
            </header>
        </div>
    </div>
</section>


<!-- BLUE SLOGAN
================================================== -->
<section id="slogan">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <h3 class="azteca-subtitle wow fadeInUp font-italic">Productos saludables de alta calidad a precios competitivos</h3>
        </div>
    </div>
</section>


<!-- PROCESS
================================================== -->
<section id="process">
    <div class="container">
        <div class="row justify-content-center">
            <h2 class="azteca-title text-center wow fadeInDown">¿Cómo lo hacemos? (Tierra Azteca Botanas)</h2>
        </div>
    </div>
    <div class="container">
        <div class="row wow fadeInUp">

            <!-- Call -->
            <div class="col-md-3 text-xs-center">
                <div class="card">
                    <center>
                        <img class="card-img-top" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/index-features/call-azteca.png" alt="freepik-call-answer-vector">
                    </center>
                    <div class="card-block">
                        <p class="card-text">Usted nos llama. Un ejecutivo lo contacta.</p>
                    </div>
                </div>
            </div>

            <!-- Brief -->
            <div class="col-md-3 text-xs-center">
                <div class="card">
                    <center>
                        <img class="card-img-top" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/index-features/select-azteca.png" alt="freepik-specialist-user-vector">
                    </center>
                    <div class="card-block">
                        <p class="card-text">Elige el tipo de botana que necesitas y la cantidad solicitada.</p>
                    </div>
                </div>
            </div>

            <!-- Deal -->
            <div class="col-md-3 text-xs-center">
                <div class="card">
                    <center>
                        <img class="card-img-top" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/index-features/price-azteca.png" alt="freepik-contract-vector">
                    </center>
                    <div class="card-block">
                        <p class="card-text">Elige el tipo de pago y entrega.</p>
                    </div>
                </div>
            </div>

            <!-- Deal -->
            <div class="col-md-3 text-xs-center">
                <div class="card">
                    <center>
                        <img class="card-img-top" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/index-features/truck-azteca.png" alt="freepik-contract-vector">
                    </center>
                    <div class="card-block">
                        <p class="card-text">Recibe las botanas en el lugar designado.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <div class="container">
        <div class="row justify-content-center">
            <h2 class="vending-title text-center wow fadeInDown">¿Cómo lo hacemos? (Tierra Vending)</h2>
        </div>
    </div>
    <div class="container">
        <div class="row wow fadeInUp">

            <!-- Call -->
            <div class="col-md-4 text-xs-center">
                <div class="card">
                    <center>
                        <img class="card-img-top" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/index-features/call-answer.png" alt="freepik-call-answer-vector">
                    </center>
                    <div class="card-block">
                        <p class="card-text">Usted nos llama.</p>
                    </div>
                </div>
            </div>

            <!-- Brief -->
            <div class="col-md-4 text-xs-center">
                <div class="card">
                    <center>
                        <img class="card-img-top" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/index-features/specialist-user.png" alt="freepik-specialist-user-vector">
                    </center>
                    <div class="card-block">
                        <p class="card-text">Uno de nuestros representantes lo visitará SIN NINGÚN COMPROMISO y le orientará acerca de la solución Vending ideal para su negocio.</p>
                    </div>
                </div>
            </div>

            <!-- Deal -->
            <div class="col-md-4 text-xs-center">
                <div class="card">
                    <center>
                        <img class="card-img-top" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/index-features/contract.png" alt="freepik-contract-vector">
                    </center>
                    <div class="card-block">
                        <p class="card-text">Se firma el respectivo contrato y listo, usted empezará a gozar de los beneficios de éste sector comercial.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- CONTACT FORM & MAP
================================================== -->
<section id="contacto">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 offset-md-3">
                <h2 class="vending-title d-flex justify-content-center wow fadeInDown" id="azteca-contact-form">Contáctanos</h2>

                <form class="formoid-solid-blue" method="post">
                    <div class="row">

                        <!-- Nombre -->
                        <div class="form-group col-6 wow fadeInUp">
                            <label for="nombre">Nombre *</label>
                            <input placeholder="Nombre" type="text" name="name[first]" required="required" class="form-control" id="nombre">
                        </div>

                        <!-- Apellido -->
                        <div class="form-group col-6 wow fadeInUp">
                            <label for="apellido">Apellido *</label>
                            <input placeholder="Apellido" type="text" name="name[last]" required="required" class="form-control" id="apellido">
                        </div>
                    </div>

                    <div class="row">

                        <!-- Teléfono -->
                        <div class="form-group col-6 wow fadeInUp">
                            <label for="telefono">Teléfono *</label>
                            <input type="tel" class="form-control" maxlength="24" name="phone" required="required" placeholder="Teléfono">
                        </div>

                        <!-- Empresa -->
                        <div class="form-group col-6 wow fadeInUp">
                            <label for="empresa">Empresa *</label>
                            <input type="text" class="form-control" name="input" required="required" placeholder="Empresa">
                        </div>
                    </div>

                    <!-- Correo Electrónico -->
                    <div class="row">
                        <div class="form-group col-12 wow fadeInUp">
                            <label for="email">Correo Electrónico</label>
                            <input type="email" class="form-control" name="email" placeholder="Correo Electrónico">
                        </div>
                    </div>

                    <!-- Mensaje -->
                    <div class="row">
                        <div class="form-group col-12 wow fadeInUp">
                            <label for="textarea">Mensaje *</label>
                            <textarea name="textarea" class="form-control" id="message" cols="20" rows="5" required="required" placeholder="Mensaje"></textarea>
                        </div>
                    </div>

                    <div class="row d-flex justify-content-center wow fadeInUp">
                        <button class="btn btn-vending-outline" type="submit">Enviar Mensaje</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>


<script>
$('.parallax-window').parallax({
    imageSrc: '<?php echo esc_url(get_template_directory_uri()); ?>/img/headings/contact-heading.jpg',
    positionY: 'top'
});
</script>


<?php get_footer(); ?>