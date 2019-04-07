 <?php
	session_start();
	$_SESSION['logado'] = NULL;
 ?>

 <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/padrao.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="css/index/index.css"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
		<form action="controler/Usuario/controlerUsuario.php?metodo=2" method="post" id="formularioLogin">
			<input type="email" id="email" name="txtEmail" placeholder="Digite seu e-mail" class="txtPadrao"/>
			<input type="password" id="senha" name="txtSenha"placeholder="Digite sua senha" class="txtPadrao"/>
			<input type="submit" value="Entrar" name="btnEntrar" id="btnEntrar"/>
			<a href="#">Esqueci a senha </a>
            <a href="paginas/cadastraUsuario.html">Primeiro Acesso</a>
		</form>
      
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>