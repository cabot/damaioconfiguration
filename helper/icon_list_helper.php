<?php
/**
 *
 * Damaïo style configuration extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2023-2025 - cabot
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace cabot\damaioconfiguration\helper;

class icon_list_helper
{
	public static function get_icons()
	{
		return [
			'bluesky',
			'deviantart',
			'discord',
			'facebook',
			'flickr',
			'github',
			'instagram',
			'linkedin',
			'mastodon',
			'paypal',
			'pinterest',
			'reddit',
			'skype',
			'snapchat',
			'soundcloud',
			'steam',
			'telegram',
			'tiktok',
			'tumblr',
			'twitter',
			'vkontakte',
			'whatsapp',
			'youtube'
		];
	}

	public static function get_icons_template_vars($config, $prefix = 'DAMAIO_')
	{
		$vars = [];
		foreach (self::get_icons() as $icon) {
			$vars[$prefix . strtoupper($icon)] = $config["damaio_icon_{$icon}"];
		}
		return $vars;
	}
}
