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
define( 'AUTH_KEY',         'TO2bp#rVi`6iI,l@0c(FUd$3^Tt9D@)=#5<5[L@-sEv#fB@fV3W2Pnlk^aobO^9 ' );
define( 'SECURE_AUTH_KEY',  '*37WJ1MAjb+ny|KwM6|-mm9l|S%G?ndh[YT}5*o3,8t4-R4M:kDJ2r+|:a]?%ifh' );
define( 'LOGGED_IN_KEY',    'O1FP;:yD0e-Wf`o2zf%t^(S?{hc[Rl/;|PKMC`$#mip|.F@-*w7cg>h;~(q1RMz-' );
define( 'NONCE_KEY',        '_.E7030UQU1T+T+N%^txU~d}%$5ceIiDwUMR6h95KTKr:(((;7Z NS9/V&u_ImcW' );
define( 'AUTH_SALT',        '3FyBymG82&=.t15Y [,}P>q@-j{6>nr9a-9SPeOAa7-2Z?Ex69-#84?aO+/g~?8v' );
define( 'SECURE_AUTH_SALT', '0a;B?<UEl#8>P<-<2N{glKubD&^IaQ^@|5VqXsOAss192e:fj+@~o94PQlI_ZacV' );
define( 'LOGGED_IN_SALT',   'tddpE+`=V:q4xnB&}7aU1vH8C^5g7}1Q(B-((9#6(1t2;a(0zT!)SAN6DzlK?Keo' );
define( 'NONCE_SALT',       ']:)&d;PPA+5?,1*E<&4:MLj_`0p-Z/ n4,q?%4-O`oa[,e}VK~3@>^q_t<vN 8$I' );
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
