<div id="main_navbar" class="navbar navbar-expand-lg fixed-top bg-secondary">
    <!-- you can remove this container wrapper if you want things full width -->
    <div class="container ">

        <div class="logo">
            <a href="<?php echo get_home_url(); ?>" class="navbar-brand align-middle">
                <img title="logo bns"  alt="bns logo" class="img-fluid"  src='<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png'>
            </a>

        </div>
        <div class="hamburger">
            <button class="navbar-toggler headerNav" type="button" data-toggle="collapse" data-target="#headerNav" aria-controls="headerNav" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'best-reloaded' ); ?>">
                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/menu.png';?>">
            </button>
        </div>

        <nav class="collapse navbar-collapse  align-self-center align-self-xl-center pt-3" id="" role="navigation" aria-label="Main Menu">
            <span class="sr-only "><?php esc_html_e( 'Main Menu', 'froy' ); ?></span>
            <?php
            wp_nav_menu( array(
                'depth' => 2,
                'container' => false,
                'menu_class' => 'navbar-nav mr-auto',
                'theme_location'    => "header-menu", // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
                'walker' => new Walker_Nav_Menu(),
            ) );
            ?>
        </nav>
        <button class="d-block d-md-none d-lg-none rounded-circle d-xl-none  border-0  openmenu facebookmenu navbar-toggler" type="button" data-toggle="collapse" data-target="#stoiximatikes">    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/poker-chip.png';?>"></button>
    </div>

</div>