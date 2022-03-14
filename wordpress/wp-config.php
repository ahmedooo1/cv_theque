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
define( 'DB_NAME', 'cv_théque' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '8I?ayqA)or3v-G;rTF*50Z]x=Bwk_Z2|4||vp!ZN1pk2Cm<H5+<g*Zku :WT&;i!' );
define( 'SECURE_AUTH_KEY',  '4P!jnlB-*|v<#!Be)yHxBeuOD@ob,N|.Op=829LZM0|fVS,y>,^zD?4gmy}{let)' );
define( 'LOGGED_IN_KEY',    'U!K=XR7||Vs4h{}s/OI}([^l}xhmLTzIXygBU1b-]%_d-h3hsKUsBtG3g,A  =:Y' );
define( 'NONCE_KEY',        'N!w{prF@1wni;+O-:Uumoh5c.qk>Z .,&;4>C/t%j^W1nmdOE#x+DusH/!Hnh=r8' );
define( 'AUTH_SALT',        'w#!]e(o%BK[>I6;pR/<gOt]ZxeRYg,DCl0[2N&(z{4xr~&xtEDUu6y6O0).Xf>l ' );
define( 'SECURE_AUTH_SALT', 'Z*SeoXrk.x1Opp:F`M:NVgiq|K!tQo50fHLd<ug(V*}c;XJg{)y~v-DfV8O[Jhgl' );
define( 'LOGGED_IN_SALT',   'j(`(R$oh&J@NZ+pV|(] wqGqUf3v(}%1HnvfjT=/x)TTP&J-6mYSn+QH:0{qHid/' );
define( 'NONCE_SALT',       '?I|]lCUgs?0KHseS@BE1h5xd=lRrz^-|T]O5R;s6gmIS,GAi=2SWzf14gy8yQ8!e' );
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
