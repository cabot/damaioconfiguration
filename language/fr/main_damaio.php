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
	'DAMAIO_EXT_BLUESKY_NAME'		=> 'Bluesky',
	'DAMAIO_EXT_DEVIANTART_NAME'	=> 'DeviantArt',
	'DAMAIO_EXT_DISCORD_NAME'		=> 'Discord',
	'DAMAIO_EXT_FACEBOOK_NAME'		=> 'Facebook',
	'DAMAIO_EXT_FLICKR_NAME'		=> 'Flickr',
	'DAMAIO_EXT_GITHUB_NAME'		=> 'GitHub',
	'DAMAIO_EXT_INSTAGRAM_NAME'		=> 'Instagram',
	'DAMAIO_EXT_LINKEDIN_NAME'		=> 'LinkedIn',
	'DAMAIO_EXT_MASTODON_NAME'		=> 'Mastodon',
	'DAMAIO_EXT_PAYPAL_NAME'		=> 'PayPal',
	'DAMAIO_EXT_PINTEREST_NAME'		=> 'Pinterest',
	'DAMAIO_EXT_REDDIT_NAME'		=> 'Reddit',
	'DAMAIO_EXT_SKYPE_NAME'			=> 'Skype',
	'DAMAIO_EXT_SNAPCHAT_NAME'		=> 'Snapchat',
	'DAMAIO_EXT_SOUNDCLOUD_NAME'	=> 'SoundCloud',
	'DAMAIO_EXT_STEAM_NAME'			=> 'Steam',
	'DAMAIO_EXT_TELEGRAM_NAME'		=> 'Telegram',
	'DAMAIO_EXT_TIKTOK_NAME'		=> 'TikTok',
	'DAMAIO_EXT_TUMBLR_NAME'		=> 'Tumblr',
	'DAMAIO_EXT_TWITTER_NAME'		=> 'Twitter',
	'DAMAIO_EXT_VKONTAKTE_NAME'		=> 'VKontakte',
	'DAMAIO_EXT_WHATSAPP_NAME'		=> 'WhatsApp',
	'DAMAIO_EXT_YOUTUBE_NAME'		=> 'YouTube',
	'DAMAIO_MAINCOLOR1_TITLE'		=> 'Couleur des blocs principaux et des boutons',
	'DAMAIO_MAINCOLOR2_TITLE'		=> 'Couleur des liens au survol',
	'DAMAIO_MAINCOLOR3_TITLE'		=> 'Couleur des boutons au survol',
	'DAMAIO_MODAL_OPEN'				=> 'Ouvre une fenêtre modale',
	'DAMAIO_SWITCH_THEME_TITLE'		=> 'Basculer entre le thème clair et le thème sombre',
]);
