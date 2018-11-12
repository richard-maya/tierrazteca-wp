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

                <div id="mc_embed_signup">
                    <form action="https://iconica.us17.list-manage.com/subscribe/post?u=4f4bdc97c1da5cc68289c2430&amp;id=49f3fa257e" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" novalidate>
                        <div id="mc_embed_signup_scroll">
                            <div class="row">
                                <!-- Nombre -->
                                <div class="mc-field-group form-group col-6 wow fadeInUp">
                                    <label for="mce-FNAME">Nombre <span class="asterisk">*</span></label>
                                    <input placeholder="" type="text" value="" name="FNAME" class="form-control required" id="mce-FNAME">
                                </div>
        
                                <!-- Apellido -->
                                <div class="mc-field-group form-group col-6 wow fadeInUp">
                                    <label for="mce-LNAME">Apellido <span class="asterisk">*</span></label>
                                    <input placeholder="" type="text" value="" name="LNAME" class="form-control required" id="mce-LNAME">
                                </div>
                            </div>
        
                            <div class="row">
                                <!-- Teléfono -->
                                <div class="mc-field-group form-group col-6 wow fadeInUp">
                                    <label for="mce-PHONE">Teléfono <span class="asterisk">*</span></label>
                                    <input type="tel" class="form-control required" maxlength="24" name="PHONE" placeholder="" value="" id="mce-PHONE">
                                </div>
        
                                <!-- Empresa -->
                                <div class="mc-field-group form-group col-6 wow fadeInUp">
                                    <label for="mce-COMPANY">Empresa <span class="asterisk">*</span></label>
                                    <input type="text" class="form-control required" value="" name="COMPANY" placeholder="" id="mce-COMPANY">
                                </div>
                            </div>
        
                            <!-- Correo Electrónico -->
                            <div class="row">
                                <div class="mc-field-group form-group col-12 wow fadeInUp">
                                    <label for="mce-EMAIL">Correo Electrónico <span class="asterisk">*</span></label>
                                    <input type="email" class="form-control required" value="" name="EMAIL" placeholder="" id="mce-EMAIL">
                                </div>
                            </div>
        
                            <!-- Mensaje -->
                            <div class="row">
                                <div class="mc-field-group form-group col-12 wow fadeInUp">
                                    <label for="mce-MESSAGE">Mensaje <span class="asterisk">*</span></label>
                                    <textarea value="" name="MESSAGE" class="form-control required" id="message" cols="20" rows="5" placeholder="" id="mce-MESSAGE"></textarea>
                                </div>
                            </div>

                            <div id="mce-responses" class="clear">
                                <div class="response" id="mce-error-response" style="display:none"></div>
                                <div class="response" id="mce-success-response" style="display:none"></div>
                            </div>
                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_4f4bdc97c1da5cc68289c2430_49f3fa257e" tabindex="-1" value=""></div>
        
                            <div class="row d-flex justify-content-center wow fadeInUp">
                                <button class="btn btn-vending-outline" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" type="submit">Enviar Mensaje</button>
                            </div>
                        </div>
                    </form>
                </div>
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