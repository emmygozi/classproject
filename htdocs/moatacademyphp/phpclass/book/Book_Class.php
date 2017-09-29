<?php
 class Book {

 var $isbn;
 var $title;
 var $author;

public function getIsbn(){
  return $this->isbn;
}
public function setIsbn($a){
  $this->isbn = $a ;
}
public function getTitle(){
  return $this->title;
}
public function setTitle($b){
  $this->title = $b;
}
public function getAuthor(){
  return $this->author;
}
public function setAuthor($c){
  $this->author = $c;
}



}
?>
