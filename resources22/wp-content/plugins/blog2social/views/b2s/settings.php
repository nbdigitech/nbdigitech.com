<?php
require_once B2S_PLUGIN_DIR . 'includes/B2S/Settings/Item.php';
require_once B2S_PLUGIN_DIR . 'includes/Options.php';
$settingsItem = new B2S_Settings_Item();
?>

<div class="b2s-container">
    <?php require_once (B2S_PLUGIN_DIR . 'views/b2s/html/header.phtml'); ?>
    <div class=" b2s-inbox col-md-12 del-padding-left">
        <div class="col-md-9 del-padding-left">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-md-12">
                        <div class="grid b2s-post"></div>
                        <div class="row b2s-loading-area width-100" style="display: none;">
                            <div class="b2s-loader-impulse b2s-loader-impulse-md"></div>
                            <div class="text-center b2s-loader-text"><?php _e("save...", "blog2social"); ?></div>
                        </div>
                        <div class="row b2s-user-settings-area">
                            <ul  class="nav nav-pills">
                                <li class="active">
                                    <a href="#b2s-general" class="b2s-general" data-toggle="tab"><?php _e('General', 'blog2social') ?></a>
                                </li>
                                <li>
                                    <a href="#b2s-best-time-manager" class="b2s-best-time-manager" data-toggle="tab"><?php _e('Best Time Settings', 'blog2social') ?></a>
                                </li>
                                <li>
                                    <a href="#b2s-network" class="b2s-network" data-toggle="tab"><?php _e('Network Settings', 'blog2social') ?></a>
                                </li>
                            </ul>
                            <hr>
                            <div class="tab-content clearfix">
                                <div class="tab-pane active" id="b2s-general">
                                    <?php echo $settingsItem->getGeneralSettingsHtml(); ?>
                                </div>
                                <div class="tab-pane" id="b2s-best-time-manager">
                                    <h4><?php echo _e('My Time Settings', 'blog2social'); ?>
                                        <a href="#" data-toggle="modal" data-target="#b2sInfoSchedTimesModal" class="btn btn-link btn-lg del-padding-left b2s-load-settings-sched-time-default-info"><span class="glyphicon glyphicon-info-sign glyphicon-success"></span></a>

                                        <div class="pull-right">
                                            <?php if (B2S_PLUGIN_USER_VERSION > 0) { ?>
                                                <a href="#" class="btn btn-primary btn-xs b2s-get-settings-sched-time-default">
                                                <?php } else { ?>
                                                    <a href="#" class="btn btn-primary btn-xs" data-title = "<?php _e('You want to schedule your posts and use the Best Time Scheduler?', 'blog2social') ?>" data-toggle ="modal" data-target ="#b2sPreFeatureModal">
                                                    <?php } _e('Reset predefined best time settings', 'blog2social'); ?></a>
                                                <button id="b2s-save-time-settings-btn-trigger" class="btn btn-success btn-xs"><?php _e('save', 'blog2social') ?></button>
                                        </div>
                                    </h4>
                                    <div class="clearfix"></div>
                                    <?php echo $settingsItem->getSchedSettingsHtml(); ?>
                                </div>
                                <div class="tab-pane" id="b2s-network"> 
                                    <div class="col-md-12">
                                        <h4> <?php _e('Post format', 'blog2social'); ?> 
                                            <a href="#" data-toggle="modal" data-target="#b2sInfoFormatModal" class="btn btn-link btn-lg del-padding-left"><span class="glyphicon glyphicon-info-sign glyphicon-success"></span></a>
                                        </h4>
                                        <ul  class="nav nav-pills">
                                            <li class="active">
                                                <a href="#b2s-network-1" class="b2s-network-1" data-toggle="tab"><?php _e('Facebook', 'blog2social') ?></a>
                                            </li>
                                            <li>
                                                <a href="#b2s-network-2" class="b2s-network-2" data-toggle="tab"><?php _e('Twitter', 'blog2social') ?></a>
                                            </li>  
                                        </ul>
                                        <hr>
                                        <div class="tab-content clearfix">

                                            <div class="tab-pane active" id="b2s-network-1">
                                                <form class="b2sSaveUserSettingsPostFormatFb" method="post" novalidate="novalidate">                                                
                                                    <?php
                                                    echo $settingsItem->getNetworkSettingsPostFormatHtml(1);
                                                    if (B2S_PLUGIN_USER_VERSION >= 1) {
                                                        ?>
                                                        <button class="btn btn-success pull-right" type="submit"><?php _e('save', 'blog2social') ?></button>
                                                     <?php } ?>
                                                    <input type="hidden" name="action" value="b2s_user_network_settings">
                                                    <input type="hidden" name="type" value="post_format">
                                                    <input type="hidden" name="network_id" value="1">
                                                </form>      
                                            </div>    
                                            <div class="tab-pane" id="b2s-network-2">
                                                <form class="b2sSaveUserSettingsPostFormatTw" method="post" novalidate="novalidate">                                                
                                                    <?php
                                                    echo $settingsItem->getNetworkSettingsPostFormatHtml(2);
                                                    if (B2S_PLUGIN_USER_VERSION >= 1) {
                                                        ?>
                                                        <button class="btn btn-success pull-right" type="submit"><?php _e('save', 'blog2social') ?></button>
                                                    <?php } ?>
                                                    <input type="hidden" name="action" value="b2s_user_network_settings">
                                                    <input type="hidden" name="type" value="post_format">
                                                    <input type="hidden" name="network_id" value="2">
                                                </form>    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" id="b2s_user_version" value="<?php echo B2S_PLUGIN_USER_VERSION; ?>" />
                        <?php
                        $noLegend = 1;
                        require_once (B2S_PLUGIN_DIR . 'views/b2s/html/footer.phtml');
                        ?>
                    </div>
                </div>
            </div>
        </div>
