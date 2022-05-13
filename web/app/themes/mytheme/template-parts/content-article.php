<div class="row py-5">
    <div class="col-md-auto">
        <div class="py-2">
            <span><?php the_date(); ?></span>
        </div>
        <div>
            <?php the_title('<h2>', '</h2>'); ?>
        </div>
        <div class="py-2">
            <p class="blog-post-meta">Författare: <?php the_author(); ?></p>
        </div>
        <div class="py-5">
            <?php the_content('<p>', '</p>'); ?>
        </div>
        <nav class="navbar navbar-expand-lg">
            <div class="container-md">
                <div class="container py-5">
                    <div class="row align-items-start">
                        <div class="col-md-6 px-2">
                            <div class="main-nav">
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
                    </div>
                </div>
            </div>
        </nav>
        <hr class="featurette-divider bg-primary">
        <div>
            <?php comments_template(); ?>
        </div>
    </div>
</div>
</div>