<?php
define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));

$page = isset($_GET['p']) ? $_GET['p'] : 'accueil';

switch ($page) {
    case null:
        require_once 'views/home.php';
        break;
    case 'accueil':
        require_once 'views/home.php';
        break;
    case 'contact':
        require_once 'views/contact.php';
        break;
    case 'kera-visage-sur-mesure':
        require_once 'views/kera-visage-sur-mesure.php';
        break;
    case 'kera-facialisme':
        require_once 'views/kera-facialisme.php';
        break;
    case 'kera-visage-high-tech':
        require_once 'views/kera-visage-high-tech.php';
        break;
    case 'kera-corps':
        require_once 'views/kera-corps.php';
        break;
    case 'kera-experience':
        require_once 'views/kera-experience.php';
        break;
    case 'kera-minceur':
        require_once 'views/kera-minceur.php';
        break;
    case 'kera-bronz':
        require_once 'views/kera-bronz.php';
        break;
    case 'programme-keractive':
        require_once 'views/programme-keractive.php';
        break;
    case 'programme-kera-performance':
        require_once 'views/programme-kera-performance.php';
        break;
    case 'prestations':
        require_once 'views/nos_prestations.php';
        break;
    case 'mentions-legales':
        require_once 'views/mentions-legales.php';
        break;
    default:
        require '404.php';
        break;
}
