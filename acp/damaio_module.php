<?php
/**
 *
 * Damaïo style configuration extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2023 - cabot
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace cabot\damaioconfiguration\acp;

/**
 * @package acp
 */

class damaio_module
{
	/** @var string */
	public $tpl_name;

	/** @var string */
	public $page_title;

	/** @var string */
	public $u_action;

	/** @var string */
	protected $styles_path;

	/** @var string */
	protected $styles_path_absolute = 'styles';

	public function main()
	{
		global $phpbb_container;

		/** @type \phpbb\language\language $language Language object */
		$language = $phpbb_container->get('language');

		/** @type \phpbb\request\request $request Request object */
		$request = $phpbb_container->get('request');

		/** @type \phpbb\config\config $config Config object */
		$config = $phpbb_container->get('config');

		/** @type \phpbb\config\db_text $config_text Config Text object */
		$config_text = $phpbb_container->get('config_text');

		/** @type \phpbb\template\template $template Template object */
		$template = $phpbb_container->get('template');

		/** @type \phpbb\db\driver\driver_interface $db Database object */
		$db = $phpbb_container->get('dbal.conn');

		/** @type \phpbb\user $user User object */
		$user = $phpbb_container->get('user');

		/** @type \phpbb\log\log $phpbb_log Log object */
		$phpbb_log = $phpbb_container->get('log');

		/** @type \phpbb\path_helper $path_helper Path helper object */
		$path_helper = $phpbb_container->get('path_helper');

		$php_ext = $path_helper->get_php_ext();
		$phpbb_root_path = $path_helper->get_phpbb_root_path();
		$adm_relative_path = $path_helper->get_adm_relative_path();
		$phpbb_admin_path = $phpbb_root_path . $adm_relative_path;
		$this->styles_path = $phpbb_root_path . $this->styles_path_absolute . '/';

		$this->tpl_name = 'acp_damaio';
		$language->add_lang('acp_damaio', 'cabot/damaioconfiguration');
		$this->page_title = $language->lang('ACP_DAMAIO_MODULE_TITLE');

		$damaio_version_min = $config['damaio_style_version_min'];
		$damaio_phpbb_url = 'https://www.phpbb.com/customise/db/style/dama%C3%AFo/';
		$damaio_github_url = 'https://github.com/cabot/damaio';

		$damaio_icons = [
			'bluesky', 'deviantart', 'discord', 'facebook', 'flickr', 'github',
			'instagram', 'linkedin', 'mastodon', 'paypal', 'pinterest', 'reddit',
			'skype', 'snapchat', 'soundcloud', 'steam', 'telegram', 'tiktok',
			'tumblr', 'twitter', 'vkontakte', 'whatsapp', 'youtube'
		];

		add_form_key('damaioconfiguration/acp_damaio');

		$submit = $request->is_set_post('submit');
		if ($submit)
		{
			if (!check_form_key('damaioconfiguration/acp_damaio'))
			{
				trigger_error('FORM_INVALID');
			}

			$config->set('damaio_enable', $request->variable('damaio_enable', false));
			$config->set('damaio_logo_path', $request->variable('damaio_logo_path', ''));
			$config->set('damaio_logo_width', $request->variable('damaio_logo_width', ''));
			$config->set('damaio_logo_height', $request->variable('damaio_logo_height', ''));
			$config->set('damaio_color_picker', $request->variable('damaio_color_picker', true));
			$config->set('damaio_maincolor1', $request->variable('damaio_maincolor1', ''));
			$config->set('damaio_maincolor2', $request->variable('damaio_maincolor2', ''));
			$config->set('damaio_maincolor3', $request->variable('damaio_maincolor3', ''));
			$config->set('damaio_modal_login', $request->variable('damaio_modal_login', true));
			$config->set('damaio_header_width', $request->variable('damaio_header_width', true));
			$config->set('damaio_footer_width', $request->variable('damaio_footer_width', false));
			$config->set('damaio_password_show', $request->variable('damaio_password_show', true));
			$config->set('damaio_main_width', $request->variable('damaio_main_width', ''));
			$config->set('damaio_stickynav', $request->variable('damaio_stickynav', false));
			$config->set('damaio_icon_feed', $request->variable('damaio_icon_feed', false));
			$config_text->set('damaio_custom_css', htmlspecialchars_decode($request->variable('damaio_custom_css', '', true)));

			foreach ($damaio_icons as $icon)
			{
				$config->set("damaio_icon_{$icon}", $request->variable("damaio_icon_{$icon}", ''));
			}

			$user_id = $user->data['user_id'];
			$user_ip = $user->ip;

			$phpbb_log->add('admin', $user_id, $user_ip, 'ACP_DAMAIO_UPDATED_LOG');
			trigger_error($language->lang('ACP_DAMAIO_SAVE') . adm_back_link($this->u_action));
		}

		$template_icons_vars = [];
		foreach ($damaio_icons as $icon)
		{
			$template_icons_vars['DAMAIO_' . strtoupper($icon)] = $config["damaio_icon_{$icon}"];
		}

		$damaiocustomcss = $config_text->get('damaio_custom_css');

		$template->assign_vars(array_merge([
			'DAMAIO_ENABLE'				=> $config['damaio_enable'],
			'DAMAIO_LOGO_PATH'			=> $config['damaio_logo_path'],
			'DAMAIO_LOGO_WIDTH'			=> $config['damaio_logo_width'],
			'DAMAIO_LOGO_HEIGHT'		=> $config['damaio_logo_height'],
			'DAMAIO_COLOR_PICKER'		=> $config['damaio_color_picker'],
			'DAMAIO_MAINCOLOR1'			=> $config['damaio_maincolor1'],
			'DAMAIO_MAINCOLOR2'			=> $config['damaio_maincolor2'],
			'DAMAIO_MAINCOLOR3'			=> $config['damaio_maincolor3'],
			'DAMAIO_MODAL_LOGIN'		=> $config['damaio_modal_login'],
			'DAMAIO_HEADER_WIDTH'		=> $config['damaio_header_width'],
			'DAMAIO_FOOTER_WIDTH'		=> $config['damaio_footer_width'],
			'DAMAIO_PASSWORD_SHOW'		=> $config['damaio_password_show'],
			'DAMAIO_MAIN_WIDTH'			=> $config['damaio_main_width'],
			'DAMAIO_STICKYNAV'			=> $config['damaio_stickynav'],
			'DAMAIO_FEED'				=> $config['damaio_icon_feed'],
			'DAMAIO_CUSTOM_CSS'			=> $damaiocustomcss,
			'DAMAIO_CHECK_FEED'			=> sprintf($language->lang('ACP_DAMAIO_FEED_EXPLAIN'), append_sid($phpbb_admin_path . 'index.' . $php_ext, 'i=acp_board&mode=feed')),
			'DAMAIO_STYLE_NOT_FOUND'	=> sprintf($language->lang('ACP_DAMAIO_STYLE_NOT_FOUND'), $damaio_version_min, $damaio_phpbb_url, $damaio_github_url, append_sid($phpbb_admin_path . 'index.' . $php_ext, 'i=acp_styles&mode=install'))
		], $template_icons_vars));

		$sql = 'SELECT style_id, style_active, style_path
				FROM ' . STYLES_TABLE . '
				WHERE style_path = "damaio"';
		$result = $db->sql_query($sql);

		if ($row = $db->sql_fetchrow($result))
		{
			$style_cfg = $this->read_style_cfg($row['style_path']);
			$style_current_version = htmlspecialchars($style_cfg['style_version'], ENT_COMPAT);

			$style_version_check = false;
			$style_version_info = '';

			if (version_compare($style_current_version, $damaio_version_min) >= 0)
			{
				$style_version_check = true;
			}
			else
			{
				$style_version_info = sprintf($language->lang('ACP_DAMAIO_STYLE_INCOMPATIBLE'), $style_current_version, $damaio_version_min, $damaio_phpbb_url, $damaio_github_url);
			}

			$template->assign_vars([
				'DAMAIO_STYLE_ID'				=> $row['style_id'],
				'DAMAIO_STYLE_ACTIVE'			=> $row['style_active'],
				'U_DAMAIO_STYLE_PATH'			=> append_sid($phpbb_root_path . 'index.' . $php_ext, 'style=' . $row['style_id']),
				'DAMAIO_STYLE_COMPATIBLE'		=> $style_version_check,
				'DAMAIO_STYLE_DEACTIVATED'		=> sprintf($language->lang('ACP_DAMAIO_STYLE_DEACTIVATED'), append_sid($phpbb_admin_path . 'index.' . $php_ext, 'i=acp_styles&mode=style')),
				'DAMAIO_STYLE_VERSION_INFO'		=> $style_version_info,
			]);
		}
		$db->sql_freeresult($result);
	}

	/**
	 * Read style configuration file
	 *
	 * @param string $dir style directory
	 * @return array|bool Style data, false on error
	 */
	protected function read_style_cfg($dir)
	{
		static $required = ['name', 'phpbb_version', 'style_version'];

		$cfg = parse_cfg_file($this->styles_path . $dir . '/style.cfg');

		// Check if it is a valid file
		foreach ($required as $key)
		{
			if (!isset($cfg[$key]))
			{
				return false;
			}
		}
		return $cfg;
	}

}
