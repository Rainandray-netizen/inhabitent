<?php get_header(); ?>

<?php if( have_posts() ) :
//The WordPress Loop: loads post content ?>
<header class="pageheader">
    <?php while( have_posts() ) :
        the_post();
        the_post_thumbnail();?>
    <!-- Loop ends -->
    <?php endwhile;?>
    <div class="frontpage-logo">
      <img src="<?php echo get_stylesheet_directory_uri()."/assets/images/logos/inhabitent-logo-full.svg" ?>">
    </div>
</header>
    <?php the_posts_navigation();?>        

<?php else : ?> 
        <p>No posts found</p>
<?php endif;?>


<!-- begin categories posts-->
<h1 class="journal-heading">Shop Stuff</h1>
<section class="homepage-shop-wrapper">
<?php
    $terms = get_terms(array(
        "taxonomy"=>"product-type",
        "hide-empty"=>false,
    ));
    
    $descArray=["Get back to nature with all the tools and toys you need to enjoy the great outdoors.","Nothing beats food cooked over a fire. We have all you need for good camping eats.","Get a good night's rest in the wild in a home away from home that travels well.","From flannel shirts to toques, look the part while roughing it in the great outdoors."];
    $descCounter=0;
    foreach($terms as $term):?>
      <fig class="homepage-shop-article">
      <img src="<?php echo get_stylesheet_directory_uri()."/images/product-type-icons/". $term->slug.".svg"; ?>">
      <p><?php echo $descArray[$descCounter]; $descCounter++?></p>
      <a href="<?php echo get_site_url()."/product-type/".$term->slug ?>"><button><?php echo $term->name;?></button></a>
      
        
      </fig>
    <?php endforeach;
 ?>
 </section>
<!-- end categories posts-->

<!-- Journal here!-->
<?php 
   // the query
   $the_query = new WP_Query( array(
    'posts_per_page' => 3,
   )); 
?>

<h1 class="journal-heading">Inhabitent Journal</h1>
<section class="journal-posts-wrapper">
<?php if ( $the_query->have_posts() ) : ?>
  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

  <fig class="frontpage-journal-item">
    <?php the_post_thumbnail("medium");?>
    <div></div> <!-- this is the blank space div -->
    <h3><?php echo the_date();echo " / ";echo comments_number();?></h3>
    <h1 class="green"><?php the_title(); ?></h1>
    <a class="bodytext" href=<?php the_permalink();?>><button>Read Entry</button></a>
  </fig>

  <?php endwhile; ?>
  </section>
  <?php wp_reset_postdata(); ?>
  

<?php else : ?>
  <p><?php __('No posts'); ?></p>
<?php endif; ?>

<aside>
</aside>
<?php get_footer();?>