
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro Período</title>
  <link rel="icon" type="image/png" href="../imgs/icone.png"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/main.css">


  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
</head>
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


<section class="banner">
  <h1>
    O Universo em Sua Casa.



  </h1>

  <p>
    Cadastre aqui as informações sécundarias das obras
  </p>

  <nav>
    <button>

      <a style="color: white; text-decoration: none; font-size: 16px" href="#a">Começe a Cadastrar</a>
    </button>
  </nav>

</section>
<br><br>

<section class="anime box container-fluid"id="a">

  <div class="a"></div>
  <div class="row">
    <div class="b">
      <h3 style="color: #ff3333;">Cadastro Périodo</h3>
      <form name="cadastro" method="post" action="cadastrar-periodo.php">
        <input class="tipo" type="text" name="txtNome" placeholder="Nome do Perido"><br>
        <input class="tipo" type="text" name="secInicial" placeholder="Século Incial do Pérido"><br>
        <input class="tipo " type="text" name="secFinal" placeholder="Século Final do Pérido"><br><br>
        <center><input class="submit " type="submit" value="Registrar"></center>
        <img src="../imgs/icone.png" height="200px">
      </form>
    </div>
  </div>
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
	<div style="color: #ff3333;"><center><b><i>Coypyright © todos direitos reservados - Gustavo Antonio</i></b></center></div>

</footer>

<style type="text/css">
 .box{
  display: flex;
  justify-content: center;
  align-items: center;
  font-family: 'Poppins', sans-serif;
}
.a{
  width: 500px; 
  height: 500px;
  border-radius: 15px 0px 0px 15px;
  background-image: url(../imgs/b.jpg);

}
.b{
  display: flex;
  background-color:  #192126;
  border-radius: 0px 15px 15px 0px;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  width: 300px; 
  height: 500px;
}
.tipo{
  font-family: 'Poppins', sans-serif; 
  width: 200px; 
  color: white;
  background: transparent;
  border-left: transparent;
  border-right: transparent;
  border-top: transparent;
  border-bottom: 2px solid black;
  outline: 0;

}
.submit{
  padding: 5px 5px 5px 5px;
  border-radius: 30px 30px 30px 30px;
  background-color: white;
  outline: 0;
  cursor: pointer;
  width: 100%;
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
@media (max-width: 576px) {
  .a{
    width: 0px;
  }
  .box {
    width: 300px; 
  }
  .b{
    border-radius: 15px 15px 15px 15px;
  }

</style>




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="../js/main.js"></script>
</body>
</html>
