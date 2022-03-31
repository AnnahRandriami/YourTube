<?php  

class userEntity{
    

    protected ?int $idUser;
    protected string $lastname;
    protected string $firstname;
    protected string $pseudo;
    protected string $email;
    protected string $passwords;
    protected string $roles;
    function getIdUser() { 
         return $this->idUser; 
    } 
    
    function setIdUser($idUser) {  
        $this->idUser = $idUser; 
    } 
    
    function getLastname() { 
        
         return $this->lastname; 
    } 
    
    function setLastname($lastname) {  
        $this->lastname = $lastname; 
    } 
    
    function getFirstname() { 
         return $this->firstname; 
    } 
    
    function setFirstname($firstname) {  
        $this->firstname = $firstname; 
    } 
    
    function getPseudo() { 
         return $this->pseudo; 
    } 
    
    function setPseudo($pseudo) {  
        $this->pseudo = $pseudo; 
    } 
    
    function getEmail() { 
         return $this->email; 
    } 
    
    function setEmail($email) {  
        $this->emai = $email; 
    } 
    
    function getPasswords() { 
         return $this->passwords; 
    } 
    
    function setPasswords($passwords) {  
        $this->passwords = $passwords; 
    } 
    
    function getRoles() { 
         return $this->roles; 
    } 
    
    function setRoles($roles) {  
        $this->roles = $roles; 
    } 
}






?>

