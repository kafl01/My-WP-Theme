<?php get_header(); ?>
<main class="content">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            get_template_part('template-parts/content', 'page');
        endwhile;
    else :
        _e('Sorry, no pages matched your criteria.', 'textdomain');
    endif;
    ?>
</main>
<?php get_footer(); ?>