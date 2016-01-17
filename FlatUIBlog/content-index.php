<div class="row">
    <div class="col-sm-12">
        <h4><a class="content-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        <hr class="under-content-title">
        <p class="post-meta">
          <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>　<?php the_time('Y/m/d'); ?>　
          <span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>　<?php the_category(', '); ?>　
          <span class="glyphicon glyphicon-tags" aria-hidden="true"></span>　<?php the_tags('',', '); ?>　
        </p>
        <div class=content-thumbnail>
          <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail( 'post-thumbnail', array( 'class'=>'img-responsive content-thumbnail' ) ); ?>
          </a>
        </div>
        <div class="content-main-text">
            <?php the_excerpt(); ?>
        </div>
    </div>
</div>
