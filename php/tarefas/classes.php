<?php
class email{
	private $email; 
	public function __construct($email){
		$this->email=$email;
	}public function verificar(){
		//implementar
	}
class User{
	private $name;
	private $email;
	private $password;
	private $idUser;
	 public Function __construct($name,$email,$password,$idUser){	
		$this -> name = $name;
		$this -> email = new email($email);
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
	private $autor;
	private $assunto;
	private $status;
	private $idTarefas;

	function __construct($name,$autor,$assunto,$status,$idTarefa){
		$this->name=$name;
		$this->autor=$autor;
		$this->assunto=$assunto;
		$this->status=$status;
		$this->idTarefas=$idTarefas;
	}
	public function get_name(){
		return $this->name;
	}public function get_autor(){
		return $this->autor;
	}public function get_assunto(){
		return $this->assunto;
	}public function get_status(){
		return $this->status;
	}public function get_idTarefas(){
		return $this->idTarefas;
	}

}

?>
