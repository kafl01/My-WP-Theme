<?php get_header(); ?>
<main>
    <div class="album py-5 bg-light">
        <?php $post_type = get_post_type($post->ID);
        if ($post_type == 'travel_camp') : ?><h1 class="t-center pb-4"><?php echo 'Våra träningsläger'; ?></h1>
        <?php elseif ($post_type == 'travel_cup') : ?><h1 class="t-center pb-4"><?php echo 'Våra cuper'; ?></h1>
        <?php elseif ($post_type == 'travel_matches') : ?><h1 class="t-center pb-4"><?php echo 'Våra sportresor'; ?></h1>
        <?php elseif ($post_type == 'travel_soccer') : ?><h1 class="t-center pb-4"><?php echo 'Våra fotbollsresor'; ?></h1>
        <?php endif; ?>
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php if (have_posts()) :
                    while (have_posts()) : the_post(); ?>
                        <div class="col">
                            <div class="card shadow-sm p-4">
                                <div class="t-center">
                                    <a href=<?php the_permalink(); ?>><?php the_title('<h2>', '</h2>'); ?></a>
                                </div>
                                <div class="card-body">
                                    <p class="card-text"><?php the_excerpt(); ?></p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary"><a href=<?php the_permalink(); ?>>Läs mer</a></button>
                                        </div>
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
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>

</body>