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
define('DB_NAME', 'wordpress_bd');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '4.}[ }(hn1cq*wx96:iqR{`]|bFj}3*iHl4%_Q1c7@[c]?kmazEJx53*}c).382L');
define('SECURE_AUTH_KEY',  '4D@jeTx@n:9@rZ1?4R|v6,c4)@3}A4[hGsBu^ 1>?7!#1d9THV>,9A/W<fkXRJLT');
define('LOGGED_IN_KEY',    'QMG+t*7c_o`))%{q>?Nvs!)m[*O)$.)KdDPiA/v1JA`H~rG$PmaU8:1v&ymD.dX:');
define('NONCE_KEY',        '^uAoD=dYLUfs39HaD?ZpT9~xhE<S0ueQ6;iuY;:=S;}qK3[;!J--b+=ui10%wdq,');
define('AUTH_SALT',        '`bUgp)=U5^L([n6[*LOM)HOEIC-;xIJ`Q!s1k8fb:HImaA_;p{$BzeWh:a{nI@1i');
define('SECURE_AUTH_SALT', '>rR#ow(iHsb,,v:^D/,2vO^/JWDoNJG4Y=NI^J9Pw##c<k4g~Mj$&_|I-nxIC%G!');
define('LOGGED_IN_SALT',   'g_lavIG1U:hY5`p4m?_Oikm{P0UXMp43Q(fx)9g<f)Yf3t{;`b GhbOiE#TGsL$-');
define('NONCE_SALT',       'Ou@?Q~ufec@{L8^.nb{+fq(22&0@=@@>R*.Kk)<<1F:f^owkEcB7Avth#,qG{=$h');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
