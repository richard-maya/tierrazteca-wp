<!-- FOOTER
================================================== -->
<footer id="footer">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-10 offset-1 col-md-6 offset-md-0 wow fadeInUp">
                <div class="row justify-content-center">
                    <div class="col-3 d-none d-md-block">
                        <img src="" class="img-fluid" alt="" id="chat-image">
                    </div>
                    <div class="col-9">
                        <h5>Tierra Azteca - Contacto</h5>
                        <h6>Enlace comercial y ventas directas</h6>
                        <p class="azteca-footer">Tel: <a href="tel:55-2919-9417">(52) 55 2919-9417</a> <br>
                            E-mail: <a href="mailto:contacto@tierra-azteca.com">contacto@tierra-azteca.com</a><br>
                            Toluca y Cd. de México
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-10 offset-1 col-md-6 offset-md-0">
                <p class="text-center wow fadeInUp">Tierra Azteca Botanas / Tierra Azteca Vending <br> <b class="green">Empresas
                        del Grupo Tierra Azteca</b></p>
            </div>
        </div>
        <!-- Site Map -->
        <div class="row justify-content-center">
            <div class="col-md-4">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <p class="text-xs-center text-md-left wow fadeInUp">Tierra Azteca</p>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link azteca-footer text-xs-center text-md-left wow fadeInUp" href="<?php echo esc_url( home_url() ); ?>">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link azteca-footer text-xs-center text-md-left wow fadeInUp" href="botanas-azteca">Productos
                            Tierra Azteca</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link azteca-footer text-xs-center text-md-left wow fadeInUp" href="maquinas-vending">Máquinas
                            Vending</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link azteca-footer text-xs-center text-md-left wow fadeInUp" href="contacto">Contacto</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <p class="text-xs-center text-md-left wow fadeInUp">Legal</p>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link azteca-footer text-xs-center text-md-left wow fadeInUp" href="aviso-legal">Aviso
                            Legal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link azteca-footer text-xs-center text-md-left wow fadeInUp" href="condiciones-de-uso">Condiciones
                            de Uso</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link azteca-footer text-xs-center text-md-left wow fadeInUp" href="aviso-de-privacidad">Aviso
                            de Privacidad</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link azteca-footer text-xs-center text-md-left wow fadeInUp" href="sitemap">Mapa
                            del Sitio</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <p class="text-xs-center text-md-left wow fadeInUp">Redes Sociales</p>
                    </li>
                    <li class="nav-item">
                        <a href="#" target="_blank" class="footer-social-link">
                            <i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>
                        </a>
                        <a href="#" target="_blank" class="footer-social-link">
                            <i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i>
                        </a>
                        <a href="#" target="_blank" class="footer-social-link">
                            <i class="fa fa-youtube-square fa-2x" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row justify-content-center wow fadeInUp">
            <p class="text-center" id="copyright">&copy;
                <?php echo date('Y'); ?> TIERRA AZTECA. Todos los derechos reservados.</p>
        </div>
        <div class="row justify-content-center wow fadeInUp">
            <p class="text-center" id="copyright" style="margin-top: 0px !important; padding-top: 0px !important;">Desarrollado por <a href="https://iconica.mx"
                    target="_blank" rel="author"><strong>Iconica Studio.</strong></a> &nbsp;<i
                    class="fa fa-desktop fg-lg"></i>&nbsp; ¿Necesitas una página web? &nbsp;<a href="https://iconica.mx"
                    target="_blank" rel="author"><strong>¡Contáctanos!</strong></a><a href="https://iconica.mx" rel="author"
                    target="_blank" style="display: none; visibility: hidden;">agencia diseño toluca metepec, diseño
                    logotipos toluca metepec, diseño páginas web toluca metepec, agencia de marketing digital</a></p>
        </div>
    </div>
</footer>
<div id="anchorTags"></div>

<script type="text/javascript">
var link = document.location.pathname;
var wow = new WOW(
  {
    boxClass:     'wow',
    animateClass: 'animated',
    offset:       50,
    mobile:       false,
    live:         true,
    callback:     function(box) {
    },
    scrollContainer: null
  }
);
// wow.init();
$(document).ready(function () {
    if (link.includes("maquinas-vending")) {
        document.getElementById("footer").classList.add("vending-footer");
        document.getElementById("chat-image").src = "<?php echo esc_url(get_template_directory_uri()); ?>/gph/chat-vending.png";
        $('ul#menu-main-menu li ul.dropdown-menu').css("background-color", "#79E66F");
    } else {
        document.getElementById("chat-image").src = "<?php echo esc_url(get_template_directory_uri()); ?>/gph/chat.png";
        $('ul#menu-main-menu li ul.dropdown-menu').css("background-color", "#F4941B");
    }
});
</script>

<?php wp_footer(); ?>

</body>
</html>