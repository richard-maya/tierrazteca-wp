<?php
/** 
* Template Name: Condiciones de Uso
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


<!-- USAGE
================================================== -->
<section id="usage">
    <div class="container">
        <div class="row justify-content-center">
            <header class="wow fadeInUp">
                <h1 class="azteca-title text-center">
                    Tierra Azteca<br> <span>Condiciones de Uso</span>
                </h1>
            </header>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
                <p class="azteca-paragraph wow fadeInUp">El acceso y la utilización de este Sitio o Portal denominado supone la expresa aceptación de usted como usuario a los presentes Términos y Condiciones de Uso y Privacidad.</p>
                <p class="azteca-paragraph wow fadeInUp"><b style="color:#F4941B;">TIERRA AZTECA</b> tiene el derecho a limitar el acceso o utilización total o parcialmente, así como modificar en cualquier momento los Servicios y Contenidos.</p>

                <h3 class="azteca-subtitle wow fadeInUp">Propiedad Intelectual</h3>
                <p class="azteca-paragraph wow fadeInUp">Todos los derechos reservados por TIERRA AZTECA. El contenido de este portal de Internet (incluyendo de manera enunciativa mas no limitativa: texto, imágenes, gráficas, archivos con sonido, animación, videos y sus adaptaciones en el sitio de Internet de TIERRA AZTECA ) está protegido con derechos de propiedad intelectual. Estos objetos no deberán ser copiados para uso comercial o de distribución, ni deberán ser modificados o colocados en otros sitios. Parte del contenido de nuestras páginas de Internet puede incluir materiales cuya propiedad intelectual pertenezca a proveedores de TIERRA AZTECA.</p>
                <p class="azteca-paragraph wow fadeInUp">TIERRA AZTECA autoriza a sus usuarios a descargar ("download") todo aquel material contenido en este sitio de Internet susceptible de serlo para uso estrictamente personal. Cualquier reproducción total o parcial así como cualquier intento de realizar o la realización efectiva de adiciones o en general de cualesquiera alteraciones al contenido de este sitio, sin la autorización previa y por escrito de TIERRA AZTECA  queda prohibida y será sancionada en los términos que determinen las leyes en vigor en los Estados Unidos Mexicanos.</p>

                <h3 class="azteca-subtitle wow fadeInUp">Propiedad Industrial</h3>
                <p class="azteca-paragraph wow fadeInUp">Los derechos de propiedad industrial de TIERRA AZTECA , así como los Servicios y Contenidos presentados, signos distintivos y dominios están protegidos por la legislación vigente, y son propiedad exclusiva de TIERRA AZTECA  sus subsidiarias y/ o afiliadas ( TIERRA AZTECA BOTANAS Y TIERRA VENDING) . El usuario reconoce y acepta que no adquiere derecho alguno de propiedad industrial por el simple acceso al Portal de  TIERRA AZTECA  y en ningún momento dicho uso o acceso será considerado como una autorización, consentimiento o licencia para servirse de los Servicios y Contenidos con fines distintos a los que se contemplan en los presentes Términos y Condiciones de Uso y Privacidad.</p>
                <p class="azteca-paragraph wow fadeInUp">Las marcas citadas en el sitio, los logotipos y personajes se encuentran legalmente registradas por TIERRA AZTECA  y las utiliza para identificar y comercializar sus productos en México en las localidades establecidas y en cualquier otra ubicación que se requiera el consumo y uso de la marca. Se prohíbe expresamente al usuario modificar, alterar o suprimir, ya sea en forma total o parcial, las marcas, nombres y avisos comerciales, señas, anuncios, logotipos o en general cualquier indicación que se refiera a la propiedad de la información contenida en el Sitio. Cualquier infracción a las mismas será castigada conforme a las Leyes de la materia.</p>

                <h3 class="azteca-subtitle wow fadeInUp">Propiedad Industrial e Intelectual de Terceros</h3>
                <p class="azteca-paragraph wow fadeInUp">Los derechos de propiedad industrial de los Servicios y Contenidos de este Portal referidos a terceros, signos distintivos y dominios, en su caso, están protegidos por la legislación vigente y son propiedad exclusiva de dichos terceros. El usuario reconoce y acepta que no adquiere derecho alguno de propiedad industrial por el simple acceso al sitio, a los vínculos de acceso de los terceros o por el uso de dichos Servicios y Contenidos, y en ningún momento el uso o acceso será considerado como una autorización, consentimiento o licencia de cualquier tercero para utilizar los Servicios y Contenidos con fines distintos a los que se contemplan en los presentes Términos y Condiciones de Uso y Privacidad, salvo que el tercero así lo establezca expresamente.</p>

                <h3 class="azteca-subtitle wow fadeInUp">Uso</h3>
                <p class="azteca-paragraph wow fadeInUp">El uso y aprovechamiento de los Servicios y Contenidos del portal de TIERRA AZTECA , es exclusiva responsabilidad del usuario, quien en todo caso deberá servirse de ellos acorde a las funcionalidades del propio sitio, cumpliendo con lo establecido en la legislación aplicable y en las Condiciones Particulares que se establezcan.</p>

                <h3 class="azteca-subtitle wow fadeInUp">Precios (para el caso de ventas)</h3>
                <p class="azteca-paragraph wow fadeInUp">Todos los precios están basados en el Precio de Venta Sugerido al Público por pieza, LAB ( Libre a bordo) Centros de Servicio o Plantas Productivas en pesos Mexicanos, Dólares Americanos y Euros según aplique al producto y no incluyen impuestos tales como el I.V.A (Impuesto al Valor Agregado) y otros aplicables para cada región.</p>
                <p class="azteca-paragraph wow fadeInUp">Todos los precios y promociones aquí mostrados están sujetos a cambio sin previo aviso y sin obligación alguna para TIERRA AZTECA  Prohibiciones.</p>
                <p class="azteca-paragraph wow fadeInUp">Al usuario le está prohibido establecer vínculos de acceso, "hiperligas" o cualquier otra forma de enlace de y hacia TIERRA AZTECA , así como el colocar o utilizar los Servicios y Contenidos en sitios o páginas ajenas a TIERRA AZTECA o comercializarla de cualquier forma servirse de los Servicios y Contenidos sin la autorización previa y por escrito de TIERRA AZTECA, sus filiales, afiliadas y/o subsidiarias o de terceros, según sea el caso. Asimismo, al usuario le está prohibido limitar o impedir por cualquier medio a cualquier otro usuario el uso de este Portal.</p>

                <h3 class="azteca-subtitle wow fadeInUp">Quejas y Reclamaciones</h3>
                <p class="azteca-paragraph wow fadeInUp">En caso de que EL USUARIO tenga alguna reclamación o aclaración derivada de información o transacciones  celebradas en este portal o tuviere dudas acerca de nuestros productos, lo invitamos para que mande mensaje directo.</p>

                <h3 class="azteca-subtitle wow fadeInUp">Liberación de Responsabilidad</h3>
                <p class="azteca-paragraph wow fadeInUp">TIERRA AZTECA no asume ninguna responsabilidad por el funcionamiento de este sitio de Internet o por cualesquiera daños y/o perjuicios que pudieran derivarse de su uso, incluyendo de manera enunciativa mas no limitativa, por virus, la presencia de elementos operados y mostrados en los sitios de Internet por cualquier tercero distinto a TIERRA AZTECA o la presencia de elementos publicitarios que pudieran ofender al Usuario.</p>
                <p class="azteca-paragraph wow fadeInUp">TIERRA AZTECA tiene el derecho de modificar en cualquier momento los presentes Términos y Condiciones de Uso y Privacidad y las Condiciones Particulares que le correspondan. En consecuencia, el usuario deberá leer y entender los mismos cada vez que pretenda utilizar este Portal.</p>

                <h3 class="azteca-subtitle wow fadeInUp">Leyes Aplicables y Jurisdicción</h3>
                <p class="azteca-paragraph wow fadeInUp">Para la interpretación, cumplimiento y ejecución de los presentes Términos y Condiciones de Uso y Privacidad y las Condiciones Particulares que correspondan, las partes están de acuerdo en que serán aplicables las Leyes federales de los Estados Unidos Mexicanos y competentes los tribunales de la Ciudad de México, Distrito Federal, renunciando expresamente a cualquier otro fuero o jurisdicción que pudiera corresponderles en razón de sus domicilios presentes o futuros o por cualquier otra causa. </p>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>