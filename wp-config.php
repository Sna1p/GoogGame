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
define( 'DB_NAME', 'word' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'marina' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'ican1999eat' );

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
define( 'AUTH_KEY',         'SxX)Y5ONS+1eHH4e6/ygP57a6te|g9ohQG*quVo2/|9vrm<w S2n=N<Uqq#Dj].)' );
define( 'SECURE_AUTH_KEY',  '3v{2cD +.k)J7^#@j%JxX!jJjxDhpa#K0waC2,%vrtL-t-acaSd%jq}hn^MTf/4v' );
define( 'LOGGED_IN_KEY',    '|u?:zp,ntZ?Yv%I6&nf$.9B-tQPq;,zt_5~{/)^Xu*:rinCD#AU8kYDvc#vQX(9C' );
define( 'NONCE_KEY',        '(yPh0:<VwJ&wwFLJvKgdSp<Juz#xiTr1p&YU)QchY^;H4|mQxBy3-BYzmC>/A@-s' );
define( 'AUTH_SALT',        'mDI~u}g_iL))<nazJ{D(Y]II}?0&7><O{RzVH?kT;7y8kH:q%0@BA9&Hm{[#nd(=' );
define( 'SECURE_AUTH_SALT', ';;=;Q7vE x%$Py0QDcJA=ePr+jSoY}T_^LyA%/j3DjRC~&36hvL&a3KTqWMf]2O-' );
define( 'LOGGED_IN_SALT',   'u&S?nN*mF#Zp,X~v2+Vj-Z]j3Hqump5QG^hl`bLNNLmxD%^4kmgugvwy3op45B/Z' );
define( 'NONCE_SALT',       '<S?r KT)NLYrLa[a{vD&Yw@ZM_WPyK04cA+F2;]&&1+5t4c|?ay_+wT@W`PE%;LD' );

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