<?php require_once (B2S_PLUGIN_DIR . 'views/b2s/html/service.phtml'); ?>
<?php require_once (B2S_PLUGIN_DIR . 'views/b2s/html/sidebar.phtml'); ?>
    </div>
</div>
<input type="hidden" id="b2sLang" value="<?php echo substr(B2S_LANGUAGE, 0, 2); ?>">
<input type="hidden" id="b2sShowSection" value="<?php echo (isset($_GET['show']) ? $_GET['show'] : ''); ?>">

<div class="modal fade" id="b2sInfoFormatModal" tabindex="-1" role="dialog" aria-labelledby="b2sInfoFormatModal" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="b2s-modal-close close" data-modal-name="#b2sInfoFormatModal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><?php _e('Select the preferred custom post format for your posts', 'blog2social') ?></h4>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <b><?php _e('You can define your preferred custom post format link post or photo post:') ?></b>
                    <div class="col-md-6">
                        <br>
                        <b>1) <?php _e('Link Post', 'blog2social') ?></b><br>
<?php _e('The link post format displays posts title, link address and the first one or two sentences of the post. The networks scan this information from your META or OpenGraph. Link posts display the post image, you selected in your WordPress. In case, you have not selected a post image, some networks display the first image detected on your page. The image links to your blog post.', 'blog2social'); ?>
                    </div>
                    <div class="col-md-6">
                        <br>
                        <b>2) <?php _e('Photo Post', 'blog2social') ?></b><br>
<?php _e('A photo or image post displays the selected image in the one-page preview of Blog2Social and your comment above the image. The image links to the image view on your image gallery in the respective network. Blog2Social adds the link to your post in your comment. The main benefit of photo posts is that your image is uploaded to your personal image albums or gallery. In Facebook you can edit the albums name with a description of your choice.', 'blog2social'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="b2sInfoAllowShortcodeModal" tabindex="-1" role="dialog" aria-labelledby="b2sInfoAllowShortcodeModal" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="b2s-modal-close close" data-modal-name="#b2sInfoAllowShortcodeModal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><?php _e('Allow shortcodes in my post', 'blog2social') ?></h4>
            </div>
            <div class="modal-body">
<?php _e('Shortcodes are used by some wordpress plugins like Elementor, Visual Composer and Content Builder. When a shortcode is inserted in a WordPress post or page, it is replaced with some other content when you publish the article on your blog. In other words, a shortcode instructs WordPress to find a special command that is placed in square brackets ([]) and replace it with the appropriate dynamic content by a plugin you use.<br><br>Activate this feature, if you should use dynamic elements in your articles.', 'blog2social') ?>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="b2sInfoTimeZoneModal" tabindex="-1" role="dialog" aria-labelledby="b2sInfoTimeZoneModal" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="b2s-modal-close close" data-modal-name="#b2sInfoTimeZoneModal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><?php _e('Personal Time Zone', 'blog2social') ?></h4>
            </div>
            <div class="modal-body">
<?php _e('Blog2Social applies the scheduled time settings based on the time zone defined in the general settings of your WordPress. You can select a user-specific time zone that deviates from the Wordpress system time zone for your social media scheduling.<br><br>Select the desired time zone from the drop-down menu.', 'blog2social') ?>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="b2sInfoAutoShareSettingsModal" tabindex="-1" role="dialog" aria-labelledby="b2sInfoAutoShareSettingsModal" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="b2s-modal-close close" data-modal-name="#b2sInfoAutoShareSettingsModal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><?php _e('Select the content type you want to auto-post by default', 'blog2social') ?></h4>
            </div>
            <div class="modal-body">
<?php _e('Please select the content type you want to auto-post by default.<br>You can activate auto-post by default for posts, pages and any custom post type. As well, you can differentiate between new and updated pieces of content.<br>Once activated, Blog2Social will auto-post any respective piece of content whenever you publish or update it.  You can activate or deactivate auto-posting for a single piece of content in the WordPress post editor. ', 'blog2social') ?>
            </div>
        </div>
    </div>
</div>







