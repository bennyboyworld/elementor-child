<?php
/*
 * Plugin Name:       Elementor Website Builder &#8211; More Than Just a Page Builder Child Plugin
 * Plugin URI:        https://www.wordpressdeveloperlondon.com/elementor-website-builder-more-than-just-a-page-builder/
 * Description:       Customised  Elementor Website Builder &#8211; More Than Just a Page Builder WordPress plugin code (dependancy on Elementor Website Builder &#8211; More Than Just a Page Builder plugin)
 * Version:           1.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            wordpressdeveloperlondon
 * Author URI:        https://www.wordpressdeveloperlondon.com
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       elementor-child
 * Domain Path:       /languages
 * Requires Plugins:  elementor
 */
 
 
/*
 * -----------------------------------------------------------------------------------------------------
 * Customised Elementor Website Builder &#8211; More Than Just a Page Builder WordPress plugin code (dependancy on Elementor Website Builder &#8211; More Than Just a Page Builder plugin)
 * -----------------------------------------------------------------------------------------------------
 */
  
 
/* 
 * WP plugin .css and .js files to enqueue AND WP plugin options page. If form option: 2 is set = respond
 */

if((get_option("wordpressdeveloperlondon_settingelementor_child_9444")) != 1) 
{
	function wordpressdeveloperlondon_files_elementor_child_9444()
	{
		$plugin_url = plugin_dir_url(__FILE__);

		wp_enqueue_style("elementor_child_9444-stylesheet", $plugin_url . "css/style.css");
		wp_enqueue_script("elementor_child_9444-script", $plugin_url . "js/scripts.js", array("jquery"), "1.0.0", true);
	}
	add_action("wp_enqueue_scripts", "wordpressdeveloperlondon_files_elementor_child_9444", 80);
}


/* 
 * WP plugin options page. If form option: 2 is set = respond
 */

if(get_option("wordpressdeveloperlondon_setting_htmlelementor_child_9444") != 1)
{
	function plugin_sourceelementor_child_9444()
	{
		if(is_home())
		{
			?>
			<div style="text-align:center;"><a href="https://www.wordpressdeveloperlondon.com">wordpressdeveloperlondon.com</a></div>
			<?php
		}
	}
	add_action("wp_footer", "plugin_sourceelementor_child_9444", 9);
}


/* 
 * WP plugin options page settings
 */

function wordpressdeveloperlondon_register_settingselementor_child_9444() 
{ 
	register_setting("wordpressdeveloperlondon_options_pageelementor_child_9444", "wordpressdeveloperlondon_settingelementor_child_9444", "wdl_callbackelementor_child_9444");
    register_setting("wordpressdeveloperlondon_options_pageelementor_child_9444", "wordpressdeveloperlondon_setting_htmlelementor_child_9444", "wdl_callbackelementor_child_9444");
}
add_action("admin_init", "wordpressdeveloperlondon_register_settingselementor_child_9444");


/* 
 * WP plugin options page menu 
 */

function wordpressdeveloperlondon_register_options_pageelementor_child_9444() 
{
	add_options_page("Elementor Website Builder &#8211; More Than Just a Page Builder Child Plugin Settings", "Elementor Website Builder &#8211; More Than Just a Page Builder Child Plugin Settings", "manage_options", "wordpressdeveloperlondonelementor_child_9444", "wordpressdeveloperlondon_register_options_page_formelementor_child_9444");
}
add_action("admin_menu", "wordpressdeveloperlondon_register_options_pageelementor_child_9444");


/*
 * WP Dashboard plugin settings page html
 */

function wordpressdeveloperlondon_register_options_page_formelementor_child_9444()
{ 
?>
<div>
	<h1>Elementor Website Builder &#8211; More Than Just a Page Builder Child Plugin Options</h1>
	<form method="post" action="options.php">
		<?php settings_fields("wordpressdeveloperlondon_options_pageelementor_child_9444"); ?>
		<p><label><input size="10" type="checkbox" name="wordpressdeveloperlondon_settingelementor_child_9444" value="1" <?php if((get_option("wordpressdeveloperlondon_settingelementor_child_9444") == 1)) { echo " checked "; } ?> > Tick to disable the .css and .js plugin files<label></p>
        <p><label><input size="10" type="checkbox" name="wordpressdeveloperlondon_setting_htmlelementor_child_9444" value="1" <?php if((get_option("wordpressdeveloperlondon_setting_htmlelementor_child_9444") == 1)) { echo " checked "; } ?> > Tick to disable the author footer link</p>
		<?php submit_button(); ?>
	</form>
</div>
<?php
}
