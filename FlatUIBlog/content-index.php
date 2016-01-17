<div class="row">
    <div class="col-sm-12">
        <h4><a class="content-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        <hr class="under-content-title">
        <p class="post-meta">
          <?php getArticleMetaData() ?>
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
