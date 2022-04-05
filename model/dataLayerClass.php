<?php
class dataLayer
{
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

/*************REQUETE SELECT ********************** */
  function afficheContenu($type = NULL, $category = NULL)
  {
    $sql = "SELECT * FROM mesContenus";
    try {
      if (!is_null($type)) {
        $sql .= " WHERE type = '" . $type . "'";
      }
      if (!is_null($category)) {
        $sql .= " AND category = '" . $category . "'";
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

  function selectType()
  {
    $sql = "SELECT DISTINCT type, idType FROM category";
    try {

      $result = $this->connexion->prepare($sql);
      $result->execute();
      $type = $result->fetchAll(PDO::FETCH_ASSOC);
      return $type;
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  function selectCategory(){
    $sql = "SELECT category FROM category";
    try {

      $result = $this->connexion->prepare($sql);
      $result->execute();
      $category = $result->fetchAll(PDO::FETCH_ASSOC);
      return $category;
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  function lastCategory(){
    $sql = "SELECT * FROM category ORDER BY idCategory DESC limit 1";
    try {

      $result = $this->connexion->prepare($sql);
      $result->execute();
      $lastCategory = $result->fetch(PDO::FETCH_ASSOC);
      return $lastCategory;
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  function isUserExist($email)
  {
    $sql = "SELECT email FROM users WHERE email = :email";
    try {
      $result = $this->connexion->prepare($sql);
      $result->execute(array(
        ':email' => $email,
      ));

      $testUsers = $result->fetch(PDO::FETCH_ASSOC);
      if ($testUsers['email'] == $email) {
        return true;
      } else {
        return false;
      }
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  function getUserByMail($email)
  {

    $sql = "SELECT * FROM users WHERE email = :email LIMIT 1";
    try {
      $result = $this->connexion->prepare($sql);
      $result->execute(array(':email' => $email));
      $_SESSION['users'] = $result->fetchAll(PDO::FETCH_ASSOC);
      return  $_SESSION['users'];
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  function login()
  {
    $sql = "SELECT * FROM users WHERE email = :email AND passwords = :passwords";

    try {
      $result = $this->connexion->prepare($sql);
      $result->execute(array(
        ':email' => $_REQUEST['email'],
        ':passwords' => $_REQUEST['passwords'],
      ));
      $_SESSION['users'] = $result->fetchAll(PDO::FETCH_ASSOC);
      if ($_SESSION['users'][0]['email'] === $_REQUEST['email'] && $_SESSION['users'][0]['passwords'] ===  $_REQUEST['passwords']) {
        header('location:profil');
      } else {
        header('location:login');;
      }
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }
/*************************REQUETE UPDATE******************************* */
  function uptadeUsers ($idUsers,$lastname, $firstname,$pseudo,$passwords, $email)
  {
    $sql = "UPDATE users SET lastname= :lastname , firstname= :firstname , pseudo= :pseudo , email= :email , passwords= :passwords WHERE idUsers = :idUsers"; 
    try {
      $result = $this->connexion->prepare($sql);
      $var = $result->execute(array(
        ':lastname' => $lastname,
        ':firstname' => $firstname,
        ':pseudo' => $pseudo,
        ':email' => $email,
        ':passwords' => $passwords,
        ':idUsers' => $idUsers,
      ));
      if ($var) {
       return $var;
      } else {
     return false;
      }
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  function uptTypeImage(){
    $sql = "UPDATE `category` SET `type`='Images' WHERE idType = 69"; 
    try {
      $result = $this->connexion->prepare($sql);
      $var = $result->execute();
      if ($var) {
       return $var;
      } else {
     return false;
      }
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }
  function uptTypeVideo(){
    $sql = "UPDATE `category` SET `type`='Videos' WHERE idType = 68"; 
    try {
      $result = $this->connexion->prepare($sql);
      $var = $result->execute();
      if ($var) {
       return $var;
      } else {
     return false;
      }
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }
  function addUptadeUsers(){
    global $db;
    $firstname = $_REQUEST["firstname"];
    $lastname = $_REQUEST["lastname"];
    $pseudo = $_REQUEST["pseudo"];
    $email = $_REQUEST["email"];
    $passwords = $_REQUEST["passwords"];
    $idUsers =$_SESSION['users'][0]['idUsers'];
 $db->uptadeUsers($idUsers,$lastname, $firstname,$pseudo,$passwords, $email);
 $db->getUserByMail($email);
    header('location:profil');
  }


  /***********************REQUETE DELETE******************************** */
  function deleteUsers(){
    $sql = "DELETE FROM users where idUsers = :idUsers";
    try {
      $result = $this->connexion->prepare($sql);
  $result->execute(array(
        ':idUsers' => $_GET['idUsers'],
      ));
       session_destroy();
       unset($_SESSION['users']);
       header('location:home');

    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }
  function deleteCategory(){
    $sql= "DELETE FROM category ORDER BY idCategory DESC limit 1";
    try {
      $result = $this->connexion->prepare($sql);
  $result->execute();
       header('location:add');
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  /************************REQUETE INSERT****************************** */
  
  function insertUsers($lastname, $firstname, $pseudo, $email, $passwords)
  {
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

      if ($var) {
        return $var;
      } else {
        return false;
      }
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  } 


  function insertContenu($idUsers,$type, $idCategory, $title, $content, $lien, $author, $category)
  {
    $sql = "INSERT INTO contenu (idUsers, idCategory , title, content, lien, author, type, category) VALUES (:idUsers, :idCategory , :title, :content,  :lien, :author, :type, :category)";

    try {
      $result = $this->connexion->prepare($sql);
      $var =  $result->execute(array(
        ':idUsers' => $idUsers,
        ':idCategory' => $idCategory,
        ':title' => $title,
        ':content' => $content,
        ':lien' => $lien,
        ':author' => $author,
        ':type'  =>$type,
        ':category' =>$category,
      ));

      if ($var) {
        return $var;
      } else {
        return false;
      }
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  function insertCategory($type, $category, $idType)
  {
    $sql = "INSERT INTO `category` (type, category, idType) VALUES (:type, :category, :idType)";
    try {
      $result = $this->connexion->prepare($sql);
      $var =  $result->execute(array(
        ':type' => $type,
        ':category' => $category,
        ':idType' => $idType,
      ));
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

 

}





?>