<?php
/**
*   Template Name: Gallery
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
    <body class="gallery">
        <div id="screen">
            <?php @include('inc_body_header.php'); ?>
            
            <section class="G4 GR GS" id="content">
                <?php while (have_posts()): the_post(); ?>
                <article>
                    <header>
                        <h1><?php the_title(); ?></h1>
                    </header>
                    
                    <?php query_posts(array('category_name' => 'Photography', 'showposts' => 10)); if (have_posts()): ?>
                
		    <section class="G4">
                    <h1 class="HSC"><?php _e('Photography Articles', 'ia3'); ?></h1>
                    <dl class="containsArticles">
                        <?php while(have_posts()): the_post(); ?>
    					<dt><a class="title" href="<?php the_permalink() ?>"><?php the_title(); ?></a></dt>
                        <!--<dd>
                            <?php echo preg_replace('/<p>(.+?)<\/p>/','$1',get_the_excerpt()); ?> <a href="<?php the_permalink() ?>" class="more-link"><?php _e('Read more', 'ia3'); ?>
                            	<span class="implied"> &ndash; &lsquo;<?php the_title(); ?>&rsquo;</span>.</a>
                        </dd>-->
                        <?php endwhile; wp_reset_query(); ?><br />
                    </dl><!-- .containsArticles -->
                </section><!-- G4 GR -->
                <?php endif; ?>
                
                <center><img class="aligncenter size-full wp-image-314" title="hr_2" src="http://ravikalaga.com/wp-content/uploads/2011/07/hr_2.png" alt="" width="270" height="20" /></center><br/><br/>
                
                    <header>
                        <h1>Images</h1>
                    </header>
                    
                    <div class="formatted">
                        <?php the_content(); ?>
                    </div><!-- .formatted -->
                </article>
			 <?php endwhile; ?>
 				<nav>
                    <ul class="containsGalleries">
                        <li>
                            <h1>Mendocino</h1>
                            <ul class="containsGallery">
                                <li class="G1"><a href="http://ravikalaga.com/wp-content/uploads/2011/07/2011_MendocinoCamping-21.jpg" rel="gallery-1"><img alt="" src="http://ravikalaga.com/wp-content/uploads/2011/07/2011_MendocinoCamping-21.jpg" title="" width="142" height="142" /></a></li>
				<li class="G1"><a href="http://ravikalaga.com/wp-content/uploads/2011/07/2011_MendocinoCamping-25.jpg" rel="gallery-1"><img alt="" src="http://ravikalaga.com/wp-content/uploads/2011/07/2011_MendocinoCamping-25.jpg" title="" width="142" height="142" /></a></li>
                                <li class="G1"><a href="http://ravikalaga.com/wp-content/uploads/2011/07/2011_MendocinoCamping-124.jpg" rel="gallery-1"><img alt="" src="http://ravikalaga.com/wp-content/uploads/2011/07/2011_MendocinoCamping-124.jpg" title="" width="142" height="142" /></a></li>
				<li class="G1"><a href="http://ravikalaga.com/wp-content/uploads/2011/07/2011_MendocinoCamping-241.jpg" rel="gallery-1"><img alt="" src="http://ravikalaga.com/wp-content/uploads/2011/07/2011_MendocinoCamping-241.jpg" title="" width="142" height="142" /></a></li>
				<li class="G1"><a href="http://ravikalaga.com/wp-content/uploads/2011/07/2011_MendocinoCamping-233.jpg" rel="gallery-1"><img alt="" src="http://ravikalaga.com/wp-content/uploads/2011/07/2011_MendocinoCamping-233.jpg" title="" width="142" height="142" /></a></li>
				<li class="G1"><a href="http://ravikalaga.com/wp-content/uploads/2011/07/2011_MendocinoCamping-231.jpg" rel="gallery-1"><img alt="" src="http://ravikalaga.com/wp-content/uploads/2011/07/2011_MendocinoCamping-231.jpg" title="" width="142" height="142" /></a></li>
				<li class="G1"><a href="http://ravikalaga.com/wp-content/uploads/2011/07/2011_MendocinoCamping-230.jpg" rel="gallery-1"><img alt="" src="http://ravikalaga.com/wp-content/uploads/2011/07/2011_MendocinoCamping-230.jpg" title="" width="142" height="142" /></a></li>
				<li class="G1"><a href="http://ravikalaga.com/wp-content/uploads/2011/07/2011_MendocinoCamping-229.jpg" rel="gallery-1"><img alt="" src="http://ravikalaga.com/wp-content/uploads/2011/07/2011_MendocinoCamping-229.jpg" title="" width="142" height="142" /></a></li>
				<li class="G1"><a href="http://ravikalaga.com/wp-content/uploads/2011/07/2011_MendocinoCamping-207.jpg" rel="gallery-1"><img alt="" src="http://ravikalaga.com/wp-content/uploads/2011/07/2011_MendocinoCamping-207.jpg" title="" width="142" height="142" /></a></li>
				<li class="G1"><a href="http://ravikalaga.com/wp-content/uploads/2011/07/2011_MendocinoCamping-206.jpg" rel="gallery-1"><img alt="" src="http://ravikalaga.com/wp-content/uploads/2011/07/2011_MendocinoCamping-206.jpg" title="" width="142" height="142" /></a></li>
				<li class="G1"><a href="http://ravikalaga.com/wp-content/uploads/2011/07/2011_MendocinoCamping-197.jpg" rel="gallery-1"><img alt="" src="http://ravikalaga.com/wp-content/uploads/2011/07/2011_MendocinoCamping-197.jpg" title="" width="142" height="142" /></a></li>
				<li class="G1"><a href="http://ravikalaga.com/wp-content/uploads/2011/07/2011_MendocinoCamping-190.jpg" rel="gallery-1"><img alt="" src="http://ravikalaga.com/wp-content/uploads/2011/07/2011_MendocinoCamping-190.jpg" title="" width="142" height="142" /></a></li>
				<li class="G1"><a href="http://ravikalaga.com/wp-content/uploads/2011/07/2011_MendocinoCamping-189.jpg" rel="gallery-1"><img alt="" src="http://ravikalaga.com/wp-content/uploads/2011/07/2011_MendocinoCamping-189.jpg" title="" width="142" height="142" /></a></li>
				<li class="G1"><a href="http://ravikalaga.com/wp-content/uploads/2011/07/2011_MendocinoCamping-188.jpg" rel="gallery-1"><img alt="" src="http://ravikalaga.com/wp-content/uploads/2011/07/2011_MendocinoCamping-188.jpg" title="" width="142" height="142" /></a></li>
				<li class="G1"><a href="http://ravikalaga.com/wp-content/uploads/2011/07/2011_MendocinoCamping-185.jpg" rel="gallery-1"><img alt="" src="http://ravikalaga.com/wp-content/uploads/2011/07/2011_MendocinoCamping-185.jpg" title="" width="142" height="142" /></a></li>
				<li class="G1"><a href="http://ravikalaga.com/wp-content/uploads/2011/07/2011_MendocinoCamping-176.jpg" rel="gallery-1"><img alt="" src="http://ravikalaga.com/wp-content/uploads/2011/07/2011_MendocinoCamping-176.jpg" title="" width="142" height="142" /></a></li>
				<li class="G1"><a href="http://ravikalaga.com/wp-content/uploads/2011/07/2011_MendocinoCamping-168.jpg" rel="gallery-1"><img alt="" src="http://ravikalaga.com/wp-content/uploads/2011/07/2011_MendocinoCamping-168.jpg" title="" width="142" height="142" /></a></li>
				<li class="G1"><a href="http://ravikalaga.com/wp-content/uploads/2011/07/2011_MendocinoCamping-161.jpg" rel="gallery-1"><img alt="" src="http://ravikalaga.com/wp-content/uploads/2011/07/2011_MendocinoCamping-161.jpg" title="" width="142" height="142" /></a></li>
				

                            </ul><!-- .containsGallery -->
                        </li>
<center><img class="aligncenter size-full wp-image-314" title="hr_2" src="http://ravikalaga.com/wp-content/uploads/2011/07/hr_2.png" alt="" width="270" height="20" /></center><br/><br/>
                        <li>
                            <h1>Mt. Diablo</h1>
                            <ul class="containsGallery">
                                <li class="G1"><a href="http://ravikalaga.com/wp-content/uploads/2011/07/DSC_0787.jpg" rel="gallery-2"><img alt="" src="http://ravikalaga.com/wp-content/uploads/2011/07/DSC_0787.jpg" title="" width="142" height="142" /></a></li>
				<li class="G1"><a href="http://ravikalaga.com/wp-content/uploads/2011/07/DSC_0795.jpg" rel="gallery-2"><img alt="" src="http://ravikalaga.com/wp-content/uploads/2011/07/DSC_0795.jpg" title="" width="142" height="142" /></a></li>
				<li class="G1"><a href="http://ravikalaga.com/wp-content/uploads/2011/07/DSC_0799.jpg" rel="gallery-2"><img alt="" src="http://ravikalaga.com/wp-content/uploads/2011/07/DSC_0799.jpg" title="" width="142" height="142" /></a></li>
				<li class="G1"><a href="http://ravikalaga.com/wp-content/uploads/2011/07/DSC_0811.jpg" rel="gallery-2"><img alt="" src="http://ravikalaga.com/wp-content/uploads/2011/07/DSC_0811.jpg" title="" width="142" height="142" /></a></li>
				<li class="G1"><a href="http://ravikalaga.com/wp-content/uploads/2011/07/DSC_0841.jpg" rel="gallery-2"><img alt="" src="http://ravikalaga.com/wp-content/uploads/2011/07/DSC_0841.jpg" title="" width="142" height="142" /></a></li>
				<li class="G1"><a href="http://ravikalaga.com/wp-content/uploads/2011/07/DSC_0853.jpg" rel="gallery-2"><img alt="" src="http://ravikalaga.com/wp-content/uploads/2011/07/DSC_0853.jpg" title="" width="142" height="142" /></a></li>
				
                            </ul><!-- .containsGallery -->
                        </li>
<center><img class="aligncenter size-full wp-image-314" title="hr_2" src="http://ravikalaga.com/wp-content/uploads/2011/07/hr_2.png" alt="" width="270" height="20" /></center><br/><br/>
                        <li>
                            <h1>Sausalito</h1>
                            <ul class="containsGallery">
				<li class="G1"><a href="http://ravikalaga.com/wp-content/uploads/2011/07/DSC_0619.jpg" rel="gallery-3"><img alt="" src="http://ravikalaga.com/wp-content/uploads/2011/07/DSC_0619.jpg" title="" width="142" height="142" /></a></li>
				<li class="G1"><a href="http://ravikalaga.com/wp-content/uploads/2011/07/DSC_0626.jpg" rel="gallery-3"><img alt="" src="http://ravikalaga.com/wp-content/uploads/2011/07/DSC_0626.jpg" title="" width="142" height="142" /></a></li>
				<li class="G1"><a href="http://ravikalaga.com/wp-content/uploads/2011/07/DSC_0628.jpg" rel="gallery-3"><img alt="" src="http://ravikalaga.com/wp-content/uploads/2011/07/DSC_0628.jpg" title="" width="142" height="142" /></a></li>
				<li class="G1"><a href="http://ravikalaga.com/wp-content/uploads/2011/07/DSC_0629.jpg" rel="gallery-3"><img alt="" src="http://ravikalaga.com/wp-content/uploads/2011/07/DSC_0629.jpg" title="" width="142" height="142" /></a></li>
				<li class="G1"><a href="http://ravikalaga.com/wp-content/uploads/2011/07/DSC_0637.jpg" rel="gallery-3"><img alt="" src="http://ravikalaga.com/wp-content/uploads/2011/07/DSC_0637.jpg" title="" width="142" height="142" /></a></li>
				<li class="G1"><a href="http://ravikalaga.com/wp-content/uploads/2011/07/DSC_0638.jpg" rel="gallery-3"><img alt="" src="http://ravikalaga.com/wp-content/uploads/2011/07/DSC_0638.jpg" title="" width="142" height="142" /></a></li>
				<li class="G1"><a href="http://ravikalaga.com/wp-content/uploads/2011/07/DSC_0676.jpg" rel="gallery-3"><img alt="" src="http://ravikalaga.com/wp-content/uploads/2011/07/DSC_0676.jpg" title="" width="142" height="142" /></a></li>
				<li class="G1"><a href="http://ravikalaga.com/wp-content/uploads/2011/07/DSC_0695.jpg" rel="gallery-3"><img alt="" src="http://ravikalaga.com/wp-content/uploads/2011/07/DSC_0695.jpg" title="" width="142" height="142" /></a></li>
				<li class="G1"><a href="http://ravikalaga.com/wp-content/uploads/2011/07/DSC_0726.jpg" rel="gallery-3"><img alt="" src="http://ravikalaga.com/wp-content/uploads/2011/07/DSC_0726.jpg" title="" width="142" height="142" /></a></li>
				<li class="G1"><a href="http://ravikalaga.com/wp-content/uploads/2011/07/DSC_0730.jpg" rel="gallery-3"><img alt="" src="http://ravikalaga.com/wp-content/uploads/2011/07/DSC_0730.jpg" title="" width="142" height="142" /></a></li>
				<li class="G1"><a href="http://ravikalaga.com/wp-content/uploads/2011/07/DSC_0734.jpg" rel="gallery-3"><img alt="" src="http://ravikalaga.com/wp-content/uploads/2011/07/DSC_0734.jpg" title="" width="142" height="142" /></a></li>
				<li class="G1"><a href="http://ravikalaga.com/wp-content/uploads/2011/07/DSC_0741.jpg" rel="gallery-3"><img alt="" src="http://ravikalaga.com/wp-content/uploads/2011/07/DSC_0741.jpg" title="" width="142" height="142" /></a></li>
				<li class="G1"><a href="http://ravikalaga.com/wp-content/uploads/2011/07/PAinSFO_0610-47.jpg" rel="gallery-3"><img alt="" src="http://ravikalaga.com/wp-content/uploads/2011/07/PAinSFO_0610-47.jpg" title="" width="142" height="142" /></a></li>                                
                            </ul><!-- .containsGallery -->
                        </li>
<center><img class="aligncenter size-full wp-image-314" title="hr_2" src="http://ravikalaga.com/wp-content/uploads/2011/07/hr_2.png" alt="" width="270" height="20" /></center><br/><br/>
			<li>
                            <h1>Beginings</h1>
                            <ul class="containsGallery">
				<li class="G1"><a href="http://ravikalaga.com/wp-content/uploads/2011/07/DSC_0098.jpg" rel="gallery-4"><img alt="" src="http://ravikalaga.com/wp-content/uploads/2011/07/DSC_0098.jpg" title="" width="142" height="142" /></a></li>
				<li class="G1"><a href="http://ravikalaga.com/wp-content/uploads/2011/07/DSC_0119.jpg" rel="gallery-4"><img alt="" src="http://ravikalaga.com/wp-content/uploads/2011/07/DSC_0119.jpg" title="" width="142" height="142" /></a></li>
				<li class="G1"><a href="http://ravikalaga.com/wp-content/uploads/2011/07/DSC_0122.jpg" rel="gallery-4"><img alt="" src="http://ravikalaga.com/wp-content/uploads/2011/07/DSC_0122.jpg" title="" width="142" height="142" /></a></li> 
				<li class="G1"><a href="http://ravikalaga.com/wp-content/uploads/2011/07/DSC_0172.jpg" rel="gallery-4"><img alt="" src="http://ravikalaga.com/wp-content/uploads/2011/07/DSC_0172.jpg" title="" width="142" height="142" /></a></li> 
				<li class="G1"><a href="http://ravikalaga.com/wp-content/uploads/2011/07/DSC_0250.jpg" rel="gallery-4"><img alt="" src="http://ravikalaga.com/wp-content/uploads/2011/07/DSC_0250.jpg" title="" width="142" height="142" /></a></li> 
				<li class="G1"><a href="http://ravikalaga.com/wp-content/uploads/2011/07/DSC_0277.jpg" rel="gallery-4"><img alt="" src="http://ravikalaga.com/wp-content/uploads/2011/07/DSC_0277.jpg" title="" width="142" height="142" /></a></li> 
				<li class="G1"><a href="http://ravikalaga.com/wp-content/uploads/2011/07/DSC_0329.jpg" rel="gallery-4"><img alt="" src="http://ravikalaga.com/wp-content/uploads/2011/07/DSC_0329.jpg" title="" width="142" height="142" /></a></li> 
				<li class="G1"><a href="http://ravikalaga.com/wp-content/uploads/2011/07/DSC_0352.jpg" rel="gallery-4"><img alt="" src="http://ravikalaga.com/wp-content/uploads/2011/07/DSC_0352.jpg" title="" width="142" height="142" /></a></li> 
				<li class="G1"><a href="http://ravikalaga.com/wp-content/uploads/2011/07/DSC_0380.jpg" rel="gallery-4"><img alt="" src="http://ravikalaga.com/wp-content/uploads/2011/07/DSC_0380.jpg" title="" width="142" height="142" /></a></li>                                
                            </ul><!-- .containsGallery -->
                        </li>
<center><img class="aligncenter size-full wp-image-314" title="hr_2" src="http://ravikalaga.com/wp-content/uploads/2011/07/hr_2.png" alt="" width="270" height="20" /></center><br/><br/>
                    </ul><!-- .containsGalleries -->
                </nav>
            </section><!-- #content.G4.GR.GS -->
            
            
            <hr class="implied" />

            <?php @include('inc_body_footer.php'); ?>
        </div><!-- #screen -->
    </body>
</html>