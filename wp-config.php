<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'C3,M;,-WMyM?dJg1&lpm)C|hjd.y##@_2>(,&9C!h[%^9`PwX7-mR(MukXz~/-%Z');
define('SECURE_AUTH_KEY',  'A95J5LeyOF4;5QvaInU8L@+^Q`A7lbg+i$ork;edb|/#fP]h8pFpZt>P;b3g<}q1');
define('LOGGED_IN_KEY',    'OhDPD[6YQ:Yaw^Lk/UsTC=^s05pr@fx?{<[M8aPWnkX3tTIic:!<N*4+Se-TvSm#');
define('NONCE_KEY',        't&~c2-]O=%n#=Ir:pgo)v.n`jmuP6m|cnLc%U<H6,Av:G>q$0Xxp(q9M%(`g)@1y');
define('AUTH_SALT',        'F14pJSh>}l-^C(J~+2Q]V%~}e%klRs~3j2-?ZG$N*uQ*}r4+Dm[%b_4 ZwM 4i?$');
define('SECURE_AUTH_SALT', '8BafJK9Xq;Frj2uqwllN|^/QBj8e-_HQ33XJ{;A+#(Q09i;D;*HF>uW*,]^Hogjb');
define('LOGGED_IN_SALT',   '2w~co+|=jaB*KW_}TLCcLgMAgCd#MrKzTrL]~-5}53n=+~-d7~xTL(! %qiBg1eK');
define('NONCE_SALT',       'pd@:9-zid8Cx%.l|fE$W#Y/{gg?<MeA 6{|eEtK=[%9},5@P|cqE1YN/8FoX<c8_');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'tm_';

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');