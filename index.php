    <?php

/* 
 * definir le dossier racine
 */
session_start();
print_r($_SESSION);
define ('WEBROOT', dirname(__FILE__));

define ('ROOT',dirname(WEBROOT));
define ('SERVER',$_SERVER['HTTP_HOST']);

define ('DS',DIRECTORY_SEPARATOR);
define ('CORE',ROOT.DS.'core');
define ('BASE_URL',dirname($_SERVER['SCRIPT_NAME']));
define ('BASE_SITE',dirname($_SERVER['SCRIPT_NAME']));

include CORE.DS.'includes.php';

$d=new Dispatcher();


