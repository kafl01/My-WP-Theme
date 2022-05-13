<?php get_header(); ?>
<main>

    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                        get_template_part('template-parts/content', 'archive');

                    endwhile;
                else :
                    _e('Sorry, no pages matched your criteria.', 'textdomain');
                endif;
                ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>