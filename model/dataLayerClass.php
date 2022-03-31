<?php

 class dataLayer{
  private $connexion;

  function __construct()
  {
    $var = "mysql:host=" . HOST . ";dbname=" . DB_NAME;
    try {
      $this->connexion = new PDO($var, DB_USER, DB_PASSWORD);
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

  function insertUsers(userEntity $users)
  {
    $sql = "INSERT INTO `users` ( lastname, firstname , pseudo, email, passwords, roles) VALUES (lastname, firstname ,pseudo,email,passwords,'Utilisateur')";
    try {
      $result = $this->connexion->prepare($sql);
      $data =  $result->execute(array(
        ':lastname' => $users->getLastname(),
        ':firstname' =>  $users->getFirstname(),
        ':pseudo' =>  $users->getPseudo(),
        ':email' =>  $users->getEmail(),
        ':passwords' =>  $users->getPasswords(),
      ));
      if ($data) {
        return true;
      } else {
        return null;
      }
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  function createCategory(categoryEntity $category)
  {
    $sql = "INSERT INTO `category` (category, type) VALUES (:category , :type)";
    try {
      $result = $this->connexion->prepare($sql);
      $data = $result->execute(array(
        ':category' => $category->getCategory(),
        ':type' => $category->getType(),
      ));
      if ($data) {
        return true;
      } else {
        return null;
      }
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }



 }
 

   


?>