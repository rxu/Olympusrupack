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

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'CLI_CONFIG_CANNOT_CACHED'			=> 'Включите данную опцию, если значение параметра конфигурации изменяется слишком часто, в связи с чем его кэширование неэффективно.',
	'CLI_CONFIG_CURRENT'				=> 'Текущее значение параметра конфигурации. Используйте 0 и 1, чтобы задавать значения логического типа (boolean)',
	'CLI_CONFIG_DELETE_SUCCESS'			=> 'Успешно удалён параметр конфигурации %s.',
	'CLI_CONFIG_NEW'					=> 'Новое значение параметра конфигурации. Используйте 0 и 1, чтобы задавать значения логического типа (boolean)',
	'CLI_CONFIG_NOT_EXISTS'				=> 'Параметр конфигурации %s не существует',
	'CLI_CONFIG_OPTION_NAME'			=> 'Имя параметра конфигурации',
	'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'	=> 'Включите данную опцию, если значение должно быть выведено без перевода строки в конце.',
	'CLI_CONFIG_INCREMENT_BY'			=> 'Увеличить на величину',
	'CLI_CONFIG_INCREMENT_SUCCESS'		=> 'Успешно увеличен параметр конфигурации %s',
	'CLI_CONFIG_SET_FAILURE'			=> 'Не удалось установить параметр конфигурации %s',
	'CLI_CONFIG_SET_SUCCESS'			=> 'Успешно установлен параметр конфигурации %s',

	'CLI_DESCRIPTION_CRON_LIST'					=> 'Выводит список готовых и не готовых к выполнению задач планировщика (cron).',
	'CLI_DESCRIPTION_CRON_RUN'					=> 'Запускает все готовые к выполнению задачи планировщика (cron).',
	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'		=> 'Имя задачи планировщика, которая будет выполнена',
	'CLI_DESCRIPTION_DB_MIGRATE'				=> 'Обновляет базу данных путём применения миграций.',
	'CLI_DESCRIPTION_DELETE_CONFIG'				=> 'Удаляет параметр конфигурации',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'			=> 'Отключает заданное расширение.',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'			=> 'Включает заданное расширение.',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'			=> 'Находит миграции, не имеющие зависимостей.',
	'CLI_DESCRIPTION_FIX_LEFT_RIGHT_IDS'		=> 'Восстановление древовидной структуры форумов и модулей.',
	'CLI_DESCRIPTION_GET_CONFIG'				=> 'Получает значение параметра конфигурации',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'			=> 'Увеличивает значение числового параметра конфигурации',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'			=> 'Выводит список всех расширений из базы данных и файловой системы.',
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'			=> 'Запустить командную строку в безопасном режиме (без расширений).',
	'CLI_DESCRIPTION_OPTION_SHELL'				=> 'Запустить командную строку.',
	'CLI_DESCRIPTION_PURGE_EXTENSION'			=> 'Удаляет расширение вместе с данными.',
	'CLI_DESCRIPTION_RECALCULATE_EMAIL_HASH'	=> 'Пересчитывает поле user_email_hash в таблице пользователей.',
	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'			=> 'Устанавливает значение параметра конфигурации в случае, если старое значение совпадает с текущим',
	'CLI_DESCRIPTION_SET_CONFIG'				=> 'Устанавливает значение параметра конфигурации',
	'CLI_DESCRIPTION_UPDATE_HASH_BCRYPT'		=> 'Обновить устаревшие хэши паролей с использованием шифрования bcrypt.',
	'CLI_EXTENSION_DISABLE_FAILURE'		=> 'Не удалось отключить расширение %s',
	'CLI_EXTENSION_DISABLE_SUCCESS'		=> 'Успешно отключено расширение %s',
	'CLI_EXTENSION_ENABLE_FAILURE'		=> 'Не удалось включить расширение %s',
	'CLI_EXTENSION_ENABLE_SUCCESS'		=> 'Успешно включено расширение %s',
	'CLI_EXTENSION_NAME'				=> 'Имя расширения',
	'CLI_EXTENSION_PURGE_FAILURE'		=> 'Не удалось удалить данные расширения %s',
	'CLI_EXTENSION_PURGE_SUCCESS'		=> 'Успешно удалены данные расширения %s',
	'CLI_EXTENSION_NOT_FOUND'			=> 'Расширений не найдено.',
	'CLI_EXTENSIONS_AVAILABLE'			=> 'Доступные',
	'CLI_EXTENSIONS_DISABLED'			=> 'Отключённые',
	'CLI_EXTENSIONS_ENABLED'			=> 'Включённые',
  
	'CLI_FIXUP_FIX_LEFT_RIGHT_IDS_SUCCESS'		=> 'Успешно восстановлена древовидеая структура форумов и модулей.',
	'CLI_FIXUP_RECALCULATE_EMAIL_HASH_SUCCESS'	=> 'Успешно пересчитаны все значения хэшей email.',
	'CLI_FIXUP_UPDATE_HASH_BCRYPT_SUCCESS'		=> 'Успешно обновлены устаревшие хэши паролей с использованием шифрования bcrypt.',
));

// Additional help for commands.
$lang = array_merge($lang, array(
	'CLI_HELP_CRON_RUN'			=> $lang['CLI_DESCRIPTION_CRON_RUN'] . ' Дополнительно можно указать имя отдельной задачи планировщика (cron), чтобы выполнить только эту задачу.',
));
