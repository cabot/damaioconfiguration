<?php
/**
 *
 * Damaïo style configuration extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2023-2025 - cabot
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace cabot\damaioconfiguration\migrations;

class v103_m1_scrolltop_config_add extends \phpbb\db\migration\migration
{
	/**
	 * {@inheritdoc}
	 */
	public function effectively_installed()
	{
		return $this->config->offsetExists('damaio_scrolltop');
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
			['config.add', ['damaio_scrolltop', true]],
			['config.update', ['damaio_style_version_min', '1.0.13']],
		];
	}
}
