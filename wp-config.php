<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'enocork' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '<EK$]_3m=Q0o+#zOMT7CZCdlN>e7j</2QV$C.a-8!WFbDM~B6iTZ-`0ukZZ!5USf' );
define( 'SECURE_AUTH_KEY',  '6iCJ8fpyNdsIYB}$N^P,t=6Sa{k5;XE=%*fAnx|+=Lq-^uv3-a0ajfr1qf[|!z,Y' );
define( 'LOGGED_IN_KEY',    'L| [,^PpGwZ!]w]!6cP+`}Mzc9^G._w;Dpe?;Y1eQ{9Yn@n}Bh%t:DS2%aOq9)90' );
define( 'NONCE_KEY',        '2w!a<z/x6^*hpQnAavRx6n5p l<Ve>l~7F/[mi+Po7p-p=r`FZsWE`{>ql06fe+F' );
define( 'AUTH_SALT',        'd!2Z6)h)HD aor#M:KbA]fd0X|xBkUp;#)C>~LuJY#sp7>KRgep![+_6z:p)IH06' );
define( 'SECURE_AUTH_SALT', '&1G@yC<Yu1..WEr,LCtSATztyvb*:MZ `*AMcdq%0`aeFqT33H-z+-t7]X0/UTDE' );
define( 'LOGGED_IN_SALT',   'Gh29v_vl}c~s;|,ll0ZmGh(9^G5D|zyM+qEYb..}g0*tEGuJ9lNi$c^7%M>_8.=f' );
define( 'NONCE_SALT',       'Pj.2VOE&Dh4%6wl)~hLzX%]cn6-c=ci|~Av~o$wQRucgD3_AZDttb5N8]1gh4V|;' );

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

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
