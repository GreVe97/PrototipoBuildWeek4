<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni del database
 * * Chiavi segrete
 * * Prefisso della tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni database - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'bw4Prototype' );

/** Nome utente del database */
define( 'DB_USER', 'root' );

/** Password del database */
define( 'DB_PASSWORD', '' );

/** Hostname del database */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di collazione del database. Da non modificare se non si ha idea di cosa sia. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chiavi univoche di autenticazione e di sicurezza.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 *
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tutti i cookie esistenti.
 * Ciò forzerà tutti gli utenti a effettuare nuovamente l'accesso.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'JyH}0&k irTQ7jJ=ewfzi:*g,%a@f`*y.`|Do.ijX[w8W?:.#Cn>He.YD@4p&Um&' );
define( 'SECURE_AUTH_KEY',  'Y(9|>KyeN>Vx:U$n/S+NcqWH8s|yG)V8hCKE!,A?o*I?yzsYMbW2W{W{g0P/.|JG' );
define( 'LOGGED_IN_KEY',    '>li|[?Y<8GoL{HP!*??%B-)83P;1WL_A]m[)3e1%4Q&?A&Mdwt[HG[<$Lq;aCQ*D' );
define( 'NONCE_KEY',        'uv]E#axGta(X(nRf:gS3sW2)In|0uMhR]~d:|lf$*(|)_w+J>m[AWib7ODBkoadI' );
define( 'AUTH_SALT',        '&HRtF[!h>@-)TG+h3WI:9*PaqCFJfwzi7!,?O%KAZuB9[KLiR#PoV2/m-y1{tvdS' );
define( 'SECURE_AUTH_SALT', 'eeIR0I>#;=)D3ZH7C]]:$9,..mI[A}ZT9,Oplc}cb7)`7-sg{8y39W)$,_@gr-TN' );
define( 'LOGGED_IN_SALT',   'sb ]`u},i.G8(}YOt(,x-^=%mm]pg)?i$93b(s.IQg-{}eaV_0lnV1=1{s:- *KG' );
define( 'NONCE_SALT',       'na|g,/>As-3Ya>Rz1Mn2hY52hR}k[2E^aM_loqb+J#t>b+5F>]/e|7>pq#7t:/v5' );

/**#@-*/

/**
 * Prefisso tabella del database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco. Solo numeri, lettere e trattini bassi!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Aggiungere qualsiasi valore personalizzato tra questa riga e la riga "Finito, interrompere le modifiche". */



/* Finito, interrompere le modifiche! Buona pubblicazione. */

/** Path assoluto alla directory di WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Imposta le variabili di WordPress ed include i file. */
require_once ABSPATH . 'wp-settings.php';
