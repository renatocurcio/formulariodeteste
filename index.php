<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
  <h1>Meu Primeiro Desafio</h1>
  <p>Fase Beta!!!</p> 
</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3> <a href="inicio.php"> Fase1: Cadastro do nome, email </a> </h3>
      </div>
    <div class="col-sm-4">
		
	  <h3><a href="uploads.php">Fase2: incluir foto </a> </h3>
	  
          </div>
   
  </div>
</div>

</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title> Cadastrar</title>		
	</head>
	<body>
		<h1>Cadastrar</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="processa.php">
			<label>Nome: </label>
			<input type="text" name="nome" placeholder="Digite o nome completo"><br><br>
			
			<label>E-mail: </label>
			<input type="email" name="email" placeholder="Digite o seu melhor e-mail"><br><br>


						
			<input type="submit" value="Cadastrar">
			</form>
		
	</body>
</html>