<div class="content">

    <p class="py-3 m-3">
        <?php
        if (!have_comments()) {
            _e("Lämna en kommentar");
        } else {
            _e(get_comments_number() . " " . "Kommentarer");
        }
        ?>
    </p>

</div>
<div>
    <div class="m-3 p-3">
        <?php
        wp_list_comments(
            array(
                'avatar_size' => 120,
                'style' => 'div',
            )
        );
        ?>
    </div>
    <div class="m-3 py-3">
        <?php
        if (comments_open()) {
            comment_form(
                array(
                    'class_form' => '',
                    'title_reply_before' => '<h3 id="reply-title">',
                    'title_reply_after' => '</h3>',
                )
            );
        }
        ?>
    </div>