<?php
/** 
* Template Name: Aviso de Privacidad
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


<!-- PRIVACY
================================================== -->
<section id="privacy">
    <div class="container">
        <div class="row justify-content-center">
            <header class="wow fadeInUp">
                <h1 class="azteca-title text-center">
                    Tierra Azteca<br> <span>Aviso de Privacidad</span>
                </h1>
            </header>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
                <p class="azteca-paragraph wow fadeInUp">Para Tierra Azteca  y sus subsidiarias (en adelante Tierra Azteca ) su privacidad es muy importante, entendiendo a ésta como el ámbito de la vida privada que tiene derecho a ser protegida de cualquier intromisión, por lo que por este medio  Tierra Azteca  le da a conocer las medidas que se han adoptado para salvaguardar tanto la privacidad, como la integridad, tratamiento y protección de la información correspondiente a una persona identificada o identificable (Datos Personales o Datos), todo esto en apego a la Ley Federal de Protección de Datos Personales en posesión de Particulares, publicada en el Diario Oficial de la Federación de fecha 5 de julio de 2010 (?Ley de Datos Personales?) y su respectivo reglamento publicado el 21 de diciembre de 2011.</p>
                <p class="azteca-paragraph wow fadeInUp">Éste Aviso de Privacidad tiene por objeto delimitar los alcances y condiciones generales del tratamiento sobre el uso de sus datos personales así como para mantener el control y disposición sobre dichos Datos Personales. </p>

                <h3 class="azteca-subtitle wow fadeInUp">Responsable de los Datos Personales</h3>
                <p class="azteca-paragraph wow fadeInUp">La presente Política de Privacidad aplica a Tierra Azteca con domicilio en y a cualquiera de sus subsidiarias que tengan acceso o hagan uso de la información que obtengan a través de los formatos de registro, sitios (página de internet o intranet) u otros medios que le proporcione Tierra Azteca.</p>
                <p class="azteca-paragraph wow fadeInUp">Si usted como empleado, usuario y/o visitante decide registrarse y/o proporcionar sus Datos Personales en los formatos, sitios o en otros medios administrados por Tierra Azteca, esto será entendido como aceptación del uso de dichos Datos de acuerdo con estas Políticas de Privacidad.</p>
                <p class="azteca-paragraph wow fadeInUp">Cabe señalar que los sitios de Tierra Azteca contienen enlaces a otros sitios de Internet, inclusive sitios administrados tanto por las empresas filiales, subsidiarias y afiliadas de Tierra Azteca y/o terceros ajenos a Tierra Azteca y que no se encuentran obligadas por este Aviso de Privacidad.</p>

                <h3 class="azteca-subtitle wow fadeInUp">Finalidad del Tratamiento de Datos Personales</h3>
                <p class="azteca-paragraph wow fadeInUp">Tierra Azteca podría recabar información personal con las siguientes finalidades: 
                    <ul class="fa-ul">
                      <li><i class="fa-li fa fa-dot-circle-o"></i>Para identificación y seguridad de las personas que ingresan a nuestras instalaciones y/o sitios; Para atender a clientes y/o proveedores; Cumplir con los servicios y obligaciones laborales de las empresas de Tierra Azteca. Para atender solicitudes de empleo; Dar cumplimiento a las obligaciones contraídas en acuerdos y contratos; así como informar de situaciones que les sean relativas; Dar cumplimiento con leyes, regulaciones o mandatos de autoridades; Proveer e informar sobre los productos o servicios requeridos; Para evaluación de calidad en productos y servicios; Para cumplir con nuestros procesos de comunicación y difusión externa e interna.</li>
                      <br>
                      <li><i class="fa-li fa fa-dot-circle-o"></i>Para llevar a cabo las finalidades descritas en el presente aviso de privacidad, utilizaremos datos personales de identificación, contacto, laborales, académicos y patrimoniales.</li>
                    </ul>
                </p>
                <p class="azteca-paragraph wow fadeInUp">Dicha información será proporcionada de forma voluntaria por el empleado, usuario y/o visitante.</p>
                <p class="azteca-paragraph wow fadeInUp">Tierra Azteca  generalmente no solicita información sensible de los Datos Personales, entendiendo por ésta información sobre el origen racial o étnico, estado de salud, información genética, creencias religiosas, filosóficas y morales, afiliación sindical, opiniones políticas y preferencias sexuales; pero en el caso de que para algún motivo se llegase a requerir que el empleado, usuario y/o visitante proporcione información sensible de sus Datos Personales, se solicitará el consentimiento expreso para recolectar y en su caso utilizar esa información.</p>
                <p class="azteca-paragraph wow fadeInUp">Si desea manifestar alguna negativa sobre el alcance del tratamiento de sus datos personales, puede hacernos llegar su solicitud al Departamento de Protección de Datos (Ver contacto al final del presente aviso).</p>
                <p class="azteca-paragraph wow fadeInUp">Para asegurar que la página web deTierra Azteca  está siendo bien administrada y facilitar una mejor navegación dentro de la misma, se podrán estar utilizando breves archivos de texto almacenados en el navegador del usuario (cookies) o "web beacons" imágenes electrónicas que permiten al sitio web contar el número de visitantes que han ingresado a una página en particular y acceder a ciertas Cookies para almacenar y agregar información (Web Beacons); Tierra Azteca o sus proveedores de internet podrán usar estas herramientas para rastrear información en sus sistemas e identificar categorías de visitantes por puntos como direcciones de IP, dominio, tipo de navegador y páginas visitadas. Esta información se reporta a la persona responsable de mantenimiento o programación del sitio web (Webmaster), quien la utiliza para analizar el número de visitantes de las diferentes áreas del sitio y asegurar con ello la utilidad del sitio de internet como fuente de información útil y efectiva.</p>
                <p class="azteca-paragraph wow fadeInUp">Tanto las Cookies como los Web Beacons se almacenan en el disco duro del equipo de cómputo o del dispositivo de comunicaciones electrónicas de un usuario al navegar en un sitio de internet específico, el cual permite intercambiar información de estado entre dicho sitio y el navegador del usuario. La información de estado puede revelar medios de identificación de sesión, autenticación o preferencias del usuario, así como cualquier dato almacenado por el navegador respecto al sitio de internet tal como nombres o direcciones electrónicas. La mayoría de navegadores permiten a los usuarios rechazar las Cookies. Cabe mencionar que en circunstancias específicas, el acceso puede ser denegado en ciertas partes del sitio a aquellos visitantes cuyos navegadores no permitan el uso de Cookies.</p>
                <p class="azteca-paragraph wow fadeInUp">Los Datos Personales solamente serán utilizados para propósitos limitados, por ejemplo, cuando un usuario se registra en el sitio para tener acceso a un contenido privilegiado o requiera posteriormente alguna información acerca de las áreas de interés de Tierra Azteca. </p>
                <p class="azteca-paragraph wow fadeInUp">Tierra Azteca  se asegurará que sus servicios cumplan con las leyes aplicables e implementen los procedimientos para obtener el consentimiento necesario. </p>

                <h3 class="azteca-subtitle wow fadeInUp">Transferencia de Datos</h3>
                <p class="azteca-paragraph wow fadeInUp">De acuerdo con los requisitos mencionados en el artículo 37 de la Ley de Datos Personales, Tierra Azteca  transfiere información a proveedores de servicios que administran y procesan bases de datos en su representación, esto se hace para cumplir con sus procesos, sus políticas internas y las obligaciones contractuales adquiridas por Tierra Azteca y sus subsidiarias. Tierra Azteca no comparte datos personales con subsidiarias o con terceros para propósitos secundarios o distintos a los fines originales de sus procesos.</p>
                <p class="azteca-paragraph wow fadeInUp">Cuando se considere necesario, la información personal podrá ser revelada en caso de que así lo señale alguna ley, a cualquier autoridad o tercero que la necesite para cumplir con alguna obligación o petición legal.</p>
                <p class="azteca-paragraph wow fadeInUp">Ámbito de aplicación. Los presentes Lineamientos serán de observancia obligatoria en toda la República Mexicana, en términos de la Ley Federal de Protección de Datos Personales en Posesión de los Particulares y su Reglamento.</p>

                <h3 class="azteca-subtitle wow fadeInUp">Medios para Ejercer los Derechos ARCO</h3>
                <p class="azteca-paragraph wow fadeInUp">Conforme a la Ley de Datos Personales, usted tiene el derecho de ejercer en cualquier momento sus derechos de acceso, rectificación, cancelación y oposición los (?Derechos ARCO?) directamente ante Tierra Azteca de acuerdo a lo siguiente: 
                    <ol>
                        <li><strong>Acceso:</strong> Usted podrá solicitar información sobre los Datos Personales que Tierra Azteca y sus subsidiarias conservan en su expediente. </li>
                        <li><strong>Rectificación:</strong> En caso de que alguno de los datos sea inexacto o se encuentre equivocado, usted tendrá el derecho de solicitar su rectificación. Le pedimos que considere que por su protección y beneficio, es posible que le solicitemos documentación que acredite las correcciones a los datos que desea rectificar.  </li>
                        <li><strong>Cancelación:</strong> Usted puede solicitar que se cancelen los Datos Personales que Tierra Azteca  y sus subsidiarias conserven en su expediente una vez concluidos nuestros Servicios, lo cual se hará de su conocimiento, en el entendido de que Tierra Azteca no estará obligado a cancelar los datos en los supuestos señalados en la Ley de Datos Personales.  </li>
                        <li><strong>Oposición:</strong> Usted tendrá derecho en todo momento y por causa legítima a oponerse al tratamiento de sus Datos Personales. No obstante, Tierra Azteca y sus subsidiarias no estarán obligados a suspender el tratamiento de los datos en los supuestos señalados en la Ley de Datos Personales.  </li>
                    </ol>
                </p>
                <p class="azteca-paragraph wow fadeInUp">Para el ejercicio de sus derechos ARCO es necesario identificarse y presentar personalmente la solicitud respectiva en el área de Recursos Humanos de las instalaciones de Tierra Azteca o de cualquiera de sus subsidiarias donde le proporcionarán el formato correspondiente; o bien dirigiendo su petición a contacto@tierraazteca.com.mx o vía telefónica (55) s9199417en el área de Protección de Datos. En todos los casos se tratarán las solicitudes ARCO y sus respuestas de acuerdo con los requisitos legales aplicables. Se tienen 20 días hábiles para responder a cada solicitud.</p>
                <p class="azteca-paragraph wow fadeInUp">En todo momento, usted podrá revocar el consentimiento que nos ha otorgado para el tratamiento de sus datos personales, a fin de que dejemos de hacer uso de los mismos. Para ello, es necesario que presente su petición en contacto@tierraazteca.com.mx o vía telefónica (55) 29199417en el área de Protección de Datos.</p>
                <p class="azteca-paragraph wow fadeInUp">Tierra Azteca ha implementado estándares comerciales razonables de tecnología y seguridad operacional para proteger toda la información proporcionada por sus empleados, usuarios y/o visitantes en el caso de pérdida, mal uso, alteración o destrucción.</p>
                <p class="azteca-paragraph wow fadeInUp">Tierra Azteca se reserva el derecho de modificar o adicionar estas políticas de privacidad en cualquier momento y por cualquier causa. El aviso de privacidad vigente estará disponible al público a través de su publicación en nuestras instalaciones o por medio de nuestra página de Internet <a href="http://www.kuo.com.mx">www.kuo.com.mx</a></p>
                <p class="azteca-paragraph wow fadeInUp">Nada de lo aquí contenido crea o intenta crear un contrato o acuerdo entre Tierra Azteca y los empleados, usuarios y/o visitantes que visiten o que otorguen información que los identifique de cualquier forma.</p>
                <p class="azteca-paragraph wow fadeInUp">Tierra Azteca entiende la importancia de proteger la privacidad de los menores en el mundo en línea. Cualquier sitio, regulado por este aviso de privacidad, no está diseñado ni está intencionalmente dirigido a menores, por tanto es responsabilidad de sus padres o tutores vigilar la información que se pueda ingresar en cada sitio. No es política de Tierra Azteca recolectar o mantener información de menores. </p>
                <p class="azteca-paragraph wow fadeInUp">Si usted tuviera algún comentario, requerimiento, aclaración o duda respecto a estas Políticas de Privacidad o considera que su petición no ha sido resuelta, tendremos mucho gusto en atenderle en:</p>
                <p class="azteca-paragraph wow fadeInUp">
                    <strong>Departamento de Protección de Datos</strong><br>
                    Correo electrónico: <a href="mailto:contacto@tierra-azteca.com">contacto@tierra-azteca.com</a><br>
                    Teléfono: <a href="tel:5529199417">(55) 2919 9417</a>
                </p>

                <blockquote class="blockquote text-right">
                    <p class="m-b-0">Fecha de última actualización</p>
                    <p class="blockquote-footer">11 de Noviembre del 2018</p>
                </blockquote>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>