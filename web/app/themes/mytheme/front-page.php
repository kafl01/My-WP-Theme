<?php get_header(); ?>

<main>
    <div class="page-banner">
        <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/backgroundimg1.jpg') ?>);"></div>
        <div class="page-banner__content container t-center pt-3 pb-5">
            <h1 class="p-3" id="textcol"><?php echo get_bloginfo('name'); ?></h1>
            <p class="mx-5 p-3" id="textcol"><?php echo get_bloginfo('description'); ?></p>
            <a href="<?php echo get_permalink(9098); ?>" class="btn btn-primary mb-3">Om oss</a>
        </div>
    </div>


    <div class="container p-5">
        <div class="row">
            <div class="col-md-4">
                <h3 class="border border-primary p-4 t-center"><a class="text-decoration-none" href=<?php echo get_post_type_archive_link('travel_camp'); ?>>Träningsläger</a></h3>
            </div>
            <div class="col-md-4">
                <h3 class="border border-primary p-4 t-center text-decoration-none"><a class="text-decoration-none" href=<?php echo get_post_type_archive_link('travel_cup'); ?>>Cuper</a></h3>
                </h3>
            </div>
            <div class="col-md-4">
                <h3 class="border border-primary p-4 t-center text-decoration-none"><a class="text-decoration-none" href=<?php echo get_post_type_archive_link('travel_soccer'); ?>>Fotbollsresor</a></h3>
                </h3>
            </div>
        </div>
    </div>

    <!-- Sektion träningsläger -->
    <div class="container p-5">
        <h2 class="t-center">Sol och träning</h2>
        <p class="p-3 t-center">Anmäl dig till något av våra träningsläger i Spanien i sommar!</p>
        <div class="row">
            <?php
            $args = array(
                'posts_per_page' => 3,
                'post_type' => 'travel_camp',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'travel_country',
                        'field'    => 'slug',
                        'terms'    => 'spanien',
                    ),
                ),
            );
            $tax_travel = new WP_Query($args);
            if ($tax_travel->have_posts()) :
                while ($tax_travel->have_posts()) : $tax_travel->the_post();
            ?>
                    <div class="col-md-4">
                        <div class="p-3">
                            <div class="t-center">
                                <div>
                                    <div>
                                        <img src="<?php the_post_thumbnail_url('thumbnail'); ?>">
                                    </div>
                                </div>
                                <h4 class="p-2"><?php the_title(); ?></h4>
                                <p><?php the_excerpt(); ?></p>
                                <a href=<?php the_permalink(); ?> class="btn btn-primary">Läs mer</a>
                                <div class="col-md-7 p-4">
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                endwhile;
            else :
                _e('Sorry, no pages matched your criteria.', 'textdomain');
            endif;
            wp_reset_postdata();
            ?>
            <hr class="featurette-divider bg-primary">
        </div>
    </div>

    <!-- Sektion fotbolls-cuper -->
    <div class="container p-5">
        <h2 class="p-3 t-center">Gillar du fotboll?</h2>
        <p class="p-3 t-center">Läs mer och anmäl dig till våra kommande fotbolls-cuper!</p>
        <div class="row">
            <?php
            $args = array(
                'posts_per_page' => 3,
                'post_type' => 'travel_cup',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'travel_sport_type',
                        'field'    => 'slug',
                        'terms'    => 'fotboll',
                    ),
                ),
            );
            $tax_travel = new WP_Query($args);
            if ($tax_travel->have_posts()) :
                while ($tax_travel->have_posts()) : $tax_travel->the_post();
            ?>
                    <div class="col-md-4">
                        <div class="p-3">
                            <div class="t-center">
                                <div>
                                    <div>
                                        <img src="<?php the_post_thumbnail_url('thumbnail'); ?>">
                                    </div>
                                </div>
                                <h4 class="p-2"><?php the_title(); ?></h4>
                                <p><?php the_excerpt(); ?></p>
                                <a href=<?php the_permalink(); ?> class="btn btn-primary">Läs mer</a>
                                <div class="col-md-7 p-4">
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                endwhile;
            else :
                _e('Sorry, no pages matched your criteria.', 'textdomain');
            endif;
            wp_reset_postdata();
            ?>
            <hr class="featurette-divider bg-primary">
        </div>
    </div>

    <!-- Carousel -->
    <div class="mt-2">
        <div class="container-fluid">
            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?php echo get_theme_file_uri('/images/f1.jpg') ?>" class="d-block h-50 w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo get_theme_file_uri('/images/fly.jpg') ?>" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo get_theme_file_uri('/images/montecarlo.jpg') ?>" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    <!-- Newsletter -->
    <div class="container p-5">
        <h2 class="pt-4 t-center">Nyhetsbrev</h2>
        <p class="t-center">Anmäl dig till vårt nyhetsbrev nedan och få förtur till bokningar</p>
        <form class="row g-3 m-5 border border-primary p-3">
            <div class="col-12">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                    <label class="form-check-label" for="invalidCheck2">
                        Sportresor
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                    <label class="form-check-label" for="invalidCheck2">
                        Träningsläger
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                    <label class="form-check-label" for="invalidCheck2">
                        Cuper
                    </label>
                </div>
            </div>
            <div class="col-md-6">
                <label for="validationDefault03" class="form-label">Fyll i din e-mail</label>
                <input type="text" class="form-control" id="validationDefault03" required>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Submit form</button>
            </div>
        </form>
        <hr class="featurette-divider bg-primary">
    </div>
</main>

<?php get_footer(); ?>