<?php  

class categoryEntity{
    
 protected  ?int $idCategory;
 protected string $category;
protected string $type;

 /**************idCategory************/
function getIdCategory() { 
     return $this->idCategory; 
} 

function setIdCategory($idCategory) {  
    $this->idCategory = $idCategory; 
} 

 /**************Category************/
function getCategory() { 
     return $this->category; 
} 

function setCategory($category) {  
    $this->categor = $category; 
} 
 /**************type************/
function getType() { 
     return $this->ype; 
} 

function setType($type) {  
    $this->ype = $type; 
} 








}

?>