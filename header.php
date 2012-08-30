<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php wp_title(); ?></title>
    <link rel="profile" href="http://gmgp.org/xfn/11" />
    <link href='http://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700italic|Bad+Script' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" media="screen" />
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
        
        <div class="container">
        
            <p>SKYLARK is now available! Order from:  
            <a href="http://www.indiebound.org/hybrid?filter0=skylark+spooner&amp;x=0&amp;y=0" target="_blank" class="indiebound button">IndieBound</a>
            <a href="http://www.amazon.com/Skylark-The-Trilogy-Meagan-Spooner/dp/0761388656/ref=sr_1_1?ie=UTF8&amp;qid=1340994741&amp;sr=8-1&amp;keywords=skylark+spooner" target="_blank" class="amazon button">Amazon</a>
            <a href="http://www.barnesandnoble.com/w/skylark-meagan-spooner/1108477575?ean=9780761388654" target="_blank" class="barnesandnoble button">Barnes &amp; Noble</a>
        <a href="http://www.bookdepository.com/Skylark-Meagan-Spooner/9780761388654" target="_blank" class="bookdepository button">The Book Depository</a></p>
        
        </div>
        
    </div>
    
    <header>
            
        <div class="container">

        <h1 class="site-title"><a href="<?php echo get_home_url(); ?>"><?php bloginfo('name') ?></a></h1>
    
        <nav>
        
            <div class="table">
                <?php wp_nav_menu(); ?>
            </div>
        
        </nav>
        
        </div>
    
    </header>
    
    <div class="container container-twelve">