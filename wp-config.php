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
define( 'DB_NAME', 'bd_31w' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'farzad' );

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
define( 'AUTH_KEY',         'DWLxm?p6a+^S=g2Om`EQ`l`-^fq[TOh]64*R4zpEJ^A6w%<8:FTaE5+1-{>aL 75' );
define( 'SECURE_AUTH_KEY',  '!2|_I&J=Q_MU4Gj^}SN0j#SDIDdKS#a5e#4R?)c=oPe9}7e>v?NpkcfAsD@@KS&?' );
define( 'LOGGED_IN_KEY',    'zw[:<95Pi3@EojO*332Z?$P~uYk#cz^nw/|R#NP`}ReaJk7OoWfq<`x3G:hqpf[0' );
define( 'NONCE_KEY',        '=YaC!nG(cPRx:((`ur$]$M/gNpW2N;Du&h<B1+JaCyJH%i(uUdnQLoNI|76d4#A:' );
define( 'AUTH_SALT',        'M-kz_ez#=[oc3t!%;oe7+9q.D|mDR3w6!.$f4S]!wQ2]`#XguO1.-mc7jrn?H]c_' );
define( 'SECURE_AUTH_SALT', 'j7H%b6i+Vp4UJ ~4is){>2N;yNNB(JQp;TY-V!$>F(KLNSEwQ@I,C_898.WcV9) ' );
define( 'LOGGED_IN_SALT',   '.3d-~W$QB$ioE6QfuYjs4$sKy7<OGadS)-::NASlX86.cUY3bH;<lB69q/_,)li$' );
define( 'NONCE_SALT',       'kcxrT3Y%fy.:B8ippcYE%kD4yz3j<Bls%2RSm{cg.,Aw(%)S$K}Agzy@@1R`DvFm' );
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
define( 'WP_DEBUG', true );
define( 'WP_POST_REVISIONS', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
