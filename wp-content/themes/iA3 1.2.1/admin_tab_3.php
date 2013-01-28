<ul id="isIa3Tabs">
    <li><a href="?page=ia3&amp;tab=1"><?php _e('Navigation', 'ia3'); ?></a></li>
    <li><strong><a href="?page=ia3&amp;tab=3"><?php _e('Tweets', 'ia3'); ?></a></strong></li>
    <li><a href="?page=ia3&amp;tab=5"><?php _e('Contact Page', 'ia3'); ?></a></li>
    <li><a href="?page=ia3&amp;tab=4"><?php _e('Updates', 'ia3'); ?></a></li>
    <li><a href="?page=ia3&amp;tab=2"><?php _e('Miscellaneous', 'ia3'); ?></a></li>
</ul><!-- #isIa3Tabs -->

<div id="isIa3Content">
    <form action="admin.php?page=ia3&amp;tab=3&amp;save=1" method="post">
        <?php foreach(ia3_helpers::get_option('Twoosers') as $i => $twooser): ?>
        <table class="Twooser">
            <tr>
                <td class="isColLabel">
                    <label for="UserName-<?php echo $i; ?>"><?php _e('User Name', 'ia3'); ?>:</label>
                </td>
                <td class="isColInput">
                    <input class="isInputMono isInputText" id="UserName-<?php echo $i; ?>" name="UserName-<?php echo $i; ?>" value="<?php echo $twooser['UserName']; ?>" />
                </td>
            </tr> 
            <tr>
                <td class="isColLabel">
                    <label for="RealName-<?php echo $i; ?>"><?php _e('Real Name', 'ia3'); ?>:</label>
                </td>
                <td class="isColInput">
                    <input class="isInputMono isInputText" id="RealName-<?php echo $i; ?>" name="RealName-<?php echo $i; ?>" value="<?php echo $twooser['RealName']; ?>" />
                </td>
            </tr>
            <tr>
                <td class="isColLabel">
                    <label for="Subtitle-<?php echo $i; ?>"><?php _e('Subtitle', 'ia3'); ?>:</label>
                </td>
                <td class="isColInput">
                    <input class="isInputMono isInputText" id="Subtitle-<?php echo $i; ?>" name="Subtitle-<?php echo $i; ?>" value="<?php echo $twooser['Subtitle']; ?>" />
                </td>
            </tr>           
            <tr class="lastChild">
                <td class="isColLabel">
                    &nbsp;
                </td>
                <td class="isColInput">
                    <button type="submit" value="kill"><?php _e('Remove User', 'ia3'); ?></button>
                </td>
            </tr>
        </table>    
        <?php endforeach; ?>
        
        <table class="Twooser lastChild">
            <tr>
                <td class="isColLabel">
                    <label for="UserName-<?php echo $i + 1; ?>"><?php _e('User Name', 'ia3'); ?>:</label>
                </td>
                <td class="isColInput">
                    <input class="isInputMono isInputText" id="UserName-<?php echo $i + 1; ?>" name="UserName-<?php echo $i + 1; ?>" value="" />
                </td>
            </tr> 
            <tr>
                <td class="isColLabel">
                    <label for="RealName-<?php echo $i + 1; ?>"><?php _e('Real Name', 'ia3'); ?>:</label>
                </td>
                <td class="isColInput">
                    <input class="isInputMono isInputText" id="RealName-<?php echo $i + 1; ?>" name="RealName-<?php echo $i + 1; ?>" value="" />
                </td>
            </tr>
            <tr>
                <td class="isColLabel">
                    <label for="Subtitle-<?php echo $i + 1; ?>"><?php _e('Subtitle', 'ia3'); ?>:</label>
                </td>
                <td class="isColInput">
                    <input class="isInputMono isInputText" id="Subtitle-<?php echo $i + 1; ?>" name="Subtitle-<?php echo $i + 1; ?>" value="" />
                </td>
            </tr>           
            <tr class="lastChild">
                <td class="isColLabel">
                    &nbsp;
                </td>
                <td class="isColInput">
                    <button type="submit" value="add"><?php _e('Update Users', 'ia3'); ?></button>
                </td>
            </tr>
        </table>
    </form>
</div><!-- #isIa3Content -->

<script>
    jQuery('#isIa3Content button').click(function(e) {
        var $b = jQuery(e.target),
            $t = jQuery($b.parents('table.Twooser'));
        
        if ($b.val() == 'kill') $t.remove();
        
        jQuery('#isIa3Content table.Twooser').each(function(i, e) {
            var $e = $(e);
            
            jQuery('tr:nth-child(1) input', $e).first().attr({'id': 'UserName-' + i, 'name': 'UserName-' + i});
            jQuery('tr:nth-child(2) input', $e).first().attr({'id': 'RealName-' + i, 'name': 'RealName-' + i});
            jQuery('tr:nth-child(3) input', $e).first().attr({'id': 'Subtitle-' + i, 'name': 'Subtitle-' + i});
        });
        
        jQuery('#isIa3Content form').submit();
        
        return false;
    });
</script>