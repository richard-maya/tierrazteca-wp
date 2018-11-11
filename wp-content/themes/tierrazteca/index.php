<?php get_header(); ?>


<!-- NAV BAR
================================================== -->
<section id="green-logo" class="d-flex align-items-end hidden-sm-down">
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

<nav class="navbar navbar-toggleable-md bg-faded sticky-top bg-primary navbar-inverse hidden-md-up" style="background-color:#79E66F !important;">
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


<main>
</main>

<?php get_footer(); ?>
