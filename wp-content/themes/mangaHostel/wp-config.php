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
define('DB_NAME', 'mangahostelrio');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'mangahostelrio');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'Bd9b44IyNR');

/** nome do host do MySQL */
define('DB_HOST', 'stark0012.locaweb.com.br');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '!<CUXW!1RhYoFTY!xQ$s.RO+?ru%I[i4/sK=O#xoj&1h2IdNY1s3[-zEbz0B|-4.');
define('SECURE_AUTH_KEY',  'DYVlBA2iXdFa|}Vg]5()uT70b]j9!-?c*JvBRq@uHrTl-;_pmKb}Mg`>Zfx-W$~K');
define('LOGGED_IN_KEY',    '&hz`yj}LE>xsTo fuP]:Eq.}up`MBJ<!+rDE}j+L#v%Dke9+/? DYA!H4Q#/}09U');
define('NONCE_KEY',        'O7#wW1~zqhbj~lCW39%I7f|rr#dO3Iqt+I7aw@%q6|i>+5y|zD7vzT3S`Za/ZjbE');
define('AUTH_SALT',        'bj4{!}0$8}S.J/0+Ir?W2@o!V+`HIB&P hMh`fd7-W*T**9?~*cdleGks%,t8C|Q');
define('SECURE_AUTH_SALT', 'xeuRskUV-SN*p#WYi|GX-Awyf$XIEO*#b/4$E<S (!|Sot3RbWVD4F}K5i<)|Ef-');
define('LOGGED_IN_SALT',   '+2#$jq<[MWEG`al?A_I[umLdLUnS^+X8^X0He;)z%))PznYQ-X8ko=.yqz5pF0YP');
define('NONCE_SALT',       '~GVq{H(rf?!q}!0(lwoM)u?OHj@:z;E1lCC0hP4gv.bG5`?_3J);TC-1cCdj!2r*');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Multisite */
define('WP_ALLOW_MULTISITE', true);
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
$base = '/';
define('DOMAIN_CURRENT_SITE', 'mangahostelrio.com');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
