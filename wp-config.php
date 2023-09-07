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
define( 'DB_NAME', 'PLANTY' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'uz4]njWTvTYV]%%iS,_w5-VdbH5{dq_U#-{5Km2B/4JE!%jdAfcL!n$:Je}_olXh' );
define( 'SECURE_AUTH_KEY',  'RbzS)lB<qYP*#r[YEW85^^!EY=[_uQF_}8dbU+4(uS)8O%WZX:CJ1V:1]rrTK[T3' );
define( 'LOGGED_IN_KEY',    'lQgGcQ&[5|{kKsqZran`Q_S%j=SX> %h4nsatH@PTX0;Y-vX[|4/*9]cxRh4[iBc' );
define( 'NONCE_KEY',        'sgp&Z&XP<y :lj}heJ;N]8g/JL*x>8AI>u(orAtzyT9hx]?x_aPr5qF0?,-4k{Q?' );
define( 'AUTH_SALT',        'vSpX|uGLndA)O_M/,4dP:VMLn.ei{Ugwx3`+_3oq@O.8$> 9w~ev_8kub.:ItdLL' );
define( 'SECURE_AUTH_SALT', 'Nc?Xq:r!UwP9 B5<WV%p(~k>AIg~LK,4A%EKzf^g.nd,/%r,kYkV,zMw,!p-YJ7*' );
define( 'LOGGED_IN_SALT',   '#39T4Gt3Q58y:1JP(6n615P+V(+l,I$:/`sxP)f=ddVo!+ EbY&*F4p5W>|0<0x>' );
define( 'NONCE_SALT',       'IG*=mv:JQIc#z80r5 Q@FG I$-+8`N!|D/{JL{.Qk&b*ypqncaB_g/0c1znZEU-F' );
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
