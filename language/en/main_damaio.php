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
	'DAMAIO_EXT_DEVIANTART_NAME'	=> 'DeviantArt',
	'DAMAIO_EXT_FACEBOOK_NAME'		=> 'Facebook',
	'DAMAIO_EXT_FLICKR_NAME'		=> 'Flickr',
	'DAMAIO_EXT_GITHUB_NAME'		=> 'GitHub',
	'DAMAIO_EXT_INSTAGRAM_NAME'		=> 'Instagram',
	'DAMAIO_EXT_LINKEDIN_NAME'		=> 'LinkedIn',
	'DAMAIO_EXT_PINTEREST_NAME'		=> 'Pinterest',
	'DAMAIO_EXT_REDDIT_NAME'		=> 'Reddit',
	'DAMAIO_EXT_SKYPE_NAME'			=> 'Skype',
	'DAMAIO_EXT_SNAPCHAT_NAME'		=> 'Snapchat',
	'DAMAIO_EXT_SOUNDCLOUD_NAME'	=> 'SoundCloud',
	'DAMAIO_EXT_STEAM_NAME'			=> 'Steam',
	'DAMAIO_EXT_TUMBLR_NAME'		=> 'Tumblr',
	'DAMAIO_EXT_TWITTER_NAME'		=> 'Twitter',
	'DAMAIO_EXT_WHATSAPP_NAME'		=> 'WhatsApp',
	'DAMAIO_EXT_YOUTUBE_NAME'		=> 'YouTube',
	'DAMAIO_MAINCOLOR1_TITLE'		=> 'Color of main blocks and buttons',
	'DAMAIO_MAINCOLOR2_TITLE'		=> 'Color of links on hover',
	'DAMAIO_MAINCOLOR3_TITLE'		=> 'Color of buttons on hover',
	'DAMAIO_MODAL_OPEN'				=> 'Opens a modal window',
	'DAMAIO_SWITCH_THEME_TITLE'		=> 'Toggle light/dark theme',
]);
