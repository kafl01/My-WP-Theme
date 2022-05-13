<div class="col">
    <div class="card shadow-sm p-4">
        <div class="t-center">
            <a href=<?php the_permalink(); ?>><?php the_title('<h2>', '</h2>'); ?></a>
        </div>
        <div class="card-body">
            <p class="card-text"><?php
                                    the_excerpt();
                                    ?></p>
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary"><a href=<?php the_permalink(); ?>>Läs mer</a></button>
                </div>
            </div>
        </div>
    </div>
</div>