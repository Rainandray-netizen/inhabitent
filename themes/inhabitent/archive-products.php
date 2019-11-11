<?php get_header(); ?>
<h1>this is the product archive</h1>
<main class="products">
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
</main>
    
<?php get_footer();?>