<head>
    <title><?php bloginfo('name') ?><?php if ( is_404() ) : ?> &raquo; <?php _e('Not Found') ?><?php elseif ( is_home() ) : ?> &raquo; <?php bloginfo('description') ?><?php else : ?><?php wp_title() ?><?php endif ?></title>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
    <!-- leave this for stats -->
    
    <!-- stylesheets -->
    <link rel="stylesheet" href="<?php getPath($stylesPath, '/normalize.css'); ?>" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php getPath($stylesPath, '/base.css'); ?>" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php getPath($stylesPath, '/grid.css'); ?>" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    
    <!-- libraries and scripts -->
    <!--[if lt IE9]>
        <script type="text/javascript" src="<?php getPath($scriptsPath, 'jquery-1.10.0.js'); ?>"></script>
    <![endif]-->
    <!--[if gte IE9]>
        <script type="text/javascript" src="<?php getPath($scriptsPath, 'jquery.js'); ?>"></script>
   <![endif]-->
    <!--[if !IE]> -->
        <script type="text/javascript" src="<?php getPath($scriptsPath, 'jquery.js'); ?>"></script>
    <!-- <![endif]-->
    <script type="text/javascript" src="<?php getPath($scriptsPath, 'modernizr.js'); ?>"></script>
    <script type="text/javascript" src="<?php getPath($scriptsPath, 'scripts.js'); ?>"></script>
    
    <!-- feeds -->
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
    <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" /><?php wp_head(); ?>

    <?php wp_get_archives('type=monthly&format=link'); ?>
    <?php //comments_popup_script(); // off by default ?>
    <?php wp_head(); ?>
</head>