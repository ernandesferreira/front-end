<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'red');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'l:YzYapd|O-2ZOuWV/MS!h/^0</O,W;M_trvyrx4uD~[v]<vB;2|nAX050Ks*XLO');
define('SECURE_AUTH_KEY',  '~vc<m*V>gIW-md0:|X7=$h2W~Fw0V1 )HI{NH4huvf<Y@!ZXd.b&fHcQ[AQx!n`}');
define('LOGGED_IN_KEY',    'qVvZ[U|nJ!,KMo68(rW0P eL/!gG5c-`u%c$Np7%~#@(/l]jopu)?/l,R8WnYx#7');
define('NONCE_KEY',        'ug,G>0Scg_{~_|?%5%5AgCXP2hfL{LlNbU%<~VL7.: ]`UHMqXMO,tfm9Ez(7j{T');
define('AUTH_SALT',        '&J!s[{LiA5pQ@E+wEN=T8m9tYs*iROf5y( ,fHJ,^d>Q>G3l5K)Q.29~>[c88ppU');
define('SECURE_AUTH_SALT', '3;hkp@tHJ#INjsPNGi,DRK.*-P,i-24w4#PW}R+/]yqziAD,<j;{iE?#`qp;(Q6@');
define('LOGGED_IN_SALT',   'afN>e<)}3>9Ph=^qR!D<)w|%]d|MCpZqA4~X+g(0 ?9>T}o|rW{]vr=_[j?!x//Q');
define('NONCE_SALT',       '/nH[lV#vo{ny#vj<jSMb}9]`2:NQ@=4=XwgYdx@Vcf*<=^#3D5x|f`^7]$)$:ka7');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
