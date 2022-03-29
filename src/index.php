<?php 
//creation du router
$url = ($_SERVER['PATH_INFO']);
$action = explode ('/', $url);
$route = $action[1];

// affichage des templates
switch ($route) {
    case 'home':
        require('/var/www/html/yourTube/views/templates/accueil.php'); //definir le var/www
        break;
    case 'playlist':
        require('/var/www/html/yourTube/views/templates/mesListes.php'); //definir le var/www
        break;
    case 'profil':
        require('/var/www/html/yourTube/views/templates/profil.php'); //definir le var/www
        break;
    case 'login':
        require('/var/www/html/yourTube/views/templates/connexion.php'); //definir le var/www
        break;
    case 'add':
        require('/var/www/html/yourTube/views/templates/ajout.php'); //definir le var/www
        break;
    default:
        require('/var/www/html/yourTube/views/templates/accueil.php'); //definir le var/www
        break;
}

?>