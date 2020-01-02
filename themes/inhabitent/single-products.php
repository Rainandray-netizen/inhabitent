<?php get_header(); ?>

<?php if( have_posts() ) :
//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    
    <article class="single-product-wrapper">
        <div class="single-product-image">
            <?php the_post_thumbnail("large");?>
        </div>
        <div class="single-product-content">
            <h2 class="orange"><?php the_title(); ?></h2>
            <h4><?php echo "$".get_field('price') ?></h4>
            <?php the_content(); ?>
        </div>
    </article>
    
    
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
    <p>No posts found</p>
<?php endif;?>

    
<?php get_footer();?>