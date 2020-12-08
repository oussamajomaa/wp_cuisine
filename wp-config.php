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
define( 'DB_NAME', 'wpOne' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'step25' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'step25' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

define('FS_METHOD','direct');

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
define( 'AUTH_KEY',         'nGWr):XP/Yr0c&*^Xz(+#wEl{C%,2]4p G4S5^0.BcCF^M.ME,,M^S>H@UC&W99?' );
define( 'SECURE_AUTH_KEY',  '0<>AS^I/Bni]+b@UM_bk1]G!0^xI:_a1WW.H > 2RM %lkENu#~lnjs_F75VdvTf' );
define( 'LOGGED_IN_KEY',    'l[(*oX&!mSAU$*=l3;.0i/BT]F^%Jp3(XZ!ZrY7DM|(+G`z[fU84~1E]br3j7Ptb' );
define( 'NONCE_KEY',        'Z^v#**l/pc+@YgyR%69gzjCpQ^IwmhYe_78kD5E#O{>bx(u3 (yS2Dziyd,W_!^l' );
define( 'AUTH_SALT',        'g>g6P`[B2vv>QK]?/?-sli.SVqi3K[;h]:z0sw0o/v<Ff icVM]|hBg>xzv9w)YV' );
define( 'SECURE_AUTH_SALT', 'N_.F7erd%)r(0*{gfalPM[/N#{IKDif+%#V=yl@Df1CbR6w4]!b`=d${hp)autM%' );
define( 'LOGGED_IN_SALT',   '-C`x%e]tuHV]+CUD//(obAXSk8h@37*]=/~Tb}(e-!b{?-8* l8Uv>*[.]U8f8,Y' );
define( 'NONCE_SALT',       'nD[^oth?:Y3:6s3g2u. EqGze`2O7=L`;Rv=O?s 00#4af*HY,;v=qrVdA.=:;0V' );
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
