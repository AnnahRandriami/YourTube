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
        $sql = "SELECT * FROM users";
        try {
            $result = $this->connexion->prepare($sql);
            $result->execute();
         $data_users = $result->fetchAll(PDO::FETCH_ASSOC);
         $_SESSION['users'] = $data_users;
        return $data_users;
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
            echo 'ok';
        }else{
            echo 'non';
        }
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
    }

    function newUsers(){
      global $db;
      $firstname = $_GET["firstname"];
      $lastname = $_GET["lastname"];
      $pseudo = $_GET["pseudo"];
      $email = $_GET["email"];
      $passwords = $_GET["passwords"];
  $db->insertUsers($lastname, $firstname, $pseudo, $email, $passwords);

    
  }
 }
 

   


?>