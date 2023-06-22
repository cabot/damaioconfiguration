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

class damaio_install extends \phpbb\db\migration\migration
{

	public function update_data()
	{
		// Add config
		return [
			['config.add', ['damaio_logo_path', '']],
			['config.add', ['damaio_logo_width', '']],
			['config.add', ['damaio_logo_height', '']],
			['config.add', ['damaio_color_picker', 1]],
			['config.add', ['damaio_maincolor1', '']],
			['config.add', ['damaio_maincolor2', '']],
			['config.add', ['damaio_maincolor3', '']],
			['config.add', ['damaio_modal_login', 1]],
			['config.add', ['damaio_header_width', 1]],
			['config.add', ['damaio_footer_width', 0]],
			['config.add', ['damaio_password_show', 1]],
			['config.add', ['damaio_main_width', '']],
			['config.add', ['damaio_icon_deviantart', '']],
			['config.add', ['damaio_icon_facebook', '']],
			['config.add', ['damaio_icon_flickr', '']],
			['config.add', ['damaio_icon_github', '']],
			['config.add', ['damaio_icon_instagram', '']],
			['config.add', ['damaio_icon_linkedin', '']],
			['config.add', ['damaio_icon_pinterest', '']],
			['config.add', ['damaio_icon_reddit', '']],
			['config.add', ['damaio_icon_skype', '']],
			['config.add', ['damaio_icon_snapchat', '']],
			['config.add', ['damaio_icon_soundcloud', '']],
			['config.add', ['damaio_icon_steam', '']],
			['config.add', ['damaio_icon_tumblr', '']],
			['config.add', ['damaio_icon_twitter', '']],
			['config.add', ['damaio_icon_whatsapp', '']],
			['config.add', ['damaio_icon_youtube', '']],
			['config.add', ['damaio_icon_feed', 0]],
			['config.add', ['damaio_version_ext', '1.0.0']],
			['config.add', ['damaio_style_version_min', '1.0.8']],

			// Add ACP modules
			['module.add', ['acp', 'ACP_CAT_DOT_MODS', 'ACP_DAMAIO_MODULE_TITLE']],
			['module.add', ['acp', 'ACP_DAMAIO_MODULE_TITLE', [
				'module_basename'		=> '\cabot\damaioconfiguration\acp\damaio_module',
				'module_langname'		=> 'ACP_DAMAIO_MODULE_CONFIG',
				'module_mode'			=> 'overview',
				'module_auth'			=> 'ext_cabot/damaioconfiguration && acl_a_board',
			]]],
		];
	}
}
