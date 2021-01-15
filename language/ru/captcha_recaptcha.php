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

	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha v2',
	'CAPTCHA_RECAPTCHA_V3'			=> 'reCaptcha v3',

	'RECAPTCHA_INCORRECT'			=> 'Приведено неверное решение',
	'RECAPTCHA_NOSCRIPT'			=> 'Включите JavaScript в браузере, чтобы увидеть задание против спам-ботов.',
	'RECAPTCHA_NOT_AVAILABLE'		=> 'Для использования reCaptcha необходимо создать учётную запись на сайте <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'RECAPTCHA_INVISIBLE'			=> 'Данный вид CAPTCHA является невидимым. Чтобы удостовериться в его работоспособности, в правом нижнем углу данной страницы должен отобразиться маленький значок.',

	'RECAPTCHA_PUBLIC'				=> 'Ключ сайта (Site key)',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'Ключ reCaptcha вашего сайта. Ключи можно получить на сайте <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Используйте версию reCAPTCHA v2 &gt; Invisible reCAPTCHA.',
	'RECAPTCHA_V3_PUBLIC_EXPLAIN'	=> 'Ключ reCaptcha вашего сайта. Ключи можно получить на сайте <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Используйте версию reCAPTCHA v3.',
	'RECAPTCHA_PRIVATE'				=> 'Секретный ключ (Secret key)',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'Ваш секретный ключ reCaptcha. Ключи можно получить на сайте <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Используйте версию reCAPTCHA v2 &gt; Invisible reCAPTCHA.',
	'RECAPTCHA_V3_PRIVATE_EXPLAIN'	=> 'Ваш секретный ключ reCaptcha. Ключи можно получить на сайте <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Используйте версию reCAPTCHA v3.',

	'RECAPTCHA_V3_DOMAIN'				=> 'Домен',
	'RECAPTCHA_V3_DOMAIN_EXPLAIN'		=> 'Домен, с которого будет загружен скрипт для проверки запроса.<br>Если <samp>google.com</samp> недоступен, используйте <samp>recaptcha.net</samp>.',

	'RECAPTCHA_V3_METHOD'				=> 'Метод',
	'RECAPTCHA_V3_METHOD_EXPLAIN'		=> 'Метод, который будет использован для проверки запроса.<br>Если выбор недоступен, данный метод не может быть использован для данной конференции.',
	'RECAPTCHA_V3_METHOD_CURL'			=> 'cURL',
	'RECAPTCHA_V3_METHOD_POST'			=> 'POST',
	'RECAPTCHA_V3_METHOD_SOCKET'		=> 'Socket',

	'RECAPTCHA_V3_THRESHOLD_DEFAULT'			=> 'Порог по умоланию',
	'RECAPTCHA_V3_THRESHOLD_DEFAULT_EXPLAIN'	=> 'Порог по умолчанию используется, когда другие пороги неприменимы.',
	'RECAPTCHA_V3_THRESHOLD_LOGIN'				=> 'Порог при входе',
	'RECAPTCHA_V3_THRESHOLD_POST'				=> 'Порог при отправке сообщений',
	'RECAPTCHA_V3_THRESHOLD_REGISTER'			=> 'Порог при регистрации',
	'RECAPTCHA_V3_THRESHOLD_REPORT'				=> 'Порог при жалобе',
	'RECAPTCHA_V3_THRESHOLDS'					=> 'Пороги',
	'RECAPTCHA_V3_THRESHOLDS_EXPLAIN'			=> 'reCAPTCHA v3 возвращает оценку (<samp>1.0</samp> — наиболее вероятно вызывающий доверие пользователь, <samp>0.0</samp> — наиболее вероятно бот). Здесь можно настроить минимальную оценку (порог) для каждого случая использования reCAPTCHA v3.',
 	'EMPTY_RECAPTCHA_V3_REQUEST_METHOD'			=> 'Для корректной работы reCAPTCHA v3 обязательно наличие информации об используемом методе для проверки запроса.',
]);
