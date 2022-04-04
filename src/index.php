
<?php 
require ('/var/www/html/yourTube/config/config.php');
require ('/var/www/html/yourTube/model/dataLayerClass.php');
require ('function.php');
$db = new dataLayer();

//creation du router
$url = ($_SERVER['PATH_INFO']);
$action = explode ('/', $url);
$route = $action[1];
// affichage des templates

session_start();
//print_r ($_SESSION['contenu']);

//print_r ($_SESSION['users']);
switch ($route) {
    case 'home':
     
        $data_contenu = $db-> afficheContenu();
   
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
     
        loadContent();

        require('/var/www/html/yourTube/views/templates/ajout.php'); //definir le var/www
        break;

    case 'inscription':
     $db->newUsers();
        break;

case 'getLogin':
 $db->login();
    break;
    case 'create':
       
        require('/var/www/html/yourTube/views/templates/inscription.php');
        break;

case 'myChoice':
    $data_contenu = $db->afficheOne($idContenu);
    print_r($data_contenu);
    require('/var/www/html/yourTube/views/templates/seeOne.php');
break;

    case 'logout':
    logOut();
        break;

    default:
  echo '<h1>NOT FOUND</h1>';
        break;
}

?>