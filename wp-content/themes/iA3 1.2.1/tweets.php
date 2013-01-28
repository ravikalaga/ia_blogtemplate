<?php
/**
*   Template Name: Tweets
**/
?>
<!DOCTYPE html>
<!--[if IE 6 ]><html class="ie ielt9 ielt8 ielt7 ie6" lang="<?php bloginfo('language'); ?>"><![endif]-->
<!--[if IE 7 ]><html class="ie ielt9 ielt8 ie7" lang="<?php bloginfo('language'); ?>"><![endif]-->
<!--[if IE 8 ]><html class="ie ielt9 ie8" lang="<?php bloginfo('language'); ?>"><![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="<?php bloginfo('language'); ?>"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="<?php bloginfo('language'); ?>"><!--<![endif]-->
    <head>
        <?php @include('inc_head.php'); ?>
    </head>
    <body class="tweets">
        <div id="screen">
            <?php @include('inc_body_header.php'); ?>

            <section class="G4 GR GS" id="content">
                <header>
                    <h1><?php _e('Tweets', 'ia3'); ?></h1>
                </header>

                <ol id="containsTweets"></ol><!-- #containsTweets -->

                <ul class="containsGrid" id="containsTwoosers">
           	        <?php if (is_array($twoosers = ia3_helpers::get_option('Twoosers'))): foreach($twoosers as $i => $twooser): ?>
       	            <li class="G1 <?php if($i % 4 == 0): echo 'GS'; endif;?>">
                        <hgroup>
                            <h2><a class="twooser" href="http://twitter.com/<?php echo $twooser['UserName']; ?>"><?php echo $twooser['UserName']; ?></a></h2>
                            <h3><?php echo $twooser['RealName']; ?></h3>
                            <h4><?php echo $twooser['Subtitle']; ?></h4>
                        </hgroup>
                        <img alt="<?php echo $user; ?>" class="twooser" src="http://purl.org/net/spiurl/<?php echo $twooser['UserName']; ?>" />
                    </li>
           	        <?php endforeach; endif; ?>
                </ul><!-- .containsGrid#containsTwoosers -->

                <?php while (have_posts()): the_post(); ?>
                <div class="formatted">
                    <?php the_content(); ?>
                </div><!-- .formatted -->
                <?php endwhile; ?>
            </section><!-- .G4.GR.GS -->
            <hr class="implied" />

            <?php @include('inc_body_footer.php'); ?>
            <script>
                jQuery(document).ready(function() {
                    jQuery(document).trigger('CORE:FOUND_TWEETLIST');
                });
            </script>
        </div><!-- #screen -->
    </body>
</html>
