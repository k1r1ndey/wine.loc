<div id="content" class="container">
            <?php
//            echo "get_template_directory() ===". get_template_directory()."<br>";
//            echo "get_template_directory_uri() ===". get_template_directory_uri();
            ?>
           <nav class="navbar navbar-expand-lg navbar-dark bg-dark">-->
-               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="--><?php //gation', 'theme-textdomain' ); ?><!--">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar-content"><?php
                    wp_nav_menu( array(
                        'theme_location' => 'menu-1', // Defined when registering the menu
                        'menu_id'        => 'primary-menu',
                        'container'      => false,
                        'depth'          => 2,
                        'menu_class'     => 'navbar-nav ml-auto',
                        'walker'         => new Bootstrap_NavWalker(), // This controls the display of the Bootstrap Navbar
                        'fallback_cb'    => 'Bootstrap_NavWalker::fallback', // For menu fallback
                    ) );
                    ?>
                </div>
            </nav>
        </div>