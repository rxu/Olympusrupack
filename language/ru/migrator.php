<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
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
	$lang = [];
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

$lang = array_merge($lang, [
	'CONFIG_NOT_EXIST'					=> 'Параметр конфигурации «%s» не существует.',

	'GROUP_NOT_EXIST'					=> 'Группа «%s» не существует.',

	'MIGRATION_APPLY_DEPENDENCIES'		=> 'Установка зависимостей обновления %s.',
	'MIGRATION_DATA_DONE'				=> 'Обновлены данные: %1$s; Время: %2$.2f секунд',
	'MIGRATION_DATA_IN_PROGRESS'		=> 'Обновление данных: %1$s; Время: %2$.2f секунд',
	'MIGRATION_DATA_RUNNING'			=> 'Добавление данных: %s.',
	'MIGRATION_EFFECTIVELY_INSTALLED'	=> 'Обновление уже было выполнено (пропущено): %s',
	'MIGRATION_EXCEPTION_ERROR'			=> 'В процессе обновления произошла ошибка, которая вызвала исключение. Изменения, произведенные до появления ошибки, были отменены. Тем не менее, рекомендуется проверить конференцию на отсутствие ошибок в работе.',
	'MIGRATION_NOT_FULFILLABLE'			=> 'Невозможно выполнить обновление «%1$s», пропущено обновление «%2$s».',
	'MIGRATION_NOT_INSTALLED'			=> 'Обновление «%s» не установлено.',
	'MIGRATION_NOT_VALID'				=> '%s не является корректным обновлением.',
	'MIGRATION_SCHEMA_DONE'				=> 'Обновлена схема: %1$s; Время: %2$.2f секунд',
	'MIGRATION_SCHEMA_IN_PROGRESS'		=> 'Установка схемы: %1$s; Время: %2$.2f секунд',
	'MIGRATION_SCHEMA_RUNNING'			=> 'Обновление схемы: %s.',

	'MIGRATION_REVERT_DATA_DONE'		=> 'Отменено обновление данных: %1$s; Time: %2$.2f секунд',
	'MIGRATION_REVERT_DATA_IN_PROGRESS'	=> 'Отмена обновления данных: %1$s; Time: %2$.2f секунд',
	'MIGRATION_REVERT_DATA_RUNNING'		=> 'Отмена обновления данных: %s.',
	'MIGRATION_REVERT_SCHEMA_DONE'		=> 'Отменено обновление схемы: %1$s; Time: %2$.2f секунд',
	'MIGRATION_REVERT_SCHEMA_IN_PROGRESS'	=> 'Отмена обновления схемы: %1$s; Time: %2$.2f seconds',
	'MIGRATION_REVERT_SCHEMA_RUNNING'	=> 'Отмена обновления схемы: %s.',

	'MIGRATION_INVALID_DATA_MISSING_CONDITION'		=> 'Файл обновления содержит ошибки. Обработчик оператора if не смог найти условие.',
	'MIGRATION_INVALID_DATA_MISSING_STEP'			=> 'Файл обновления содержит ошибки. Обработчик оператора if не смог обнаружить корректный запуск шага обновления.',
	'MIGRATION_INVALID_DATA_CUSTOM_NOT_CALLABLE'	=> 'Файл обновления содержит ошибки. Попытка обращения к пользовательской функции, которая не может быть вызвана.',
	'MIGRATION_INVALID_DATA_UNKNOWN_TYPE'			=> 'Файл обновления содержит ошибки. Тип обновления не указан.',
	'MIGRATION_INVALID_DATA_UNDEFINED_TOOL'			=> 'Файл обновления содержит ошибки. Требуемый файл обновления не существует.',
	'MIGRATION_INVALID_DATA_UNDEFINED_METHOD'		=> 'Файл обновления содержит ошибки. Требуемый метод отсутствует в файле обновления.',

	'MODULE_ERROR'						=> 'Ошибка при создании модуля: %s',
	'MODULE_EXISTS'						=> 'Модуль уже существует: %s',
	'MODULE_EXIST_MULTIPLE'				=> 'Несколько модулей с указанным именем родительского модуля уже существуют: %s. Попробуйте использовать ключи before/after для уточнения нужного местоположения добавляемого модуля.',
	'MODULE_INFO_FILE_NOT_EXIST'		=> 'Обязательный компонент модуля не существует: %2$s',
	'MODULE_NOT_EXIST'					=> 'Обязательный модуль не существует: %s',

	'PARENT_MODULE_FIND_ERROR'			=> 'Не удалось найти требуемый идентификатор родительского модуля: %s',
	'PERMISSION_NOT_EXIST'				=> 'Право доступа «%s» не существует.',

	'ROLE_ASSIGNED_NOT_EXIST'			=> 'Роль, назначенная для группы «%1$s», не существует. Идентификатор роли: «%2$s»',
	'ROLE_NOT_EXIST'					=> 'Роль «%s» в системе прав доступа не существует.',
]);
