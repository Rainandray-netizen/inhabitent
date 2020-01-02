<?php get_header(); ?>

<section class="sidebar-grid-wrapper find-us">
    <article class="sidebar-grid-content">
<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
    
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

<form class="find-us-form">
    <p>NAME<span class="req">*</span></p><input type="text">
    <p>EMAIL<span class="req">*</span></p><input type="text">
    <p>SUBJECT<span class="req">*</span></p><input type="text">
    <p>MESSAGE<span class="req">*</span></p><input class="big-one" type="text">
    <br>
    <button type="submit" class>submit</button>
</form>
    </article>
<aside class="sidebar-aside">
    <?php dynamic_sidebar("sidebar-1");?>
</aside>
</section>
<?php get_footer();?>