<?php
/**
*
* migrator [Russian]
*
* @package language
* @copyright (c) 2013 phpBB Group
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

$lang = array_merge($lang, array(
	'CONFIG_NOT_EXIST'					=> 'Параметр конфигурации «%s» не существует.',

	'GROUP_NOT_EXIST'					=> 'Группа «%s» не существует.',

	'MIGRATION_DATA_DONE'				=> 'Обновлены данные: %1$s; Время: %2$.2f секунд',
	'MIGRATION_DATA_IN_PROGRESS'		=> 'Обновление данных: %1$s; Время: %2$.2f секунд',
	'MIGRATION_EFFECTIVELY_INSTALLED'	=> 'Обновление уже было выполнено (пропущено): %s',
	'MIGRATION_EXCEPTION_ERROR'			=> 'В процессе обновления произошла ошибка, которая вызвала исключение. Изменения, произведенные до появления ошибки, были отменены. Тем не менее, рекомендуется проверить конференцию на отсутствие ошибок в работе.',
	'MIGRATION_NOT_FULFILLABLE'			=> 'Невозможно выполнить обновление «%1$s», пропущено обновление «%2$s».',
	'MIGRATION_SCHEMA_DONE'				=> 'Обновлена схема: %1$s; Время: %2$.2f секунд',

	'MODULE_ERROR'						=> 'Ошибка при создании модуля: %s',
	'MODULE_INFO_FILE_NOT_EXIST'		=> 'Обязательный компонент модуля не существует: %2$s',
	'MODULE_NOT_EXIST'					=> 'Обязательный модуль не существует: %s',

	'PERMISSION_NOT_EXIST'				=> 'Право доступа «%s» не существует.',

	'ROLE_NOT_EXIST'					=> 'Роль «%s» в системе прав доступа не существует.',
));
