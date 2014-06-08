<?php 

global $wp_query;
$total_results = $wp_query->found_posts;

?>

<?php get_header(); ?>

    <aside class="bio">
        
        <h2>
            <?php
                if ( is_day() ) :
                    printf( __( 'Daily Archives: %s', 'simplex' ), '<span>' . get_the_date() . '</span> (' . $total_results . ' entries)' );
                elseif ( is_month() ) :
                    printf( __( 'Monthly Archives: %s', 'simplex' ), '<span>' . get_the_date( 'F Y' ) . '</span> (' . $total_results . ' entries)' );
                elseif ( is_year() ) :
                    printf( __( 'Yearly Archives: %s', 'simplex' ), '<span>' . get_the_date( 'Y' ) . '</span> (' . $total_results . ' entries)' );
                else :
                    _e( 'Archives', 'simplex' );
                endif;
            ?>            
        </h2>
        
    </aside>

<div class="content">

<section class="posts nine columns omega">

<?php query_posts($query_string . '&cat=-5'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <article class="post">
        
        <h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
        <p class="date">Posted <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?>
        <?php if(get_the_tags()): ?>
            in <?php the_tags('', ', '); ?>
        <?php endif; ?>
        </p>

    
    <?php the_excerpt(); ?>

    </article>
    
        
    <?php endwhile; ?>
    
    <nav>
        <?php if(get_previous_posts_link()): ?>
            <p class="newer"><?php previous_posts_link('Newer Posts',0); ?></p>
        <?php endif; ?>
        <?php if(get_next_posts_link()): ?>
            <p class="older"><?php next_posts_link('Older Posts',0); ?></p>
        <?php endif; ?>
    </nav>        
    
    <?php else: ?>
    
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    
    <?php endif; ?>


</section>

<?php get_sidebar(); ?>



</div>

<?php get_footer(); ?>