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

class damaio_info
{
	function module()
	{
		return [
			'filename'	=> '\cabot\damaioconfiguration\acp\damaio_module',
			'title'		=> 'ACP_DAMAIO_MODULE_TITLE',
			'modes'		=> [
				'settings'	=> [
					'title' 	=> 'ACP_DAMAIO_CONFIG',
					'auth' 		=> 'cabot/damaioconfiguration && acl_a_board',
					'cat'		=> ['ACP_DAMAIO_CONFIG'],
				],
			],
		];
	}
}
