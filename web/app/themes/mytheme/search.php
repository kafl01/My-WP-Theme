<div class="wrapper">
    <?php get_header(); ?>

    <main class="content">
        <article>
            <div class="blogposts">
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
        </article>
    </main>
    <?php get_footer(); ?>
</div>
</body>