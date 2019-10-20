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

$lang = array_merge($lang, [
	'RECAPTCHA_LANG'				=> 'ru',
	'RECAPTCHA_NOT_AVAILABLE'		=> 'Для использования reCaptcha необходимо создать учётную запись на сайте <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha',
	'RECAPTCHA_INCORRECT'			=> 'Приведено неверное решение',
	'RECAPTCHA_NOSCRIPT'			=> 'Включите JavaScript в браузере, чтобы увидеть задание против спам-ботов.',

	'RECAPTCHA_PUBLIC'				=> 'Ключ сайта (Site key)',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'Ключ reCaptcha вашего сайта. Ключи можно получить на сайте <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>. Используйте версию reCAPTCHA v2 &gt; Invisible reCAPTCHA.',
	'RECAPTCHA_PRIVATE'				=> 'Секретный ключ (Secret key)',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'Ваш секретный ключ reCaptcha. Ключи можно получить на сайте <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>. Используйте версию reCAPTCHA v2 &gt; Invisible reCAPTCHA.',

	'RECAPTCHA_INVISIBLE'			=> 'Данный вид CAPTCHA является невидимым. Чтобы удостовериться в его работоспособности, в правом нижнем углу данной страницы должен отобразиться маленький значок.',
]);
