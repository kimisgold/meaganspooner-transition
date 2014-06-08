<?php 
/* 
Template Name: Book Series
*/ 
?>

<?php get_header(); ?>

<?php
    $page_query = new WP_Query();
    $all_pages = $page_query->query(array('post_type' => 'page'));
    $page_id = get_the_ID();
?>

<div class="content">

<nav class="subnav">
    <?php $series_top_id = ($post->post_parent !== 0) ?  $post->post_parent : $page_id; ?>
    <?php $children = get_pages('sort_column=menu_order&child_of=' . $series_top_id); ?>
    <?php $active = ($series_top_id == $page_id) ? 'class="active"' : ''; ?>
    <h3><a href="<?php echo get_permalink($series_top_id); ?>" <?php echo $active; ?>><?php echo get_the_title($series_top_id); ?></a></h3>
    <ul>
    <?php foreach($children as $child): ?>
        <?php $child_id = $child->ID; ?>
        <?php $active = ($page_id == $child_id) ? 'class="active"' : ''; ?>
        <?php $child_title = $child->post_title; ?>
        <li><a href="<?php echo get_permalink($child_id); ?>" <?php echo $active; ?>>
        <?php if (has_post_thumbnail($child_id)): ?>
            <?php echo get_the_post_thumbnail($child_id, 'post-thumbnail', array('alt' => $child_title)); ?></a></li>
        <?php else: ?>
            <img src="<?php echo bloginfo('template_directory') . '/img/comingsoon.png'; ?>" alt="<?php echo $child_title; ?>" class="no-cover"><span class="book-title"><?php echo $child_title; ?></span>
        <?php endif; ?>
        </a></li>
    <?php endforeach; ?>
    </ul>
</nav>

<section class="ten columns offset-by-one">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <article class="post">
        
        <h1><?php the_title(); ?></h1>
    
    <?php the_content(); ?>

    </article>
    
    <?php endwhile; else: ?>
    
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    
    <?php endif; ?>

</section>

</div>

<?php get_footer(); ?>