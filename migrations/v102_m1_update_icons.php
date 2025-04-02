<?php
/**
 *
 * Damaïo style configuration extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2023 - cabot
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace cabot\damaioconfiguration\migrations;

class v102_m1_update_icons extends \phpbb\db\migration\migration
{
	/**
	 * {@inheritdoc}
	 */
	public function effectively_installed()
	{
		return $this->config->offsetExists('damaio_icon_bluesky');
	}

	/**
	 * {@inheritdoc}
	 */
	public static function depends_on()
	{
		return [
			'\cabot\damaioconfiguration\migrations\damaio_install',
		];
	}

	/**
	 * {@inheritdoc}
	 */
	public function update_data()
	{
		return [
			['config.add', ['damaio_icon_bluesky', '']],
			['config.add', ['damaio_icon_discord', '']],
			['config.add', ['damaio_icon_mastodon', '']],
			['config.add', ['damaio_icon_paypal', '']],
			['config.add', ['damaio_icon_telegram', '']],
			['config.add', ['damaio_icon_tiktok', '']],
			['config.add', ['damaio_icon_vkontakte', '']],
			['config.update', ['damaio_style_version_min', '1.0.12']],
		];
	}
}
