
<?php
define("hosts", 'http://192.168.1.34/annah/yourTube');
define("SRC" ,  dirname(__FILE__));
define("ROOT" ,  dirname(SRC));
define("SP" ,  DIRECTORY_SEPARATOR);
define("CONFIG", ROOT.SP."config");
define("RESS", ROOT.SP."src".SP."css");
define("VIEWS", ROOT.SP."views");
define("MODEL", ROOT.SP."model");
define("BASE_URL", dirname(dirname($_SERVER['SCRIPT_NAME'])));
//print_r(hosts.SP."src".SP."images");
//print_r(ROOT.SP."src".SP."css".SP."images");
//print_r (ROOT.SP."src".SP."css");
//print_r (MODEL.SP."views".SP."templates".SP."profil.php");

require CONFIG.SP."config.php";
require MODEL.SP."dataLayerClass.php";

require('function.php');
$db = new dataLayer();

//creation du router
$url = ($_SERVER['PATH_INFO']);
$action = explode('/', $url);
$route = $action[1];
// affichage des templates

session_start();
switch ($route) {
    case 'home':
        $type= $db->selectType();
        $category = $db->selectCategory();
        $data_contenu = $db->afficheContenu($_REQUEST['type'], $_REQUEST['category']);
        require ROOT.SP."views".SP."templates".SP."accueil.php";
       // require('/var/www/html/yourTube/views/templates/accueil.php'); //definir le var/www
        break;
    case 'playlist':
        $data_contenu = $db->afficheContenu();
        require ROOT.SP."views".SP."templates".SP."mesListes.php";
       // require('/var/www/html/yourTube/views/templates/mesListes.php'); //definir le var/www
        break;
    case 'profil':
        loadProfil();
        require ROOT.SP."views".SP."templates".SP."profil.php";
       // require('/var/www/html/yourTube/views/templates/profil.php'); //definir le var/www
        break;
    case 'login':
        require ROOT.SP."views".SP."templates".SP."connexion.php";
       //require('/var/www/html/yourTube/views/templates/connexion.php'); //definir le var/www
        break;
    case 'add':

      
        $type = $db->selectType();
       $coco = array($type[0]['idType'],$type[1]['idType']);

    
       $category = $db->selectCategory();
       $mesTypes= array_merge($videos,$images);
      $lastCategory = $db-> lastCategory();
      require ROOT.SP."views".SP."templates".SP."ajoutCategory.php";
       // require('/var/www/html/yourTube/views/templates/ajoutCategory.php'); //definir le var/www
        break;
    case 'suiteAdd':
        actionInsertCategory();
       $db->uptTypeImage();
       $db->uptTypeVideo();
        $lastCategory = $db-> lastCategory();
      
        loadProfil();
        require ROOT.SP."views".SP."templates".SP."ajout.php";
      //  require('/var/www/html/yourTube/views/templates/ajout.php'); //definir le var/www
        break;
        case 'addContenu':
     $lastCategory = $db-> lastCategory();
     actionInsertContenu();
     require ROOT.SP."views".SP."templates".SP."ajout.php";
    // require('/var/www/html/yourTube/views/templates/ajout.php');
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
        require ROOT.SP."views".SP."templates".SP."inscription.php";
       // require('/var/www/html/yourTube/views/templates/inscription.php');
        break;

    case 'myChoice':
        $data_contenu = $db->afficheOne($idContenu);
        require VIEWS.SP."templates".SP."seeOne.php";
     //  require('/var/www/html/yourTube/views/templates/seeOne.php');
        break;
    case 'logout':
        logOut();
        break;
    case 'update':
        $data_contenu = $db->afficheOne($idContenu);
        require ROOT.SP."views".SP."templates".SP."uptade.php";
        //require('/var/www/html/yourTube/views/templates/uptade.php');
        break;
    case 'actionUptade':
      $db->addUptadeUsers();
        break;
        case 'deleteUser':
            $db->deleteUsers();
break;
    default:
        echo '<h1>NOT FOUND</h1>';
        break;
}

?>