<!-- The Carousel -->
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
                    <img src="<?php echo get_theme_file_uri('/images/F1.jpg') ?>" class="d-block h-50 w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo get_theme_file_uri('/images/fotboll_court1.jpg') ?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo get_theme_file_uri('/images/fly.jpg') ?>" class="d-block w-100" alt="...">
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

<div class="container marketing mx-5">

    <!-- START THE FEATURETTES -->
    <div class="row featurette pt-5 mb-4">
        <div class="col-md-7 p-4">
            <?php the_title('<h2>', '</h2>'); ?>
            <?php the_content('<p>', '</p>'); ?>
        </div>
        <div class="col-md-5">
            <img src="<?php the_post_thumbnail_url('large'); ?>" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500">
        </div>
    </div>
    <hr class="featurette-divider bg-primary">

    <!-- Three columns of text for custom fields -->
    <div class="row my-5">
        <h2 class="p-4 t-center">Info</h2>
        <div class="col-lg-4 py-4">
            <svg class="rounded-circle bg-primary p-3 mb-4" width="100" height="100"></svg>
            <h3>Resedatum</h3>
            <p class="pe-4"><?php echo get_post_meta($post->ID, 'travel_from_date', true); ?></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4 py-4">
            <svg class="rounded-circle bg-primary p-3 mb-4" width="100" height="100"></svg>
            <h3>Arena</h3>
            <p class="pe-4"><?php echo get_post_meta($post->ID, 'travel_arena', true); ?></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4 py-4">
            <svg class="rounded-circle bg-primary p-3 mb-4" width="100" height="100"></svg>
            <h3>Boka</h3>
            <p class="pe-4"><?php echo get_post_meta($post->ID, 'olka_express_text_i_knapp', true); ?></p>
            <a href=# class="btn btn-primary mb-3">Boka</a>
        </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->
    <hr class="featurette-divider bg-primary">

    <!-- Three columns of text for taxonomies -->
    <div class="row my-5">
        <h2 class="p-4 t-center">Kategorier</h2>
        <div class="col-lg-4 py-4">
            <h3>Liga</h3>
            <ul>
                <?php
                $travelleague = get_terms('travel_sport_league');
                if ($travelleague) :
                    foreach ($travelleague as $league) : ?>
                        <li>
                            <a href="<?php echo get_tag_link($league->term_id); ?>">
                                <?php echo $league->name; ?>
                            </a>
                        </li>
                <?php endforeach;
                endif; ?>
            </ul>
        </div>
        <div class="col-lg-4 py-4">
            <h2>Typ</h2>
            <ul>
                <?php
                $traveltyps = get_terms('travel_type');
                if ($traveltyps) :
                    foreach ($traveltyps as $typ) : ?>
                        <li>
                            <a href="<?php echo get_tag_link($typ->term_id); ?>">
                                <?php echo $typ->name; ?>
                            </a>
                        </li>
                <?php endforeach;
                endif; ?>
            </ul>
        </div>
    </div>
    <hr class="featurette-divider bg-primary">

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
    </div>
</div>