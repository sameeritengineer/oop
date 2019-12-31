<?php

// class Author {
// 	private $name;
// 	public function __construct($name){
// 		$this->name = $name;
// 	}
// 	public function getAuthorName(){
// 		return $this->name;
// 	}
// }
// class book {
// 	private $isbn;
// 	private $title;
// 	private $author;
// 	public function __construct($isbn , $title , $author){
       
//        $this->isbn  = $isbn;
//        $this->title = $title;
//        $this->author = new Author($author);

// 	}
// 	public function getAuthor(){
// 		return $this->author->getAuthorName();
// 	}
// }
// $book = new book('ISBN:2273233','Three Idiot','Sameer Ahmad');
// echo $book->getAuthor();
/* through constructor dependency injection */

//Dependency injection is a procedure where one object supplies the dependencies of another object.
class Author {
	private $name;
	private $address;
	public function __construct($name , $address){
		$this->name    = $name;
		$this->address = $address;
	}
	public function getAuthorName(){
		return $this->name;
	}
	public function getAuthorAddress(){
		return $this->address;
	}
}
class book {
	private $isbn;
	private $title;
	private $author;
	public function __construct($isbn , $title , Author $author){
       
       $this->isbn  = $isbn;
       $this->title = $title;
       $this->author = $author;

	}
	public function getAuthorDetails(){
		return $this->author->getAuthorName() . " From ". $this->author->getAuthorAddress();
	}
}
$author = new Author('Sameer Ahmad','India');
$book = new book('ISBN:2273233','Three Idiot',$author);
echo $book->getAuthorDetails();
/* through constructor dependency injection */

/* Setter */ 
// class Author {
// 	private $name;
// 	private $address;
// 	public function __construct($name , $address){
// 		$this->name    = $name;
// 		$this->address = $address;
// 	}
// 	public function getAuthorName(){
// 		return $this->name;
// 	}
// 	public function getAuthorAddress(){
// 		return $this->address;
// 	}
// }
// class book {
// 	private $isbn;
// 	private $title;
// 	private $author;
// 	public function __construct($isbn , $title ){
       
//        $this->isbn  = $isbn;
//        $this->title = $title;

// 	}
// 	public function setAuthorDetails(Author $author){
// 		$this->author = $author;
// 	}
// 	public function getAuthorDetails(){
// 		return $this->author->getAuthorName() . " From ". $this->author->getAuthorAddress();
// 	}
// }
// $author = new Author('Sameer Ahmad','India');
// $book = new book('ISBN:2273233','Three Idiot');
// $book->setAuthorDetails($author);
// echo $book->getAuthorDetails();

?>