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
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>    

</head>

<body <?php body_class('maintenance'); ?>>
    
    <div class="container container-twelve">
    
    <h1>Meagan's website is undergoing maintenance.</h1>
    
    <p>It'll be back before you know it.</p>
    
    <p><small>(And it'll be awesome.)</small></p>
    
    </div>
    
</body>

</html>