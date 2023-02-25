<?php

class Show extends BasicInformation implements TheaterInformation {
    private $author;
    private $description;
	protected $spisakAvatara;
    
    public function __construct($id, $username, $description, $author) {
        parent::__construct($id, $username);
        $this->description = $description;
        $this->author = $author;
		$this->spisakAvatara = array();

    }
	
	public function getDescription() {
        return $this->description;
	}
	
	public function setDescription($description) {
        $this->description = $description;
	}
	
	
	public function getId() {
        return $this->id;
	}
	
	public function setId($id_variable) {
        $this->id=$id_variable;
	}
	
	public function getName() {
        return $this->username;
	}
	
	public function setName($name_variable) {
        $this->username = $name_variable;
	}
 
	public function setAuthor($author) {
		$this->author = $author;
	}

	public function getAuthor() {
		return $this->author;
	}
	
	public function getSpisakAvatara() {
		return $this->spisakAvatara;
	}
	
	public function setSpisakAvatara($spisakAvatara): self {
		$this->spisakAvatara = $spisakAvatara;
		return $this;
	}
}