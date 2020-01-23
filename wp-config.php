<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'localhost_wp' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'tH{jhDjpU^qA[%X<?bq>ai/) hh [tiN;dHJf9nBR?cy@{@qz~5M9=Fsz<sG<f&#' );
define( 'SECURE_AUTH_KEY',  'h43=H<A>diD:{:f=/p6D;;?$0Vv(~Gr{S3[m@, c#uH;MfbDss{k!jufg|vV2duP' );
define( 'LOGGED_IN_KEY',    '/qy|,~M-Lj9dlW>Sxmyo!wiH>|y`/_F#Ml<jv;jnOes}h ]o!{@/ @-HWg:`})v]' );
define( 'NONCE_KEY',        'pITLx fZ&uqq!PdQkp@_v||1}zf<mET/A*d;Gn0tl!$,2Nr%PQTwyPC~{qow[m2J' );
define( 'AUTH_SALT',        'l,>d!K8:%{1krzEs-F=q[z,^QBj,.Co+ oWOOQD|CK<a&h)CJ?S?fFbnj/!ghVeV' );
define( 'SECURE_AUTH_SALT', 'W9.=p>HXMyJH:nu[6]lk&ByPB~weUX:Ixue>!Kd65K({WOHPmX2X8[(1Wnm%:^O4' );
define( 'LOGGED_IN_SALT',   '!f!3a{#NFJv^GXb].|UVF{uVzb9HZ+%T)}Y0hPvM&bsQ{)li71P8JyB{l1vm205(' );
define( 'NONCE_SALT',       'o4nGeJFiL1rD~9C!S`GT*&}%,fWw%q4@k-hqSK0O,;v$s-`uz<]|0~&CDLY9-;TZ' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
