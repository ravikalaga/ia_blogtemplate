<?php
    /* iA³ Define theme version for update */
    define('VERSION','1.2.1');

	/* iA³ version update url */
    define('UPDATE_URL','http://api.informationarchitects.jp/ia3/updates/');

	/* iA³ template key */
	define('UPDATE_KEY','f1f20b1935fcfd338fbba31c20c23e24d3447ec3a63dee9c274173f6d63520f5cbb483f3678e854620e5e3ce');

    /**
    *
    *   iA³ (Back) generates the options pages within the WordPress Administration area and allows users to
    *   modify several aspects of the iA³ theme. Currently, these are the header/footer navigation items, the
    *   type of search they want to use and the Twitter accounts used by the Tweets template. And the colour
    *   used for links and (some) headings.
    *
    *   @author Ben Sekulowicz-Barclay (iA).
    *
    **/

    class ia3_back {

        /**
		*	@access	public
    	*	@return	void
		*
		*/

		public function do_setup() {
		    add_menu_page('iA³', 'iA³', 'administrator', 'ia3', array('ia3_back', 'display_admin_page'));
            add_option('ia3_options', '', '', 'yes');
		}

		/**
		*	@access	public
    	*	@return	void
		*
		*/

		public function display_admin_page() {
            // If we are saving from somewhere ...
		    if (isset($_GET['save']) && $_GET['save'] == 1) {

		        // Saving from tab #1: Navigation
		        if (isset($_GET['tab']) && $_GET['tab'] == 1) {
		            ia3_back::save_tab_1();

		        // Saving from tab #2: Miscellaneous
		        } elseif (isset($_GET['tab']) && $_GET['tab'] == 2) {
		            ia3_back::save_tab_2();
		        // Saving from tab #5: Map section
		        } elseif (isset($_GET['tab']) && $_GET['tab'] == 5) {
		            ia3_back::save_tab_5();
		        // Saving from tab #3: Twitter accounts
		        } elseif (isset($_GET['tab']) && $_GET['tab'] == 3) {
		       		ia3_back::save_tab_3();
		        }
		    }

            include('admin_page.php');
		}

		/**
		*	@access	public
    	*	@return	void
		*
		*/

		static function save_tab_1() {
		    $fields = array(array('Header', 4, 4), array('Contact', 4, 4), array('Footer', 4, 1));

		    foreach($fields as $field) {
		        for($i = 1; $i <= $field[1]; $i++) {
                    for($j = 1; $j <= $field[2]; $j++) {

                        $key = $field[0] . '-' . $i . '-' . $j;

                        if ((isset($_POST['S-' . $key])) && ($_POST['S-' . $key] != '-1')) {
                            ia3_helpers::set_option($key, $_POST['S-' . $key]);
                        } else {
                            ia3_helpers::set_option($key, $_POST['I-' . $key]);
                        }
                    }
    		    }
		    }

		    // Display an error/success message here?
		    echo '<div class="updated" id="message"><p>' . __('Your navigation settings have been successfully updated', 'ia3') . '</p></div>';

			return true;
		}

		/**
		*	@access	public
    	*	@return	void
		*
		*/

		static function save_tab_2() {
            ia3_helpers::set_option('Colours-1', $_POST['Colours-1']);
            ia3_helpers::set_option('Colours-2', $_POST['Colours-2']);
            ia3_helpers::set_option('Logo', $_POST['Logo']);
            
            //analytics Keys
            ia3_helpers::set_option('analyticsKey', $_POST['analyticsKey']);
            ia3_helpers::set_option('reinvigorateKey', $_POST['reinvigorateKey']);
            
             if($_POST['backWardsC']!=='off'){
                ia3_helpers::set_option('backWardsC', 'off');
            }else{
                ia3_helpers::set_option('backWardsC', 'on');
            }
             if($_POST['EnableT']!=='off'){
                ia3_helpers::set_option('EnableT', 'off');
            }else{
                ia3_helpers::set_option('EnableT', 'on');
            }
            // Display an error/success message here?
		    echo '<div class="updated" id="message"><p>' . __('Your miscellaneous settings have been successfully updated', 'ia3') . '</p></div>';

		    return true;
		}

        /**
		*	@access	public
    	*	@return	void
		*
		*/

        static function save_tab_3() {
            $i = 0;
            $t = array();
            
            while(
                (isset($_POST['UserName-' . $i]) && $_POST['UserName-' . $i] != '') || 
                (isset($_POST['RealName-' . $i]) && $_POST['RealName-' . $i] != '') || 
                (isset($_POST['Subtitle-' . $i]) && $_POST['Subtitle-' . $i] != '')
            ) {                
                $t[] = array(
                    'UserName' => $_POST['UserName-' . $i],
                    'RealName' => $_POST['RealName-' . $i],
                    'Subtitle' => $_POST['Subtitle-' . $i]            
                );
                
                $i++;
            }
            
            ia3_helpers::set_option('Twoosers', $t);            
            echo '<div class="updated" id="message"><p>' . __('Your Twitter settings have been successfully updated', 'ia3') . '</p></div>';
            
            return true;
        }
        
        /**
		*	@access	public
    	*	@return	void
		*
		*/
        
        static function save_tab_5() {
           
           switch($_GET['t']) {
           
                case 'infos':
                    ia3_helpers::set_option('mailContact', $_POST['mailContact']);  
                    ia3_helpers::set_option('phoneContact', $_POST['phoneContact']);  
                    ia3_helpers::set_option('twitterContact', $_POST['twitterContact']);  
                    ia3_helpers::set_option('linkedInContact', $_POST['linkedInContact']);  
                    ia3_helpers::set_option('addressContact', $_POST['addressContact']);  
                    ia3_helpers::set_option('addressContact2', $_POST['addressContact2']);
                    ia3_helpers::set_option('nameOrgContact', $_POST['nameOrgContact']);
                    ia3_helpers::set_option('coordinatesMap', $_POST['coordinatesMap']);
                    ia3_helpers::set_option('googleMapKey', $_POST['googleMapKey']);
                             
                    echo '<div class="updated" id="message"><p>' . __('Your contact settings have been successfully updated', 'ia3') . '</p></div>';
                
                break;
                
                case 'newsletter':
                
                    ia3_helpers::set_option('actionForm', $_POST['actionForm']);  
                    ia3_helpers::set_option('nameFieldForm', $_POST['nameFieldForm']);            
                    echo '<div class="updated" id="message"><p>' . __('Your newsletter settings have been successfully updated', 'ia3') . '</p></div>';
                
                break;
                
                case 'map':
                
                    ia3_helpers::set_option('imgMap', $_POST['imgMap']);              
                    echo '<div class="updated" id="message"><p>' . __('Your map settings have been successfully updated', 'ia3') . '</p></div>';
                
                break;
            
            }
            
            return true;
            
        }
    }

    if (function_exists('add_action')) {
        add_action('admin_menu', array('ia3_back', 'do_setup'));
    }

    /**
    *
    *   iA³ (Helpers) contains several helpers that allow the theme to perform
    *   as it should, as well as adding a few extra pieces of functionality when needed.
    *
    *   @author Ben Sekulowicz-Barclay (iA).
    *
    **/

    class ia3_helpers {

        /**
        *	@param	string
        *	@return string
        *	@author Ben Sekulowicz-Barclay
        *
        *	Returns the page based on the ID, (key) passed to it.
        *
        **/

        static function get_category($key = '') {
        	$cs = get_categories();

        	foreach($cs as $c) {
        		if ($c->cat_ID == $key) return $c;
        	}

        	return $cs[0];
        }

        /**
        *	@param	string
        *	@return string
        *	@author Ben Sekulowicz-Barclay
        *
        *	Returns the page based on the ID, (key) passed to it.
        *
        **/

        static function get_page($key = '') {
        	$ps = get_pages();

        	foreach($ps as $p) {
        		if ($p->ID == $key) return $p;
        	}

        	return $ps[0];
        }

        /**
        *	@return integer
        *	@author Ben Sekulowicz-Barclay
        *
        **/

        static function get_reading_time($post = FALSE) {
            if (!is_object($post)) return 'less than a minute';

            $w = str_word_count(strip_tags($post->post_content));
            $t = $w / 200 * 60;

            $m = intval($t / 60);
            $s = intval($t % 60);

            // Special case for really small times ...
            if ($m == 0) {
                return 'less than a minute';
            }

            // Everything else ...
            if ($s > 45) {
                $m++;
                return 'almost ' . $m . ' minutes';
            } else {
                return ($m == 1)? 'about a minute': 'about ' . $m . ' minutes';
            }
        }
        
        /**
		*	@access	static
		*	@param	string
		*	@param	string
    	*	@return	string
		*
		*/

		static function get_option($key, $default = '') {
		    $array = get_option('ia3_options');

            return (is_array($array) && isset($array[$key]))? $array[$key]: $default;
		}

		/**
		*	@access	static
		*	@param	string
    	*	@return	string
		*
		*/

		static function set_option($key, $value) {
		    $array = get_option('ia3_options');
		    if (!is_array($array)) $array = array();

		    $array[$key] = $value;

		    update_option('ia3_options', $array);
		}

		/**
		*	@access	static
		*	@param	string
    	*	@return	string
		*
		*/

		static function rem_option($key) {
		    $array = get_option('ia3_options');
		  	unset($array[$key]);
		    update_option('ia3_options', $array);
		}

		/**
		*	@access	static
		*	@param	string
    	*	@return	string
		*
		*/

		static function get_nav_cell($key = '', $default = '') {
		    $array = array();
		    $value = ia3_helpers::get_option($key);

		    if ($value == '') return $default;

		    if (preg_match("/^c\-(.*)/", $value, $array)) {
		        $item = ia3_helpers::get_category($array[1]);

        		$item_i = isset($item->cat_ID)? $item->cat_ID: 0;
        		$item_n = isset($item->name)? $item->name: __('Unknown', 'ia3');
        		$item_l = get_category_link($item_i);

        		if ((strpos($item_l . '***', $_SERVER['REQUEST_URI'] . '***')) && (!is_home())) {
                    return '<strong><a href="' . $item_l . '">' . $item_n . '</a></strong>';
                } else {
                    return '<a href="' . $item_l . '">' . $item_n . '</a>';
                }

        	} else if (preg_match("/^p\-(.*)/", $value, $array)) {
        	    $item = ia3_helpers::get_page($array[1]);

        		$item_i = isset($item->ID)? $item->ID: 0;
        		$item_n = isset($item->post_title)? $item->post_title: __('Unknown', 'ia3');
        		$item_l = get_page_link($item_i);

        		if ((strpos($item_l . '***', $_SERVER['REQUEST_URI'] . '***')) && (!is_home())) {
                    return '<strong><a href="' . $item_l . '">' . $item_n . '</a></strong>';
                } else {
                    return '<a href="' . $item_l . '">' . $item_n . '</a>';
                }
        	} else {
        	    $item_l = stripslashes($value);
        	    $item_u = array();

        	    if (preg_match("/^<a(.+)href=\"(.+)\"(.+)<\/a>$/", $item_l, $item_u)) {

        	        if (isset($item_u[2]) && strpos($item_u[2] . '***', $_SERVER['REQUEST_URI'] . '***')) {
                        return '<strong>' . $item_l . '</strong>';
                    } else {
                        return $item_l;
                    }
        	    }

                return $item_l;
		    }
		}

		/**
		*	@access	static
		*	@param	string
    	*	@return	void
		*
		*/

		static function put_nav_cell($key = '') {
		    $cs = get_categories();
		    $ps = get_pages();

		    $selected = FALSE;
		    ?>
		    <div style="margin-bottom:6px;margin-right:24px">
		        <select name="S-<?php echo $key; ?>">
                    <option value="-1"></option>
                    <optgroup label="<?php _e('Categories', 'ia3'); ?>">
						<?php
						foreach($cs as $c):
						if (ia3_helpers::get_option($key) == "c-" . $c->term_id):

						$selected = TRUE;
						?>
						<option value="c-<?php echo $c->term_id; ?>" selected="selected"><?php echo $c->name; ?></option>
						<?php else: ?>
						<option value="c-<?php echo $c->term_id; ?>"><?php echo $c->name; ?></option>
						<?php endif; endforeach; ?>
					</optgroup>
					<optgroup label="<?php _e('Pages', 'ia3'); ?>">
						<?php
						foreach($ps as $p):
						if (ia3_helpers::get_option($key) == "p-" . $p->ID):

						$selected = TRUE;
						?>
						<option value="p-<?php echo $p->ID; ?>" selected="selected"><?php echo $p->post_title; ?></option>
						<?php else: ?>
						<option value="p-<?php echo $p->ID; ?>"><?php echo $p->post_title; ?></option>
						<?php endif; endforeach; ?>
					</optgroup>
                </select>
            </div>
            <div style="margin-right:38px">
                <?php if($selected == TRUE): ?>
                <input class="isInputText isInputMono" name="I-<?php echo $key; ?>" value="" />
                <?php else: ?>
                <input class="isInputText isInputMono" name="I-<?php echo $key; ?>" value="<?php echo htmlspecialchars(stripslashes(ia3_helpers::get_option($key, '<a href="#">' . __('Page Name', 'ia3') . '</a>'))); ?>" />
                <?php endif; ?>
            </div>
            <?php
		    return;
		}
		
		/**
		*	@access	static
		*	@param	string
    	*	@return	void
		*
		*/
		
		static function geo_script() { 
		    ?>
            <script>
            function check_address(){
                var l1A = jQuery('#addressContact').attr('value');
                var l2A = jQuery('#addressContact2').attr('value');
                
                geocoder = new GClientGeocoder();
                geocoder.getLatLng(l1A + ' ' + l2A, function(point) {
                    if (!point) {
                        alert(address + " not found, please test address with maps.google.com");
                    } else {
                        jQuery('#coordinatesMap').attr('value',point);
                    }
                });
            }
            </script>
            <?php 
        }
        
        /**
		*	@access	static
		*	@param	string
    	*	@return	void
		*
		*/
        
        static function SetAnalytics() {       
            if(ia3_helpers::get_option('analyticsKey')){
            ?>
            <script>
                var _gaq = _gaq || [];
                _gaq.push(['_setAccount', '<?php echo ia3_helpers::get_option('analyticsKey'); ?>']);
                _gaq.push(['_trackPageview']);
            
                (function() {
                    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
                })();
            </script>

            <?php
            }

            if(ia3_helpers::get_option('reinvigorateKey')){
            ?>
            <script src="http://include.reinvigorate.net/re_.js"></script>
            <script>
            try {
                reinvigorate.track("<?php echo ia3_helpers::get_option('reinvigorateKey'); ?>");
            } catch(e) {

            }
            </script>
            <?php
            }
        }
    }

    /**
    *
    *   Prevent WordPress loading it's own version of jQuery, (use Google's instead)...
    *   - http://www.mogmachine.com/stop-wordpress-loading-jquery-in-wp_head/
    *
    **/

    if((!is_admin())||(isset($_GET['tab']))){
        wp_deregister_script('jquery');
        wp_register_script('jquery', ('http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js'), false, '1.4.4');
        wp_enqueue_script('jquery');
    }
    
    /**
    *
    *   Loading GoogleMap scripts
    *   
    *
    **/
    
    if ((is_admin()||ia3_helpers::get_option('coordinatesMap')!='')&& ia3_helpers::get_option('googleMapKey')!=''){
        
        wp_register_script('googlemap', ('http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=true&amp;key='.ia3_helpers::get_option('googleMapKey','').''), false);
        wp_enqueue_script('googlemap');
        
        
    }
    
    /**
    *
    *   Loading custon scripts. Analytics | Reinvigorate | Twitter Anywhere
    *   
    *
    **/
    
    if(!is_admin()){
        if(ia3_helpers::get_option('analyticsKey') || ia3_helpers::get_option('reinvigorateKey')){
            add_action('wp_footer', array(&$ia3h,'SetAnalytics'));
        }        
        
        if(ia3_helpers::get_option('EnableT') == 'on'){
            wp_register_script('tAnywhere', ('http://platform.twitter.com/anywhere.js?id=5tkByG68UteUZBFKSFryA&amp;v=1'), false);
            wp_enqueue_script('tAnywhere');
        }
    
    }

    /**
    *
    *   Setup any other functionality that occurs outside of the class structure.
    *
    **/

    if (function_exists('register_sidebar')) {
        register_sidebar(array('before_widget' => '', 'after_widget' => '', 'before_title' => '<h1>', 'after_title' => '</h1>'));
    }

    if (function_exists('add_theme_support')) {
        add_theme_support('post-thumbnails');
    }

    if (function_exists('load_theme_textdomain')) {
        load_theme_textdomain('ia3', TEMPLATEPATH . '/languages');
    }
    if (class_exists('ia3_helpers')) $ia3h = new ia3_helpers();
?>