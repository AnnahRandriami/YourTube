
<?php
define("hosts", 'http://192.168.1.34/yourTube');
define("SRC",  dirname(__FILE__));
define("ROOT",  dirname(SRC));
define("SP",  DIRECTORY_SEPARATOR);
define("CONFIG", ROOT . SP . "config");
define("RESS", ROOT . SP . "src" . SP . "css");
define("VIEWS", ROOT . SP . "views");
define("MODEL", ROOT . SP . "model");
define("BASE_URL", dirname(dirname($_SERVER['SCRIPT_NAME'])));
//print_r(hosts.SP."src".SP."images");
//print_r(ROOT.SP."src".SP."css".SP."images");
//print_r (ROOT.SP."src".SP."css");
require CONFIG . SP . "config.php";
require MODEL . SP . "dataLayerClass.php";
require('function.php');
$db = new dataLayer();

$url = ($_SERVER['PATH_INFO']);
$action = explode('/', $url);
$route = $action[1];
// affichage des template
session_start();
switch ($route) {
    case 'home':
        $type = $db->selectType();
        $category = $db->selectCategory();
        $data_contenu = $db->afficheContenu();
        require ROOT . SP . "views" . SP . "templates" . SP . "accueil.php";
        break;

    case 'playlist':
        require ROOT . SP . "views" . SP . "templates" . SP . "mesListes.php";
        break;

    case 'profil':
        require ROOT . SP . "views" . SP . "templates" . SP . "profil.php";
        break;

    case 'login':
        require ROOT . SP . "views" . SP . "templates" . SP . "connexion.php";
        break;

    case 'deleteContenu':
        $db->deleteContenu();
        break;

    case 'add':
        $type = $db->selectType();
        $category = $db->selectCategory();
        $lastCategory = $db->lastCategory();
        require ROOT . SP . "views" . SP . "templates" . SP . "ajoutCategory.php";
        break;

    case 'suiteAdd':
        $lastCategory = $db->lastCategory();
        $db->uptTypeImage();
        $db->uptTypeVideo();
        actionInsertCategory();
        require ROOT . SP . "views" . SP . "templates" . SP . "ajout.php";
        break;

        case 'loadimg':
            $lastCategory = $db->lastCategory();
            loadContent();
            require ROOT . SP . "views" . SP . "templates" . SP . "ajout.php";
            break;
/***bouton ajout contenu dans image */
case 'addContenu':
    actionInsertContenu();
    $data_contenu = $db->afficheOne($idContenu);
    require VIEWS . SP . "templates" . SP . "seeOne.php";
    break;
    
    case 'inscription':
        newUsers();
        break;

    case 'annuler':
        $db->deleteCategory();
        break;

    case 'getLogin':
        $db->login();
        break;

    case 'create':
        require ROOT . SP . "views" . SP . "templates" . SP . "inscription.php";
        break;

    case 'uploadUptade':
        $db->actionUptadeContenu();
        break;

    case 'myChoice':
        $data_contenu = $db->afficheOne($idContenu);
        require VIEWS . SP . "templates" . SP . "seeOne.php";
        break;

    case 'logout':
        logOut();
        break;

    case 'update':
        $data_contenu = $db->afficheOne($idContenu);
        require ROOT . SP . "views" . SP . "templates" . SP . "uptade.php";
        break;

    case 'actionUptadeContenu':
        $db->actionUptadeContenu();
        break;

    case 'actionUptade':
        $db->addUptadeUsers();
        break;

    case 'deleteUser':
        $db->deleteUsers();
        break;
        case ' ':
        $type = $db->selectType();
            $category = $db->selectCategory();
            $data_contenu = $db->afficheContenu();
        require ROOT . SP . "views" . SP . "templates" . SP . "accueil.php";
            break;
    default:
    $type = $db->selectType();
        $category = $db->selectCategory();
        $data_contenu = $db->afficheContenu();
    require ROOT . SP . "views" . SP . "templates" . SP . "accueil.php";
        break;
}

?>