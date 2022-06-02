<?php
/**
 * Template Name:Articles
 */

//  header
 get_header();
?>
 <div class="entry-content">

<?php
//  Post Post Type 
//loop
$args=array(
    'post_type'=>'post', #determines if it is posts,countries or pages
    'post_status'=>'publish',
    'posts_per_page'=>5,
    // 'category_name'=>'Europe,Asia' # selecting category
);


$posts= new WP_Query($args);


if( $posts->have_posts() ){

    while( $posts->have_posts()){

        $posts->the_post();

        ?>
        <div class="post-content">
<?php
        the_title();
        the_post_thumbnail();

        the_excerpt();
?>
        </div>
<?php

    }
} 

// wp_reset_postdata();
wp_reset_query();

// Countries Post Type
//loop
$args=array(
    'post_type'=>'countries', #determines if it is posts,countries or pages
    'post_status'=>'publish',
    'posts_per_page'=>5,
    // 'category_name'=>'Europe,Asia' # selecting category
    'tax_query'=>array(

        array(
            'taxonomy'=>'continents',
            'field'=>'slug',
            'terms'=>array('south-america','africa')
        )
    )
);


$countries= new WP_Query($args);


if( $countries->have_posts() ){

    while( $countries->have_posts()){

        $countries->the_post();
?>
        <div class="post-content">
            <?php
            
        the_title();
        the_post_thumbnail();

        the_excerpt();
?>
        </div>

        <?php
    }
} 
?>

</div>

<?php
// footer
 get_footer();

?>