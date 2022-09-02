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
define( 'DB_NAME', 'ECF_FRONT' );

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
define( 'AUTH_KEY',         ']tV/O8aRnUx5O@;m+/`RTT$ zKz}P?0)-}@`3t7edj-{C+;p(&$hmJSx.@TPy)lR' );
define( 'SECURE_AUTH_KEY',  'HOs);0#)3i[qf#kheIw2;KqXaE%ya8u==y_9ulNkicR7`N6FCl K]rXzkYU T5qY' );
define( 'LOGGED_IN_KEY',    '6u14rGDRBkFGfEeu2|&?u&<Z-p*U{Z yv3Cw`n<[C!r~96]NsyTZ=S A[ Pl/-Vq' );
define( 'NONCE_KEY',        '8*c4lc/!o4lH? RVt)%CH*[y1 K1Gh>-dfU%Xr&NV5*_$OXUe1H+{[+Xf381I^Yg' );
define( 'AUTH_SALT',        '&mX0adp)K1PjLZ&X;fK9!-E,xb~!g)5]uc_.lcqEn%#[E<h[BKfNx$-~s)AL:LNt' );
define( 'SECURE_AUTH_SALT', '.;Y_1i,|,v$l4d#gR%g!>=E ]8L-[x0g~}Uf8^%$uqU.G:C}Dx:&>[HCBky1KjQ3' );
define( 'LOGGED_IN_SALT',   '(i@BE1^:Mvc.zd3-PaN0Q)vE[FK..<hB9H=37b*tM_=0cA1B`H.I4;^(age];_P%' );
define( 'NONCE_SALT',       'bDTj$pa=J d eeR%UL*35[8)xWc=-WyEH fe%Bit[YQP@VLB+vya7##{-$2~[vQ}' );
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
