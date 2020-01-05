<?php
/**
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
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

/**
*	EXTENSION-DEVELOPERS PLEASE NOTE
*
*	You are able to put your permission sets into your extension.
*	The permissions logic should be added via the 'core.permissions' event.
*	You can easily add new permission categories, types and permissions, by
*	simply merging them into the respective arrays.
*	The respective language strings should be added into a language file, that
*	start with 'permissions_', so they are automatically loaded within the ACP.
*/

// Define categories and permission types
$lang = array_merge($lang, [
	'ACL_CAT_ACTIONS'		=> 'Действия',
	'ACL_CAT_CONTENT'		=> 'Содержимое',
	'ACL_CAT_FORUMS'		=> 'Форумы',
	'ACL_CAT_MISC'			=> 'Разное',
	'ACL_CAT_PERMISSIONS'	=> 'Права доступа',
	'ACL_CAT_PM'			=> 'Личные сообщения',
	'ACL_CAT_POLLS'			=> 'Опросы',
	'ACL_CAT_POST'			=> 'Размещение сообщений',
	'ACL_CAT_POST_ACTIONS'	=> 'Действия с сообщениями',
	'ACL_CAT_POSTING'		=> 'Сообщения',
	'ACL_CAT_PROFILE'		=> 'Профиль',
	'ACL_CAT_SETTINGS'		=> 'Установки',
	'ACL_CAT_TOPIC_ACTIONS'	=> 'Действия с темами',
	'ACL_CAT_USER_GROUP'	=> 'Пользователи и группы',
]);

// User Permissions
$lang = array_merge($lang, [
	'ACL_U_VIEWPROFILE'	=> 'Может просматривать профили, список пользователей и страницу «Кто сейчас на конференции»',
	'ACL_U_CHGNAME'		=> 'Может менять имя',
	'ACL_U_CHGPASSWD'	=> 'Может менять пароль',
	'ACL_U_CHGEMAIL'	=> 'Может менять email-адрес',
	'ACL_U_CHGAVATAR'	=> 'Может менять аватару',
	'ACL_U_CHGGRP'		=> 'Может менять группу по умолчанию',
	'ACL_U_CHGPROFILEINFO'	=> 'Может менять информацию в полях профиля',

	'ACL_U_ATTACH'		=> 'Может прикреплять вложения',
	'ACL_U_DOWNLOAD'	=> 'Может скачивать файлы',
	'ACL_U_SAVEDRAFTS'	=> 'Может сохранять черновики',
	'ACL_U_CHGCENSORS'	=> 'Может отключать автоцензор',
	'ACL_U_SIG'			=> 'Может использовать подпись',
	'ACL_U_EMOJI'		=> 'Может использовать эмодзи и дополнительные символы в заголовках тем',

	'ACL_U_SENDPM'		=> 'Может посылать ЛС',
	'ACL_U_MASSPM'		=> 'Может рассылать ЛС нескольким пользователям',
	'ACL_U_MASSPM_GROUP'=> 'Может рассылать ЛС группам пользователей',
	'ACL_U_READPM'		=> 'Может читать ЛС',
	'ACL_U_PM_EDIT'		=> 'Может редактировать собственные ЛС',
	'ACL_U_PM_DELETE'	=> 'Может удалять ЛС из своих папок',
	'ACL_U_PM_FORWARD'	=> 'Может пересылать ЛС',
	'ACL_U_PM_EMAILPM'	=> 'Может отправлять ЛС по email',
	'ACL_U_PM_PRINTPM'	=> 'Может распечатывать ЛС',
	'ACL_U_PM_ATTACH'	=> 'Может прикреплять вложения в ЛС',
	'ACL_U_PM_DOWNLOAD'	=> 'Может скачивать файлы из ЛС',
	'ACL_U_PM_BBCODE'	=> 'Может использовать BBCode в ЛС',
	'ACL_U_PM_SMILIES'	=> 'Может использовать смайлики в ЛС',
	'ACL_U_PM_IMG'		=> 'Может использовать тег [img] в ЛС',
	'ACL_U_PM_FLASH'	=>  'Может использовать тег [flash] в ЛС',

	'ACL_U_SENDEMAIL'	=> 'Может посылать email-сообщения',
	'ACL_U_SENDIM'		=> 'Может использовать систему мгновенных сообщений',
	'ACL_U_IGNOREFLOOD'	=> 'Может игнорировать флуд-контроль',
	'ACL_U_HIDEONLINE'	=> 'Может прятать статус присутствия',
	'ACL_U_VIEWONLINE'	=> 'Может видеть статус присутствия',
	'ACL_U_SEARCH'		=> 'Может использовать поиск',
]);

