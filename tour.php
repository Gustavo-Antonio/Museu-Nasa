<!DOCTYPE html>
<html>
<head>
	<title>Tour NASA</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="css/tour.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
</head>



<div class="splash">
	<h1 class="fade-in jumper2"><b>Bem Vindo Ao Museu</b><br><br><br><br><img src="imgs/headphones.png" style="border: none; height: 90px;"></h1>
	
	<h3 class="fade-in"><b> Use Um <u><i>HeadPhone</i></u> Para<br> Melhor Experiencia</b></h3>
</div>

<?php
require_once 'classes/Imagem.php';
require_once 'classes/Conexao.php';
try {

	$imagem = new Imagem();
	$listarImagem = $imagem->listar();

} catch(Exception $e) {
	echo '<pre>';
	print_r($e);
	echo '</pre>';
	echo $e->getMessage();
}
?>

<body>
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"  data-interval="0">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<center>
					<div class="frame">
						<img src="imgs/Bem Vindo2.jpg" alt=""/>
					</div>
					<h5><a class="nha"href="index.php">Sair Do Museu</a></h5>
				</center>


			</div>
			<?php foreach ($listarImagem as $linha){ ?>
				<?php echo '<div class="carousel-item">'?>
				<?php echo '<center>'?>
				<?php echo '<div class="frame">'?>
				<img  src='<?php echo 'area-restrita/'.$linha['caminhoImagem']?>'>
				<?php echo'</div>'?>
				<center>
					<div class="card-5">
						<br>
						<h2  class=" jumper1"><b><?php echo $linha['descricaoImagem']." (".$linha['dataObra'].")"?></b></h2>
						<h5><?php echo $linha['textoImagem'] ?></h5>

					</div>
				</center>
				<h5><a class="nha"href="index.php">Sair Do Museu</a></h5>
			</div>
		<?php } ?>
	</div>
</center>
</div>
<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"  onclick="vai();">
	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
	<span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next" onclick="vai();">
	<span class="carousel-control-next-icon" aria-hidden="true"></span>
	<span class="sr-only">Next</span>
</a>
</div>








<script src="js/app3.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>


</body>
</html>


<script type="text/javascript">
	audio = new Audio("sound/passo.mp3");
	function vai(){
		audio.play();
		setTimeout(()=>{
		}, 2500);
	}

</script>