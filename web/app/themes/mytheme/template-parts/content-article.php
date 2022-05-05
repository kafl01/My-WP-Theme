<div>
    <header>
        <div>
            <span><?php the_date(); ?></span>
        </div>
        <div>
            <?php the_tags('<span>', '</span>'); ?>
        </div>
        <div><?php comments_number(); ?></div>
    </header>
</div>
<?php
the_title('<h2>', '</h2>');
?>
<div>
    <img src="<?php the_post_thumbnail_url('thumbnail'); ?>">
</div>
<?php
the_content();
comments_template();