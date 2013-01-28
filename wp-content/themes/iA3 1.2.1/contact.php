<?php
/**
*   Template Name: Contact
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
    <body class="contact">
        <div id="screen">
            <?php @include('inc_body_header.php'); ?>

            <section class="G6 GR" id="content">
                <header class="G4 GR">
                    <h1><?php _e('Contact', 'ia3'); ?></h1>
                </header><!-- G4 GR -->
                <section class="G4 GR">
                    <?php if(ia3_helpers::get_option('imgMap') != ''): ?>
                    <img class="G4 GS" src="<?php echo get_bloginfo('template_directory'); ?><?php echo ia3_helpers::get_option('imgMap')?>" />
                    <?php elseif (ia3_helpers::get_option('coordinatesMap') != ''): ?>
                    <div id="map" style="width:100%; height:35em; border:1px solid gray;" class="<?php echo ia3_helpers::get_option('coordinatesMap');?>"></div>
                    <?php endif; ?>
                    
                    <?php if (ia3_helpers::get_option('coordinatesMap') != ''): ?>
                    <p><a href="http://maps.google.com/maps?f=d&amp;source=s_d&amp;saddr=&amp;daddr=<?php echo ia3_helpers::get_option('coordinatesMap');?>&amp;hl=en&amp;geocode=&amp;mra=mift&amp;mrsp=0&amp;sz=19&amp;sll=<?php echo ia3_helpers::get_option('coordinatesMap');?>&amp;sspn=0.001462,0.002733&amp;ie=UTF8&amp;z=19&amp;start=0"><?php _e('View in Google Maps', 'ia3'); ?></a></p>
                    <?php endif; ?>
                </section><!-- G4 GR -->
                <section class="G2 GS">
                    <dl class="containsAddress">
                        <?php if (ia3_helpers::get_option('mailContact') != '' ): ?>
                        <dt><?php _e('Mail', 'ia3'); ?>:</dt>
                        <dd class="email"><a href="mailto:<?php echo htmlentities(stripslashes(ia3_helpers::get_option('mailContact', __('contact@informationarchitects.com', 'ia3'))), ENT_NOQUOTES, 'UTF-8'); ?>"><?php echo htmlentities(stripslashes(ia3_helpers::get_option('mailContact', __('contact@informationarchitects.com', 'ia3'))), ENT_NOQUOTES, 'UTF-8'); ?></a></dd>
                        <?php endif; ?>
                        
                        <?php if (ia3_helpers::get_option('phoneContact') != '' ): ?>
                        <dt><?php _e('Phone', 'ia3'); ?>:</dt>
                        <dd class="tel"><?php echo htmlentities(stripslashes(ia3_helpers::get_option('phoneContact', __('', 'ia3'))), ENT_NOQUOTES, 'UTF-8'); ?></dd>
                        <?php endif; ?>
                        
                        <?php if (ia3_helpers::get_option('twitterContact') != '' ): ?>
                        <dt><?php _e('Twitter', 'ia3'); ?>:</dt>
                        <dd class="twitter"><a class="twooser" href="http://twitter.com/<?php echo htmlentities(stripslashes(ia3_helpers::get_option('twitterContact', __('iA', 'ia3'))), ENT_NOQUOTES, 'UTF-8'); ?>">@<?php echo htmlentities(stripslashes(ia3_helpers::get_option('twitterContact', __('iA', 'ia3'))), ENT_NOQUOTES, 'UTF-8'); ?></a></dd>
                        <?php endif; ?>
                        
			<?php if (ia3_helpers::get_option('linkedInContact') != '' ): ?>
                        <dt><?php _e('LinkedIn', 'ia3'); ?>:</dt>
                        <dd class="linkedin"><a href="http://www.linkedin.com/in/<?php echo htmlentities(stripslashes(ia3_helpers::get_option('linkedInContact', __('informationarchitect', 'ia3'))), ENT_NOQUOTES, 'UTF-8'); ?>">Connect</a></dd>
			
                        <?php endif; ?>
                        
                        <?php if (ia3_helpers::get_option('nameOrgContact') != '' ): ?>
                        <dt class="url"><a href="<?php bloginfo('url'); ?>" class="org"><?php echo htmlentities(stripslashes(ia3_helpers::get_option('nameOrgContact', __('Information Architects, Inc.', 'ia3'))), ENT_NOQUOTES, 'UTF-8'); ?></a></dt>
                        <?php endif; ?>
                        
                        <?php if (ia3_helpers::get_option('addressContact') != '' ): ?>
                        <dd class="address">
                            <address>
                                <?php echo htmlentities(stripslashes(ia3_helpers::get_option('addressContact', __('Route Kamiyama-cho Building 5F 5-2 Kamiyama-cho', 'ia3'))), ENT_NOQUOTES, 'UTF-8'); ?><br />
                                <?php echo htmlentities(stripslashes(ia3_helpers::get_option('addressContact2', __('Shibuya-ku, Tokyo 150-0047 Japan', 'ia3'))), ENT_NOQUOTES, 'UTF-8'); ?>
                            </address>
                        </dd>
                        <?php endif; ?>                        
                    </dl>
                    
                    <!--<form action="<?php echo ia3_helpers::get_option('actionForm', __('', 'ia3')); ?>" method="post">
                        <fieldset>
                            <label class="HSC" for="<?php echo ia3_helpers::get_option('nameFieldForm', __('', 'ia3')); ?>"><?php _e('Newsletter', 'ia3'); ?>:</label>
                            <input id="<?php echo ia3_helpers::get_option('nameFieldForm', __('', 'ia3')); ?>" name="<?php echo ia3_helpers::get_option('nameFieldForm', __('', 'ia3')); ?>" type="text" value="" />
                            <input type="submit" value="<?php _e('Subscribe', 'ia3'); ?>" />
                        </fieldset>
                    </form>-->
                </section><!-- G2 GS -->
            </section><!-- #content.ia.ia-6.ia-r.ia-s -->
            <hr class="implied" />
            
            <?php @include('inc_body_footer.php'); ?>
            
            <?php if (ia3_helpers::get_option('coordinatesMap')!='') {?>
            <script>
                jQuery(document).ready(function() {
                    jQuery(document).trigger('CORE:LOAD_MAP');
                });
            </script>
            <?php }?>
        </div><!-- #screen -->
    </body>
</html>