<?php
/**
*
* acp_extensions [Russian]
*
* @package language
* @copyright (c) 2012 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU Public License
*
*/
/**
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
	'EXTENSION'					=> 'Расширение',
	'EXTENSIONS'				=> 'Расширения',
	'EXTENSIONS_ADMIN'			=> 'Управление расширениями',
	'EXTENSIONS_EXPLAIN'		=> 'Здесь можно управлять расширениями и просматривать информацию о них.',
	'EXTENSION_INVALID_LIST'	=> 'Расширение «%s» не является совместимым.<br />%s<br /><br />',
	'EXTENSION_NOT_AVAILABLE'	=> 'Выбранное расширение недоступно для данной конференции. Проверьте, являются ли используемые на конференции версии phpBB и PHP совместимыми с этим расширением (см. подробности на странице информации).',
	'EXTENSION_DIR_INVALID'		=> 'Выбранное расширение имеет неправильную структуру каталога и не может быть подключено.',

	'DETAILS'				=> 'Информация',

	'EXTENSIONS_DISABLED'  => 'Включить расширения',
    'EXTENSIONS_ENABLED'   => 'Отключить расширения',

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
	'EXTENSION_DISABLE_SUCCESS'      => 'Расширение успешно выключено.',
	'EXTENSION_ENABLE_SUCCESS'       => 'Расширение успешно включено.',

	'EXTENSION_NAME'		=> 'Имя расширения',
	'EXTENSION_ACTIONS'		=> 'Действия',
	'EXTENSION_OPTIONS'		=> 'Настройки',
	'EXTENSION_UPDATE_HEADLINE'	=> 'Обновление расширения',
	'EXTENSION_UPDATE_EXPLAIN'	=> '<ol>
			<li>Отключите расширение</li>
			<li>Удалите файлы расширения с сервера</li>
			<li>Загрузите новые файлы</li>
			<li>Включите расширение</li>
		</ol>',
	'EXTENSION_REMOVE_HEADLINE'	=> 'Полное удаление расширения.',
	'EXTENSION_REMOVE_EXPLAIN'	=> '<ol>
			<li>Отключите расширение</li>
			<li>Удалите данные расширения</li>
			<li>Удалите файлы расширения с сервера</li>
		</ol>',

	'EXTENSION_DELETE_DATA_CONFIRM'  => 'Вы уверены, что хотите удалить данные, связанные с расширением «%s»?<br /><br />Это действие удалит все данные и настройки и не может быть отменено!',
	'EXTENSION_DISABLE_CONFIRM'      => 'Вы уверены, что хотите отключить расширение «%s»?',
	'EXTENSION_ENABLE_CONFIRM'       => 'Вы уверены, что хотите включить расширение «%s»?',

	'RETURN_TO_EXTENSION_LIST'	=> 'Вернуться к списку расширений',

	'EXT_DETAILS'			=> 'Информация о расширении',
	'DISPLAY_NAME'			=> 'Показать имя',
	'CLEAN_NAME'			=> 'Очистить имя',
	'TYPE'					=> 'Тип',
	'DESCRIPTION'			=> 'Описание',
	'VERSION'				=> 'Версия',
	'HOMEPAGE'				=> 'Домашняя страница',
	'PATH'					=> 'Путь',
	'TIME'					=> 'Дата выпуска',
	'LICENCE'				=> 'Лицензия',

	'REQUIREMENTS'			=> 'Требования',
	'PHPBB_VERSION'			=> 'Версия phpBB',
	'PHP_VERSION'			=> 'Версия PHP',
	'AUTHOR_INFORMATION'	=> 'Сведения об авторе',
	'AUTHOR_NAME'			=> 'Имя',
	'AUTHOR_EMAIL'			=> 'Email',
	'AUTHOR_HOMEPAGE'		=> 'Домашняя страница',
	'AUTHOR_ROLE'			=> 'Роль',
));
