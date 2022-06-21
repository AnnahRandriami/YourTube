
<?php
require('/var/www/html/yourTube/config/config.php');
require('/var/www/html/yourTube/model/dataLayerClass.php');
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

        require('/var/www/html/yourTube/views/templates/accueil.php'); //definir le var/www
        break;
    case 'playlist':
        $data_contenu = $db->afficheContenu();
       
        require('/var/www/html/yourTube/views/templates/mesListes.php'); //definir le var/www
        break;
    case 'profil':
        loadProfil();
        require('/var/www/html/yourTube/views/templates/profil.php'); //definir le var/www
        break;
    case 'login':
        require('/var/www/html/yourTube/views/templates/connexion.php'); //definir le var/www
        break;
    case 'add':

      
        $type = $db->selectType();
       $coco = array($type[0]['idType'],$type[1]['idType']);

    
       $category = $db->selectCategory();
       $mesTypes= array_merge($videos,$images);
      $lastCategory = $db-> lastCategory();
        require('/var/www/html/yourTube/views/templates/ajoutCategory.php'); //definir le var/www
        break;
    case 'suiteAdd':
        actionInsertCategory();
       $db->uptTypeImage();
       $db->uptTypeVideo();
        $lastCategory = $db-> lastCategory();
      
        loadProfil();
        require('/var/www/html/yourTube/views/templates/ajout.php'); //definir le var/www
        break;
        case 'addContenu':
     $lastCategory = $db-> lastCategory();
     actionInsertContenu();
     require('/var/www/html/yourTube/views/templates/ajout.php');
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

        require('/var/www/html/yourTube/views/templates/inscription.php');
        break;

    case 'myChoice':
        $data_contenu = $db->afficheOne($idContenu);
        require('/var/www/html/yourTube/views/templates/seeOne.php');
        break;
    case 'logout':
        logOut();
        break;
    case 'update':
        $data_contenu = $db->afficheOne($idContenu);
        require('/var/www/html/yourTube/views/templates/uptade.php');
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