<?php
/**
*
* plupload [Russian]
*
* @package language
* @copyright (c) 2010-2013 Moxiecode Systems AB
* @copyright (c) 2012 phpBB Group
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

$lang = array_merge($lang, array(
	'PLUPLOAD_ADD_FILES'		=> 'Добавить файлы',
	'PLUPLOAD_ADD_FILES_TO_QUEUE'	=> 'Добавьте файлы в очередь и нажмите кнопку «Загрузить».',
	'PLUPLOAD_ALREADY_QUEUED'	=> '%s уже присутствует в очереди.',
	'PLUPLOAD_CLOSE'			=> 'Закрыть',
	'PLUPLOAD_DRAG'				=> 'Переместите файлы сюда.',
	'PLUPLOAD_DUPLICATE_ERROR'	=> 'Ошибка: указанный файл уже существует.',
	'PLUPLOAD_DRAG_TEXTAREA'	=> 'Можно прикреплять файлы, перетаскивая их в окно сообщения.',
	'PLUPLOAD_ERR_INPUT'		=> 'Невозможно открыть входной поток.',
	'PLUPLOAD_ERR_MOVE_UPLOADED'	=> 'Невозможно переместить загруженный файл.',
	'PLUPLOAD_ERR_OUTPUT'		=> 'Невозможно открыть выходной поток.',
	'PLUPLOAD_ERR_FILE_TOO_LARGE'	=> 'Файл слишком большой:',
	'PLUPLOAD_ERR_FILE_COUNT'	=> 'Ошибка подсчета количества файлов.',
	'PLUPLOAD_ERR_FILE_INVALID_EXT'	=> 'Неверное расширение файла:',
	'PLUPLOAD_ERR_RUNTIME_MEMORY'	=> 'Недостаточно памяти для выполнения операции.',
	'PLUPLOAD_ERR_UPLOAD_URL'	=> 'Ссылка на файл для загрузки неверна, или адрес не существует.',
	'PLUPLOAD_EXTENSION_ERROR'	=> 'Ошибка расширения файла.',
	'PLUPLOAD_FILE'				=> 'Файл: %s',
	'PLUPLOAD_FILE_DETAILS'		=> 'Файл: %s, размер: %d, максимальный размер файла: %d',
	'PLUPLOAD_FILENAME'			=> 'Имя файла.',
	'PLUPLOAD_FILES_QUEUED'		=> 'Файлов в очереди: %d',
	'PLUPLOAD_GENERIC_ERROR'	=> 'Общая ошибка.',
	'PLUPLOAD_HTTP_ERROR'		=> 'Ошибка HTTP.',
	'PLUPLOAD_IMAGE_FORMAT'		=> 'Неверный или неподдерживаемый формат изображения.',
	'PLUPLOAD_INIT_ERROR'		=> 'Ошибка инициализации.',
	'PLUPLOAD_IO_ERROR'			=> 'Ошибка ввода-вывода',
	'PLUPLOAD_NOT_APPLICABLE'	=> 'N/A',
	'PLUPLOAD_SECURITY_ERROR'	=> 'Ошибка безопасности.',
	'PLUPLOAD_SELECT_FILES'		=> 'Выбрать файлы',
	'PLUPLOAD_SIZE'				=> 'Размер',
	'PLUPLOAD_SIZE_ERROR'		=> 'Ошибка размера файла.',
	'PLUPLOAD_STATUS'			=> 'Статус',
	'PLUPLOAD_START_UPLOAD'		=> 'Загрузить',
	'PLUPLOAD_START_CURRENT_UPLOAD'	=> 'Начать загрузку файлов.',
	'PLUPLOAD_STOP_UPLOAD'		=> 'Остановить загрузку',
	'PLUPLOAD_STOP_CURRENT_UPLOAD'	=> 'Остановить текущую загрузку',
	// Note: This string is formatted independently by plupload and so does not
	// use the same formatting rules as normal phpBB translation strings
	'PLUPLOAD_UPLOADED'			=> 'Загружено файлов: %d/%d',
));
