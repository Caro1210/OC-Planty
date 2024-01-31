<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '}{5tAVa}E2:B.RV1k=2~M!aW4K<1Ii4d!*jBZ4+?5{Eka1!:8Hr!(|Nq|`p;-deO' );
define( 'SECURE_AUTH_KEY',  'okTZwkpRN*XdyO`y*x^)#}%@E~&q{wkE)E9Ia#,e6_~MsUw!CYZM}=`Ij8(Bo[jB' );
define( 'LOGGED_IN_KEY',    '`]F:mSL/VfvW 9.At:n5W)H }AiN]9B$LMvMiVT:ZsV VJ|#MWfHVM&6H(H29.x ' );
define( 'NONCE_KEY',        '[`K5J}Wo>E{H.).n{W<71Ntq_K7.kdSH=0_idjS]f&g+]zsQr?:EP9?0sY`qeeoH' );
define( 'AUTH_SALT',        '6?rS5|zOCumZ,T4a>t$^ 1=a3Z&|(GmR9!.Pw gq4|R`t,kB5zf+PW:;$^/0l9#6' );
define( 'SECURE_AUTH_SALT', '),[oy&wk#M@,oSq?`[|H=CM14iX<F4}!0|n%NAY.L6M-VzCEMWG%Y9dqz4;g}t=2' );
define( 'LOGGED_IN_SALT',   'mfuYE|6*mT7,%L4|-VXfN>x!=7f5olhhQ KX7<B`0]KC8sOkZm;hLvor0f-:Q[5K' );
define( 'NONCE_SALT',       'M-8Y3.Fa!VA[;W;=>L$g?$SN.}f?Q[+0yM}-8F%`^dq}q-z;&LTY$c}.%P1N;MY ' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
