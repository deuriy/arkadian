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
define( 'DB_NAME', 'arcadian' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'hv4rZCTluv^)v=/Npcu7 c^BVz3]i~f<=[{z]Mirm|1_wt#.!:S-^9Vx#U6JyH:j' );
define( 'SECURE_AUTH_KEY',  'y;9JdfY3?r/vzS@g4Zy+rC8j<@z$9d {0Kc@w-~P7TqtTMr4vZwvCi:HofBgdcD]' );
define( 'LOGGED_IN_KEY',    'MJ{{F0u[xJP?:%2JS%2[-,y}L@R/v$w]NZi;+ES!>(hmTtm^Io3t&o(GuxIK/{OX' );
define( 'NONCE_KEY',        'J!5JeV,?OV}Xegv{~$Zf,+1dqNAovSK%M5q$7|[-_sS~G^5L`Lz~a*m]C-4 UtlV' );
define( 'AUTH_SALT',        '~s(z$d?X1~Ap>rG]}wU9;,juQKRGKvI$Eo__6<:]~*P[(y~y*ULKM2WRRgt^nweP' );
define( 'SECURE_AUTH_SALT', '&roX:4SgF<@L{+DM,?Mbhr$DsT SfkrNS<W[u=So^tMxSP5#G505[y#j7Dl(L0At' );
define( 'LOGGED_IN_SALT',   'P{!Ig~r[a;/VO: tjNAzT|VUnpx6<?.Io}8zKa{_. J2|_|:MLAx4-:1rp>++h(W' );
define( 'NONCE_SALT',       'Dp;818N}Q~gZ}b|.=xDDLVSNUuoQJU9~g2^%51[M|UhYhFBrl8aH]&3q7sb!F N)' );

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
define ('WPCF7_AUTOP', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
