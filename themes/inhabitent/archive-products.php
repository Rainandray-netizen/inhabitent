<?php get_header(); ?>

<section class="center">
    <div class="flexbar">
    <?php
    $terms = get_terms(array(
        "taxonomy"=>"product-type",
        "hide-empty"=>false,
    ));
    
    foreach($terms as $term):?>
        <p class="headingtext green">
        <?php echo strtoupper(str_replace(" Stuff","",$term->name));?>
        </p>
    <?php
        // echo $term->slug;
        // echo "<br>";
    endforeach;
    ?>
 </div>
</section>

<section class="products">
<?php if( have_posts() ) :
    
//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    <article class="grid-item">
        <?php the_post_thumbnail("large");?>
        <a class="bodytext" href=<?php the_permalink();?>><?php the_title(); ?></a>
    </article>
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>
</section>
    
<?php get_footer();?>