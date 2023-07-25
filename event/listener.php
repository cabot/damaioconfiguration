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

use phpbb\template\template;
use phpbb\config\config;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
* Event listener
*
*/
class listener implements EventSubscriberInterface
{
	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\template\template */
	protected $template;

	/**
	* Constructor
	*
	* @param \phpbb\config\config				$config
	* @param \phpbb\template\template			$template
	*/

	public function __construct(config $config, template $template)
	{
		$this->config = $config;
		$this->template = $template;
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

	public function damaioconfiguration($event)
	{
		$this->template->assign_vars([
			'DAMAIO_EXT_ENABLE'			=> $this->config['damaio_enable'],
			'DAMAIO_EXT_LOGO_URL'		=> $this->config['damaio_logo_path'],
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
			'DAMAIO_EXT_DEVIANTART'		=> $this->config['damaio_icon_deviantart'],
			'DAMAIO_EXT_FACEBOOK'		=> $this->config['damaio_icon_facebook'],
			'DAMAIO_EXT_FLICKR'			=> $this->config['damaio_icon_flickr'],
			'DAMAIO_EXT_GITHUB'			=> $this->config['damaio_icon_github'],
			'DAMAIO_EXT_INSTAGRAM'		=> $this->config['damaio_icon_instagram'],
			'DAMAIO_EXT_LINKEDIN'		=> $this->config['damaio_icon_linkedin'],
			'DAMAIO_EXT_PINTEREST'		=> $this->config['damaio_icon_pinterest'],
			'DAMAIO_EXT_REDDIT'			=> $this->config['damaio_icon_reddit'],
			'DAMAIO_EXT_SKYPE'			=> $this->config['damaio_icon_skype'],
			'DAMAIO_EXT_SNAPCHAT'		=> $this->config['damaio_icon_snapchat'],
			'DAMAIO_EXT_SOUNDCLOUD'		=> $this->config['damaio_icon_soundcloud'],
			'DAMAIO_EXT_STEAM'			=> $this->config['damaio_icon_steam'],
			'DAMAIO_EXT_TUMBLR'			=> $this->config['damaio_icon_tumblr'],
			'DAMAIO_EXT_TWITTER'		=> $this->config['damaio_icon_twitter'],
			'DAMAIO_EXT_WHATSAPP'		=> $this->config['damaio_icon_whatsapp'],
			'DAMAIO_EXT_YOUTUBE'		=> $this->config['damaio_icon_youtube'],
			'DAMAIO_EXT_FEED'			=> $this->config['damaio_icon_feed'],
		]);
	}
}
