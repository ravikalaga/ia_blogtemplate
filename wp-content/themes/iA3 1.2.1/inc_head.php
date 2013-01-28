<meta charset="utf-8">

<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
Remove this if you use the .htaccess -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<title><?php bloginfo('name'); ?></title>


<meta name="description" content="<?php if (have_posts() && !is_home()): while (have_posts()): the_post(); echo strip_tags(get_the_excerpt()); endwhile; else: _e('Personal Web-Home. Contact, Writing, Photography and Social Networks. Drop in to know all about me!', 'ia3'); endif;?>" />
<meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">

<link rel="shortcut icon" href="/favico.png">
<link rel="apple-touch-icon" href="/apple-touch-icon.png">

<link rel="alternate" href="<?php echo get_bloginfo('atom_url'); ?>" type="application/rss+xml" />

<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/style.css?v=1">
<?php if(ia3_helpers::get_option('backWardsC')=='on'){?>
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/assets/css/style-ia3-1.0.2.css?v=1">
<?php }?>
<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/assets/css/style-fancybox-1.3.4.css?v=1">

<script src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/external/modernizr-1.7.min.js"></script>

<!-- Custom Colours -->
<style>
    a, a:hover, label, .HSC, .index #content section.G6 h1 {
    color:<?php echo ia3_helpers::get_option('Colours-1', '#CC0000'); ?>;
    }

    a:visited {
    color:<?php echo ia3_helpers::get_option('Colours-2', '#AA0000'); ?>;
    }
</style>
<?php wp_head(); ?>