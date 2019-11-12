<?php get_header(); ?>

<h1 class="headingtextbold pagetitle largefont">SHOP STUFF</h1>

<section class="center">
    <div class="flexbar">
    <?php
    $terms = get_terms(array(
        "taxonomy"=>"product-type",
        "hide-empty"=>false,
    ));
    
    foreach($terms as $term):?>
        <p class="headingtext green smallfont">
        <?php echo strtoupper(str_replace(" Stuff","",$term->name));?>
        </p>
    <?php
        // echo $term->slug;
        // echo "<br>";
    endforeach;
    ?>
 </div>
</section>
<hr class="dashedline">
<section class="products">


<?php if( have_posts() ) :
    
//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    <article class="grid-item">
        <?php the_post_thumbnail("large");?>
        <div></div>
        <figcaption>
            <h1>..............................................</h1>
            <a class="bodytext" href=<?php the_permalink();?>><?php the_title();?></a>
            <p class="bodytext medgrey"><?php echo "$" . get_field('price');?></p>
        </figcaption>
    </article>
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>
</section>
    
<?php get_footer();?>