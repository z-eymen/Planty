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
define( 'AUTH_KEY',         '(}=Idlk[k $-TQF-X<fAik=6$&M2[ia[{XPQ!ceee;GIspkAsTd|y>=raq_b[%KQ' );
define( 'SECURE_AUTH_KEY',  'TfZN#tFO^Z09e9Y:nBx*c]hAWVzPMvc;#Ro>a|6e@[}!U+@c%;W_o/}HaSIC@?cc' );
define( 'LOGGED_IN_KEY',    'I9e31*aT8ED-R]dTliHv? H>h39YB~)mSSC_WOt_*Dr[kRI!:x<+;0z!c$P3 ~o9' );
define( 'NONCE_KEY',        'r| txEVb3m{>QMkubLr6GVveAJKNI}{ca=))% .pBqU& ~-R);:&w.VQlRn7Z$g,' );
define( 'AUTH_SALT',        '?[8Ac|e]%BF8}O=H%N/Z&B&*> V8YqS!Fl{{K*XxP}|i7%i4D7ooP2_/?1%HA/Sm' );
define( 'SECURE_AUTH_SALT', 'M{X4M}pU%DD-2]mX8[_z?)-!zh>c=+J$76GxU!r`akg.j]K/MTe{D_8uB#Hf.rLg' );
define( 'LOGGED_IN_SALT',   'f/@dJqa<a&,M E;)edLG^whA#jVMe<ZhUJ^s@v2.%w70T>?;]GxP7=HngoY9F/^&' );
define( 'NONCE_SALT',       'mZq[l|[n|I*;>vD`LJhBgXHUFO2GCpypV),m2k%g@CtB<:$h6bzf_1yfR)I<,:Yw' );
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
