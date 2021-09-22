<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Área Restrita</title>
  <link rel="icon" type="image/png" href="../imgs/icone.png"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/main.css">


  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
</head>
<?php
            include_once("valida-sentinela.php");
 ?>
<body>

  <header>
    <div class="container" id="nav-container">

      <nav class="navbar navbar-expand-lg fixed-top">

        <a class="navbar-brand" href="#"> 
          <img id="logo" src="../imgs/Logo Museum.png" alt="Logo"> 
        </a>

        <img src="../imgs/icone-hamburger.png" class="navbar-toggler" id="botao" type="button" data-toggle="collapse" data-target="#navbar-links" aria-controls="navbar-links" aria-expand="false" area-label="Toggle navigation" style="width:15%"> 
        <span class="navbar-toggler-icon">

        </span>
      </img>


      <div class="collapse navbar-collapse justify-content-end" id="navbar-links">

      <div class="navbar-nav">
					<a href="../index.php" class="nav-item nav-link" id="home-menu">Home</a>
					<a href="../tour.php" class="nav-item nav-link" id="visita-menu">Visita</a>
					<a href="../sobre.php" class="nav-item nav-link" id="sobre-menu">Sobre</a>
					<a href="" class="nav-item nav-link" id="t-menu">|</a>
					<a href="../contato.php" class="nav-item nav-link" id="contato-menu">Contato</a>
					<a href="../login.php" class="nav-item nav-link" id="contato-menu">Área-Restrita</a>
				</div>
      </div>
    </nav>
  </div>

</header>

<br><br><br><br><br>
<h1 style="color: black; text-align: center;">Área Para Cadastro</h1>
<section class="anime container-fluid jumper " id="a">
  <div class="row">

    <div class="col-xl-4 col-md-4 col-lg-4 col-12">
      <center>
       <h3 style="color: #ff3333;">Categoria</h3>
       <h6><i>Cadastre aqui as categorias.</i></h6>
       <a class="efeito" href="formularioCategoria.php"><input class="submit" type="submit" value="Cadastar Categoria"></a>
     </center>
   </div>

   <div class="col-xl-4 col-md-4 col-lg-4 col-12">
    <center>
      <h3 style="color: #ff3333;">Autor</h3>
      <h6><i>Cadastre aqui os autores e autoras.</i></h6>
      <a class="efeito" href="formularioAutor.php"><input class="submit" type="submit" value="Cadastar Autor"></a>
      <br>
      <br>
    </center>
  </div>

  <div class="col-xl-4 col-md-4 col-lg-4 col-12">
    <center>
     <h3 style="color: #ff3333;">Período</h3>
     <h6><i>Cadastre aqui os périodos que influeciaram o Mundo & também a galáxia inteira.</i></h6>
     <a class="efeito" href="formularioPeriodo.php"><input class="submit" type="submit" value="Cadastar Período"></a>
   </center>
 </div>
</div>
<div class ="row">
  <div class="col-xl-4 col-md-4 col-lg-4 col-12">
    <center>
     <h3 style="color: #ff3333;">Obra</h3>
     <h6><i>Cadastre aqui a obra.</i></h6>
     <a class="efeito" href="formularioObra.php"><input class="submit" type="submit" value="Cadastar Obra"></a>
   </center>
 </div>
 <div class="col-xl-4 col-md-4 col-lg-4 col-12">
   <center>
     <h3 style="color: #ff3333;">Imagem</h3>
     <h6><i>Cadastre aqui a imagem da obra.</i></h6>
     <a class="efeito" href="formularioImagem.php"><input class="submit" type="submit" value="Cadastar Obra"></a>
   </center>
 </div>

 <div class="col-xl-4 col-md-4 col-lg-4 col-12">
  <center>
   <h3 style="color: #ff3333;">Verificar Cadastro</h3>
   <h6><i>Verificar os Cadastros Do Site.</i></h6>
   <a class="efeito" href="verificar.php"><input class="submit" type="submit" value="Verificar"></a>
 </center>
</div>
</div>

</div>
</section>
<?php
require_once 'global.php';
try{
  $autor = new Autor(); 
  $categoria = new Categoria();
  $periodo = new Periodo();
  $obra = new Obra();
  $listaObra = $obra->listar();
  $listaAutor = $autor->listar();
  $listaCategoria = $categoria->listar();
  $listaPeriodo = $periodo->listar();
}
catch(Exception $e){
  echo '<pre>';
  print_r($e);
  echo '<pre>';
  echo $e->getMessage();
}
?>
<br><br>
<center><h1>Lista De Obras Cadastradas</h1></center>
<table class="table">
  <thead>
    <tr>
      <th>Id Da Obra:</th>
      <th>Nome Da Obra:</th>
      <th>Data Da Realização Da Obra:</th>
      <th>Autor Da Obra:</th>
      <th>Caterogia Da Obra:</th>
      <th>Período Da Obra:</th>
    </tr>
  </thead>
  <tbody id='resultado'>
    <?php foreach ($listaObra as $linha){ ?>
      <tr>
        <td><?php echo $linha['idObra'] ?></td>
        <td><?php echo $linha['nomeObra'] ?></td>
        <td><?php echo $linha['dataObra'] ?></td>
        <td><?php echo $linha['nomeAutor']?></td>
        <td><?php echo $linha['nomeCategoria'] ?></td>
        <td><?php echo $linha['nomePeriodo'] ?></td>

      </tr>
    <?php } ?>
  </tbody>
