<?php
require_once('../../conexao.php');


class Usuario
{
	private  $cpfUsuario;
	private  $nomeUsuario;
	private  $rgUsuario;
	private  $emailUsuario;
	private  $senhaUsuario;
	private  $statusUsuario;
	private  $tipoContaUsuario;


	/*GETTERS AND SETTERS*/

	public function getCpfUsuario(){
		return $this->cpfUsuario;
	}

	public function setCpfUsuario($cpfUsuario){
		$this->cpfUsuario = $cpfUsuario;
	}

	public function getNomeUsuario(){
		return $this->nomeUsuario;
	}

	public function setNomeUsuario($nomeUsuario){
		$this->nomeUsuario = $nomeUsuario;
	}

	public function getRgUsuario(){
		return $this->rgUsuario;
	}
	
	public function setRgUsuario($rgUsuario){
		$this->rgUsuario = $rgUsuario;
	}
	

	public function getEmailUsuario(){
		return $this->emailUsuario;
	}

	public function setEmailUsuario($emailUsuario){
		$this->emailUsuario = $emailUsuario;
	}

	public function getSenhaUsuario(){
		return $this->senhaUsuario;
	}
	public function setSenhaUsuario($senhaUsuario){
		$this->senhaUsuario = $senhaUsuario;
	}

	public function getStatusUsuario(){
		return $this->statusUsuario;
	}

	public function setStatusUsuario($statusUsuario){
		$this->statusUsuario = $statusUsuario;
	}

	public function getTipoUsuario(){
		return $this->tipoUsuario;
	}

	public function setTipoUsuario($tipoContaUsuario){
		$this->tipoUsuario = $tipoContaUsuario;
	}

	/*===============================*/




public function NovoUsuario(Usuario $u){

		$conexao = new ConexaoMySQL;
		$conexao = $conexao->Conectar();
		
		$cpf = $u->getCpfUsuario();
		$nome = $u->getNomeUsuario();
		$rg = $u->getRgUsuario();
		$email = $u->getEmailUsuario();
		$senha = $u->getSenhaUsuario();
		$status = '1';
		$tipoConta = $u->getTipoUsuario();
		
		/*Necessário criar o try*/


		$sql = "INSERT INTO USUARIO (CPF_USUARIO, NOME_USUARIO, RG_USUARIO,EMAIL_USUARIO, SENHA_USUARIO,STATUS_USUARIO,TIPO_CONTA_ID_TIPO_CONTA) VALUES('$cpf','$nome','$rg', '$email', '$senha','$status','$tipoConta')";

		

		$stmt = $conexao->prepare($sql);

		$stmt->execute();

		header("Location:../../index.php");

}
public function LoginUsuario(Usuario $u){

	$conexao = new ConexaoMySQL;
	$conexao = $conexao->Conectar();

	$sql = "SELECT ID_USUARIO FROM USUARIO WHERE TRIM(EMAIL_USUARIO) = '". $u->getEmailUsuario() . "' AND TRIM(SENHA_USUARIO) = '". $u->getSenhaUsuario(). "'";  

	$consulta = $conexao->query($sql);

	$linha = $consulta->fetch(PDO::FETCH_ASSOC);


	if($linha['ID_USUARIO'] !== NULL){

		//start_session();
		//$_SESSION['logado'] = $linha['ID_USUARIO'];

		header("Location:../../paginas/paginainicial.html");
	}
	else{
		
		$_SESSION['logado'] = NULL;

		header("Location:../../index.php");

	}

}




}


