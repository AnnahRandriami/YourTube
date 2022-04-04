<?php 

/*function loadProfil(){
   {
        $contentFile = array(
         $tmpName = $_FILES['file']['tmp_name'],
         $FileName = $_FILES['file']['name'],
         $FileType = $_FILES['file']['type'],
         $error = $_FILES['file']['error'],
         $size = $_FILES['file']['size'],
        );
 if (move_uploaded_file($contentFile[0], 'images/'.$contentFile[1])){
     echo 'eeeee';
 };
    }

    return $contentFile;
}*/

function loadProfil(){
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


function newUsers(){
    global $db;
    $firstname = $_GET["firstname"];
    $lastname = $_GET["lastname"];
    $pseudo = $_GET["pseudo"];
    $email = $_GET["email"];
    $passwords = $_GET["passwords"];
    $data_users= $db->insertUsers($lastname, $firstname, $pseudo, $email, $passwords);
}

?>