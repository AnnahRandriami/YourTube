<?php
 class dataLayer{
     private $connexion;

     function __construct()
     {
        $var = "mysql:host=".HOST.";dbname=".DB_NAME;
       try {
         $this->connexion = new PDO ($var, DB_USER,DB_PASSWORD);
       } catch (PDOException $e) {
           echo $e->getMessage();
       }
     }


    function afficheContenu($type = NULL, $category = NULL)
    {
        $sql = "SELECT * FROM mesContenus";
        try {
          if(!is_null ($type)){
            $sql .= " WHERE type = '".$type ."'";
          }
          if(!is_null ($category)){
            $sql .= " AND category = '".$category ."'";
            //print_r($sql);exit();
          }
            $result = $this->connexion->prepare($sql);
            $result->execute();
         $data_contenu = $result->fetchAll(PDO::FETCH_ASSOC);
         $_SESSION['contenu'] = $data_contenu;
        return $data_contenu;
       
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    function afficheOne($idContenu)
    {
        $sql = "SELECT * FROM mesContenus WHERE idContenu = :idContenu";
        try {
         
            $result = $this->connexion->prepare($sql);
            $result->execute(array(
          ':idContenu' => $_REQUEST['idContenu'],
            ));
         $data_contenu = $result->fetchAll(PDO::FETCH_ASSOC);
         $_SESSION['contenu'] = $data_contenu;
        return $data_contenu;
       
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }



   

    function insertUsers($lastname, $firstname, $pseudo, $email, $passwords){
        $sql = "INSERT INTO `users` (lastname, firstname , pseudo, email, passwords, roles) VALUES (:lastname, :firstname , :pseudo, :email,  :passwords, 'Utilisateur')";
     
        try {
          $result = $this->connexion->prepare($sql);
          $var =  $result->execute(array(
            ':lastname' => $lastname,
            ':firstname' => $firstname,
            ':pseudo' => $pseudo,
            ':email' => $email,
            ':passwords' => $passwords,
  
        ));

        if ($var){
           return $var;
        }else{
           return false;
        }
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
    }

    function isUserExist($email){
      $sql = "SELECT email FROM users WHERE email = :email";
      try {
        $result = $this->connexion->prepare($sql);
       $result->execute(array(
         ':email' => $email,
       ));

       $testUsers = $result->fetch(PDO::FETCH_ASSOC);
       if($testUsers['email'] == $email){
          return true;
       }else{
        return false;
       }
    
      } catch (PDOException $e) {
        echo $e->getMessage();
      }
    }

    function getUserByMail($email){
      
      $sql= "SELECT * FROM users WHERE email = :email LIMIT 1";
      try {
        $result = $this->connexion->prepare($sql);
        $result->execute(array(':email' => $email));
        $_SESSION['users'] = $result->fetchAll(PDO::FETCH_ASSOC);
    return  $_SESSION['users'];
      } catch (PDOException $e) {
        echo $e->getMessage();
      }
    }

    function newUsers(){
      global $db;
      $firstname = $_REQUEST["firstname"];
      $lastname = $_REQUEST["lastname"];
      $pseudo = $_REQUEST["pseudo"];
      $email = $_REQUEST["email"];
      $passwords = $_REQUEST["passwords"];
   
      if(!$db->isUserExist($email) ){
        $db->insertUsers($lastname, $firstname, $pseudo, $email, $passwords);
       $db->getUserByMail($email);
        header('location:profil');
      }else{
       header('location:create');
        return false;
      }

  }
function login(){
  $sql = "SELECT * FROM users WHERE email = :email AND passwords = :passwords";
 
  try {
    $result = $this->connexion->prepare($sql);
  $result->execute(array(
      ':email' => $_REQUEST['email'],
      ':passwords' => $_REQUEST['passwords'],
    ));
    $_SESSION['users']= $result->fetchAll(PDO::FETCH_ASSOC);
if ($_SESSION['users'][0]['email'] === $_REQUEST['email'] && $_SESSION['users'][0]['passwords'] ===  $_REQUEST['passwords']){
  header('location:profil');
}else{
  header('location:login');;

}


} catch (PDOException $e) {
    echo $e->getMessage();
}
}


 }
 



function logOut(){
  session_destroy(); 
  unset($_SESSION['users']);
  header('location:home');
}
   




?>