// Forum Permissions
$lang = array_merge($lang, [
	'ACL_F_LIST'		=> 'Может видеть форум',
	'ACL_F_LIST_TOPICS' => 'Может видеть список тем в форуме',
	'ACL_F_READ'		=> 'Может читать форум',
	'ACL_F_SEARCH'		=> 'Может использовать поиск в форуме',
	'ACL_F_SUBSCRIBE'	=> 'Может подписываться на форум',
	'ACL_F_PRINT'		=> 'Может распечатывать темы',
	'ACL_F_EMAIL'		=> 'Может сообщать (другу) по email о теме',
	'ACL_F_BUMP'		=> 'Может поднимать темы',
	'ACL_F_USER_LOCK'	=> 'Может закрывать свои темы',
	'ACL_F_DOWNLOAD'	=> 'Может скачивать файлы',
	'ACL_F_REPORT'		=> 'Может размещать жалобы',

	'ACL_F_POST'		=> 'Может создавать темы',
	'ACL_F_STICKY'		=> 'Может прилеплять темы',
	'ACL_F_ANNOUNCE'	=> 'Может создавать объявления',
	'ACL_F_ANNOUNCE_GLOBAL'	=> 'Может создавать важные темы',
	'ACL_F_REPLY'		=> 'Может отвечать в темах',
	'ACL_F_EDIT'		=> 'Может редактировать собственные сообщения',
	'ACL_F_DELETE'		=> 'Может безвозвратно удалять собственные сообщения',
	'ACL_F_SOFTDELETE'	=> 'Может удалять в корзину собственные сообщения<br /><em>Модераторы, имеющие право одобрять сообщения, могут восстанавливать удалённые сообщения.</em>',
	'ACL_F_IGNOREFLOOD' => 'Может игнорировать флуд-контроль',
	'ACL_F_POSTCOUNT'	=> 'Счётчик сообщений включён<br /><em>Учтите, что данная установка эффективна только при создании новых сообщений.</em>',
	'ACL_F_NOAPPROVE'	=> 'Может размещать сообщения без одобрения',

	'ACL_F_ATTACH'		=> 'Может прикреплять вложения',
	'ACL_F_ICONS'		=> 'Может использовать значки тем и сообщений',
	'ACL_F_BBCODE'		=> 'Может использовать BBCode',
	'ACL_F_FLASH'		=> 'Может использовать тег [flash]',
	'ACL_F_IMG'			=> 'Может использовать тег [img]',
	'ACL_F_SIGS'		=> 'Может использовать подпись',
	'ACL_F_SMILIES'		=> 'Может использовать смайлики',

	'ACL_F_POLL'		=> 'Может создавать опросы',
	'ACL_F_VOTE'		=> 'Может голосовать в опросах',
	'ACL_F_VOTECHG'		=> 'Может переголосовать',
]);

// Moderator Permissions
$lang = array_merge($lang, [
	'ACL_M_EDIT'		=> 'Может редактировать сообщения',
	'ACL_M_DELETE'		=> 'Может безвозвратно удалять сообщения',
	'ACL_M_SOFTDELETE'	=> 'Может удалять в корзину сообщения<br /><em>Модераторы, имеющие право одобрять сообщения, могут восстанавливать удалённые сообщения.</em>',
	'ACL_M_APPROVE'		=> 'Может одобрять и восстанавливать сообщения',
	'ACL_M_REPORT'		=> 'Может закрывать и удалять жалобы',
	'ACL_M_CHGPOSTER'	=> 'Может менять автора сообщений',

	'ACL_M_MOVE'	=> 'Может перемещать темы',
	'ACL_M_LOCK'	=> 'Может закрывать темы',
	'ACL_M_SPLIT'	=> 'Может разделять темы',
	'ACL_M_MERGE'	=> 'Может объединять темы',

	'ACL_M_INFO'		=> 'Может просматривать подробности о сообщениях',
	'ACL_M_WARN'		=> 'Может объявлять предупреждения<br /><em>Это право может быть назначено только глобально, а не на уровне форумов.</em>', // This moderator setting is only global (and not local)
	'ACL_M_PM_REPORT'	=> 'Может закрывать и удалять жалобы на личные сообщения<br /><em>Это право может быть назначено только глобально, а не на уровне форумов.</em>', // This moderator setting is only global (and not local)
	'ACL_M_BAN'			=> 'Может управлять блокировкой<br /><em>Это право может быть назначено только глобально, а не на уровне форумов.</em>', // This moderator setting is only global (and not local)
]);

