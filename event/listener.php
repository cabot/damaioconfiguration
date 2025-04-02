<?php
/**
 *
 * Damaïo style configuration extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2023 - cabot
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace cabot\damaioconfiguration\event;

use phpbb\config\config;
use phpbb\config\db_text;
use phpbb\template\template;
use cabot\damaioconfiguration\helper\logo_path_helper;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Event listener
 *
 */
class listener implements EventSubscriberInterface
{
	/** @var config */
	protected $config;

	/** @var db_text */
	protected $config_text;

	/** @var template */
	protected $template;

	/** @var logo_path_helper */
	protected $logo_path_helper;

	/**
	 * Constructor
	 *
	 * @param config $config
	 * @param db_text $config_text
	 * @param template $template Template object
	 * @param logo_path_helper $logo_path_helper Path helper object
	 */
	public function __construct(config $config, db_text $config_text, template $template, logo_path_helper $logo_path_helper)
	{
		$this->config = $config;
		$this->config_text = $config_text;
		$this->template = $template;
		$this->logo_path_helper = $logo_path_helper;
	}

	public static function getSubscribedEvents()
	{
		return [
			'core.user_setup'			=> 'load_language_on_setup',
			'core.page_header_after'	=> 'damaioconfiguration',
		];
	}

	public function load_language_on_setup($event)
	{
		$lang_set_ext		= $event['lang_set_ext'];
		$lang_set_ext[]		= [
			'ext_name'		=> 'cabot/damaioconfiguration',
			'lang_set'		=> 'main_damaio',
		];
		$event['lang_set_ext'] = $lang_set_ext;
	}

	public function damaioconfiguration()
	{
		$damaio_icons = [
			'bluesky', 'deviantart', 'discord', 'facebook', 'flickr', 'github',
			'instagram', 'linkedin', 'mastodon', 'paypal', 'pinterest', 'reddit',
			'skype', 'snapchat', 'soundcloud', 'steam', 'telegram', 'tiktok',
			'tumblr', 'twitter', 'vkontakte', 'whatsapp', 'youtube'
		];
		$template_icons_vars = [];
		foreach ($damaio_icons as $icon)
		{
			$template_icons_vars['DAMAIO_EXT_' . strtoupper($icon)] = $this->config["damaio_icon_{$icon}"];
		}

		$damaiocustomcss = $this->config_text->get('damaio_custom_css');

		$this->template->assign_vars(array_merge([
			'DAMAIO_EXT_ENABLE'			=> $this->config['damaio_enable'],
			'DAMAIO_EXT_LOGO_URL'		=> $this->logo_path_helper->get_logo_path($this->config['damaio_logo_path']),
			'DAMAIO_EXT_LOGO_WIDTH'		=> $this->config['damaio_logo_width'],
			'DAMAIO_EXT_LOGO_HEIGHT'	=> $this->config['damaio_logo_height'],
			'DAMAIO_EXT_COLOR_PICKER'	=> $this->config['damaio_color_picker'],
			'DAMAIO_EXT_MAINCOLOR1'		=> $this->config['damaio_maincolor1'],
			'DAMAIO_EXT_MAINCOLOR2'		=> $this->config['damaio_maincolor2'],
			'DAMAIO_EXT_MAINCOLOR3'		=> $this->config['damaio_maincolor3'],
			'DAMAIO_EXT_MODAL_LOGIN'	=> $this->config['damaio_modal_login'],
			'DAMAIO_EXT_STICKYNAV'		=> $this->config['damaio_stickynav'],
			'DAMAIO_EXT_HEADER_WIDTH'	=> $this->config['damaio_header_width'],
			'DAMAIO_EXT_FOOTER_WIDTH'	=> $this->config['damaio_footer_width'],
			'DAMAIO_EXT_PASSWORD_SHOW'	=> $this->config['damaio_password_show'],
			'DAMAIO_EXT_MAIN_WIDTH'		=> $this->config['damaio_main_width'],
			'DAMAIO_EXT_FEED'			=> $this->config['damaio_icon_feed'],
			'DAMAIO_CUSTOM_CSS'			=> $damaiocustomcss,
		], $template_icons_vars));
	}
}
