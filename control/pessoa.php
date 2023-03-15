<?php
 class Pessoa{
	   
	private $nome;
    private $idade;
    private $email;	   

    public function setNome($nm){
	   $this->nome= $nm;
	}
    
	public function setIdade($ida){
	   $this->idade=$ida;  
	}
	
	public function setEmail($mail){
	   $this->email=$mail;  
	}
	public function getNome(){
		return $this->nome;
	}
	public function getIdade(){
		return $this->idade;
	}
	public function getEmail(){
		return $this->email;
	}


}

?>