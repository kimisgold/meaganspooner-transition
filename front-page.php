<?php
/*
Template Name: Front Page
*/
?>

<?php get_header(); ?>

<section class="featured">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <?php the_content(); ?>

    <?php endwhile; else: ?>
    
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    
    <?php endif; ?>
    
</section>

<section class="content">

    <div class="nine columns alpha">
        
        <aside class="bio nine columns alpha">
                
            <?php echo get_avatar( 'meagan.amelia@gmail.com', $size = '96' ); ?>
            
            <h3>About the Author</h3>
            
            <p><?php the_author_meta('description', 5); ?></p>
            
            <p class="contact"><a href="http://eepurl.com/wGz6D" class="button">Sign up for her newsletter for contests and sneak peeks!</a></p>
                
        </aside>
        
        <aside class="recent-posts sidebar">
        
            <?php if(function_exists(dynamic_sidebar('Home Sidebar'))): ?>
        
                <?php dynamic_sidebar('Home Sidebar'); ?>
                        
            <?php endif; ?>
            
        </aside>
        
    </div>
    
    <aside class="news sidebar three columns omega">
    
    <h3>News</h3>
    
        <ul>
            <?php
            
            // The Query
            query_posts( array ( 'category_name' => 'News', 'posts_per_page' => 3 ) );
            
            // The Loop
            while ( have_posts() ) : the_post();
                echo '<li>';
                echo '<span class="date">';
                the_date();
                echo '</span>';
                the_content();
                echo '</li>';
            endwhile;
            
            // Reset Query
            wp_reset_query();
            
            ?>
        </ul>
        <?php $newsID = get_cat_ID( 'News' ); ?>
        <p><a href="<?php echo get_category_link( $newsID ); ?>">View News Archive</a></p>
        
    </aside>
    
</section>

<?php get_footer(); ?>