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

print_r($data_users);
switch ($route) {
    case 'home':
      
        $data_contenu = $db-> afficheContenu();
        require('/var/www/html/yourTube/views/templates/accueil.php'); //definir le var/www
        break;
    case 'playlist':
      
        $data_contenu = $db->afficheContenu();
        $data_users = $db->afficheUsers();
        
        require('/var/www/html/yourTube/views/templates/mesListes.php'); //definir le var/www
        break;
    case 'profil':
    
        print_r($data_users);
        $dataUsers = $db->afficheUsers();
        print_r($_SESSION['users']);
        print_r($data_users);
        require('/var/www/html/yourTube/views/templates/profil.php'); //definir le var/www
       
        break;
    case 'login':
        require('/var/www/html/yourTube/views/templates/connexion.php'); //definir le var/www
        break;
    case 'add':
     
        require('/var/www/html/yourTube/views/templates/ajout.php'); //definir le var/www
        break;

case 'inscription':
    $data_users= $db->newUsers();
break;

    case 'create':
      
        require('/var/www/html/yourTube/views/templates/inscription.php');
        break;



    case 'logout':
        session_destroy(); 
     unset($_SESSION['users']);
     require('/var/www/html/yourTube/views/templates/accueil.php');
        break;

    default:
    
        $data_contenu = $db->afficheContenu();
        require('/var/www/html/yourTube/views/templates/accueil.php'); //definir le var/www
        break;
}

?>