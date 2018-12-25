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
	'ACP_PERMISSIONS_EXPLAIN'	=> '
		<p>Права доступа чрезвычайно детализированы и сгруппированы в четыре основных раздела:</p>

		<h2>Глобальные права доступа</h2>
		<p>Эти права используются для управления доступом на глобальном уровне и применяются ко всей конференции в целом. Далее они разделены на права пользователей, групп, администраторов и супермодераторов.</p>

		<h2>Локальные права доступа</h2>
		<p>Эти права используются для управления доступом на уровне форумов. Далее они разделены на Доступ к форумам, Модераторы форумов, Форумные права пользователей, Форумные права групп.</p>

		<h2>Роли</h2>
		<p>Они используются для создания различных типовых наборов прав доступа, чтобы в дальнейшем можно было назначать права, основанные на ролевом доступе. Набор ролей по умолчанию должен целиком удовлетворять потребности администрирования больших и малых конференций, тем не менее в каждом из четырёх разделов вы можете добавлять, изменять и удалять роли так, как считаете целесообразным.</p>

		<h2>Маски прав доступа</h2>
		<p>Маски прав доступа используются для просмотра действующих прав доступа, назначенных пользователям, модераторам (локальным и супермодераторам), администраторам и на форумы.</p>

		<br />

		<p>Для получения более подробной информации по настройке и управлению правами доступа на вашей конференции phpBB3 смотрите <a href="http://www.phpbbguru.net/documentation/admin/permissions/">Раздел 3.7 нашего руководства</a>.</p>
	',

	'ACL_NEVER'				=> 'Никогда',
	'ACL_SET'				=> 'Настройка прав доступа',
	'ACL_SET_EXPLAIN'		=> 'Права доступа основаны на простой системе <strong>ДА</strong>/<strong>НЕТ</strong>. Значение <strong>НИКОГДА</strong> для пользователя или группы означает игнорирование любых иных значений, установленных по данного права. Если вы не хотите устанавливать право для данного пользователя или группы, выберите <strong>НЕТ</strong>. Если значения для этого права установлены где-нибудь ещё, они будут иметь более высокий приоритет, иначе будет использовано значение <strong>НИКОГДА</strong>. Для всех отмеченных объектов (с установленным флажком) будут скопированы установленные значения прав доступа.',
	'ACL_SETTING'			=> 'Настройки',

	'ACL_TYPE_A_'			=> 'Права администратора',
	'ACL_TYPE_F_'			=> 'Доступ к форумам',
	'ACL_TYPE_M_'			=> 'Права модератора',
	'ACL_TYPE_U_'			=> 'Права пользователя',

	'ACL_TYPE_GLOBAL_A_'	=> 'Права администратора',
	'ACL_TYPE_GLOBAL_U_'	=> 'Права пользователя',
	'ACL_TYPE_GLOBAL_M_'	=> 'Права супермодератора',
	'ACL_TYPE_LOCAL_M_'		=> 'права модератора форума',
	'ACL_TYPE_LOCAL_F_'		=> 'доступ к форумам',

	'ACL_NO'				=> 'Нет',
	'ACL_VIEW'				=> 'Просмотр прав доступа',
	'ACL_VIEW_EXPLAIN'		=> 'Здесь вы можете видеть действующие права пользователя или группы. Красный цвет указывает на отсутствие права у пользователя или у группы, а зелёный — на наличие права у пользователя или у группы.',
	'ACL_YES'				=> 'Да',

	'ACP_ADMINISTRATORS_EXPLAIN'				=> 'Здесь вы можете назначать администраторские права пользователям и группам. Все пользователи с администраторскими правами могут просматривать администраторский раздел.',
	'ACP_FORUM_MODERATORS_EXPLAIN'				=> 'Здесь вы можете назначать пользователей и группы пользователей модераторами форумов. Для назначения пользователям прав доступа к форумам, а также для определения прав супермодератора и администратора, используйте соответствующую страницу.',
	'ACP_FORUM_PERMISSIONS_EXPLAIN'				=> 'Здесь вы можете изменять для каждого пользователя и группы доступ к каждому форуму. Для назначения модераторов или определения прав администратора используйте соответствующую страницу.',
	'ACP_FORUM_PERMISSIONS_COPY_EXPLAIN'		=> 'Здесь вы можете копировать форумные права доступа из одного форума в другой форум или сразу в несколько других форумов.',
	'ACP_GLOBAL_MODERATORS_EXPLAIN'				=> 'Здесь вы можете назначать права супермодератора пользователям или группам. Супермодераторы подобны обычным модераторам, за исключением того, что они имеют доступ к управлению всеми форумами конференции.',
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Здесь вы можете назначать форумные права групп.',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN'			=> 'Здесь вы можете назначать глобальные права доступа для групп — права пользователей, права супермодераторов и права администраторов. Права пользователей включают такие возможности, как использование аватары, отправка личных сообщений и так далее; права супермодератора — такие, как одобрение сообщений, управление темами, управление блокировкой и так далее, и, наконец, права администратора — такие, как изменение прав доступа, определение новых BBCodes, управление форумами и так далее. Индивидуально права доступа пользователей следует изменять в крайних случаях. Преимущественный метод заключается в помещении пользователей в группы и в назначении прав группам.',
	'ACP_ADMIN_ROLES_EXPLAIN'					=> 'Здесь вы можете управлять администраторскими ролями. Роли содержат действующие права доступа; если вы измените содержание роли, то изменятся права доступа всех для пользователей и групп, которым назначена данная роль.',
	'ACP_FORUM_ROLES_EXPLAIN'					=> 'Здесь вы можете управлять форумными ролями. Роли содержат действующие права доступа; если вы измените содержание роли, то изменятся права доступа всех для пользователей и групп, которым назначена данная роль.',
	'ACP_MOD_ROLES_EXPLAIN'						=> 'Здесь вы можете управлять модераторскими ролями. Роли содержат действующие права доступа; если вы измените содержание роли, то изменятся права доступа всех для пользователей и групп, которым назначена данная роль.',
	'ACP_USER_ROLES_EXPLAIN'					=> 'Здесь вы можете управлять пользовательскими ролями. Роли содержат действующие права доступа; если вы измените содержание роли, то изменятся права доступа всех для пользователей и групп, которым назначена данная роль.',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Здесь вы можете назначать пользователям права доступа к форумам.',
	'ACP_USERS_PERMISSIONS_EXPLAIN'				=> 'Здесь вы можете назначать глобальные права доступа для пользователей — права пользователей, права супермодераторов и права администраторов. Права пользователей включают такие возможности, как использование аватары, отправка личных сообщений и так далее; права супермодератора — такие, как одобрение сообщений, управление темами, управление блокировкой и так далее, и, наконец, права администратора — такие, как изменение прав доступа, определение новых BBCodes, управление форумами и так далее. Индивидуально права доступа пользователей следует изменять в крайних случаях. Преимущественный метод заключается в помещении пользователей в группы и в назначении прав группам.',
	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN'		=> 'Здесь вы можете просмотреть действующие администраторские права доступа для выбранных пользователей и групп.',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN'	=> 'Здесь вы можете просмотреть действующие супермодераторские права доступа для выбранных пользователей и групп.',
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN'		=> 'Здесь вы можете просмотреть действующие локальные права доступа для выбранных форумов, пользователей и групп.',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN'	=> 'Здесь вы можете просмотреть действующие модераторские права доступа для выбранных форумов, пользователей и групп.',
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN'			=> 'Здесь вы можете просмотреть действующие пользовательские права доступа для выбранных пользователей и групп.',

	'ADD_GROUPS'				=> 'Добавить группы',
	'ADD_PERMISSIONS'			=> 'Добавить права',
	'ADD_USERS'					=> 'Добавить пользователей',
	'ADVANCED_PERMISSIONS'		=> 'Подробнее',
	'ALL_GROUPS'				=> 'Выбрать все группы',
	'ALL_NEVER'					=> 'Все <strong>НИКОГДА</strong>',
	'ALL_NO'					=> 'Все <strong>НЕТ</strong>',
	'ALL_USERS'					=> 'Выбрать всех пользователей',
	'ALL_YES'					=> 'Все <strong>ДА</strong>',
	'APPLY_ALL_PERMISSIONS'		=> 'Применить все права',
	'APPLY_PERMISSIONS'			=> 'Применить права',
	'APPLY_PERMISSIONS_EXPLAIN'	=> 'Права и роль, указанные для этого элемента, будут применены к этому элементу и к отмеченным элементам.',
	'AUTH_UPDATED'				=> 'Права доступа обновлены.',

	'COPY_PERMISSIONS_CONFIRM'				=> 'Вы действительно хотите выполнить это действие? Помните, что это действие перезапишет все имеющиеся права выбранных форумов.',
	'COPY_PERMISSIONS_FORUM_FROM_EXPLAIN'	=> 'Исходный форум, из которого вы хотите скопировать права доступа.',
	'COPY_PERMISSIONS_FORUM_TO_EXPLAIN'		=> 'Конечные форумы, к которым вы хотите применить скопированные права доступа.',
	'COPY_PERMISSIONS_FROM'					=> 'Копировать права из форума',
	'COPY_PERMISSIONS_TO'					=> 'Применить права к форумам',

	'CREATE_ROLE'				=> 'Создать роль',
	'CREATE_ROLE_FROM'			=> 'Использовать настройки роли…',
	'CUSTOM'					=> 'Другое…',

	'DEFAULT'					=> 'По умолчанию',
	'DELETE_ROLE'				=> 'Удаление роли',
	'DELETE_ROLE_CONFIRM'		=> 'Вы действительно хотите удалить эту роль? Объекты с данной ролью <strong>не</strong> потеряют определённые ею настройки прав доступа.',
	'DISPLAY_ROLE_ITEMS'		=> 'Просмотреть объекты с данной ролью',

	'EDIT_PERMISSIONS'			=> 'Редактировать права',
	'EDIT_ROLE'					=> 'Редактировать роль',

	'GROUPS_NOT_ASSIGNED'		=> 'Нет групп с данной ролью',

	'LOOK_UP_GROUP'				=> 'Выбор группы',
	'LOOK_UP_USER'				=> 'Выбор пользователя',

	'MANAGE_GROUPS'		=> 'Управление группами',
	'MANAGE_USERS'		=> 'Управление пользователями',

	'NO_AUTH_SETTING_FOUND'		=> 'Настройки прав доступа не определены.',
	'NO_ROLE_ASSIGNED'			=> 'Роль не назначена…',
	'NO_ROLE_ASSIGNED_EXPLAIN'	=> 'Этот выбор не изменяет назначенных прав доступа (справа). Если вы хотите сбросить или удалить все права доступа, то необходимо использовать ссылку «Все <strong>НЕТ</strong>».',
	'NO_ROLE_AVAILABLE'			=> 'Роли недоступны',
	'NO_ROLE_NAME_SPECIFIED'	=> 'Введите имя роли.',
	'NO_ROLE_SELECTED'			=> 'Роль не найдена.',
	'NO_USER_GROUP_SELECTED'	=> 'Вы не выбрали пользователя или группу.',

	'ONLY_FORUM_DEFINED'	=> 'Вы определили только форумы. Выберите, по крайней мере, одного пользователя или группу.',

	'PERMISSION_APPLIED_TO_ALL'		=> 'Права доступа и роль будут применены для всех отмеченных объектов',
	'PLUS_SUBFORUMS'				=> '+подфорумы',

	'REMOVE_PERMISSIONS'			=> 'Удалить права',
	'REMOVE_ROLE'					=> 'Удалить роль',
	'RESULTING_PERMISSION'			=> 'Итоговые права',
	'ROLE'							=> 'Роль',
	'ROLE_ADD_SUCCESS'				=> 'Роль успешно добавлена.',
	'ROLE_ASSIGNED_TO'				=> 'Кому назначена роль «%s»',
	'ROLE_DELETED'					=> 'Роль успешно удалена.',
	'ROLE_DESCRIPTION'				=> 'Описание роли',

	'ROLE_ADMIN_FORUM'			=> 'Администратор форумов',
	'ROLE_ADMIN_FULL'			=> 'Администратор конференции',
	'ROLE_ADMIN_STANDARD'		=> 'Стандартный администратор',
	'ROLE_ADMIN_USERGROUP'		=> 'Администратор пользователей и групп',
	'ROLE_FORUM_BOT'			=> 'Доступ для бота',
	'ROLE_FORUM_FULL'			=> 'Полный доступ',
	'ROLE_FORUM_LIMITED'		=> 'Ограниченный доступ',
	'ROLE_FORUM_LIMITED_POLLS'	=> 'Ограниченный доступ с опросами',
	'ROLE_FORUM_NOACCESS'		=> 'Нет доступа',
	'ROLE_FORUM_ONQUEUE'		=> 'С предварительным одобрением',
	'ROLE_FORUM_POLLS'			=> 'Стандартный доступ с опросами',
	'ROLE_FORUM_READONLY'		=> 'Доступ только для чтения',
	'ROLE_FORUM_STANDARD'		=> 'Стандартный доступ',
	'ROLE_FORUM_NEW_MEMBER'		=> 'Доступ для новых зарегистрированных пользователей',
	'ROLE_MOD_FULL'				=> 'Супермодератор',
	'ROLE_MOD_QUEUE'			=> 'Премодератор',
	'ROLE_MOD_SIMPLE'			=> 'Простой модератор',
	'ROLE_MOD_STANDARD'			=> 'Стандартный модератор',
	'ROLE_USER_FULL'			=> 'Все возможности',
	'ROLE_USER_LIMITED'			=> 'Ограниченные возможности',
	'ROLE_USER_NOAVATAR'		=> 'Без аватары',
	'ROLE_USER_NOPM'			=> 'Без личных сообщений',
	'ROLE_USER_STANDARD'		=> 'Стандартные возможности',
	'ROLE_USER_NEW_MEMBER'		=> 'Возможности новых зарегистрированных пользователей',

	'ROLE_DESCRIPTION_ADMIN_FORUM'			=> 'Имеет доступ к управлению форумами и к настройкам прав доступа к форумам.',
	'ROLE_DESCRIPTION_ADMIN_FULL'			=> 'Имеет доступ ко всем администраторским возможностям конференции.<br />Не рекомендуется.',
	'ROLE_DESCRIPTION_ADMIN_STANDARD'		=> 'Имеет доступ к большинству администраторских возможностей, но не может использовать системные и серверные настройки.',
	'ROLE_DESCRIPTION_ADMIN_USERGROUP'		=> 'Может управлять пользователями и группами: изменять права доступа, настройки, управлять блокировкой и званиями.',
	'ROLE_DESCRIPTION_FORUM_BOT'			=> 'Эта роль рекомендована для ботов и поисковых машин.',
	'ROLE_DESCRIPTION_FORUM_FULL'			=> 'Доступ к использованию всех возможностей на форуме, включая создание объявлений и прилепленных тем. Также доступна возможность игнорирования флуд-интервала.<br />Не рекомендуется для обычных пользователей.',
	'ROLE_DESCRIPTION_FORUM_LIMITED'		=> 'Доступ к обычным возможностям на форуме, за исключением прикрепления вложений или использования значков сообщений.',
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS'	=> 'Аналогично ограниченному доступу, но с возможностью создания опросов.',
	'ROLE_DESCRIPTION_FORUM_NOACCESS'		=> 'Полное отсутствие доступа, в том числе возможности видеть форум.',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE'		=> 'Доступ к большинству возможностей на форуме, включая прикрепление вложений, но размещаемые сообщения и темы требуют предварительного одобрения модератором.',
	'ROLE_DESCRIPTION_FORUM_POLLS'			=> 'Аналогично стандартному доступу, но с возможностью создания опросов.',
	'ROLE_DESCRIPTION_FORUM_READONLY'		=> 'Имеет доступ к чтению форума, но без возможности создавать новые темы или отвечать на сообщения.',
	'ROLE_DESCRIPTION_FORUM_STANDARD'		=> 'Доступ к большинству возможностей на форуме, включая прикрепление вложений и удаление своих тем, но без права закрытия своих тем и создания опросов.',
	'ROLE_DESCRIPTION_FORUM_NEW_MEMBER'		=> 'Роль для членов специальной группы «Новые пользователи». Содержит права со значением <strong>НИКОГДА</strong> для ограничения доступа новых пользователей к некоторым функциям.',
	'ROLE_DESCRIPTION_MOD_FULL'				=> 'Может использовать все модераторские возможности, включая блокировку пользователей.',
	'ROLE_DESCRIPTION_MOD_QUEUE'			=> 'Может осуществлять только предварительное одобрение и правку сообщений.',
	'ROLE_DESCRIPTION_MOD_SIMPLE'			=> 'Может выполнять только основные действия в темах. Не может выносить предупреждения или использовать отложенную модерацию.',
	'ROLE_DESCRIPTION_MOD_STANDARD'			=> 'Может использовать большинство модераторских возможностей, но не имеет доступа к блокировке пользователей или смене автора сообщений.',
	'ROLE_DESCRIPTION_USER_FULL'			=> 'Может использовать все доступные на форуме возможности для пользователя, включая смену имени или игнорирование флуд-интервала.<br />Не рекомендуется.',
	'ROLE_DESCRIPTION_USER_LIMITED'			=> 'Имеет доступ к обычным возможностям пользователя. Прикрепление вложений, а также отправка электронных и мгновенных сообщений недоступны.',
	'ROLE_DESCRIPTION_USER_NOAVATAR'		=> 'Имеет набор ограниченных возможностей, и, кроме этого, не может использовать аватару.',
	'ROLE_DESCRIPTION_USER_NOPM'			=> 'Имеет набор ограниченных возможностей, и, кроме этого, не имеет доступа к личным сообщениям.',
	'ROLE_DESCRIPTION_USER_STANDARD'		=> 'Имеет доступ к большинству, но не ко всем возможностям пользователя. Например, не может изменять своё имя или игнорировать флуд-интервал.',
	'ROLE_DESCRIPTION_USER_NEW_MEMBER'		=> 'Роль для членов специальной группы «Новые пользователи». Содержит права со значением <strong>НИКОГДА</strong> для ограничения доступа новых пользователей к некоторым функциям.',

	'ROLE_DESCRIPTION_EXPLAIN'		=> 'Вы можете ввести краткое описание роли. Введённый текст будет отображён в виде описания в перечне ролей.',
	'ROLE_DESCRIPTION_LONG'			=> 'Описание роли слишком длинное. Ограничьте описание до 4000 символов.',
	'ROLE_DETAILS'					=> 'Сведения о роли',
	'ROLE_EDIT_SUCCESS'				=> 'Роль успешно изменена.',
	'ROLE_NAME'						=> 'Название роли',
	'ROLE_NAME_ALREADY_EXIST'		=> 'Название роли <strong>%s</strong> уже существует для данного набора прав доступа.',
	'ROLE_NOT_ASSIGNED'				=> 'Роль не назначена.',

	'SELECTED_FORUM_NOT_EXIST'		=> 'Выбранных форумов не существует.',
	'SELECTED_GROUP_NOT_EXIST'		=> 'Выбранных групп не существует.',
	'SELECTED_USER_NOT_EXIST'		=> 'Выбранных пользователей не существует.',
	'SELECT_FORUM_SUBFORUM_EXPLAIN'	=> 'Выбранный здесь форум будет включать все подфорумы.',
	'SELECT_ROLE'					=> 'Выбор роли…',
	'SELECT_TYPE'					=> 'Выберите тип',
	'SET_PERMISSIONS'				=> 'Установить права',
	'SET_ROLE_PERMISSIONS'			=> 'Установить права для роли',
	'SET_USERS_PERMISSIONS'			=> 'Установить пользовательские права',
	'SET_USERS_FORUM_PERMISSIONS'	=> 'Установить локальные права',

	'TRACE_DEFAULT'					=> 'По умолчанию значение каждого права доступа <strong>НЕТ</strong> (сброшено). Таким образом, права доступа могут быть переопределены другими параметрами настроек.',
	'TRACE_FOR'						=> 'Результат для',
	'TRACE_GLOBAL_SETTING'			=> '%s (глобально)',
	'TRACE_GROUP_NEVER_TOTAL_NEVER'	=> 'Значение права для этой группы <strong>НИКОГДА</strong> соответствует результирующему, поэтому сохранено ранее заданное значение.',
	'TRACE_GROUP_NEVER_TOTAL_NEVER_LOCAL'	=> 'Значение права группы для этого форума <strong>НИКОГДА</strong> соответствует результирующему, поэтому сохранено ранее заданное значение.',
	'TRACE_GROUP_NEVER_TOTAL_NO'	=> 'Значение права для этой группы <strong>НИКОГДА</strong> становится новым результирующим, так как ранее не было задано (было задано <strong>НЕТ</strong>).',
	'TRACE_GROUP_NEVER_TOTAL_NO_LOCAL'	=> 'Значение права группы для этого форума <strong>НИКОГДА</strong> становится новым результирующим, так как ранее не было задано (было задано <strong>НЕТ</strong>).',
	'TRACE_GROUP_NEVER_TOTAL_YES'	=> 'Значение права для этой группы <strong>НИКОГДА</strong> заменяет результирующее <strong>ДА</strong> на <strong>НИКОГДА</strong> для данного пользователя.',
	'TRACE_GROUP_NEVER_TOTAL_YES_LOCAL'	=> 'Значение права группы для этого форума <strong>НИКОГДА</strong> заменяет результирующее <strong>ДА</strong> на <strong>НИКОГДА</strong> для этого пользователя.',
	'TRACE_GROUP_NO'				=> 'Значение права для этой группы <strong>НЕТ</strong>, поэтому сохранено ранее заданное результирующее право.',
	'TRACE_GROUP_NO_LOCAL'			=> 'Значение права для этой группы в этом форуме <strong>НЕТ</strong>, поэтому сохранено ранее заданное значение.',
	'TRACE_GROUP_YES_TOTAL_NEVER'	=> 'Значение права для этой группы <strong>ДА</strong>, но результирующее право <strong>НИКОГДА</strong> не может быть заменено.',
	'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL'	=> 'Значение права группы для этого форума <strong>ДА</strong>, но результирующее право <strong>НИКОГДА</strong> не может быть заменено.',
	'TRACE_GROUP_YES_TOTAL_NO'		=> 'Значение права для этой группы <strong>ДА</strong> становится новым результирующим, так как ранее не было задано (было задано <strong>НЕТ</strong>).',
	'TRACE_GROUP_YES_TOTAL_NO_LOCAL'	=> 'Значение права группы для этого форума <strong>ДА</strong> становится новым результирующим, так как ранее не было задано (было задано <strong>НЕТ</strong>).',
	'TRACE_GROUP_YES_TOTAL_YES'		=> 'Значение права для этой группы <strong>ДА</strong>, результирующим правом также является <strong>ДА</strong>, поэтому сохранено ранее заданное значение.',
	'TRACE_GROUP_YES_TOTAL_YES_LOCAL'	=> 'Значение права группы для этого форума <strong>ДА</strong>, результирующим правом также является <strong>ДА</strong>, поэтому сохранено ранее заданное значение.',
	'TRACE_PERMISSION'				=> 'Отследить право доступа — %s',
	'TRACE_RESULT'					=> 'Отследить результат',
	'TRACE_SETTING'					=> 'Отследить настройки',

	'TRACE_USER_GLOBAL_YES_TOTAL_YES'		=> 'Независимо от форума значение права этого пользователя <strong>ДА</strong>, результирующее право также равно <strong>ДА</strong>, таким образом, сохранено результирующее значение. %sОтследить глобальное право%s',
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER'		=> 'Независимо от форума значение права для этого пользователя <strong>ДА</strong>, которое заменяет текущее локальное значение <strong>НИКОГДА</strong>. %sОтследить глобальное право%s',
	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT'	=> 'Независимо от форума значение права этого пользователя <strong>НИКОГДА</strong>, которое не влияет на локальное значение. %sОтследить глобальное право%s',

	'TRACE_USER_FOUNDER'					=> 'Пользователь является основателем конференции, поэтому значения администраторских прав всегда установлены в значение <strong>ДА</strong>.',
	'TRACE_USER_KEPT'						=> 'Значение права для этого пользователя <strong>НЕТ</strong>, таким образом, сохранено ранее заданное результирующее значение.',
	'TRACE_USER_KEPT_LOCAL'					=> 'Значение права для этого пользователя на данном форуме <strong>НЕТ</strong>, таким образом, сохранено ранее заданное результирующее значение.',
	'TRACE_USER_NEVER_TOTAL_NEVER'			=> 'Значение права для этого пользователя <strong>НИКОГДА</strong>, результирующим правом также является <strong>НИКОГДА</strong>, поэтому изменения не производятся.',
	'TRACE_USER_NEVER_TOTAL_NEVER_LOCAL'	=> 'Значение права для этого пользователя на данном форуме <strong>НИКОГДА</strong>, результирующим правом также является <strong>НИКОГДА</strong>, поэтому изменения не производятся.',
	'TRACE_USER_NEVER_TOTAL_NO'				=> 'Значение права для этого пользователя <strong>НИКОГДА</strong> становится новым результирующим правом, так как ранее было задано <strong>НЕТ</strong>.',
	'TRACE_USER_NEVER_TOTAL_NO_LOCAL'		=> 'Значение права для этого пользователя на данном форуме <strong>НИКОГДА</strong> становится новым результирующим правом, так как ранее было задано <strong>НЕТ</strong>.',
	'TRACE_USER_NEVER_TOTAL_YES'			=> 'Значение права для этого пользователя <strong>НИКОГДА</strong> заменяет ранее заданное значение <strong>ДА</strong>.',
	'TRACE_USER_NEVER_TOTAL_YES_LOCAL'		=> 'Значение права для этого пользователя на данном форуме <strong>НИКОГДА</strong> заменяет ранее заданное значение <strong>ДА</strong>.',
	'TRACE_USER_NO_TOTAL_NO'				=> 'Значение права для этого пользователя <strong>НЕТ</strong>, результирующим правом также является <strong>НЕТ</strong>, поэтому установлено значение по умолчанию <strong>НИКОГДА</strong>.',
	'TRACE_USER_NO_TOTAL_NO_LOCAL'			=> 'Значение права для этого пользователя в данном форуме <strong>НЕТ</strong>, результирующим правом также является <strong>НЕТ</strong>, поэтому установлено значение по умолчанию <strong>НИКОГДА</strong>.',
	'TRACE_USER_YES_TOTAL_NEVER'			=> 'Значение права для этого пользователя <strong>ДА</strong>, но результирующе право <strong>НИКОГДА</strong> не может быть заменено.',
	'TRACE_USER_YES_TOTAL_NEVER_LOCAL'		=> 'Значение права для этого пользователя в данном форуме <strong>ДА</strong>, но результирующе право <strong>НИКОГДА</strong> не может быть заменено.',
	'TRACE_USER_YES_TOTAL_NO'				=> 'Значение права для этого пользователя <strong>ДА</strong> становится новым результирующим правом, так как ранее было задано <strong>НЕТ</strong>.',
	'TRACE_USER_YES_TOTAL_NO_LOCAL'			=> 'Значение права для этого пользователя в данном форуме <strong>ДА</strong> становится новым результирующим правом, так как ранее было задано <strong>НЕТ</strong>.',
	'TRACE_USER_YES_TOTAL_YES'				=> 'Значение права для этого пользователя <strong>ДА</strong>, результирующим правом также является <strong>ДА</strong>, поэтому изменения не производятся.',
	'TRACE_USER_YES_TOTAL_YES_LOCAL'		=> 'Значение права для этого пользователя в данном форуме <strong>ДА</strong>, результирующим правом также является <strong>ДА</strong>, поэтому изменения не производятся.',
	'TRACE_WHO'								=> 'В качестве',
	'TRACE_TOTAL'							=> 'Итог',

	'USERS_NOT_ASSIGNED'			=> 'Нет пользователей с этой ролью',
	'USER_IS_MEMBER_OF_DEFAULT'		=> 'состоит в следующих предустановленных группах',
	'USER_IS_MEMBER_OF_CUSTOM'		=> 'состоит в следующих созданных группах',

	'VIEW_ASSIGNED_ITEMS'	=> 'Просмотр назначенных элементов',
	'VIEW_LOCAL_PERMS'		=> 'Посмотреть локальные права',
	'VIEW_GLOBAL_PERMS'		=> 'Посмотреть глобальные права',
	'VIEW_PERMISSIONS'		=> 'Посмотреть права',

	'WRONG_PERMISSION_TYPE'				=> 'Выбран неправильный тип прав.',
	'WRONG_PERMISSION_SETTING_FORMAT'	=> 'Права установлены в неверном формате, их обработка невозможна.',
));
