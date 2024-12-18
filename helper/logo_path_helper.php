<?php
/**
 *
 * Damaïo style configuration extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2024 - cabot
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace cabot\damaioconfiguration\helper;

class logo_path_helper
{
	/** @var \phpbb\path_helper */
	protected $path_helper;

	/**
	 * Constructor
	 *
	 * @param \phpbb\path_helper	$path_helper	phpBB path helper object
	 */
	public function __construct(\phpbb\path_helper $path_helper)
	{
		$this->path_helper = $path_helper;
	}

	public function get_logo_path($url)
	{
		if (empty($url))
		{
			return null;
		}

		if (null !== parse_url($url, PHP_URL_SCHEME))
		{
			return $url;
		}

		return $this->path_helper->get_web_root_path() . ltrim($url, '/');
	}
}
