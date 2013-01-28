<?php ia3_helpers::geo_script();?>
<ul id="isIa3Tabs">
    <li><a href="?page=ia3&amp;tab=1"><?php _e('Navigation', 'ia3'); ?></a></li>
    <li><a href="?page=ia3&amp;tab=3"><?php _e('Tweets', 'ia3'); ?></a></li>
    <li><strong><a href="?page=ia3&amp;tab=5"><?php _e('Contact Page', 'ia3'); ?></a></strong></li>
    <li><a href="?page=ia3&amp;tab=4"><?php _e('Updates', 'ia3'); ?></a></li>
    <li><a href="?page=ia3&amp;tab=2"><?php _e('Miscellaneous', 'ia3'); ?></a></li>
</ul><!-- #isIa3Tabs -->

<div id="isIa3Content">
<form action="admin.php?page=ia3&amp;tab=5&amp;save=1&amp;t=infos" method="post">
    <table class="Twooser">
        <tr>
           <td class="isColLabel">
               <label for="mailContact"><?php _e('Email Address', 'ia3'); ?>:</label>
           </td>
           <td class="isColInput">
               <input class="isInputMono isInputText" type="text" id="mailContact" name="mailContact" value="<?php echo htmlentities(stripslashes(ia3_helpers::get_option('mailContact', __('contact@informationarchitects.jp', 'ia3'))), ENT_NOQUOTES, 'UTF-8'); ?>">
           </td>
        </tr>
        <tr>
            <td class="isColLabel">
                <label for="phoneContact"><?php _e('Telephone', 'ia3'); ?>:</label>
            </td>
            <td class="isColInput">
                <input class="isInputMono isInputText" type="text" id="phoneContact" name="phoneContact" value="<?php echo htmlentities(stripslashes(ia3_helpers::get_option('phoneContact', __('', 'ia3'))), ENT_NOQUOTES, 'UTF-8'); ?>" >
            </td>
        </tr>
        <tr>
            <td class="isColLabel">
                <label for="twitterContact"><?php _e('Twitter', 'ia3'); ?>:</label>
            </td>
            <td class="isColInput">
                <input class="isInputMono isInputText" type="text" id="twitterContact" name="twitterContact" value="<?php echo htmlentities(stripslashes(ia3_helpers::get_option('twitterContact', __('iA', 'ia3'))), ENT_NOQUOTES, 'UTF-8'); ?>">
            </td>
        </tr>
        <tr>
            <td class="isColLabel">
                <label for="linkedInContact"><?php _e('LinkedIn', 'ia3'); ?>:</label>
            </td>
            <td class="isColInput">
                <input class="isInputMono isInputText" type="text" id="linkedInContact" name="linkedInContact" value="<?php echo htmlentities(stripslashes(ia3_helpers::get_option('linkedInContact', __('informationarchitect', 'ia3'))), ENT_NOQUOTES, 'UTF-8'); ?>">
            </td>
        </tr>
        <tr>
            <td class="isColLabel">
                <label for="addressContact"><?php _e('Address Line One', 'ia3'); ?>:</label>
            </td>
            <td class="isColInput">
                <input class="isInputMono isInputText" type="text" id="addressContact" name="addressContact" value="<?php echo htmlentities(stripslashes(ia3_helpers::get_option('addressContact', __('Route Kamiyama-cho Building 5F 5-2 Kamiyama-cho', 'ia3'))), ENT_NOQUOTES, 'UTF-8'); ?>">
            </td>
        </tr>
        <tr>
            <td class="isColLabel">
                <label for="addressContact2"><?php _e('Address Line Two', 'ia3'); ?>:</label>
            </td>
            <td class="isColInput">
                <input class="isInputMono isInputText" type="text" id="addressContact2" name="addressContact2" value="<?php echo htmlentities(stripslashes(ia3_helpers::get_option('addressContact2', __('Shibuya-ku, Tokyo 150-0047 Japan', 'ia3'))), ENT_NOQUOTES, 'UTF-8'); ?>">
            </td>
        </tr>
        <tr>
            <td class="isColLabel">
                <label for="nameOrgContact"><?php _e('Organisation Name', 'ia3'); ?>:</label>
            </td>
            <td class="isColInput">
                <input class="isInputMono isInputText" type="text" id="nameOrgContact" name="nameOrgContact" value="<?php echo htmlentities(stripslashes(ia3_helpers::get_option('nameOrgContact', __('Information Architects, Inc.', 'ia3'))), ENT_NOQUOTES, 'UTF-8'); ?>">
            </td>
        </tr>
        <tr>
            <td class="isColLabel">
                <label for="googleMapKey"><?php _e('Google map api key', 'ia3'); ?>:</label>
            </td>
            <td class="isColInput">
                <input class="isInputMono isInputText" type="text" id="googleMapKey" name="googleMapKey" value="<?php echo htmlentities(stripslashes(ia3_helpers::get_option('googleMapKey', __('', 'ia3'))), ENT_NOQUOTES, 'UTF-8'); ?>">
            </td>
        </tr>
         <?php if(ia3_helpers::get_option('googleMapKey')!=''){?>
        <tr>
            <td class="isColLabel">
                <label for="coordinatesMap"><?php _e('Google Map Coordinates', 'ia3'); ?>:</label>
            </td>
            <td class="isColInput">
                <input class="isInputMono isInputText" type="text" id="coordinatesMap" name="coordinatesMap" value="<?php echo htmlentities(stripslashes(ia3_helpers::get_option('coordinatesMap', __('', 'ia3'))), ENT_NOQUOTES, 'UTF-8'); ?>">
                <a href="#gCoord" id="gCoord"  onclick="check_address()">Generate coordinates from address</a><br />
            </td>
        </tr>
        <?php }?>
        <tr class="lastChild">
            <td class="isColLabel">
                &nbsp;
            </td>
            <td class="isColInput">
                <button style="margin:20px 0 20px" type="submit"><?php _e('Save Settings', 'ia3'); ?></button>
            </td>
        </tr>               
    </table>         
