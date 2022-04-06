<?php 

/*******************upload photo contenu**************************** */

function loadContent(){
 
    if(isset($_FILES['file'])) {

        if($_FILES['file']['error'] == 0 && is_uploaded_file($_FILES['file']['tmp_name'])) {
          // code de l'utilisateur enregistré dans le formulaire.
            $file_name = $_FILES['file']['name']; //Le nom original du fichier, comme sur le disque du visiteur (exemple : mon_icone.pdf).
            $type_fichier = $_FILES['file']['type']; //Le type du fichier. Par exemple, cela peut être « image/png ».
            $size = $_FILES['file']['size'] ; //La taille du fichier en octets.
        
            if(move_uploaded_file($_FILES['file']['tmp_name'], "./images/".$file_name)) {
               
              echo 'Fichier enregistré';
            } else {
                exit('Erreur lors de l\'enregistrement');
            }
        } else {
            exit('Fichier non uploadé');
        }
    }

}

/*******************action ajout category*************************** */

function actionInsertCategory()
  {
    global $db;
    $type = $_REQUEST['type'];
    $category = $_REQUEST['category'];
    $idType = $_REQUEST['idType'];
    $db->insertCategory($type, $category, $idType);
  }


  /**************action ajout contenu********************** */
  function actionInsertContenu()
  {
    global $db;
    $idUsers  = $_SESSION['users'][0]['idUsers'];
    $idCategory = $_GET['idCategory'];
    $title = $_REQUEST['title'];
    $content = $_REQUEST['content'];
    $lien = $_REQUEST['lien'];
    $author = $_REQUEST['author'];
    $db->insertContenu($idUsers, $idCategory, $title, $content, $author,$lien);
  }

/********************action ajout utilisateur************************* */

  function newUsers()
  {
    global $db;
    $firstname = $_REQUEST["firstname"];
    $lastname = $_REQUEST["lastname"];
    $pseudo = $_REQUEST["pseudo"];
    $email = $_REQUEST["email"];
    $passwords = ($_REQUEST["passwords"]);

    if (!$db->isUserExist($email)) {
      $db->insertUsers($lastname, $firstname, $pseudo, $email, $passwords);
      $db->getUserByMail($email);
      header('location:profil');
  
   
    } else {
    
      header('location:create');

      echo 'jfdfd';
      return false;
    }
  }
/*******************action deconnexion ***************** */
  function logOut()
  {
    session_destroy();
    unset($_SESSION['users']);
    header('location:home');
  }
    

?>