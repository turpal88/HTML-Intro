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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'timezone' );

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
define( 'AUTH_KEY',         'N!q|iRB1a^D8W-:ySHxg/IzIL}|(,k:5#6Rh?6;F]W2w.NoKzgST:z$s>eL*bAdp' );
define( 'SECURE_AUTH_KEY',  ']ONeOis56p)3uKuOLyn}<WZA|@vx9E7Vs)zGHT@&%?hfzg`rtWeP*~ wd`xc_K^<' );
define( 'LOGGED_IN_KEY',    '{mF)DQowBUXUwAWboQ[VPH)7Y}`96ia}D5xxN}G)VC@M{%_sj1{PmI3+ZKhxsvpA' );
define( 'NONCE_KEY',        '{9tYAwg^nLIi}Z%b!)N!m;wNJSp:~oJO26Y1U.m+ cY^cD~!_V)79**#De2}^~[e' );
define( 'AUTH_SALT',        'tbB}4T/K2<S~BZlD@@b4R0p/2<9wZuddah~-VrD4a7 P&9f>jE:P|Q!5B[5SSQ*9' );
define( 'SECURE_AUTH_SALT', '.MCm<>6f8LyiM>}MLLx9>_|g-i8$Y.ebmp8!U*jzZE*ajrpm-%%cA6N-RO1S_dx9' );
define( 'LOGGED_IN_SALT',   'vn9Mr{)BIW92uc1iqr_JUF>|.FgZd5g.)/c45|*cg}+R~i>f[|.E1Am$vAt.1:x&' );
define( 'NONCE_SALT',       'w`yxU<~+ggwsvA7`4WAv;#E)w!B]`wH<AyxUx#`:LZ?:fl/QG9_-beO.DaRZ!2Tu' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
