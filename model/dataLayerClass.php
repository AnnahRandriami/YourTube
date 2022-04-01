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


    function afficheContenu()
    {
        $sql = "SELECT * FROM mesContenus";
        try {
            $result = $this->connexion->prepare($sql);
            $result->execute();
         $data_contenu = $result->fetchAll(PDO::FETCH_ASSOC);
         $_SESSION['contenu'] = $data_contenu;
        return $data_contenu;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }


    function afficheUsers()
    {
        $sql = "SELECT * FROM users WHERE idUsers = :idUsers";
        try {
            $result = $this->connexion->prepare($sql);
            $result->execute(array(
              ':idUsers' => $_SESSION['users']['idUsers'],
            ));
         $dataUsers = $result->fetchAll(PDO::FETCH_ASSOC);
     
         $_SESSION['users'] = $dataUsers;
        return $dataUsers;
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
           return true;
        }else{
           return false;
        }
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
    }

    function testNewUsers($email){
      $sql = "SELECT email FROM users WHERE email = :email";
      try {
        $result = $this->connexion->prepare($sql);
       $result->execute(array(
         ':email' => $_REQUEST['email'],
       ));

       $testUsers = $result->fetch(PDO::FETCH_ASSOC);

       if($testUsers && ($testUsers['email'] == $email)){
        header('location: create');
       }else{
        header('location: home');
       }
    
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
     // print_r($pseudo);exit();
     $db->testNewUsers($email);
     $data_users= $db->insertUsers($lastname, $firstname, $pseudo, $email, $passwords);
$_SESSION['users'] = $data_users;
return $data_users;
 
  }
 }
 

   


?>