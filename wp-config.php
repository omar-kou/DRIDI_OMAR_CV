<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'wordpress' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'sd@00983386' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'tEkt(jypE!,1X@;vST&F&28/8vKZV1Ntc=SM$WjlWimeb^E0N4+tpT/&FP|nC@xW' );
define( 'SECURE_AUTH_KEY',  'll>_`T*fyHIY])pZ]Pn;rfmN:N78Y=kR$- ]lN!>hhz#W-GfMu`j$@91h2U5x=y:' );
define( 'LOGGED_IN_KEY',    '(-Ve@-EQqJn_!SR^L#5:N9aXh(?p&E@ISpCImu]o3w%pAWt<Q74D<mMc>)Kvf9tb' );
define( 'NONCE_KEY',        'Z@evo@`vtD7jnU~PWX54dvuOgR^UWM%$H`FQ[?8.B!&i<7IWLL)by[l/BX& _zwQ' );
define( 'AUTH_SALT',        '7j/lyWbNt5P `Qlftc|.?zt`@tNMg=&uiT`sDe)}mUA/_$es}R!>55q?B#7s?tPa' );
define( 'SECURE_AUTH_SALT', '2PN2Ey~_!th1_]_g>f-:-~oby@){[VP9~&GpWy@Ei`d<#k;v]mdLuC20Mn71Ks})' );
define( 'LOGGED_IN_SALT',   'O7.zhk 9v j17(E1by22ad&7cWp}Ku%mMB___;qC~w4z4,@=Xw ~:)yxsrV)66:/' );
define( 'NONCE_SALT',       'D`KEROz/r$nV5w[^bNpn}1^*-9#.?5k=Bj<%gyDLQzLp*je%b^1t#dO)2.X6H+.0' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
