<?php 
/* 
Template Name Posts: Write Space 
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
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/writespace.css" type="text/css" media="screen" />
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
    
        <p class="twelve columns offset-by-two"><a href="http://www.meaganspooner.com/write-space/"">"In Search of the Write Space"</a> is an ongoing author spotlight at <a href="http://meaganspooner.com">MEAGANSPOONER.COM</a></p>
    
    </div>
    
</div>

<div class="content">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="spotlight">
    
        <div class="container">

            <h1>In Search of the<br />Write Space:<br /><span class="name"><?php the_title(); ?></span></h1>
    
            <?php if ( has_post_thumbnail() ) {
            	the_post_thumbnail();
            } ?>
        
        </div>
    
    </div>

    <article class="post container container-sixteen">
        
        <div class="fourteen columns offset-by-one">
                
            <?php the_content(); ?>
        
        </div>

    </article>
    
    <?php endwhile; else: ?>

    <div class="container">

        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

    </div>
    
    <?php endif; ?>

    <section class="comments container container-sixteen">
    
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