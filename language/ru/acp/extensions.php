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

	'DETAILS'				=> 'Информация',

	'EXTENSIONS_DISABLED'  => 'Включить расширения',
        'EXTENSIONS_ENABLED'   => 'Отключить расширения',

	'EXTENSION_DELETE_DATA'  => 'Удалить данные',
        'EXTENSION_DISABLE'      => 'Отключено',
        'EXTENSION_ENABLE'       => 'Включен',
        
	'EXTENSION_DELETE_DATA_EXPLAIN'  => 'Удалить данные и настройки этого расширения. Файлы этого расширения остаются, поэтому это расширение можно будет восстановить.',
        'EXTENSION_DISABLE_EXPLAIN'      => 'Отключение расширения сохраняет свои файлы, данные и настройки, но удаляет функциональность добавленную этим расширением.',
        'EXTENSION_ENABLE_EXPLAIN'       => 'Включение этого расширения позволяет использовать его своей конференции.',

	'ENABLE_EXPLAIN'		=> 'Включение расширения позволяет использовать его на конференции.',
	'DISABLE_EXPLAIN'		=> 'При отключении расширения сохраняются его файлы и настройки, а добавляемые им функции отключаются.',
	'PURGE_EXPLAIN'			=> 'При очистке расширения удаляются только его данные, файлы сохраняются.',
	'DELETE_EXPLAIN'		=> 'Удаление расширения приводит к стиранию его файлов и данных. Записи в логах сохраняются, при этом языковые переменные, добавленные расширением, становятся недоступны.',

	'DISABLE_IN_PROGRESS'	=> 'Происходит отключение расширения. Не закрывайте и не обновляйте эту страницу до его завершения.',
	'ENABLE_IN_PROGRESS'	=> 'Происходит установка расширения. Не закрывайте и не обновляйте эту страницу до его завершения.',
	'PURGE_IN_PROGRESS'		=> 'Происходит очистка расширения. Не закрывайте и не обновляйте эту страницу до его завершения.',
	'ENABLE_SUCCESS'		=> 'Расширение успешно включено',
	'DISABLE_SUCCESS'		=> 'Расширение успешно отключено',
	'PURGE_SUCCESS'			=> 'Расширение успешно очищено',
	
	'EXTENSION_DELETE_DATA_IN_PROGRESS'  => 'Данные расширения в настоящее время удалены. Не закрывайте и не обновляйте эту страницу до его завершения.',
        'EXTENSION_DISABLE_IN_PROGRESS'  => 'Расширение в настоящее время отключено. Не закрывайте и не обновляйте эту страницу до его завершения.',
        'EXTENSION_ENABLE_IN_PROGRESS'  => 'Расширение в настоящее время включено. Не закрывайте и не обновляйте эту страницу до его завершения.',

	'EXTENSION_DELETE_DATA_SUCCESS'  => 'Данные расширения успешно удалено.',
        'EXTENSION_DISABLE_SUCCESS'      => 'Расширение успешно включено.',
	'EXTENSION_ENABLE_SUCCESS'       => 'Расширение успешно выключено.',

	'EXTENSION_NAME'		=> 'Имя расширения',
	'EXTENSION_ACTIONS'		=> 'Действия',
	'EXTENSION_OPTIONS'		=> 'Настройки',

	'EXTENSION_DELETE_DATA_CONFIRM'  => 'Вы уверены, что хотите удалить данные, связанные с “%s”?<br /><br />Это удаляет все данные и настройки и не может быть отменено!',
        'EXTENSION_DISABLE_CONFIRM'      => 'Вы уверены, что хотите отключить это “%s” расширение?',
        'EXTENSION_ENABLE_CONFIRM'       => 'Вы уверены, что хотите включить это “%s” расширение?',

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
