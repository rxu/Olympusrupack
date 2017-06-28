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
	'ACP_STYLES_EXPLAIN'	=> 'Здесь вы можете управлять стилями, доступными на конференции. Вы можете изменять существующие стили, удалять, деактивировать, повторно активировать, устанавливать новые. Вы также можете увидеть, как будет выглядеть стиль, используя функцию предпросмотра. Также указано общее количество пользователей для каждого стиля. Учтите, что принудительная замена стилей пользователей здесь не производится.',
	'CANNOT_BE_INSTALLED'			=> 'Невозможно установить',
	'CONFIRM_UNINSTALL_STYLES'		=> 'Вы действительно хотите отменить установку стиля?',
	'COPYRIGHT'						=> 'Копирайт',

	'DEACTIVATE_DEFAULT'		=> 'Вы не можете сделать неактивным стиль по умолчанию.',
	'DELETE_FROM_FS'			=> 'Удалить с сервера',
	'DELETE_STYLE_FILES_FAILED'	=> 'При удалении файлов стиля «%s» произошла ошибка.',
	'DELETE_STYLE_FILES_SUCCESS'	=> 'Файлы стиля «%s» успешно удалены.',
	'DETAILS'					=> 'Информация',
	'INHERITING_FROM'			=> 'Наследует из',
	'INSTALL_STYLE'				=> 'Установить стиль',
	'INSTALL_STYLES'			=> 'Установить стили',
	'INSTALL_STYLES_EXPLAIN'	=> 'Здесь вы можете установить новые стили.<br />В случае, если какой-либо стиль отсутствует в списке ниже, проверьте, не был ли он уже установлен. Если этот стиль не установлен, проверьте правильность его загрузки на сервер.',
	'INVALID_STYLE_ID'			=> 'Неверный идентификатор (ID) стиля.',

	'NO_MATCHING_STYLES_FOUND'	=> 'Нет стилей, соответствующих запросу.',
	'NO_UNINSTALLED_STYLE'		=> 'Все стили установлены',

	'PURGED_CACHE'				=> 'Кэш очищен.',
 
	'REQUIRES_STYLE'			=> 'Этому стилю требуется установленный стиль «%s».',

	'STYLE_ACTIVATE'			=> 'Активировать',
	'STYLE_ACTIVE'				=> 'Активирован',
	'STYLE_DEACTIVATE'			=> 'Деактивировать',
	'STYLE_DEFAULT'				=> 'Назначить используемым по умолчанию',
	'STYLE_DEFAULT_CHANGE_INACTIVE'	=> 'Необходимо активировать стиль прежде, чем назначить его стилем по умолчанию.',
	'STYLE_ERR_INVALID_PARENT'	=> 'Родительский стиль неверен.',
	'STYLE_ERR_NAME_EXIST'		=> 'Стиль с таким именем уже существует.',
	'STYLE_ERR_STYLE_NAME'		=> 'Вы должны задать имя для этого стиля.',
	'STYLE_NAME_RESERVED'		=> 'Стиль «%s» не может быть установлен, так как данное имя является зарезервированным.',
	'STYLE_INSTALLED'			=> 'Стиль «%s» успешно установлен.',
	'STYLE_INSTALLED_RETURN_INSTALLED_STYLES'	=> 'Вернуться к списку установленных стилей.',
	'STYLE_INSTALLED_RETURN_UNINSTALLED_STYLES'	=> 'Установить другие стили.',
	'STYLE_NAME'				=> 'Имя стиля',
	'STYLE_NOT_INSTALLED'		=> 'Не удалось установить стиль «%s».',
	'STYLE_PATH'				=> 'Путь к стилю',
	'STYLE_UNINSTALL'			=> 'Удалить',
	'STYLE_UNINSTALL_DEPENDENT'	=> 'Стиль «%s» не может быть удалён, так как является родительским для других стилей.',
	'STYLE_UNINSTALLED'			=> 'Стиль «%s» успешно удалён.',
	'STYLE_USED_BY'				=> 'Используют (с ботами)',
	'STYLE_VERSION'				=> 'Версия стиля',

	'UNINSTALL_DEFAULT'		=> 'Нельзя удалить стиль по умолчанию.',

	'BROWSE_STYLES_DATABASE'	=> 'Перейти в базу данных стилей',
));