// Admin Permissions
$lang = array_merge($lang, [
	'ACL_A_BOARD'		=> 'Может изменять настройки конференции и проверять обновления',
	'ACL_A_SERVER'		=> 'Может изменять параметры настройки сервера',
	'ACL_A_JABBER'		=> 'Может изменять настройки Jabber',
	'ACL_A_PHPINFO'		=> 'Может просматривать сведения о PHP',

	'ACL_A_FORUM'		=> 'Может управлять форумами',
	'ACL_A_FORUMADD'	=> 'Может создавать форумы',
	'ACL_A_FORUMDEL'	=> 'Может удалять форумы',
	'ACL_A_PRUNE'		=> 'Может очищать форумы',

	'ACL_A_ICONS'		=> 'Может изменять значки тем, сообщений и смайлики',
	'ACL_A_WORDS'		=> 'Может настраивать автоцензор',
	'ACL_A_BBCODE'		=> 'Может определять BBCode',
	'ACL_A_ATTACH'		=> 'Может изменять настройки вложений',

	'ACL_A_USER'		=> 'Может управлять пользователями<br /><em>Право также включает просмотр типа браузера пользователей в списке находящихся на конференции.</em>',
	'ACL_A_USERDEL'		=> 'Может удалять пользователей',
	'ACL_A_GROUP'		=> 'Может управлять группами',
	'ACL_A_GROUPADD'	=> 'Может создавать группы',
	'ACL_A_GROUPDEL'	=> 'Может удалять группы',
	'ACL_A_RANKS'		=> 'Может управлять званиями',
	'ACL_A_PROFILE'		=> 'Может управлять дополнительными полями профиля',
	'ACL_A_NAMES'		=> 'Может управлять запрещёнными именами',
	'ACL_A_BAN'			=> 'Может управлять блокировкой',

	'ACL_A_VIEWAUTH'	=> 'Может просматривать права доступа',
	'ACL_A_AUTHGROUPS'	=> 'Может изменять права доступа для конкретной группы',
	'ACL_A_AUTHUSERS'	=> 'Может изменять права доступа для конкретного пользователя',
	'ACL_A_FAUTH'		=> 'Может изменять права доступа в форумах',
	'ACL_A_MAUTH'		=> 'Может изменять права доступа для модераторов',
	'ACL_A_AAUTH'		=> 'Может изменять права доступа для администраторов',
	'ACL_A_UAUTH'		=> 'Может изменять права доступа для пользователей',
	'ACL_A_ROLES'		=> 'Может управлять ролями',
	'ACL_A_SWITCHPERM'	=> 'Может изменять другие права доступа',

	'ACL_A_STYLES'		=> 'Может управлять стилями',
	'ACL_A_EXTENSIONS'	=> 'Может управлять расширениями',
	'ACL_A_VIEWLOGS'	=> 'Может просматривать логи',
	'ACL_A_CLEARLOGS'	=> 'Может очищать логи',
	'ACL_A_MODULES'		=> 'Может управлять модулями',
	'ACL_A_LANGUAGE'	=> 'Может управлять языковыми пакетами',
	'ACL_A_EMAIL'		=> 'Может осуществлять массовую рассылку почты',
	'ACL_A_BOTS'		=> 'Может управлять ботами',
	'ACL_A_REASONS'		=> 'Может управлять списком жалоб/причин',
	'ACL_A_BACKUP'		=> 'Может сохранять/восстанавливать базу данных',
	'ACL_A_SEARCH'		=> 'Может управлять поисковыми индексами/установками поиска',
]);
