<?php get_header(); ?>
<div class="front-page">
<?php $front_page_posts = new WP_Query('cat=2') ?>
<?php if ( $front_page_posts->have_posts() ) : while ( $front_page_posts->have_posts() ) : $front_page_posts->the_post(); ?>
  <div class="avenir front-page-post col-10 offset-1 row mt-5 pt-5 pb-5 b--dotted b--white border-right-0 border-left-0 border-top-0 bw1">
    <?php the_content(); ?>
  </div>
<?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>
