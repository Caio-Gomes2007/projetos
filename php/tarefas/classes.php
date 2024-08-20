<?php

class User{

	private $name;
	private $email;
	private $password;
	private $idUser;


	 public Function __construct($name,$email,$password,$idUser){
		
		$this -> name = $name;
		$this -> email = $email;
		$this -> password = $password;
		$this -> idUser = $idUser;
	}
	
	public function get_name(){
		return $this->name;
	}public function get_email(){
		return $this->email;
	}public function get_password(){
		return $this->password;
	}public function get_idUser(){
		return $this->idUser;
	}
}

Class tarefas{
	
	private $name;
	private $assunto;
	private $status;
	private $idTarefas;

	function __construct($name,$assunto,$status,$idTarefa){
		$this->name=$name;
		$this->assunto=$assunto;
		$this->status=$status;
		$this->idTarefas=$idTarefas;
	}
	public function get_name(){
		return $this->name;
	}public function get_assunto(){
		return $this->assunto;
	}public function get_status(){
		return $this->status;
	}public function get_idTarefas(){
		return $this->idTarefas;
	}

}


?>
