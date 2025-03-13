<?php
/**
 *
 * Damaïo style configuration extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2023 - cabot
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}
// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//
$lang = array_merge($lang, [
	'ACP_DAMAIO_ENABLE'					=> 'Enable extension',
	'ACP_DAMAIO_ENABLE_EXPLAIN'			=> 'If disabled, only members of the "Administrators" group will see the changes, allowing you to configure the style without disturbing users.',
	'ACP_DAMAIO_HEADING'				=> 'Damaïo style configuration',
	'ACP_DAMAIO_PREVIEW'				=> 'Preview of changes',
	'ACP_DAMAIO_PREVIEW_EXPLAIN'		=> 'Click the button to display the preview of <b>validated</b> changes.',
	'ACP_DAMAIO_LOGO'					=> 'Logo',
	'ACP_DAMAIO_LOGO_PATH'				=> 'Logo location',
	'ACP_DAMAIO_LOGO_PATH_EXPLAIN'		=> 'Enter the full URL (e.g., <code>https://example.com/logoname.jpg</code>) or the relative path to the board root (e.g., <code>images/logoname.png</code>).<br>Leave the field empty to use the original logo, in which case the dimensions entered below will have no effect.',
	'ACP_DAMAIO_LOGO_WIDTH'				=> 'Logo width',
	'ACP_DAMAIO_LOGO_HEIGHT'			=> 'Logo height',
	'ACP_DAMAIO_COLORS'					=> 'Colors',
	'ACP_DAMAIO_COLORS_EXPLAIN'			=> 'You can set custom colors or leave the fields empty to use the style’s original colors.',
	'ACP_DAMAIO_COLOR_PICKER'			=> 'Enable color picker',
	'ACP_DAMAIO_COLOR_PICKER_EXPLAIN'	=> 'If this option is disabled, users will not be able to modify the style colors.',
	'ACP_DAMAIO_MAINCOLOR1'				=> 'Color 1',
	'ACP_DAMAIO_MAINCOLOR1_EXPLAIN'		=> 'Color of main blocks and buttons.',
	'ACP_DAMAIO_MAINCOLOR2'				=> 'Color 2',
	'ACP_DAMAIO_MAINCOLOR2_EXPLAIN'		=> 'Color of links on hover.',
	'ACP_DAMAIO_MAINCOLOR3'				=> 'Color 3',
	'ACP_DAMAIO_MAINCOLOR3_EXPLAIN'		=> 'Color of buttons on hover.',
	'ACP_DAMAIO_LAYOUT'					=> 'Layout',
	'ACP_DAMAIO_MODAL_LOGIN'			=> 'Modal login window',
	'ACP_DAMAIO_MODAL_LOGIN_EXPLAIN'	=> 'Allows displaying the login form in a modal window.',
	'ACP_DAMAIO_STICKYNAV'				=> 'Sticky navbar',
	'ACP_DAMAIO_STICKYNAV_EXPLAIN'		=> 'Keeps the main menu bar visible when scrolling.',
	'ACP_DAMAIO_HEADER_WIDTH'			=> 'Display header in full width',
	'ACP_DAMAIO_FOOTER_WIDTH'			=> 'Display footer in full width',
	'ACP_DAMAIO_PASSWORD_SHOW'			=> 'Password display',
	'ACP_DAMAIO_PASSWORD_SHOW_EXPLAIN'	=> 'Allows adding an icon to show/hide the password.',
	'ACP_DAMAIO_MAIN_WIDTH'				=> 'Style max width',
	'ACP_DAMAIO_MAIN_WIDTH_EXPLAIN'		=> 'Set the width of the board content here.<br>Enter the value "<code>none</code>" to display the entire style in full width.<br>Leave the field empty to use the original value.',
	'ACP_DAMAIO_FOOTER_ICONS'			=> 'Footer icons',
	'ACP_DAMAIO_FOOTER_ICONS_EXPLAIN'	=> 'Enter a URL to display the corresponding field icon. Leave the field empty to not display the icon.',
	'ACP_DAMAIO_BLUESKY'				=> 'Bluesky',
	'ACP_DAMAIO_DEVIANTART'				=> 'DeviantArt',
	'ACP_DAMAIO_DISCORD'				=> 'Discord',
	'ACP_DAMAIO_FACEBOOK'				=> 'Facebook',
	'ACP_DAMAIO_FLICKR'					=> 'Flickr',
	'ACP_DAMAIO_GITHUB'					=> 'GitHub',
	'ACP_DAMAIO_INSTAGRAM'				=> 'Instagram',
	'ACP_DAMAIO_LINKEDIN'				=> 'LinkedIn',
	'ACP_DAMAIO_MASTODON'				=> 'Mastodon',
	'ACP_DAMAIO_PAYPAL'					=> 'PayPal',
	'ACP_DAMAIO_PINTEREST'				=> 'Pinterest',
	'ACP_DAMAIO_REDDIT'					=> 'Reddit',
	'ACP_DAMAIO_SKYPE'					=> 'Skype',
	'ACP_DAMAIO_SNAPCHAT'				=> 'Snapchat',
	'ACP_DAMAIO_SOUNDCLOUD'				=> 'SoundCloud',
	'ACP_DAMAIO_STEAM'					=> 'Steam',
	'ACP_DAMAIO_TELEGRAM'				=> 'Telegram',
	'ACP_DAMAIO_TIKTOK'					=> 'TikTok',
	'ACP_DAMAIO_TUMBLR'					=> 'Tumblr',
	'ACP_DAMAIO_TWITTER'				=> 'Twitter',
	'ACP_DAMAIO_VKONTAKTE'				=> 'VKontakte',
	'ACP_DAMAIO_WHATSAPP'				=> 'WhatsApp',
	'ACP_DAMAIO_YOUTUBE'				=> 'YouTube',
	'ACP_DAMAIO_FEED'					=> 'Feed icon',
	'ACP_DAMAIO_FEED_EXPLAIN'			=> 'Displaying this icon requires that feeds are enabled in the "<a href="%1$s">Feeds settings</a>".',
	'ACP_DAMAIO_ADVANCED_CUSTOM'		=> 'Advanced customisation',
	'ACP_DAMAIO_CUSTOM_CSS'				=> 'CSS rules',
	'ACP_DAMAIO_CUSTOM_CSS_EXPLAIN'		=> 'Add here your custom <a href="https://www.w3schools.com/css/css_syntax.asp" title="Opens in new tab" target="_blank">CSS rules <i class="fa fa-external-link" aria-hidden="true"></i></a>.',
	'ACP_DAMAIO_STYLE_DEACTIVATED'		=> 'The <b>damaïo</b> style is installed but currently deactivated. However, you can manage the configuration settings and visualize the preview.<br>Click <a href="%1$s">here</a> to access the Styles Management page to activate damaïo.',
	'ACP_DAMAIO_STYLE_NOT_FOUND'		=> 'The <b>damaïo</b> style is not installed or its configuration file has not been found in the <code>styles/damaio/</code> directory.<br>Please ensure that the style is installed in the expected directory.<br><br>Download the style in version greater than or equal to <b>%1$s</b> from the <a href="%2$s" target="_blank" title="Opens in new tab">phpBB styles database <i class="fa fa-external-link" aria-hidden="true"></i></a> or the <a href="%3$s" title="Opens in new tab" target="_blank">GitHub repository <i class="fa fa-external-link" aria-hidden="true"></i></a>.<br>Click <a href="%4$s">here</a> to access the Styles Installation page.',
	'ACP_DAMAIO_STYLE_INCOMPATIBLE'		=> 'The version <b>%1$s</b> of the <b>damaïo</b> style is incompatible with this extension.<br>Please download version <b>%2$s</b> or higher from the <a href="%3$s" target="_blank" title="Opens in new tab">phpBB styles database <i class="fa fa-external-link" aria-hidden="true"></i></a> or the <a href="%4$s" title="Opens in new tab" target="_blank">GitHub repository <i class="fa fa-external-link" aria-hidden="true"></i></a>.',
	'ACP_DAMAIO_SAVE'					=> 'Damaïo style configuration saved.',
]);
