<?php get_header(); ?>
<main class="content">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            get_template_part('template-parts/content', 'travelsoccer');
        endwhile;
        if (is_single()) : ?>
            <div class="t-center p-3">
                <div class="nav-previous alignleft"><?php previous_post_link(); ?></div>
                <div class="nav-next alignright"><?php next_post_link(); ?></div>
            </div>
    <?php
        endif;
    else :
        _e('Sorry, no pages matched your criteria.', 'textdomain');
    endif;
    ?>

</main>
<?php get_footer(); ?>