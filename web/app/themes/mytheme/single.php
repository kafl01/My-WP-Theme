<?php get_header(); ?>
<main>
    <article>
        <div class="container">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
                    get_template_part('template-parts/content', 'article');
                endwhile;
            else :
                _e('Sorry, no pages matched your criteria.', 'textdomain');
            endif;
            ?>
        </div>
    </article>
</main>
<?php get_footer(); ?>