<?php
/**
*
* app [Russian]
*
* @package language
* @copyright (c) 2012 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
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

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'CONTROLLER_ARGUMENT_VALUE_MISSING'	=> 'Не задано значение аргумента #%1$s: <strong>%3$s</strong> класса <strong>%2$s</strong>',
	'CONTROLLER_NOT_SPECIFIED'			=> 'Не указан контроллер.',
	'CONTROLLER_NOT_FOUND'				=> 'Запрашиваемая страница не найдена.',
	'CONTROLLER_METHOD_NOT_SPECIFIED'	=> 'Не указан метод для данного контроллера.',
	'CONTROLLER_SERVICE_NOT_GIVEN'		=> 'Для контроллера «<strong>%s</strong>» необходимо указать службу в файле ./config/routing.yml.',
	'CONTROLLER_SERVICE_UNDEFINED'		=> 'Служба контроллера «<strong>%s</strong>» не указана в файле ./config/services.yml.',
	'CONTROLLER_RETURN_TYPE_INVALID'	=> 'Объект контроллера <strong>%s</strong> должен возвращать объект Symfony\Component\HttpFoundation\Response.',
));
