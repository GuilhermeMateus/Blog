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
define('DB_NAME', 'showblog');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'G_Xf-jn<|D+aU&%~I+dJ6t9CzxHnd!tBCIl:tnLjZVpm-Xss^?SlirVa364gTl-?');
define('SECURE_AUTH_KEY',  '@:~et:ZMu{{<_!`ymH6)iKn:LDt(M}4DE,P&c5A8$?HF$Bc0&daG)2j{z/%P [J}');
define('LOGGED_IN_KEY',    'N.of$Hg<cGhqgg_4lFx!tTsuMY16-T5aP+r9oGG}tj[Sf2,}mm=8R#bqi,iD~0C+');
define('NONCE_KEY',        'A{x/g@ch C;lLmp.J_GNfxKjk@OrM%eOjv~Bx^I!E!1&JU%Xbf~4*utQaIVi)R8x');
define('AUTH_SALT',        'f4+cVl46!Ic0/RE=/#D^5;JpU8(r(m%13nhu)|pBX*}.K :=hbU$cWE?tH0#uzAC');
define('SECURE_AUTH_SALT', 'N+|k+!+--5 Kv=4L6R<W@v-?$8TH|._2Q7E0RRZ*u60<V8X_0RX0@2%K=:&C(k1x');
define('LOGGED_IN_SALT',   'v-0cy%Ra+J+4nF&RU|D{b$;.AszGo{LXD;0 +`|MOw69Iq%:Gh,L`D,|+hPo4t|9');
define('NONCE_SALT',       'BS@3EapvD+kIpij{r;nRV u2/zy?|{!Ez3)v^{`)MS8+|P}q($]PxMk.Ln>1W#%Y');

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
