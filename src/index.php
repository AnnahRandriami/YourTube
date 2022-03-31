<?php 
require ('/var/www/html/yourTube/config/config.php');
require ('/var/www/html/yourTube/model/dataLayerClass.php');
require ('/var/www/html/yourTube/entity/categoryEntity.php');
require ('/var/www/html/yourTube/entity/userEntity.php');
require ('/var/www/html/yourTube/entity/contenuEntity.php');

require ('function.php');

$db = new dataLayer();




//creation du router
$url = ($_SERVER['PATH_INFO']);
$action = explode ('/', $url);
$route = $action[1];

// affichage des templates
switch ($route) {
    case 'home':
        $data_contenu = $db-> afficheContenu();
        require('/var/www/html/yourTube/views/templates/accueil.php'); //definir le var/www
        break;

        case 'inscription':
            $users = $db->insertUsers(userEntity $users);
      
            require('/var/www/html/yourTube/views/templates/accueil.php'); //definir le var/www
            break; 
    case 'playlist':
        $data_contenu = $db->afficheContenu();
        $data_users = $db->afficheUsers();
        print_r($data_contenu);
        require('/var/www/html/yourTube/views/templates/mesListes.php'); //definir le var/www
        break;
    case 'profil':
        $data_users = $db->afficheUsers();
  loadProfil();



        //   var_dump($_POST);
       // var_dump($_FILES);
        require('/var/www/html/yourTube/views/templates/profil.php'); //definir le var/www
        break;
    case 'login':
        session_start();
        $data_users = $db->afficheUsers();
        print_r($data_users);

        require('/var/www/html/yourTube/views/templates/connexion.php'); //definir le var/www
        break;
    case 'add':
        require('/var/www/html/yourTube/views/templates/ajout.php'); //definir le var/www
        break;


    case 'create':
        require('/var/www/html/yourTube/views/templates/inscription.php');
        break;



    case 'logout':
        $data_contenu = $db->afficheContenu();
        session_destroy();
        unset($_SESSION['users']);
        require('/var/www/html/yourTube/views/templates/accueil.php'); //definir le var/www
        break;

    default:
        $data_contenu = $db->afficheContenu();
        require('/var/www/html/yourTube/views/templates/accueil.php'); //definir le var/www
        break;
}

?>