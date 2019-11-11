<?php get_header(); ?>

<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>


    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>        

<?php else : ?> 
        <p>No posts found</p>
<?php endif;?>

<!-- adventures posts -->
<?php 
   // the query
   $the_query = new WP_Query( array(
    'post_type' => 'adventures',
    'posts_per_page' => 3,
   )); 
?>

<?php if ( $the_query->have_posts() ) : ?>
  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

    <?php the_title(); ?>
    <?php the_excerpt(); ?>

  <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>

<?php else : ?>
  <p><?php __('No products'); ?></p>
<?php endif; ?>

<!-- end adventures posts-->

<!-- begin categories posts-->
<?php
    $terms = get_terms(array(
        "taxonomy"=>"product-type",
        "hide-empty"=>false,
    ));
    
    foreach($terms as $term):
        echo $term->name;
        echo "<br>";
        // echo $term->slug;
        // echo "<br>";
    endforeach;
 ?>
<!-- end categories posts-->

<?php get_sidebar();?>
<?php get_footer();?>