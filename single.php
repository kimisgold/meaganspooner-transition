<?php get_header(); ?>

<div class="content">

<section class="post ten columns offset-by-one">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <article class="post">
        
        <h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>

        <p class="date">Posted <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?>
        <?php if(get_the_tags()): ?>
            in <?php the_tags('', ', '); ?>
        <?php endif; ?>
        </p>
    
    <?php the_content(); ?>

    </article>
    
    <nav>
    
        <?php
        $previous_post = get_adjacent_post(false, '', true);
        $next_post = get_adjacent_post(false, '', false);
        
        if ($previous_post): ?>
            <?php previous_post_link('<p class="prev"><span class="label">Previously</span><br>%link</p>', '%title', false, '92'); ?>
        <?php endif; ?>
        <?php if ($next_post): // if there are newer articles ?>
            <?php next_post_link('<p class="next"><span class="label">Next</span><br>%link</p>', '%title', false, '92'); ?>
        <?php endif; ?>
                
    </nav>
        
    </aside>
    
    <?php endwhile; else: ?>
    
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    
    <?php endif; ?>

</section>

<section class="comments ten columns offset-by-one">

    <?php comments_template(); ?>

</section>

</div>

<?php get_footer(); ?>