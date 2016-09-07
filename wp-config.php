<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи и ABSPATH. Дополнительную информацию можно найти на странице
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется скриптом для создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения вручную.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'wordpress_tvoya_peremoga');

/** Имя пользователя MySQL */
define('DB_USER', 'phpmyadmin');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'phpmyadmin');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'V1_2-#QZ46)q*BFy9X^~??>/v2H@D+IvU/d+5xcK|rP@1K2Qx+[N)yLJzTT-p|XG');
define('SECURE_AUTH_KEY',  'S:0No$3%Ii7f-x>Wy#|=:_A,1Ql/v|s+7oq?27UgF/JzR+i<U1]t4OZjXBmKUne_');
define('LOGGED_IN_KEY',    '_hiD>l#BFu1k~EJDB|m381m-?P/eG+!QQ6t,aY-w.r<fyBcc5zWyZ(n:ol$o)-$i');
define('NONCE_KEY',        '0QGPF1H[o6!{3DL1%?+g>9w:0dQuB[w8VG[,Pv~:QvypE=y(rvt.G0;USjhqJAf>');
define('AUTH_SALT',        '&rrX`ay%Ig0G<^-nqHo2+(=yNS+vJ{/pLPAm?j-y27C6>sq-q7)1?/]]:`Rq#E=r');
define('SECURE_AUTH_SALT', '9)|Ah`%:30+qRmK|GfbVMkX_jRMTW0&P_Imkn^jP:rQ=_8iBih5DXON}%+{ ;$@9');
define('LOGGED_IN_SALT',   '%&qQd&{!-4m(M|gn6).6^sAoX+N)J.ww.l*WXsS`%VdT=+]9CUr5K0nwTy{QhPz0');
define('NONCE_SALT',       'SE )|ko,^RgQ)IxJ`$8)#`frXG5P1a03=|m7=OypWMQ[-YT=3#{>!Yc<X?YTz%iM');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wpidtable_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
