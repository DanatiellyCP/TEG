<?php
	class Projeto {
		//propriedades
		public $codigo;
		public $nome;
		public $descricao;
		public $status;
		public $dtCriacao;
		public $usuarioCriador;
		
		
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
		function setDescricao($descricao){
			$this->descricao = $descricao;
		}
		function getDescricao(){
			return $this->descricao;
		}
		
		function setStatus($status){
			$this->status = $status;
		}
		function getStatus(){
			return $this->status;
		}
		//
		function setDtCriacao($dtCriacao){
			$this->dtCriacao = $dtCriacao;
		}
		function getDtCriacao(){
			return $this->dtCriacao;
		}
		//
		function setUsuarioCriador($usuarioCriador){
			$this->usuarioCriador = $usuarioCriador;
		}
		function getUsuarioCriador(){
			return $this->usuarioCriador;
		}
		
	}
	
	
	
	//criando objeto da classe Projeto
	/*$P1 = new Projeto();
	
	$P1->setCodigo('1');
	$P1->setNome('POO MVC');
	$P1->setDescricao('Projeto teste');
	$P1->setStatus('Ccriado');
	$P1->setDtCriacao('05/08/2020');
	$P1->setUsuarioCriador('Danny');
		
	echo <<<HTML
	<pre>
HTML;
	
	print_r($P1);
	
	echo <<<HTML
	<pre>
HTML;*/
?>