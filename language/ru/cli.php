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
	$lang = [];
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

$lang = array_merge($lang, [
	'CLI_CONFIG_CANNOT_CACHED'			=> 'Включите данную опцию, если значение параметра конфигурации изменяется слишком часто, для её кэширования.',
	'CLI_CONFIG_CURRENT'				=> 'Текущее значение параметра конфигурации. Используйте 0 и 1, чтобы задавать значения логического типа (boolean)',
	'CLI_CONFIG_DELETE_SUCCESS'			=> 'Успешно удалён параметр конфигурации %s.',
	'CLI_CONFIG_NEW'					=> 'Новое значение параметра конфигурации. Используйте 0 и 1, чтобы задавать значения логического типа (boolean)',
	'CLI_CONFIG_NOT_EXISTS'				=> 'Параметр конфигурации %s не существует',
	'CLI_CONFIG_OPTION_NAME'			=> 'Имя параметра конфигурации',
	'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'	=> 'Включите данную опцию, если значения должны быть выведены без перевода строки в конце.',
	'CLI_CONFIG_INCREMENT_BY'			=> 'Увеличить на величину',
	'CLI_CONFIG_INCREMENT_SUCCESS'		=> 'Успешно увеличен параметр конфигурации %s',
	'CLI_CONFIG_SET_FAILURE'			=> 'Не удалось установить параметр конфигурации %s',
	'CLI_CONFIG_SET_SUCCESS'			=> 'Успешно установлен параметр конфигурации %s',

	'CLI_DESCRIPTION_CRON_LIST'					=> 'Вывести список готовых и не готовых к выполнению задач планировщика (cron).',
	'CLI_DESCRIPTION_CRON_RUN'					=> 'Запустить все готовые к выполнению задачи планировщика (cron).',
	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'		=> 'Имя задачи планировщика, которая будет выполнена',
	'CLI_DESCRIPTION_DB_LIST'					=> 'Показать все установленные и доступные миграции.',
	'CLI_DESCRIPTION_DB_MIGRATE'				=> 'Обновить базу данных путём применения миграций.',
	'CLI_DESCRIPTION_DB_REVERT'					=> 'Отменить миграцию.',
	'CLI_DESCRIPTION_DELETE_CONFIG'				=> 'Удалить параметр конфигурации',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'			=> 'Отключить заданное расширение.',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'			=> 'Включить заданное расширение.',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'			=> 'Найти миграции, не имеющие зависимостей.',
	'CLI_DESCRIPTION_FIX_LEFT_RIGHT_IDS'		=> 'Восстановление древовидной структуры форумов и модулей.',
	'CLI_DESCRIPTION_GET_CONFIG'				=> 'Получить значение параметра конфигурации',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'			=> 'Увеличить значение числового параметра конфиругации',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'			=> 'Вывести список всех расширений из базы данных и файловой системы.',

	'CLI_DESCRIPTION_OPTION_ENV'				=> 'Наименование окружения.',
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'			=> 'Запустить командную строку в безопасном режиме (без расширений).',
	'CLI_DESCRIPTION_OPTION_SHELL'				=> 'Запустить командную строку.',

	'CLI_DESCRIPTION_PURGE_EXTENSION'			=> 'Удаляет расширение вместе с его данными.',
	'CLI_DESCRIPTION_REPARSER_LIST'						=> 'Выводит список типов текста, доступных для репарсинга.',
	'CLI_DESCRIPTION_REPARSER_AVAILABLE'				=> 'Доступные репарсеры:',
	'CLI_DESCRIPTION_REPARSER_REPARSE'					=> 'Осуществляет репарсинг сохранённого текста с помощью текущих сервисов text_formatter.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_ARG_1'			=> 'Тип текста для репарсинга. оставьте поле пустым для репарсинга всех типов.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_DRY_RUN'		=> 'Не сохранять любые изменения; только вывести предполагаемый результат',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MIN'	=> 'Наименьшее значение ID (идентификатора) записи для обработки',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MAX'	=> 'Наибольшее значение ID (идентификатора) записи для обработки',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_SIZE'	=> 'Приблизительное число обрабатываемых записей в единицу времени',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RESUME'		=> 'Продолжить репарсинг с момента последней остановки',

	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'					=> 'Установить значение параметра конфигурации в случае, если старое значение совпадает с текущим',
	'CLI_DESCRIPTION_SET_CONFIG'						=> 'Установить значение параметра конфигурации',

	'CLI_DESCRIPTION_THUMBNAIL_DELETE'					=> 'Удалить все существующие миниатюры.',
	'CLI_DESCRIPTION_THUMBNAIL_GENERATE'				=> 'Создать все недостающие миниатюры.',
	'CLI_DESCRIPTION_THUMBNAIL_RECREATE'				=> 'Пересоздать заново все миниатюры.',

	'CLI_DESCRIPTION_UPDATE_CHECK'					=> 'Проверка обновлений.',
	'CLI_DESCRIPTION_UPDATE_CHECK_ARGUMENT_1'		=> 'Имя расширения для проверки (с ключом all будут проверены все расширения)',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_CACHE'		=> 'Проверка обновлений с ипользованием кэша.',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_STABILITY'	=> 'Выбор типа проверки обновлений (только на стабильные версии или включая нестабильные).',

	'CLI_DESCRIPTION_UPDATE_HASH_BCRYPT'		=> 'Обновить устаревшие хэши паролей с использованием шифрования bcrypt.',

	'CLI_ERROR_INVALID_STABILITY' => 'Для "%s" необходимо установить признак "stable" (стабильная) или "unstable" (нестабильная).',

	'CLI_DESCRIPTION_USER_ACTIVATE'				=> 'Активировать (или деактивировать) учётную запись.',
	'CLI_DESCRIPTION_USER_ACTIVATE_USERNAME'	=> 'Имя пользователя для активации.',
	'CLI_DESCRIPTION_USER_ACTIVATE_DEACTIVATE'	=> 'Деактивировать учётную запись пользователя',
	'CLI_DESCRIPTION_USER_ACTIVATE_ACTIVE'		=> 'Учётная запись пользователя уже активирована.',
	'CLI_DESCRIPTION_USER_ACTIVATE_INACTIVE'	=> 'Учётная запись пользователя уже деактивирована.',
	'CLI_DESCRIPTION_USER_ADD'					=> 'Добавить новую учётную запись.',
	'CLI_DESCRIPTION_USER_ADD_OPTION_USERNAME'	=> 'Имя нового пользователя',
	'CLI_DESCRIPTION_USER_ADD_OPTION_PASSWORD'	=> 'пароль нового пользователя',
	'CLI_DESCRIPTION_USER_ADD_OPTION_EMAIL'		=> 'Адрес e-mail нового пользователя',
	'CLI_DESCRIPTION_USER_ADD_OPTION_NOTIFY'	=> 'Отправить сообщение email для активации нового пользователя (по умолчанию не отправляется)',
	'CLI_DESCRIPTION_USER_DELETE'				=> 'Удалить учётную запись.',
	'CLI_DESCRIPTION_USER_DELETE_USERNAME'		=> 'Имя пользователя для удаления',
	'CLI_DESCRIPTION_USER_DELETE_OPTION_POSTS'	=> 'Удалить все сообщения пользователя. Если данная опция не используется, сообщения пользователя не будут удалены.',
	'CLI_DESCRIPTION_USER_RECLEAN'				=> 'Восстановить очищенные имена пользователей.',

	'CLI_EXTENSION_DISABLE_FAILURE'		=> 'Не удалось отключить расширение %s',
	'CLI_EXTENSION_DISABLE_SUCCESS'		=> 'Успешно отключено расширение %s',
	'CLI_EXTENSION_DISABLED'			=> 'Расширение %s не включено',
	'CLI_EXTENSION_ENABLE_FAILURE'		=> 'Не удалось включить расширение %s',
	'CLI_EXTENSION_ENABLE_SUCCESS'		=> 'Успешно включено расширение %s',
	'CLI_EXTENSION_ENABLED'				=> 'Расширение %s уже включено',
	'CLI_EXTENSION_NOT_EXIST'			=> 'Расширение %s не существует',
	'CLI_EXTENSION_NAME'				=> 'Имя расширения',
	'CLI_EXTENSION_PURGE_FAILURE'		=> 'Не удалось удалить файлы и данные расширения %s',
	'CLI_EXTENSION_PURGE_SUCCESS'		=> 'Успешно удалены файлы и данные расширения %s',
	'CLI_EXTENSION_UPDATE_FAILURE'		=> 'Не удалось обновить расширение %s',
	'CLI_EXTENSION_UPDATE_SUCCESS'		=> 'Успешно обновлено расширение %s',
	'CLI_EXTENSION_NOT_FOUND'			=> 'Расширений не найдено.',
	'CLI_EXTENSION_NOT_ENABLEABLE'		=> 'Расширение %s не может быть включено.',
	'CLI_EXTENSIONS_AVAILABLE'			=> 'Доступные',
	'CLI_EXTENSIONS_DISABLED'			=> 'Отключённые',
	'CLI_EXTENSIONS_ENABLED'			=> 'Включённые',

	'CLI_FIXUP_FIX_LEFT_RIGHT_IDS_SUCCESS'		=> 'Успешно восстановлена древовидеая структура форумов и модулей.',
	'CLI_FIXUP_UPDATE_HASH_BCRYPT_SUCCESS'		=> 'Успешно обновлены устаревшие хэши паролей с использованием шифрования bcrypt.',

	'CLI_MIGRATION_NAME'					=> 'Имя миграции, включая пространство имён (используйте прямой слэш вместо обратного во избежание проблем).',
	'CLI_MIGRATIONS_AVAILABLE'				=> 'Доступные миграции',
	'CLI_MIGRATIONS_INSTALLED'				=> 'Установленные миграции',
	'CLI_MIGRATIONS_ONLY_AVAILABLE'			=> 'Показать только доступные миграции',
	'CLI_MIGRATIONS_EMPTY'					=> 'Нет миграций.',

	'CLI_REPARSER_REPARSE_REPARSING'		=> 'Обработка %1$s (диапазон %2$d..%3$d)',
	'CLI_REPARSER_REPARSE_REPARSING_START'	=> 'Обработка %s...',
	'CLI_REPARSER_REPARSE_SUCCESS'			=> 'Обработка успешно завершена',

	// In all the case %1$s is the logical name of the file and %2$s the real name on the filesystem
	// eg: big_image.png (2_a51529ae7932008cf8454a95af84cacd) generated.
	'CLI_THUMBNAIL_DELETED'		=> '%1$s (%2$s) удалена.',
	'CLI_THUMBNAIL_DELETING'	=> 'Удаление миниатюр',
	'CLI_THUMBNAIL_SKIPPED'		=> '%1$s (%2$s) пропущена.',
	'CLI_THUMBNAIL_GENERATED'	=> '%1$s (%2$s) создана.',
	'CLI_THUMBNAIL_GENERATING'	=> 'Создание миниатюр',
	'CLI_THUMBNAIL_GENERATING_DONE'	=> 'Все миниатюры были пересозданы.',
	'CLI_THUMBNAIL_DELETING_DONE'	=> 'Все миниатюры были удалены.',

	'CLI_THUMBNAIL_NOTHING_TO_GENERATE'	=> 'Миниатюры для создания отсутствуют.',
	'CLI_THUMBNAIL_NOTHING_TO_DELETE'	=> 'Миниатюры для удаления отсутствуют.',

	'CLI_USER_ADD_SUCCESS'		=> 'Пользователь %s успешно добавлен.',
	'CLI_USER_DELETE_CONFIRM'	=> 'вы уверены, что хотите удалить «%s»? [y/N]',
	'CLI_USER_RECLEAN_START'	=> 'Восстановление очищенных имён пользователей',
	'CLI_USER_RECLEAN_DONE'		=> [
		0	=> 'Восстановление очищенных имён завершено. Нет очищенных имён, требующих восстановления.',
		1	=> 'Восстановление очищенных имён завершено. Восстановлено %d очищенное имя.',
		2	=> 'Восстановление очищенных имён завершено. Восстановлено %d очищенных имени.',
		3	=> 'Восстановление очищенных имён завершено. Восстановлено %d очищенных имён.',
	],
]);

// Additional help for commands.
$lang = array_merge($lang, [
	'CLI_HELP_CRON_RUN'			=> $lang['CLI_DESCRIPTION_CRON_RUN'] . ' Можно указать только имя отдельной задачи для запуска.',
	'CLI_HELP_USER_ACTIVATE'	=> 'Активировать учётную запись пользователя, или деактивировать, используя параметр <info>--deactivate</info>.
Для отправки пользователю сообщения email для активации, используйте параметр <info>--send-email</info>.',
	'CLI_HELP_USER_ADD'			=> 'Команда <info>%command.name%</info> добавляет нового пользователя:
При запуске данной команды без параметров, будет предложено их задать.
Для отправки новому пользователю сообщения email, используйте параметр <info>--send-email</info>.',
	'CLI_HELP_USER_RECLEAN'		=> 'При восстановлении очищенных имён пользователей будет осуществлена проверка всех учетных записей на существование очищенного имени. очищенные имена регистронезависимы, нормализованы и преобразованы в кодировку ASCII.',
]);
