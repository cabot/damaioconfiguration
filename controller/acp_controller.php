<?php
/**
 *
 * Damaïo style configuration extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2023-2025 - cabot
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace cabot\damaioconfiguration\controller;

use phpbb\config\config;
use phpbb\config\db_text;
use phpbb\db\driver\driver_interface as db;
use phpbb\language\language;
use phpbb\log\log;
use phpbb\request\request;
use phpbb\template\template;
use phpbb\user;

class acp_controller
{
		/** @var config $config */
	protected $config;

	/** @var db_text $config_text */
	protected $config_text;

	/**	@var db @db */
	protected $db;

	/** @var language $language */
	protected $language;

	/** @var log $log */
	protected $log;

	/** @var request $request */
	protected $request;

	/** @var template $template */
	protected $template;

	/** @var user $user */
	protected $user;

	/** @var string */
	protected $adm_relative_path;

	/** @var string */
	protected $php_ext;

	/** @var string */
	protected $root_path;

	/** @var string */
	protected $styles_path;

	/** @var string $u_action */
	public $u_action;

	const STYLES_PATH = 'styles/';

	/**
	 * Constructor
	 *
	 * @param config $config
	 * @param db_text $config_text
	 * @param db $db
	 * @param language $language
	 * @param log $log
	 * @param request $request
	 * @param template $template
	 * @param user $user
	 * @param string $adm_relative_path phpBB admin relative path
	 * @param string $php_ext phpEx
	 * @param string $root_path phpBB root path
	 */
	public function __construct(config $config, db_text $config_text, db $db, language $language, log $log, request $request, template $template, user $user, string $adm_relative_path, string $php_ext, string $root_path)
	{
		$this->config = $config;
		$this->config_text = $config_text;
		$this->db = $db;
		$this->language = $language;
		$this->log = $log;
		$this->request = $request;
		$this->template = $template;
		$this->user = $user;
		$this->adm_relative_path = $adm_relative_path;
		$this->php_ext = $php_ext;
		$this->root_path = $root_path;
		$this->styles_path = $this->root_path . self::STYLES_PATH;

		// Load language files
		$this->language->add_lang('acp_damaio', 'cabot/damaioconfiguration');
	}

	/**
	 * Display the options a user can configure for this extension.
	 *
	 * @return void
	 */
	public function display_options()
	{
		$phpbb_admin_path = $this->root_path . $this->adm_relative_path;
		$damaio_version_min = $this->config['damaio_style_version_min'];
		$damaio_phpbb_url = 'https://www.phpbb.com/customise/db/style/dama%C3%AFo/';
		$damaio_github_url = 'https://github.com/cabot/damaio';

		$damaio_icons = [
			'bluesky', 'deviantart', 'discord', 'facebook', 'flickr', 'github',
			'instagram', 'linkedin', 'mastodon', 'paypal', 'pinterest', 'reddit',
			'skype', 'snapchat', 'soundcloud', 'steam', 'telegram', 'tiktok',
			'tumblr', 'twitter', 'vkontakte', 'whatsapp', 'youtube'
		];

		add_form_key('damaioconfiguration/acp_damaio');

		$submit = $this->request->is_set_post('submit');
		if ($submit)
		{
			if (!check_form_key('damaioconfiguration/acp_damaio'))
			{
				trigger_error('FORM_INVALID');
			}

			$this->config->set('damaio_enable', $this->request->variable('damaio_enable', false));
			$this->config->set('damaio_logo_path', $this->request->variable('damaio_logo_path', ''));
			$this->config->set('damaio_logo_width', $this->request->variable('damaio_logo_width', ''));
			$this->config->set('damaio_logo_height', $this->request->variable('damaio_logo_height', ''));
			$this->config->set('damaio_color_picker', $this->request->variable('damaio_color_picker', true));
			$this->config->set('damaio_maincolor1', $this->request->variable('damaio_maincolor1', ''));
			$this->config->set('damaio_maincolor2', $this->request->variable('damaio_maincolor2', ''));
			$this->config->set('damaio_maincolor3', $this->request->variable('damaio_maincolor3', ''));
			$this->config->set('damaio_modal_login', $this->request->variable('damaio_modal_login', true));
			$this->config->set('damaio_header_width', $this->request->variable('damaio_header_width', true));
			$this->config->set('damaio_footer_width', $this->request->variable('damaio_footer_width', false));
			$this->config->set('damaio_password_show', $this->request->variable('damaio_password_show', true));
			$this->config->set('damaio_main_width', $this->request->variable('damaio_main_width', ''));
			$this->config->set('damaio_stickynav', $this->request->variable('damaio_stickynav', false));
			$this->config->set('damaio_icon_feed', $this->request->variable('damaio_icon_feed', false));
			$this->config_text->set('damaio_custom_css', htmlspecialchars_decode($this->request->variable('damaio_custom_css', '', true)));
			foreach ($damaio_icons as $icon)
			{
				$this->config->set("damaio_icon_{$icon}", $this->request->variable("damaio_icon_{$icon}", ''));
			}

			$this->log->add('admin', $this->user->data['user_id'], $this->user->ip, 'ACP_DAMAIO_UPDATED_LOG');
			trigger_error($this->language->lang('ACP_DAMAIO_SAVE') . adm_back_link($this->u_action));
		}

		$template_icons_vars = [];
		foreach ($damaio_icons as $icon)
		{
			$template_icons_vars['DAMAIO_' . strtoupper($icon)] = $this->config["damaio_icon_{$icon}"];
		}

		$damaiocustomcss = $this->config_text->get('damaio_custom_css');

		$this->template->assign_vars(array_merge([
			'DAMAIO_ENABLE'				=> $this->config['damaio_enable'],
			'DAMAIO_LOGO_PATH'			=> $this->config['damaio_logo_path'],
			'DAMAIO_LOGO_WIDTH'			=> $this->config['damaio_logo_width'],
			'DAMAIO_LOGO_HEIGHT'		=> $this->config['damaio_logo_height'],
			'DAMAIO_COLOR_PICKER'		=> $this->config['damaio_color_picker'],
			'DAMAIO_MAINCOLOR1'			=> $this->config['damaio_maincolor1'],
			'DAMAIO_MAINCOLOR2'			=> $this->config['damaio_maincolor2'],
			'DAMAIO_MAINCOLOR3'			=> $this->config['damaio_maincolor3'],
			'DAMAIO_MODAL_LOGIN'		=> $this->config['damaio_modal_login'],
			'DAMAIO_HEADER_WIDTH'		=> $this->config['damaio_header_width'],
			'DAMAIO_FOOTER_WIDTH'		=> $this->config['damaio_footer_width'],
			'DAMAIO_PASSWORD_SHOW'		=> $this->config['damaio_password_show'],
			'DAMAIO_MAIN_WIDTH'			=> $this->config['damaio_main_width'],
			'DAMAIO_STICKYNAV'			=> $this->config['damaio_stickynav'],
			'DAMAIO_FEED'				=> $this->config['damaio_icon_feed'],
			'DAMAIO_CUSTOM_CSS'			=> $damaiocustomcss,
			'DAMAIO_CHECK_FEED'			=> sprintf($this->language->lang('ACP_DAMAIO_FEED_EXPLAIN'), append_sid($phpbb_admin_path . 'index.' . $this->php_ext, 'i=acp_board&mode=feed')),
			'DAMAIO_STYLE_NOT_FOUND'	=> sprintf($this->language->lang('ACP_DAMAIO_STYLE_NOT_FOUND'), $damaio_version_min, $damaio_phpbb_url, $damaio_github_url, append_sid($phpbb_admin_path . 'index.' . $this->php_ext, 'i=acp_styles&mode=install'))
		], $template_icons_vars));

		$sql = 'SELECT style_id, style_active, style_path
				FROM ' . STYLES_TABLE . '
				WHERE style_path = "damaio"';
		$result = $this->db->sql_query($sql);

		if ($row = $this->db->sql_fetchrow($result))
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
				$style_version_info = sprintf($this->language->lang('ACP_DAMAIO_STYLE_INCOMPATIBLE'), $style_current_version, $damaio_version_min, $damaio_phpbb_url, $damaio_github_url);
			}

			$this->template->assign_vars([
				'DAMAIO_STYLE_ID'				=> $row['style_id'],
				'DAMAIO_STYLE_ACTIVE'			=> $row['style_active'],
				'U_DAMAIO_STYLE_PATH'			=> append_sid($this->root_path . 'index.' . $this->php_ext, 'style=' . $row['style_id']),
				'DAMAIO_STYLE_COMPATIBLE'		=> $style_version_check,
				'DAMAIO_STYLE_DEACTIVATED'		=> sprintf($this->language->lang('ACP_DAMAIO_STYLE_DEACTIVATED'), append_sid($phpbb_admin_path . 'index.' . $this->php_ext, 'i=acp_styles&mode=style')),
				'DAMAIO_STYLE_VERSION_INFO'		=> $style_version_info,
			]);
		}
		$this->db->sql_freeresult($result);
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

	/**
	 * Set custom form action.
	 *
	 * @param string	$u_action	Custom form action
	 * @return void
	 */
	public function set_page_url($u_action)
	{
		$this->u_action = $u_action;
	}
}
