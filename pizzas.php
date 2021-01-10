<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">

<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<link rel="stylesheet" href="estilo/jota.css">
<link rel="stylesheet" href="estilo/stily.css">
<?php include ("navbar.php")?>
<br/>
<br/>
<br/>
<br/>

<h4 class="centro"> Desfrute um pouco de nosso cardápio.<h4>
<br/>
<div class="fundodapizza">
<br/>
<div class="row image-grid">
<?php require_once("parametros.php");
parametros::dados();
?>
</div>		
</div>
<html>
<body>
<script type="text/javascript" src="js/carrinho.js"></script>
</body>
</html>
<?php include ("footer.php")?>