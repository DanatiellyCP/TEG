<?php
	class Usuario {
		//propriedades
		public $codigo;
		public $nome;
		public $email;
		public $senha;


		//Metodos
		function setCodigo($codigo){
			$this->codigo = $codigo;
		}

		function getCodigo(){
			return $this->codigo;
		}
		
		function setNome($nome){
			$this->nome = $nome;
		}

		function getNome(){
			return $this->nome;
		}


		function setEmail($email){
			$this->email = $email;
		}
		function getEmail(){
			return $this->email;
		}

		function setSenha($senha){
			$this->senha = $senha;
		}
		function getSenha(){
			return $this->senha;
		}


	}







?>