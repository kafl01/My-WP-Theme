<?php wp_footer(); ?>

<nav class="navbar navbar-expand-lg navbar-light color-foot-nav">
    <div class="container-md">
        <div class="container py-5">
            <div class="row align-items-start">
                <div class="col-md-6 px-2">
                    <div class="main-nav">
                        <h3>Mockup Company</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor corrupti incidunt accusamus voluptas commodi nostrum.</p>
                        <?php wp_nav_menu(
                            array(
                                'menu' => 'social',
                                'container' => '',
                                'theme_location' => 'social',
                                'items_wrap' => '<ul id="my-nav" class="navbar-nav me-auto mb-2 mb-lg-0">%3$s</ul>'
                            )
                        ); ?>
                    </div>
                </div>
                <div class="col-md-3 px-2">
                    <div class="main-nav">
                        <h3 class="ps-1">Main menu</h3>
                        <?php wp_nav_menu(
                            array(
                                'menu' => 'primary',
                                'container' => '',
                                'theme_location' => 'primary',
                                'items_wrap' => '<ul id="my-nav" class="ps-1">%3$s</ul>'
                            )
                        ); ?>
                    </div>
                </div>
                <div class="col-md-3 px-2">
                    <div class="main-nav">
                        <h3 class="ps-1">Extra menu</h3>
                        <?php wp_nav_menu(
                            array(
                                'menu' => 'extra-menu',
                                'container' => '',
                                'theme_location' => 'extra-menu',
                                'items_wrap' => '<ul id="my-nav" class="ps-1">%3$s</ul>'
                            )
                        ); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <div>
            <p>
                &copy; 2022 Travels. All Rights Reserved.
            </p>
        </div>

        <div class="main-nav">
            <?php wp_nav_menu(
                array(
                    'menu' => 'footer',
                    'container' => '',
                    'theme_location' => 'footer',
                    'items_wrap' => '<ul id="my-nav" class="navbar-nav me-auto mb-2 mb-lg-0">%3$s</ul>'
                )
            ); ?>
        </div>


    </div>
</nav>
</body>

</html>