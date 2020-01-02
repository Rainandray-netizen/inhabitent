<?php get_header(); ?>

<section class="sidebar-grid-wrapper">
    
    <?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    
    <article class="sidebar-grid-content">
        <div class="journaldiv">
            <div class="titlebg">
                <h2><?php the_title(); ?></h2>
            </div>
            <img  class="index-img" src=<?php echo get_the_post_thumbnail_url();?>>
            <div class="bylinebg">
                <h2><?php echo the_date();echo " / ";echo comments_number();echo " / By ";echo get_the_author();?></h2>
            </div>
        </div>
        <div  class="article-content">
            <p><?php echo get_the_content();?></p>
        </div>
    </article>
    
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

    <?php else : ?>
        <p>No posts found</p>
    <?php endif;?>

    <aside class="sidebar-aside">
        <?php dynamic_sidebar("sidebar-1");?>
    </aside>

</section>
    
<?php get_footer();?>