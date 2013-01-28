<ul id="isIa3Tabs">
    <li><a href="?page=ia3&amp;tab=1"><?php _e('Navigation', 'ia3'); ?></a></li>
    <li><a href="?page=ia3&amp;tab=3"><?php _e('Tweets', 'ia3'); ?></a></li>
    <li><a href="?page=ia3&amp;tab=5"><?php _e('Contact Page', 'ia3'); ?></a></li>
    <li><a href="?page=ia3&amp;tab=4"><?php _e('Updates', 'ia3'); ?></a></li>
    <li><strong><a href="?page=ia3&amp;tab=2"><?php _e('Miscellaneous', 'ia3'); ?></a></strong></li>
</ul><!-- #isIa3Tabs -->

<div id="isIa3Content">
    <form action="admin.php?page=ia3&amp;tab=2&amp;save=1" method="post">
        <table class="">
            <tr>
                <td class="isColLabel">
                    <label for="Colours-1"><?php _e('Highlight Colour', 'ia3'); ?>:</label>
                </td>
                <td class="isColInput">
                    <input class="isInputMono isInputText" id="Colours-1" name="Colours-1" value="<?php echo ia3_helpers::get_option('Colours-1', '#CC0000'); ?>" />
                    <p><em><?php _e('Specify the highlight colour used throughout the theme, as either a hexadecimal or RGB colour code.', 'ia3'); ?></em></p>
                </td>
            </tr>
            <tr>
                <td class="isColLabel">
                    <label for="Colours-2"><?php _e('Lowlight Colour', 'ia3'); ?>:</label>
                </td>
                <td class="isColInput">
                    <input class="isInputMono isInputText" id="Colours-2" name="Colours-2" value="<?php echo ia3_helpers::get_option('Colours-2', '#AA0000'); ?>" />
                    <p><em><?php _e('Specify the lowlight colour used throughout the theme, as either a hexadecimal or RGB colour code.', 'ia3'); ?></em></p>
                </td>
            </tr>
            <tr>
                <td class="isColLabel">
                    <label for="Colours-2"><?php _e('Logo Image', 'ia3'); ?>:</label>
                </td>
                <td class="isColInput">
                    <input class="isInputMono isInputText isInputTextLong" id="Logo" name="Logo" value="<?php echo ia3_helpers::get_option('Logo', 'http://www.placeholder-image.com/image/144x87'); ?>" />
                    <p><em><?php _e('Specify the image you wish to use in the theme header. The optimal size is 142 pixels wide and 55 pixels tall.', 'ia3'); ?></em></p>
                </td>
            </tr>
            <tr>
                <td class="isColLabel">
                    <label for="analyticsKey"><?php _e('Google Analytics', 'ia3'); ?>:</label>
                </td>
                <td class="isColInput">
                    <input class="isInputMono isInputText" type="text" id="analyticsKey" name="analyticsKey" value="<?php echo htmlentities(stripslashes(ia3_helpers::get_option('analyticsKey', __('', 'ia3')))); ?>">
                    <p><?php _e("Specify your Google Analytics user key to enable Google Analytics", 'ia3'); ?></p>
                </td>
            </tr>
            <tr>
                <td class="isColLabel">
                    <label for="reinvigorateKey"><?php _e('Reinvigorate Key', 'ia3'); ?>:</label>
                </td>
                <td class="isColInput">
                    <input class="isInputMono isInputText" type="text" id="reinvigorateKey" name="reinvigorateKey" value="<?php echo htmlentities(stripslashes(ia3_helpers::get_option('reinvigorateKey', __('', 'ia3'))), ENT_NOQUOTES, 'UTF-8'); ?>">
                    <p><?php _e("Specify your Reinvigorate user key to enable Reinvigorate", 'ia3'); ?></p>
                </td>
            </tr>
             <tr>
                <td class="isColLabel">
                    &nbsp;
                </td>
                <td class="isColInput">
                    <p class="chck">
                        <?php if(ia3_helpers::get_option('backWardsC') == 'on'): ?>
                        <input checked="checked" id="backWardsC" name="backWardsC" type="checkbox" value="off" />
                        <?php else: ?>
                        <input id="backWardsC" name="backWardsC" type="checkbox" value="off" />
                        <?php endif ; ?>    
                        
                        <em><?php _e('Enable backwards compatibility stylesheet, (support for version 1.1 and before)', 'ia3'); ?></em>
                    </p>  
                </td>
            </tr>
            <tr>
                <td class="isColLabel">
                    &nbsp;
                </td>
                <td class="isColInput">
                    <p class="chck">
                        <?php if(ia3_helpers::get_option('EnableT') == 'on'): ?>
                        <input checked="checked" id="EnableT" name="EnableT" type="checkbox" value="off" />
                        <?php else: ?>
                        <input id="EnableT" name="EnableT" type="checkbox" value="off" />
                        <?php endif ; ?>    
                        
                        <em><?php _e('Enable Twitter Anywhere overlays and behaviour', 'ia3'); ?></em>
                    </p> 
                </td>
            </tr>
            <tr>
                <td class="isColLabel">
                    &nbsp;
                </td>
                <td class="isColInput">
                    <button type="submit"><?php _e('Save Settings', 'ia3'); ?></button>
                </td>
            </tr>
        </table>
    </form>
</div><!-- #isIa3Content -->