</form>
    <form action="admin.php?page=ia3&amp;tab=5&amp;save=1&amp;t=newsletter" method="post">
    <table class="Twooser">
        <tr>
            <td class="isColLabel">
                <label for="actionForm"><?php _e('Newsletter Form URL', 'ia3'); ?>:</label>
            </td>
            <td class="isColInput">
                <input class="isInputMono isInputText" type="text" id="actionForm" name="actionForm" value="<?php echo htmlentities(stripslashes(ia3_helpers::get_option('actionForm', __('', 'ia3'))), ENT_NOQUOTES, 'UTF-8'); ?>">
            </td>
        </tr>
        <tr>
            <td class="isColLabel">
                <label for="nameFieldForm"><?php _e('Newsletter Form Field Name', 'ia3'); ?>:</label>
            </td>
            <td class="isColInput">
                <input class="isInputMono isInputText" type="text" id="nameFieldForm" name="nameFieldForm" value="<?php echo htmlentities(stripslashes(ia3_helpers::get_option('nameFieldForm', __('', 'ia3'))), ENT_NOQUOTES, 'UTF-8'); ?>">
            </td>
        </tr>
        <tr class="lastChild">
            <td class="isColLabel">
                &nbsp;
            </td>
            <td class="isColInput">
                <button style="margin:20px 0 20px" type="submit"><?php _e('Save Settings', 'ia3'); ?></button>
            </td>
        </tr>
    </table>
</form>

<form action="admin.php?page=ia3&amp;tab=5&amp;save=1&amp;t=map" method="post">
    <table class="Twooser">
        <tr>
            <td class="isColLabel">
                <label for="imgMap"><?php _e('Static Map Image', 'ia3'); ?>:</label>
            </td>
            <td class="isColInput">
                <input class="isInputMono isInputText" type="text" id="imgMap" name="imgMap" value="<?php echo htmlentities(stripslashes(ia3_helpers::get_option('imgMap', __('/assets/img/map.png', 'ia3'))), ENT_NOQUOTES, 'UTF-8'); ?>">
            </td>
        </tr>
        <tr class="lastChild">
            <td class="isColLabel">
                &nbsp;
            </td>
            <td class="isColInput">
                <button style="margin:20px 0 20px" type="submit"><?php _e('Save Settings', 'ia3'); ?></button>
            </td>
        </tr>
    </table>
</form>
</div><!-- #isIa3Content -->