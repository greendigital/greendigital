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
define('DB_NAME', 'greenblog');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'greenblog');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'green2552');

/** nome do host do MySQL */
define('DB_HOST', 'greenblog.mysql.dbaas.com.br');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

//define('DISALLOW_FILE_EDIT', TRUE); // Sucuri Security: Wed, 21 Jun 2017 17:09:55 +0000
define('WP_MEMORY_LIMIT', '256M');
set_time_limit(60);

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '#O{IVj!dQdl)0jH(;7~`DPb(5UJNnfJNLeqOM$w]J5kl6#cf*#Qng<gQ=c-nIcU=');
define('SECURE_AUTH_KEY',  '8.U+OP;z$0}i.! H l<d~TFCh,0L02JiwyL<p@=W/C6B6OBVDz3$4Hz71x[Kxg,D');
define('LOGGED_IN_KEY',    '(HjDVtu,[82>o,LorLFhskVlX><6eo>UaG!68SW?SDXcT{A95GN7^:`+8v}p.R_I');
define('NONCE_KEY',        '&]L/N}EL1aU!NFTq#;#k?]]wAqJ/<vHx8Z#Rr?hBl^XonydNz;AJAC,$PrWIzL|1');
define('AUTH_SALT',        'e/hJh70o&T[Bi?nl:*TbYb<os`|<BRz^<pN3W.R4d^e;b=GyJ(&gP6|i`m9&MCt#');
define('SECURE_AUTH_SALT', 'Q[2zU~@!P[XqfXm!uN=)YOqbxP}Y}uzRtIT|Nz!`.Vbx @G;0zq&:&6Pr:H%)9p!');
define('LOGGED_IN_SALT',   '#{X5MyD,=H:(3m7uEI4EBBMs[ ^vQ(4[$nD/T#zaZ&6TJp=dCEOJgU/VF!vAB1Na');
define('NONCE_SALT',       'vKv:E+1[C0n~[O&e/vxUw9vs`6:qZ@~k8@zX+HJyZn-n]) t,xF=dLHT[h5$m@&{');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'bg_';


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
