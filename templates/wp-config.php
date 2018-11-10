<?php

define('DB_NAME', '{{dataBaseName}}');

define('DB_USER', '{{dataBasesUser}}');

define('DB_PASSWORD', '');

define('DB_HOST', 'localhost');

define('DB_CHARSET', 'utf8mb4');

define('DB_COLLATE', '');



define('AUTH_KEY',         'TC3B<G mmQZR(O5*gK!>&G/S&aV#]x!_m)a%rSS)?j4Mkx9~yG9j; &+<~Vszm$D');
define('SECURE_AUTH_KEY',  '2ik.u,|aVZk}p0 d@G=@PnK.C8XGu~Tiy.[v:-e0TZWfcmV1_WyE;WxsJL:gSomo');
define('LOGGED_IN_KEY',    'VvYq:|e46-O5@}GwdV!Jo>J<AjvPP)*P%M==2Kjh92nc=Gq7}mav4O{f|0#q,Hjw');
define('NONCE_KEY',        '2b|5XTCP<uuOL4*V%VWM<9jG9^q:5{1[n41o]L7/E3*&G| k:-6C>o_ e)kTx,pB');
define('AUTH_SALT',        'K6h)CT(2Qo#v?%}^y,an!n.v_((3qPn/g)@TbA}I1G44E|!W2e5P-Q(1*HVg#KJ7');
define('SECURE_AUTH_SALT', '{jIkNdw:&fLc:G#uV9|9W|pz0G;Zv;JXCpvZQz%y%@s-]PJli7BG,.:1l<vb&v`b');
define('LOGGED_IN_SALT',   'IG3/=M FTTMclsD6yN+>x)QW7x0dGgH1t]vG%=EPm09W3NB-gQ7X3wD$F[jNF#HT');
define('NONCE_SALT',       'U5T%M.I-!wfZ|=YLiJoq>JffTy-^om8tPu&!$M</z8[tB]%@zqK7~XjpYg++6;]*');


$table_prefix  = 'wp_';


define('WP_DEBUG', false);


if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');


require_once(ABSPATH . 'wp-settings.php');
