<?php 
/* 
Template Name Posts: Write Space New and Improved
*/ 
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php wp_title(); ?></title>
    <link rel="profile" href="http://gmgp.org/xfn/11" />
    <link href='http://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700italic|Nothing+You+Could+Do' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/writespace-new.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/skeleton.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/layout.css" type="text/css" media="screen" />
    <!--[if lte IE 8]>
    	<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/ie7.css" type="text/css" media="screen" />
    <![endif]-->
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>    

    <script type="text/javascript">

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-19092842-2']);
        _gaq.push(['_trackPageview']);
        
        (function() {
          var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
          ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
          var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

    </script>

</head>

<body <?php body_class(''); ?>>

<div class="skylark-banner">
    
    <div class="container container-sixteen">
    
        <p class="twelve columns offset-by-two"><a href="http://www.meaganspooner.com/write-space/">In Search of the Write Space"</a> is an ongoing author spotlight at <a href="http://meaganspooner.com">MEAGANSPOONER.COM</a></p>
    
    </div>
    
</div>

<div class="content">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="spotlight">
    
        <div class="container">

            <h1>In Search of the<br />Write Space:<br /><span class="name"><?php the_field('author-name'); ?></span></h1>
    
            <?php if ( has_post_thumbnail() ) {
            	the_post_thumbnail();
            } ?>
        
        </div>
    
    </div>

    <article class="post container container-sixteen">
        
        <div class="fourteen columns offset-by-one">
                
            <div class="intro">

                <?php 
                    $author_photo = get_field('author-photo'); 
                    $social_top['website'] = get_field('website-top');
                    $social_top['goodreads'] = get_field('goodreads-top');
                    $social_top['facebook'] = get_field('facebook-top');
                    $social_top['twitter'] = get_field('twitter-top');
                ?>

                <img src="<?php echo $author_photo['url']; ?>" class="author-photo" alt="<?php echo $author_photo['caption']; ?>">

                <?php the_field('author-bio'); ?>

                <p class="social">
                    <?php
                        foreach ($social_top as $site => $url) {
                            if ($url) {
                                echo '<a href="' . $url . '" target="_blank" class="' . $site . '">' . ucwords($site) . '</a> ';
                            }
                        }
                    ?>
                </p>

            </div>
            
            <div class="meg">
            
                <h2>A Note From Meg</h2>
                
                <?php the_field('meg'); ?>
                
            </div>
            
            <div class="tour">
            
                <h2>The Tour</h2>
            
                <?php 
                    for ($i = 1; $i <= 6; $i++) {
                        if($tour_image = get_field('tour-' . $i . '-image')) {
                            echo '<div class="stop">';
                            echo '<a href="' . $tour_image['url'] . '"><img src="' . $tour_image['url'] . '" alt="' . $tour_image['caption'] . '"></a>';
                            if(get_field('tour-' . $i . '-caption')) {
                                the_field('tour-' . $i . '-caption');
                            }
                            echo '</div>';
                        } elseif($tour_video = get_field('video_' . $i)) {
                            echo '<div class="stop">';
                            echo '<div class="video-container">';
                            echo $tour_video;
                            echo '</div>';
                            if(get_field('tour-' . $i . '-caption')) {
                                the_field('tour-' . $i . '-caption');
                            }                            
                            echo '</div>';
                        } else {
                            break;
                        }
                    }
                ?>
            
            </div>
            
            <div class="book">
            
                <?php 
                    $book_cover = get_field('book-cover');
                    $social_bottom['website'] = get_field('website-bottom');
                    $social_bottom['goodreads'] = get_field('goodreads-bottom');
                    $social_bottom['facebook'] = get_field('facebook-bottom');
                    $social_bottom['twitter'] = get_field('twitter-bottom');
                ?>
            
                <h3><span class="title"><?php the_field('book-title'); ?></span><br>by <?php the_field('author-name'); ?></h3>
                
                <img src="<?php echo $book_cover['url']; ?>" class="cover" alt="<?php echo $book_cover['caption']; ?>">
                
                <p class="social">
                    Genre: <?php the_field('genre'); ?><br>
                    Publisher: <?php the_field('publisher'); ?><br>
                    Pub Date: <?php the_field('pub-date'); ?><br>
                    <?php
                        foreach ($social_bottom as $site => $url) {
                            if ($url) {
                                echo '<a href="' . $url . '" target="_blank" class="' . $site . '">' . ucwords($site) . '</a> ';
                            }
                        }
                    ?>
                </p>
                
                <?php the_field('book-summary'); ?>
            
                <hr>
                
                <?php the_field('rafflecopter'); ?>
                
            </div>
            
            <div class="about">
            
                <p>&ldquo;In Search of the Write Space&rdquo; is an ongoing feature at <a href="http://www.meaganspooner.com">meaganspooner.com</a> that showcases authors through the spaces they carve out for creativity. You can find out more about the feature, and see a list of past guests, by clicking <a href="http://www.meaganspooner.com/write-space/">here</a>.</p>

                <p>If you or someone you represent would like to participate in &ldquo;Write Space,&rdquo; check out my policies and fill out the application form <a href="http://www.meaganspooner.com/tws-policy/">here</a>!</p>

            </div>
            
        </div>

    </article>
    
    <?php endwhile; else: ?>

    <div class="container">

        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

    </div>
    
    <?php endif; ?>

    <section class="comments container container-sixteen">

        <div id="email-subscribe">
            <p>Are you a fan of "In Search of the Write Space"? <a href="http://feedburner.google.com/fb/a/mailverify?uri=MeaganSpooner&amp;loc=en_US">Subscribe via email</a> and never miss a post!</p> 
        </div>
    
        <?php comments_template('/writespace-comments.php'); ?>
    
    </section>

</div>

    <footer class="container">
        <p>&copy; Meagan Spooner 2012</p>
    </footer>

    </div>

    <?php wp_footer(); ?>

</body>

</html>