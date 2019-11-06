<?php get_header(); ?>

<h1><i class="fab fa-sticker-mule"></i> Horse Love Connect</h1>
<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>

        <h1>Hey this is the Home Page</h1>
    
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>


<?php get_sidebar();?>
<?php get_footer();?>