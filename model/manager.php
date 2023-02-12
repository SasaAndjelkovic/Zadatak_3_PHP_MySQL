<?php

class Manager extends BasicInformation implements PersonInformation {

	private $email;
	private $password;
    
    public function __construct($id, $username, $email, $password)
    {
		parent::__construct($id, $username);
		$this->email = $email;
		$this->password = $password;
    }

	public function getEmail() {
		return $this->email;
	}
	
	public function setEmail($email) {
		$this->email = $email;
	}
	
	public function getPass() {
		return $this->password;
	}
	
	public function setPass($password) {
		$this->password = $password;
	}
	
	public function getId() {
		return $this->id;
	}
	
	public function setId($id_variable) {
		$this->id = $id_variable;
	}
	
	public function getName() {
		return $this->username;
	}
	
	public function setName($name_variable) {
		$this->username = $name_variable;
	}

	public static function loginManager($manager, mysqli $conn) {
        $query = "SELECT * 
                  FROM manager
                  WHERE username = '$manager->username' 
                        AND password = '$manager->password'
                  ";
        return $conn->query($query);
    }

}