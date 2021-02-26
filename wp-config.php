<?php
/**
 * WordPress için taban ayar dosyası.
 *
 * Bu dosya şu ayarları içerir: MySQL ayarları, tablo öneki,
 * gizli anahtaralr ve ABSPATH. Daha fazla bilgi için
 * {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php düzenleme}
 * yardım sayfasına göz atabilirsiniz. MySQL ayarlarınızı servis sağlayıcınızdan edinebilirsiniz.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * @package WordPress
 */

// ** MySQL ayarları - Bu bilgileri sunucunuzdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define( 'DB_NAME', 'sql11395429' );

/** MySQL veritabanı kullanıcısı */
define( 'DB_USER', 'sql11395429' );

/** MySQL veritabanı parolası */
define( 'DB_PASSWORD', '71neIIMirl' );

/** MySQL sunucusu */
define( 'DB_HOST', 'sql11.freesqldatabase.com' );

/** Yaratılacak tablolar için veritabanı karakter seti. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define('DB_COLLATE', '');

/**#@+
 * Eşsiz doğrulama anahtarları.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz. Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'iK-snrQ$[y3<!IbfwEW?D Nr[}TgA{b5G4CY+=i=~,VD75Q6W`pgq{W8<DV`djEx' );
define( 'SECURE_AUTH_KEY',  'XI)Bvk>0g3<@l^q+tEGvq&?dWHKc6[xp^*m!V*l6N@O04e20|5HCmq-+,Uc|-Dn(' );
define( 'LOGGED_IN_KEY',    '>G6= <[,Rin {4=tZ3.)-G9}iuMX&p~J`>e:ON//QQJA?3HAQ?kZ&ywX1`{Sal-#' );
define( 'NONCE_KEY',        'C@#0+%2%YRtm@CwAJ7dd`zF:$M)[=Z^EElOyq1a8|c7SpNi,a}mz_z!gcyYu1s4d' );
define( 'AUTH_SALT',        'yzxkk$>+9@UA~kblfhOZk;l>ZoE)H/d<Wgj|8lxhFKH]dH(|n1zEe#q4NgA]EGU|' );
define( 'SECURE_AUTH_SALT', '9S_FxC,9I5E)oSVlY!d3^F_C.#M@3;~7Z9(~7|~PFJ-kB}G_oAPEPZ^?*ee$NiSN' );
define( 'LOGGED_IN_SALT',   '}_*U``Kge<.:Ru- `E#+2ig+(/t#qSB((vpV$Y%]4Vn2hH<h[RCBQzSb@EU{}%&j' );
define( 'NONCE_SALT',       '<u+/=z{VU F-{hEA)K&PS_v,d6CK@L6Q+:(}FXy0}GnI?2*?3tg7bI])2JEXTf{Q' );
/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix = 'wp_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri "true" yaparak geliştirme sırasında hataların ekrana basılmasını sağlayabilirsiniz.
 * Tema ve eklenti geliştiricilerinin geliştirme aşamasında WP_DEBUG
 * kullanmalarını önemle tavsiye ederiz.
 */
define('WP_DEBUG', false);

/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** WordPress değişkenlerini ve yollarını kurar. */
require_once(ABSPATH . 'wp-settings.php');
