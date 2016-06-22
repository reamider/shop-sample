<?php
/**
 * Podstawowa konfiguracja WordPressa.
 *
 * Skrypt wp-config.php używa tego pliku podczas instalacji.
 * Nie musisz dokonywać konfiguracji przy pomocy przeglądarki internetowej,
 * możesz też skopiować ten plik, nazwać kopię "wp-config.php"
 * i wpisać wartości ręcznie.
 *
 * Ten plik zawiera konfigurację:
 *
 * * ustawień MySQL-a,
 * * tajnych kluczy,
 * * prefiksu nazw tabel w bazie danych,
 * * ABSPATH.
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Ustawienia MySQL-a - możesz uzyskać je od administratora Twojego serwera ** //
/** Nazwa bazy danych, której używać ma WordPress */
define('DB_NAME', 'nastyangel_cba_pl');

/** Nazwa użytkownika bazy danych MySQL */
define('DB_USER', 'reamider');

/** Hasło użytkownika bazy danych MySQL */
define('DB_PASSWORD', 'wiwn4rke');

/** Nazwa hosta serwera MySQL */
define('DB_HOST', 'mysql.cba.pl');

/** Kodowanie bazy danych używane do stworzenia tabel w bazie danych. */
define('DB_CHARSET', 'utf8mb4');

/** Typ porównań w bazie danych. Nie zmieniaj tego ustawienia, jeśli masz jakieś wątpliwości. */
define('DB_COLLATE', '');

/**#@+
 * Unikatowe klucze uwierzytelniania i sole.
 *
 * Zmień każdy klucz tak, aby był inną, unikatową frazą!
 * Możesz wygenerować klucze przy pomocy {@link https://api.wordpress.org/secret-key/1.1/salt/ serwisu generującego tajne klucze witryny WordPress.org}
 * Klucze te mogą zostać zmienione w dowolnej chwili, aby uczynić nieważnymi wszelkie istniejące ciasteczka. Uczynienie tego zmusi wszystkich użytkowników do ponownego zalogowania się.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'aZf*SFtJdzGGl/&<^QYb!i^~|wF%vA3jFP}*zw7B<lq@A+c5Op`.B!*)/~k0:STT');
define('SECURE_AUTH_KEY',  'H6MKSk`tr.Ai:WNGB9/k{t335uTS_P~g/u(7jD.{_<*h<?{ncZp4{%>2|MT#[E=I');
define('LOGGED_IN_KEY',    'Pa.#7`OPlskUk$2spp8tlLzvoIJ8u0SN#/hn-B>2QE_aIH&^}66WcWN/O{J!:Yd;');
define('NONCE_KEY',        'geT|og}+vBg=BVB?!PH&>Bf8-x^;@><%BvDhC(l13FO+xm#8B5)@k]r.N|y}w>F>');
define('AUTH_SALT',        'j(*?#h%r0tZK{iR}*}:U=B;wjU(2lai0*Q@}p**_]+ePPbl8NV|mXBQM#ZBi|bS-');
define('SECURE_AUTH_SALT', '_t`N97i]Rm@-XHC58,j2z{oGhtNiX&p(;_*sy0VD(lo--k+$WnOXvprW;J< G7No');
define('LOGGED_IN_SALT',   'QC%uYa^oc]O.f(Ry*!%0|tGKUn$[0qxf[`*dh(t`*FDYx.0PN?1:o?bhq0T01a&d');
define('NONCE_SALT',       '*rMI@|jL#U>6]/!Oj0k[ XPv!CX,/%&n>f~ieZK{_wLbW9qzanUnm||oJ%$d&tML');

/**#@-*/

/**
 * Prefiks tabel WordPressa w bazie danych.
 *
 * Możesz posiadać kilka instalacji WordPressa w jednej bazie danych,
 * jeżeli nadasz każdej z nich unikalny prefiks.
 * Tylko cyfry, litery i znaki podkreślenia, proszę!
 */
$table_prefix  = 'wp_';

/**
 * Dla programistów: tryb debugowania WordPressa.
 *
 * Zmień wartość tej stałej na true, aby włączyć wyświetlanie
 * ostrzeżeń podczas modyfikowania kodu WordPressa.
 * Wielce zalecane jest, aby twórcy wtyczek oraz motywów używali
 * WP_DEBUG podczas pracy nad nimi.
 *
 * Aby uzyskać informacje o innych stałych, które mogą zostać użyte
 * do debugowania, przejdź na stronę Kodeksu WordPressa.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('FS_METHOD', 'direct');

define('WP_DEBUG', false);

/* To wszystko, zakończ edycję w tym miejscu! Miłego blogowania! */

/** Absolutna ścieżka do katalogu WordPressa. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Ustawia zmienne WordPressa i dołączane pliki. */
require_once(ABSPATH . 'wp-settings.php');
