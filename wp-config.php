<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'swstore_db' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'san4ez' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'admin' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '~/6-)BM@[t^UE9m;2IlA(vbsXl8Ib4u5i-vt`+:m|0GUzGlEkDkIhmCo1jGxsB,c');
define('SECURE_AUTH_KEY',  '@lc;S,Z&>YA``?+J&2%C*E95WfbLQ3cPw|<+I*A,uGo]B iM6+JB+H[Sjktu|X5H');
define('LOGGED_IN_KEY',    'WCfFbq[Ju-trfLp1b@a$d@>0GxQ+0=;(BX`#8o|4-Hn)/wgxwiMI45ffZZH6Q-E&');
define('NONCE_KEY',        'v!}dKQuVtR_9evQuy%Ut+o]hv.vogJX^p0|ZR=+Fa@=I/y@>V+d {(/+(rys*<m ');
define('AUTH_SALT',        'F}|NqhUw|Hv^21_Xww&VEyP02X9WsI6z$2#%G)ua([oqsr;7XRHdZ?~sZ$:loX;A');
define('SECURE_AUTH_SALT', 's[GF%dZ`+vSB-8fs;svt%IkI~+IdxDZyOxhx)`{fJ:lva(PqX[c;-|TF2:o-/o4#');
define('LOGGED_IN_SALT',   'a>Hnbx-!Yv`@k||aSQ-qF#=$Q5}:r,d/dL*u>)>/uj} <Fw(%#98[JrWsX_8a$]&');
define('NONCE_SALT',       '+3,D+gO._#MZ9Ce-O_Sxe0mQcgF}q!3cSQ:HDm *[Ger7SnKKKMwDEf#M|>=,F~5');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
