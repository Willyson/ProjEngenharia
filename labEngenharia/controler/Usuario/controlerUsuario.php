<?PHP

require_once ('../../model/Usuario/modelUsuario.php');

$metodo = $_GET["metodo"];
$usuario = new Usuario; 

	$usuario->setEmailUsuario($_POST["txtEmail"]);
	$usuario->setSenhaUsuario($_POST["txtSenha"]);
	

if($metodo == 1){

	$usuario->setCpfUsuario($_POST["txtCPF"]);
	$usuario->setNomeUsuario($_POST["txtNome"]);
	$usuario->setRgUsuario($_POST["txtRG"]);
	$usuario->setTipoUsuario("1");
	$usuario->NovoUsuario($usuario);


}
else if($metodo == 2){

	$usuario->LoginUsuario($usuario);

}


