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
	'EXTENSION'					=> 'Расширение',
	'EXTENSIONS'				=> 'Расширения',
	'EXTENSIONS_ADMIN'			=> 'Управление расширениями',
	'EXTENSIONS_EXPLAIN'		=> 'Здесь можно управлять расширениями и просматривать информацию о них.',
	'EXTENSION_INVALID_LIST'	=> 'Расширение «%s» не является совместимым.<br />%s<br /><br />',
	'EXTENSION_NOT_AVAILABLE'	=> 'Выбранное расширение недоступно для данной конференции. Проверьте, являются ли используемые на конференции версии phpBB и PHP совместимыми с этим расширением (см. подробности на странице информации).',
	'EXTENSION_DIR_INVALID'		=> 'Выбранное расширение имеет неправильную структуру каталога и не может быть подключено.',
	'EXTENSION_NOT_ENABLEABLE'	=> 'Выбранное расширение не может быть включено, проверьте требования к установке.',
	'EXTENSION_NOT_INSTALLED'	=> 'Расширение %s недоступно. Проверьте правильность его установки.',

	'DETAILS'				=> 'Информация',

	'EXTENSIONS_AVAILABLE'	=> 'Доступные для установки расширения',
	'EXTENSIONS_DISABLED'  => 'Отключённые расширения',
	'EXTENSIONS_ENABLED'   => 'Включённые расширения',

	'EXTENSION_DELETE_DATA'  => 'Удалить данные',
	'EXTENSION_DISABLE'      => 'Отключить',
	'EXTENSION_ENABLE'       => 'Включить',

	'EXTENSION_DELETE_DATA_EXPLAIN'  => 'Удаление данных и настроек этого расширения. Файлы расширения остаются, поэтому оно может быть восстановлено.',
	'EXTENSION_DISABLE_EXPLAIN'      => 'При отключении расширения его файлы, данные и настройки сохраняются, но добавленная этим расширением функциональность удаляется.',
	'EXTENSION_ENABLE_EXPLAIN'       => 'Включение этого расширения позволяет использовать его на конференции.',

	'EXTENSION_DELETE_DATA_IN_PROGRESS'  => 'Данные расширения в настоящее время удаляются. Не закрывайте и не обновляйте эту страницу до завершения операции.',
	'EXTENSION_DISABLE_IN_PROGRESS'  => 'Расширение в настоящее время отключается. Не закрывайте и не обновляйте эту страницу до завершения операции.',
	'EXTENSION_ENABLE_IN_PROGRESS'  => 'Расширение в настоящее время включается. Не закрывайте и не обновляйте эту страницу до завершения операции.',

	'EXTENSION_DELETE_DATA_SUCCESS'  => 'Данные расширения успешно удалены.',
	'EXTENSION_DISABLE_SUCCESS'      => 'Расширение успешно отключено.',
	'EXTENSION_ENABLE_SUCCESS'       => 'Расширение успешно включено.',

	'EXTENSION_NAME'			=> 'Имя расширения',
	'EXTENSION_ACTIONS'			=> 'Действия',
	'EXTENSION_OPTIONS'			=> 'Настройки',
	'EXTENSION_INSTALL_HEADLINE'=> 'Установка расширения',
	'EXTENSION_INSTALL_EXPLAIN'	=> '<ol>
			<li>Скачайте расширение из базы данных расширений phpBB</li>
			<li>Разархивируйте расширение и закачайте файлы на сервер в папку <samp>ext/</samp> конференции</li>
			<li>Включите расширение здесь, в Управлении расширениями</li>
		</ol>',
	'EXTENSION_UPDATE_HEADLINE'	=> 'Обновление расширения',
	'EXTENSION_UPDATE_EXPLAIN'	=> '<ol>
			<li>Отключите расширение</li>
			<li>Удалите файлы расширения с сервера</li>
			<li>Загрузите новые файлы</li>
			<li>Включите расширение</li>
		</ol>',
	'EXTENSION_REMOVE_HEADLINE'	=> 'Полное удаление расширения',
	'EXTENSION_REMOVE_EXPLAIN'	=> '<ol>
			<li>Отключите расширение</li>
			<li>Удалите данные расширения</li>
			<li>Удалите файлы расширения с сервера</li>
		</ol>',

	'EXTENSION_DELETE_DATA_CONFIRM'  => 'Вы уверены, что хотите удалить данные, связанные с расширением «%s»?<br /><br />Это действие удалит все данные и настройки и не может быть отменено!',
	'EXTENSION_DISABLE_CONFIRM'      => 'Вы уверены, что хотите отключить расширение «%s»?',
	'EXTENSION_ENABLE_CONFIRM'       => 'Вы уверены, что хотите включить расширение «%s»?',
	'EXTENSION_FORCE_UNSTABLE_CONFIRM'	=> 'Вы уверены, что хотите использовать нестабильную версию?',

	'RETURN_TO_EXTENSION_LIST'	=> 'Вернуться к списку расширений',

	'EXT_DETAILS'			=> 'Информация о расширении',
	'DISPLAY_NAME'			=> 'Отображаемое имя',
	'CLEAN_NAME'			=> 'Имя на сервере',
	'TYPE'					=> 'Тип',
	'DESCRIPTION'			=> 'Описание',
	'VERSION'				=> 'Версия',
	'HOMEPAGE'				=> 'Домашняя страница',
	'PATH'					=> 'Путь',
	'TIME'					=> 'Дата выпуска',
	'LICENSE'				=> 'Лицензия',

	'REQUIREMENTS'			=> 'Требования',
	'PHPBB_VERSION'			=> 'Версия phpBB',
	'PHP_VERSION'			=> 'Версия PHP',
	'AUTHOR_INFORMATION'	=> 'Сведения об авторе',
	'AUTHOR_NAME'			=> 'Имя',
	'AUTHOR_EMAIL'			=> 'Email',
	'AUTHOR_HOMEPAGE'		=> 'Домашняя страница',
	'AUTHOR_ROLE'			=> 'Роль',

	'NOT_UP_TO_DATE'		=> '%s требует обновления',
	'UP_TO_DATE'			=> '%s не требует обновления',
	'ANNOUNCEMENT_TOPIC'	=> 'Информация об обновлении',
	'DOWNLOAD_LATEST'		=> 'Скачать обновление',
	'NO_VERSIONCHECK'		=> 'Информация об обновлении отсутствует.',

	'VERSIONCHECK_FORCE_UPDATE_ALL'		=> 'Перепроверить все версии',
	'FORCE_UNSTABLE'					=> 'Сообщать о выходе бета-версий',
	'EXTENSIONS_VERSION_CHECK_SETTINGS'	=> 'Настройка параметров обновления',

	'BROWSE_EXTENSIONS_DATABASE'		=> 'Перейти в базу данных расширений',

	'META_FIELD_NOT_SET'	=> 'Обязательное метаполе %s не задано.',
	'META_FIELD_INVALID'	=> 'Метаполе %s имеет неправильный формат.',
]);
