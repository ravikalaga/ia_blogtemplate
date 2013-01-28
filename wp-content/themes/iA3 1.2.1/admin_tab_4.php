<ul id="isIa3Tabs">
    <li><a href="?page=ia3&amp;tab=1"><?php _e('Navigation', 'ia3'); ?></a></li>
    <li><a href="?page=ia3&amp;tab=3"><?php _e('Tweets', 'ia3'); ?></a></li>
    <li><a href="?page=ia3&amp;tab=5"><?php _e('Contact Page', 'ia3'); ?></a></li>
    <li><strong><a href="?page=ia3&amp;tab=4"><?php _e('Updates', 'ia3'); ?></a></strong></li>
    <li><a href="?page=ia3&amp;tab=2"><?php _e('Miscellaneous', 'ia3'); ?></a></li>
</ul><!-- #isIa3Tabs -->

<div id="isIa3Content">
    <div class="updateMessage">
        <p><?php _e('Your version of the iA³ theme is the latest version. You do not need to update at this time.', 'ia3'); ?></p>
    </div>
</div><!-- #isIa3Content -->

<script>
    jQuery.getJSON('<?php echo UPDATE_URL; ?>?key=<?php echo UPDATE_KEY; ?>&jsoncallback=?', function(data) {
        var c = '<?php echo VERSION; ?>',
            v = data.version,
            m = data.message,
            u = data.url;
        
        if (parseFloat(v.replace(".", '')) - parseFloat(c.replace(".", '')) > 0) {
            jQuery('#isIa3Content > .updateMessage').html('<p>' + m + '</p><p><a href="' + u + '">Download iA³ ' + v + '</a>.</p>');
        }
    });
</script>
