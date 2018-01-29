<?php

/**
*
* @package phpBB Extension - Personal notes
* @copyright (c) 2014 OXPUS - www.oxpus.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* Brazilian Portuguese translation by eunaumtenhoid (c) 2018 [ver 3.1.1] (https://github.com/phpBBTraducoes)
*/

/**
* Language pack for Extension permissions [Brazilian Portuguese [pt_br]]
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// Permissions
$lang = array_merge($lang, array(
	'ACP_NOTES'		=> 'Notas',

	'ACL_A_NOTES'	=> 'Pode configurar notas pessoais',
));
