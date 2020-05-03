<?php

/**
*
* @package phpBB Extension - Personal Notes
* @copyright (c) 2014 OXPUS - www.oxpus.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* Brazilian Portuguese translation by eunaumtenhoid (c) 2018 [ver 3.1.4] (https://github.com/phpBBTraducoes)
*/

/*
* [Brazilian Portuguese [pt_br]] language file
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

$lang = array_merge($lang, array(
	'ACP_NOTES'				=> 'Configurar notas',
	'ACP_NOTES_SETTINGS'	=> 'Max. número de notas por usuário',
	'UCP_NOTES'				=> 'Notas',
	'UCP_NOTES_CONFIG'		=> 'Configurações',

	'NOTES'			    => 'Notas',
	'POPUP_NOTES'	    => 'Exibir notas pessoais como pop-up',
	'FILTER_NOTES'	    => '<strong>Modo de filtro</strong><br />Pressione o botão de pesquisa novamente ou altere o método de classificação para exibir todas as notas.',
	'NOTES_MEM'		    => 'Lembrar nota',
	'NOTES_MEM_TIME'	=> 'Lembrar neste período', 
	'NOTES_MEMTEXT'	    => '<strong>Você inseriu notas com um lembrete.</strong><br />%sClique aqui para listar essas notas.%s<br />(Clicando, removerá o lembrete)',
	'NO_NOTES'		    => 'Atualmente, você não tem notas',

	'NOTES_CONFIG_SUCCESSFULL'	=> 'As configurações das notas foram salvas com sucesso.<br /><br />%sClique aqui para retornar à configuração%s',
	'NOTES_LOG_CONFIG'			=> 'Alterado o número de notas por usuário',
));
