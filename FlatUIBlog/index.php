<?php get_header(); ?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <!--
    <div class="jumbotron">
      <div class="container">
        <h1>Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary" href="#" role="button">Learn more &raquo;</a></p>
        <button class="btn btn-primary">Primary</button>
      </div>
    </div>
    -->
    <div class="container">
       <!-- Example row of columns -->
       <div class="row">
         <div class="col-sm-8">
             <?php if ( have_posts() ) : ?>
             <?php while ( have_posts() ) : the_post() ?>
             <?php if ( is_single() ) {
               get_template_part( 'content-single' );
             } else {
               get_template_part( 'content-index' );
             } ?>
             <?php endwhile; ?>
             <?php else : ?>
             <div>投稿が見つかりませんでした。</div>
             <?php endif; ?>
         </div>
         <div class="col-sm-4">
           <?php get_sidebar(); ?>
         </div>
   </div>

   <hr>
<?php get_footer(); ?>
