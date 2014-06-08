<?php get_header(); ?>

    <aside class="bio">
        
        <?php echo get_avatar( 'meagan.amelia@gmail.com', $size = '96' ); ?>
        
        <p><?php the_author_meta('description', 1); ?></p>
        
    </aside>

<div class="content">

<section class="posts nine columns omega">

<?php query_posts('&cat=-92'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <article class="post">

        
        <h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
        <p class="date">Posted <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?>
        <?php if(get_the_tags()): ?>
            in <?php the_tags('', ', '); ?>
        <?php endif; ?>
        </p>

    <?php if (has_excerpt()): ?>
        <?php the_excerpt(); ?>
        <p><a href="<?php the_permalink(); ?>">(more&hellip;)</a></p>
    <?php else: ?>
        <?php the_content(); ?>
    <?php endif; ?>

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