<?php
/**
*
* posting [Russian]
*
* @package language
* @copyright (c) 2005 phpBB Group
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

// BBCodes
// Note to translators: you can translate everything but what's between { and }
$lang = array_merge($lang, array(
	'ACP_BBCODES_EXPLAIN'		=> 'BBCode — это специальная реализация языка HTML, предоставляющая более удобные возможности по форматированию сообщений. С помощью этой страницы вы можете добавлять, удалять и изменять BBCodes.',
	'ADD_BBCODE'				=> 'Добавить BBCode',

	'BBCODE_DANGER'				=> 'Добавляемый BBCode использует лексему {TEXT} в тегах HTML. Это может создать проблемы с безопасностью, связанные с XSS (межсайтовым скриптингом). Попробуйте применить лексемы {SIMPLETEXT} или {INTTEXT}, использующие более строгие проверки. Игнорируйте данное предупреждение только в случае, если польностью осознаёте возможные риски, и использование лексемы {TEXT} абсолютно необходимо.',
	'BBCODE_DANGER_PROCEED'		=> 'Продолжить', //'Я осознаю риск',

	'BBCODE_ADDED'				=> 'BBCode успешно добавлен.',
	'BBCODE_EDITED'				=> 'BBCode успешно изменён.',
	'BBCODE_DELETED'			=> 'BBCode успешно удалён.',
	'BBCODE_NOT_EXIST'			=> 'Выбранный BBCode не существует.',
	'BBCODE_HELPLINE'			=> 'Подсказка',
	'BBCODE_HELPLINE_EXPLAIN'	=> 'Данное поле содержит текст, который появится при наведении указателя мыши на кнопку с BBCode.',
	'BBCODE_HELPLINE_TEXT'		=> 'Текст подсказки',
	'BBCODE_HELPLINE_TOO_LONG'	=> 'Введённый текст подсказки слишком длинный.',

	'BBCODE_INVALID_TAG_NAME'	=> 'Выбранное имя тега BBCode уже существует.',
	'BBCODE_INVALID'			=> 'BBCode создан в недопустимой форме.',
	'BBCODE_OPEN_ENDED_TAG'		=> 'Настраиваемый BBCode должен содержать открывающий и закрывающий теги.',
	'BBCODE_TAG'				=> 'Тег',
	'BBCODE_TAG_TOO_LONG'		=> 'Введённое имя тега слишком длинное.',
	'BBCODE_TAG_DEF_TOO_LONG'	=> 'Введённое определение тега слишком длинное. Введите более короткое определение.',
	'BBCODE_USAGE'				=> 'Использование BBCode',
	'BBCODE_USAGE_EXAMPLE'		=> '[highlight={COLOR}]{TEXT}[/highlight]<br /><br />[font={SIMPLETEXT1}]{SIMPLETEXT2}[/font]',
	'BBCODE_USAGE_EXPLAIN'		=> 'Здесь определяется использование BBCode. Любая вводимая переменная может быть заменена на соответствующую лексему (%sпримеры ниже%s).',

	'EXAMPLE'						=> 'Пример:',
	'EXAMPLES'						=> 'Примеры:',

	'HTML_REPLACEMENT'				=> 'Замена HTML',
	'HTML_REPLACEMENT_EXAMPLE'		=> '&lt;span style="background-color: {COLOR};"&gt;{TEXT}&lt;/span&gt;<br /><br />&lt;span style="font-family: {SIMPLETEXT1};"&gt;{SIMPLETEXT2}&lt;/span&gt;',
	'HTML_REPLACEMENT_EXPLAIN'		=> 'Здесь определяются замены HTML. Не забывайте добавить лексемы, использованные выше!',

	'TOKEN'					=> 'Лексема',
	'TOKENS'				=> 'Лексемы',
	'TOKENS_EXPLAIN'		=> 'Лексемы являются метками-заполнителями для вводимого пользователем содержимого. Правильность введённого содержимого будет подтверждена лишь в том случае, если оно отвечает соответствующему определению. При необходимости вы можете нумеровать их путём добавления номера в конце лексемы внутри фигурных скобок. Например {TEXT1}, {TEXT2}.<br /><br />Кроме лексем для замены HTML можно использовать любые языковые переменные из языковых файлов. Например, {L_<em>&lt;STRINGNAME&gt;</em>}, где <em>&lt;STRINGNAME&gt;</em> — это имя переведённой строки, которую вы хотите добавить. Например, {L_WROTE} будет отображено как «wrote» или переведено в зависимости от выбранного пользователем языка.<br /><br /><strong>Примечание: только нижеуказанные лексемы могут использоваться в пользовательских BBCodes.</strong>',
	'TOKEN_DEFINITION'		=> 'Описание',
	'TOO_MANY_BBCODES'		=> 'Вы больше не можете создать BBCodes. Удалите или переместите некоторые BBCodes и попробуйте снова.',

	'tokens'	=>	array(
		'TEXT'			=> 'Любой текст, включая символы любого языка, числа и так далее. Не следует применять эту лексему в тегах HTML. Вместо этого используйте лексемы IDENTIFIER, INTTEXT или SIMPLETEXT.',
		'SIMPLETEXT'	=> 'Буквы латинского алфавита (A-Z), цифры, пробелы, запятые, точки, минус, плюс, дефис и подчёркивание.',
		'INTTEXT'		=> 'Символы Unicode, цифры, пробелы, запятые, точки, минус, плюс, дефис, подчёркивание.',
		'IDENTIFIER'	=> 'Буквы латинского алфавита (A-Z), цифры, дефис и подчёркивание.',
		'NUMBER'		=> 'Любая последовательность цифр.',
		'EMAIL'			=> 'Правильный адрес электронной почты.',
		'URL'			=> 'Правильный адрес URL с использованием любого протокола (http, ftp и так далее не могут использоваться для деструктивных действий JavaScript). Если ничего не задано, то к строке будет автоматически добавлен префикс «http://».',
		'LOCAL_URL'		=> 'Локальный адрес URL. URL должен быть относительным к странице темы и не должен содержать протокола или имени сервера, как ссылки, начинающиеся с «%s»',
		'RELATIVE_URL'	=> 'Относительный адрес URL. Можно использовать для подстановки отдельных частей адреса URL, но с осторожностью: полный адрес URL является правильным относительным адресом URL. Если требуется использовать относительные адреса URL конференции, применяйте лексему LOCAL_URL.',
		'COLOR'			=> 'Цвет HTML. Цвет может быть задан в числовом формате <samp>#FF1234</samp> или <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">ключевым словом цвета CSS</a>. Например, <samp>fuchsia</samp> или <samp>InactiveBorder</samp>.'
	)
));

// Smilies and topic icons
$lang = array_merge($lang, array(
	'ACP_ICONS_EXPLAIN'		=> 'С помощью этой страницы вы можете добавлять, удалять и изменять значки, которые могут добавляться пользователями к темам или к сообщениям. Эти значки обычно отображаются рядом с названиями тем на страницах просмотра форумов или рядом с заголовками сообщений на страницах просмотра тем. Также вы можете устанавливать и создавать новые пакеты значков.',
	'ACP_SMILIES_EXPLAIN'	=> 'Смайлики — это небольшие, иногда анимированные, рисунки, используемые для передачи чувств и настроений. С помощью этой страницы вы можете добавлять, удалять и изменять смайлики, которые могут добавляться пользователями к своим сообщениям. Также вы можете устанавливать и создавать новые пакеты смайликов.',
	'ADD_SMILIES'			=> 'Добавить несколько смайликов',
	'ADD_SMILEY_CODE'		=> 'Добавить дополнительный код смайлика',
	'ADD_ICONS'				=> 'Добавить несколько значков',
	'AFTER_ICONS'			=> 'После %s',
	'AFTER_SMILIES'			=> 'После %s',

	'CODE'						=> 'Код',
	'CURRENT_ICONS'				=> 'Установленные значки',
	'CURRENT_ICONS_EXPLAIN'		=> 'Выберите действие, которое нужно применить к уже установленным значкам.',
	'CURRENT_SMILIES'			=> 'Установленные смайлики',
	'CURRENT_SMILIES_EXPLAIN'	=> 'Выберите действие, которое нужно применить к установленным смайликам.',

	'DISPLAY_ON_POSTING'		=> 'Показывать на странице ответа',
	'DISPLAY_POSTING'			=> 'На странице ответа',
	'DISPLAY_POSTING_NO'		=> 'Нет на странице ответа',

	'EDIT_ICONS'				=> 'Изменить значки',
	'EDIT_SMILIES'				=> 'Изменить смайлики',
	'EMOTION'					=> 'Эмоция',
	'EXPORT_ICONS'				=> 'Экспортировать и загрузить файл icons.pak',
	'EXPORT_ICONS_EXPLAIN'		=> '%sПосле щелчка по этой ссылке конфигурация установленных значков будет упакована в файл <samp>icons.pak</samp>, который после загрузки можно использовать для создания архивов <samp>.zip</samp> или <samp>.tgz</samp>, содержащих все ваши значки вместе с конфигурационным файлом <samp>icons.pak</samp>%s.',
	'EXPORT_SMILIES'			=> 'Экспортировать и загрузить файл smilies.pak',
	'EXPORT_SMILIES_EXPLAIN'	=> '%sПосле щелчка по этой ссылке конфигурация установленных смайликов будет упакована в файл <samp>smilies.pak</samp>, который после загрузки можно использовать для создания архивов <samp>.zip</samp> или <samp>.tgz</samp>, содержащих все ваши смайлики вместе с конфигурационным файлом <samp>smilies.pak</samp>.',

	'FIRST'			=> 'Первый',

	'ICONS_ADD'				=> 'Добавить значок',
	'ICONS_ADDED'			=> array(
		0	=> 'Значки не были добавлены.',
		1	=> 'Указанный значок успешно добавлен.',
		2	=> 'Указанные значки успешно добавлены.',
		3	=> 'Указанные значки успешно добавлены.',
	),
	'ICONS_CONFIG'			=> 'Настройки значков',
	'ICONS_DELETED'			=> 'Значок успешно удалён.',
	'ICONS_EDIT'			=> 'Изменить значок',
	'ICONS_EDITED'			=> array(
		0	=> 'Значки не были обновлены.',
		1	=> 'Указанный значок успешно обновлён.',
		2	=> 'Указанные значки успешно обновлены.',
		3	=> 'Указанные значки успешно обновлены.',
	),
	'ICONS_HEIGHT'			=> 'Высота значка',
	'ICONS_IMAGE'			=> 'Рисунок значка',
	'ICONS_IMPORTED'		=> 'Пакет значков успешно установлен.',
	'ICONS_IMPORT_SUCCESS'	=> 'Пакет значков успешно импортирован.',
	'ICONS_LOCATION'		=> 'Путь к значку',
	'ICONS_NOT_DISPLAYED'	=> 'Следующие значки не будут отображаться на странице размещения сообщения',
	'ICONS_ORDER'			=> 'Порядок значка',
	'ICONS_URL'				=> 'Файл значка',
	'ICONS_WIDTH'			=> 'Ширина значка',
	'IMPORT_ICONS'			=> 'Установить пакет значков',
	'IMPORT_SMILIES'		=> 'Установить пакет смайликов',

	'KEEP_ALL'			=> 'Сохранить все',

	'MASS_ADD_SMILIES'	=> 'Добавить несколько смайликов',

	'NO_ICONS_ADD'		=> 'Нет значков, доступных для добавления.',
	'NO_ICONS_EDIT'		=> 'Нет значков, доступных для изменения.',
	'NO_ICONS_EXPORT'	=> 'Нет значков, доступных для создания пакета.',
	'NO_ICONS_PAK'		=> 'Пакеты значков не найдены.',
	'NO_SMILIES_ADD'	=> 'Нет смайликов, доступных для добавления.',
	'NO_SMILIES_EDIT'	=> 'Нет смайликов, доступных для изменения.',
	'NO_SMILIES_EXPORT'	=> 'Нет смайликов, доступных для создания пакета.',
	'NO_SMILIES_PAK'	=> 'Пакеты смайликов не найдены.',

	'PAK_FILE_NOT_READABLE'		=> 'Ошибка чтения файла <samp>.pak</samp>',

	'REPLACE_MATCHES'	=> 'Заменить парные',

	'SELECT_PACKAGE'			=> 'Выберите файл пакета',
	'SMILIES_ADD'				=> 'Добавить смайлик',
	'SMILIES_ADDED'				=> array(
		0	=> 'Смайлики не были добавлены.',
		1	=> 'Указанный смайлик успешно добавлен.',
		2	=> 'Указанные смайлики успешно добавлены.',
		3	=> 'Указанные смайлики успешно добавлены.',
	),
	'SMILIES_CODE'				=> 'Код смайлика',
	'SMILIES_CONFIG'			=> 'Настройки смайликов',
	'SMILIES_DELETED'			=> 'Смайлик успешно удалён.',
	'SMILIES_EDIT'				=> 'Изменить смайлик',
	'SMILIE_NO_CODE'			=> 'Смайлик «%s» не был добавлен, так как для него не задан код.',
	'SMILIE_NO_EMOTION'			=> 'Смайлик «%s» не был добавлен, так как для него не задана эмоция.',
	'SMILIE_NO_FILE'			=> 'Смайлик «%s» не был добавлен, так как для него отсутствует файл.',
	'SMILIES_EDITED'			=> array(
		0	=> 'Смайлики не были обновлены.',
		1	=> 'Указанный смайлик успешно обновлён.',
		2	=> 'Указанные смайлики успешно обновлены.',
		3	=> 'Указанные смайлики успешно обновлены.',
	),
	'SMILIES_EMOTION'			=> 'Эмоция',
	'SMILIES_HEIGHT'			=> 'Высота смайлика',
	'SMILIES_IMAGE'				=> 'Рисунок смайлика',
	'SMILIES_IMPORTED'			=> 'Пакет смайликов успешно установлен.',
	'SMILIES_IMPORT_SUCCESS'	=> 'Пакет смайликов успешно импортирован.',
	'SMILIES_LOCATION'			=> 'Путь к смайлику',
	'SMILIES_NOT_DISPLAYED'		=> 'Следующие смайлики не будут отображаться на странице размещения сообщения',
	'SMILIES_ORDER'				=> 'Порядок смайлика',
	'SMILIES_URL'				=> 'Файл смайлика',
	'SMILIES_WIDTH'				=> 'Ширина смайлика',

	'TOO_MANY_SMILIES'			=> array(
		1	=> 'Достигнут предел в количестве смайликов: %d.',
		2	=> 'Достигнут предел в количестве смайликов: %d.',
		3	=> 'Достигнут предел в количестве смайликов: %d.',
	),
	'WRONG_PAK_TYPE'	=> 'Указанный пакет не содержит подходящих данных.',
));

// Word censors
$lang = array_merge($lang, array(
	'ACP_WORDS_EXPLAIN'		=> 'С помощью этой панели вы можете добавлять, удалять и изменять слова, которые будут автоматически подвергаться цензуре на ваших форумах. Однако пользователи смогут регистрироваться с именами, содержащими эти слова. В словах могут содержаться подстановочные знаки (*). Например, *тест* будет соответствовать слову «протестировать», тест* — «тестирование», *тест — «протест».',
	'ADD_WORD'				=> 'Добавить слово',

	'EDIT_WORD'		=> 'Изменение слова',
	'ENTER_WORD'	=> 'Необходимо ввести слово и его замену.',

	'NO_WORD'	=> 'Не выбрано слово для редактирования.',

	'REPLACEMENT'	=> 'Замена',

	'UPDATE_WORD'	=> 'Обновление слова',

	'WORD'				=> 'Слово',
	'WORD_ADDED'		=> 'Слово успешно добавлено.',
	'WORD_REMOVED'		=> 'Выбранное слово успешно удалено.',
	'WORD_UPDATED'		=> 'Выбранное слово успешно обновлено.',
));

// Ranks
$lang = array_merge($lang, array(
	'ACP_RANKS_EXPLAIN'		=> 'С помощью этой панели вы можете добавлять, удалять и изменять звания. Также вы можете создавать специальные звания, которые могут быть присвоены пользователям на странице управления пользователями.',
	'ADD_RANK'				=> 'Добавить звание',

	'MUST_SELECT_RANK'		=> 'Необходимо выбрать звание.',

	'NO_ASSIGNED_RANK'		=> 'Специального звания не присвоено.',
	'NO_RANK_TITLE'			=> 'Не указан заголовок звания.',
	'NO_UPDATE_RANKS'		=> 'Звание успешно удалено. Однако учётные записи пользователей, которым оно было присвоено, не были обновлены. Вам необходимо вручную восстановить звания в этих учётных записях.',

	'RANK_ADDED'			=> 'Звание успешно добавлено.',
	'RANK_IMAGE'			=> 'Картинка к званию',
	'RANK_IMAGE_EXPLAIN'	=> 'Здесь можно присвоить небольшой рисунок, связанный с данным званием. Путь к рисунку задаётся относительно корневой папки phpBB.',
	'RANK_IMAGE_IN_USE'		=> '(используется)',
	'RANK_MINIMUM'			=> 'Минимум сообщений',
	'RANK_REMOVED'			=> 'Звание успешно удалено.',
	'RANK_SPECIAL'			=> 'Специальное звание',
	'RANK_TITLE'			=> 'Заголовок звания',
	'RANK_UPDATED'			=> 'Звание успешно обновлено.',
));

// Disallow Usernames
$lang = array_merge($lang, array(
	'ACP_DISALLOW_EXPLAIN'	=> 'Здесь вы можете управлять именами пользователей, запрещёнными для использования. Запрещённые имена могут содержать подстановочные знаки (*).',
	'ADD_DISALLOW_EXPLAIN'	=> 'Здесь вы можете запретить имя пользователя. Используйте звёздочку (*) в качестве подстановочного знака для любых символов.',
	'ADD_DISALLOW_TITLE'	=> 'Добавить запрещённое имя',

	'DELETE_DISALLOW_EXPLAIN'	=> 'Вы можете удалить имя из списка запрещённых, выбрав его и нажав кнопку «Отправить».',
	'DELETE_DISALLOW_TITLE'		=> 'Удалить имя из списка запрещённых',
	'DISALLOWED_ALREADY'		=> 'Введённое имя уже запрещено.',
	'DISALLOWED_DELETED'		=> 'Запрещённое имя успешно удалено.',
	'DISALLOW_SUCCESSFUL'		=> 'Запрещённое имя успешно добавлено.',

	'NO_DISALLOWED'				=> 'Нет запрещённых имён',
	'NO_USERNAME_SPECIFIED'		=> 'Не выбрано или не задано имя.',
));

// Reasons
$lang = array_merge($lang, array(
	'ACP_REASONS_EXPLAIN'	=> 'Здесь вы можете управлять причинами, используемыми в жалобах и уведомлениях об отклонении сообщений пользователей. Причина, помеченная звёздочкой, не может быть удалена. Обычно эта причина используется в случае, если другие имеющиеся причины не подходят под жалобу пользователя.',
	'ADD_NEW_REASON'		=> 'Добавить причину',
	'AVAILABLE_TITLES'		=> 'Доступные причины на других языках',

	'IS_NOT_TRANSLATED'			=> 'Причина <strong>не</strong> локализована.',
	'IS_NOT_TRANSLATED_EXPLAIN'	=> 'Причина <strong>не</strong> локализована. Если вы хотите предоставить локализованную форму, то укажите правильный ключ из языковых файлов раздела причин и жалоб.',
	'IS_TRANSLATED'				=> 'Причина локализована',
	'IS_TRANSLATED_EXPLAIN'		=> 'Причина локализована. Если введённый заголовок указан в языковых файлах в разделе причин и жалоб, то будет использоваться локализованная форма заголовка и описания причины.',

	'NO_REASON'					=> 'Причина не найдена.',
	'NO_REASON_INFO'			=> 'Необходимо ввести заголовок и описание этой причины.',
	'NO_REMOVE_DEFAULT_REASON'	=> 'Нельзя удалить причину «Другое».',

	'REASON_ADD'				=> 'Добавление причины жалобы или отказа',
	'REASON_ADDED'				=> 'Причина жалобы или отказа успешно добавлена.',
	'REASON_ALREADY_EXIST'		=> 'Причина с таким заголовком уже существует. Введите другой заголовок.',
	'REASON_DESCRIPTION'		=> 'Описание причины',
	'REASON_DESC_TRANSLATED'	=> 'Отображаемое описание причины',
	'REASON_EDIT'				=> 'Изменение причины или отказа',
	'REASON_EDIT_EXPLAIN'		=> 'Здесь вы можете добавить или изменить причину. Если причина переведена, то используется локализованная версия, вместо введённого здесь описания.',
	'REASON_REMOVED'			=> 'Причина жалобы или отказа успешно удалена.',
	'REASON_TITLE'				=> 'Заголовок причины',
	'REASON_TITLE_TRANSLATED'	=> 'Отображаемый заголовок причины',
	'REASON_UPDATED'			=> 'Причина жалобы или отказа успешно обновлена.',

	'USED_IN_REPORTS'		=> 'Используется в жалобах',
));