</table>


<section class="final-content">
	<h1>Deseja sair?</h1>
	<br><br><br>
	<h2>
		"Clique no botão abaixo para encerrar sua sessão" 
	</h2>
	

	<button>

		<a style="color: white; text-decoration: none; font-size: 16px" href="../sair.php">ENCERRAR</a>
	</button>
</section>

<br><br><br>
<br><br><br>


<div class="facha">
  <h4><b>Acompanhe Em Todo Lugar</b><br>
    <a href="https://www.facebook.com/etecguaianazes/" target="_blank"><img src="../imgs/facebook.png" height="25px"></a>
    <a href="https://www.instagram.com/etecdeguaianazes/" target="_blank"><img src="../imgs/instagram.png"height="25px"></a>
    <a href="https://www.youtube.com/channel/UC27cBVISSYnVvv8X1G59MXA" target="_blank"><img src="../imgs/youtube.png" height="25px"></a>
    <a href="https://twitter.com/etecguaianazes" target="_blank"><img src="../imgs/twitter.png" height="25px"></a>
  </h4> 
</div>
<footer class="container-fluid" style="background-color: #192126;">

	<div class="row">

		<div class="jumper col-xl-3 col-md-3 col-lg-3 col-6">
			<h3 style="color: #ff3333;">Licença</h3>
			<a href="https://policies.google.com/privacy?hl=pt-BR" target="_blank"class="lista"><h6>Fotos & Pinturas</h6></a>
			<a href="https://policies.google.com/privacy?hl=pt-BR" target="_blank"class="lista"><h6>Nomes, Textos & Citações</h6></a>
			<a href="https://policies.google.com/privacy?hl=pt-BR" target="_blank"class="lista"><h6>Registros & Termos</h6></h6></a>
			<a href="https://policies.google.com/privacy?hl=pt-BR" target="_blank"class="lista"><h6>Termos & Registros </h6></h6></a>
		</div>

		<div class="jumper col-xl-3 col-md-3 col-lg-3 col-6">
			<h3 style="color: #ff3333">Suporte</h3>
			<a href="https://policies.google.com/privacy?hl=pt-BR" target="_blank" class="lista"><h6>Política de privacidade</h6></a>
			<a href="https://policies.google.com/technologies/cookies?hl=pt-BR" target="_blank"class="lista"><h6>Termos & Condições</h6></a>
			<a href="https://policies.google.com/terms?hl=pt-BR#toc-software" target="_blank"class="lista"><h6>Contrato de Licença</h6></a>
			<a href="https://policies.google.com/terms?hl=pt-BR" target="_blank"class="lista"><h6>Política de cookies</h6></a>
		</div>


		<div class="jumper col-xl-3 col-md-3 col-lg-3 col-6">
			<h3 style="color: #ff3333;">Contato</h3>
			<h6 style="max-width: 250px; color: white">East Nasa Parkway, Houston, TX, EUA</h6>
			<h6 style="color: white;">+01 234 567 89</h6></a>
			<h6 style="color: white;">+01 234 567 89</h6></a>
		</div>

		<div class="jumper col-xl-3 col-md-3 col-lg-3 col-6">
			<form>
				<h3 style="color: #ff3333">Contate-Nos</h3>
				<input class="input" type="email" id="fname" name="fname" placeholder="Digite Seu Email" >
				<br>
				<input class="input3" type="submit" value="Enviar">
			</form>
		</div>


	</div>

	<hr style="background-color: black; width: 75%;">
	<div style="color: #ff3333;"><center><b><i>Coypyright © todos direitos reservados - Everything We Do, We Make it Big</i></b></center></div>

</footer>

<style type="text/css">
 .submit{
  padding: 5px 5px 5px 5px;
  border-radius: 30px 30px 30px 30px;
  background-color: white;
  outline: 0;
  cursor: pointer;
  width: 50%;

}

.submit:hover{
  border: none;
  background-color: #ff3333;
  animation: pisca 1.2s;
}
@keyframes pisca{
  0%{
   background-color: #fccaca;
   border-radius: 30px 30px 30px 30px;
 }
 50%{
  border-radius: 20px 20px 20px 20px;
  background-color: #ff6e6e;
}
100%{
  border:none;
  background-color: #ff3333;
}
}
</style>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="../js/main.js"></script>
</body>
</html>