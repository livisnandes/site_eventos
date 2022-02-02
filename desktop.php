<?php  
	
	include ("cabecalho-desktop.php");    
?>
	<!DOCTYPE html>
	<html lang="pt-br">
	
	<head>
	    <meta charset="utf-8" />
	    <title>SENAI - Sistema de Eventos®</title>
	    <link rel="shortcut icon" href="image/iconsenai.ico" />
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	</head>
	<style>

		.carousel-groups{
			position: relative;
			margin: 30px;
			background-color: white;
		}

	</style>
	<body>
	<br>
	<center><h4 style="color: #29b6c5;"> Seja Bem-Vindo ao Sistema de Cadastro de Eventos! </h4>
	<echo> Confira abaixo a prévia de alguns eventos:</echo></center>
	<div class="carousel-groups">
	<center><div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" style="border-radius: 10; position:relative; width: 1000px; height: 440px; margin-top: 9px; margin-left: auto; margin-right: auto;">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner" style="width: 1000px; height: 440px; margin-left:auto; margin-right:auto; ">
    <div class="carousel-item active">
      <a href="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww1.sfiec.org.br%2Fsites%2Fnuma%2F%3Fst%3Dnoticia%26id%3D121509&psig=AOvVaw0M2_lvusQEeZ_NlbrLZJIu&ust=1638916024725000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCLDFmaWc0PQCFQAAAAAdAAAAABAE"><img src="https://arquivos.sfiec.org.br/sfiec/files/images/mbipalestra.jpg" class="d-block w-100" alt="Indústria 4.0"></a>
    </div>
    <div class="carousel-item">
      <a href="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3D4HhD5_dFgko&psig=AOvVaw2AIWVL4zB-hRDqQtzECTcG&ust=1638916150645000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCPDwzKGd0PQCFQAAAAAdAAAAABAD"><img src="https://i.ytimg.com/vi/4HhD5_dFgko/maxresdefault.jpg" class="d-block w-100" alt="Realidade Virtual Aumentada"></a>
    </div>
    <div class="carousel-item">
      <a href="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3D4HhD5_dFgko&psig=AOvVaw2AIWVL4zB-hRDqQtzECTcG&ust=1638916150645000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCPDwzKGd0PQCFQAAAAAdAAAAABAD"><img src="https://extra.globo.com/incoming/19946855-c38-4e1/w976h550-PROP/2015-846701514-2015-846434750-automacao-industrialfoto-antonio-batalha-884.jpg" class="d-block w-100" alt="Feira"></a>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev" style=" background: #b6b0b086; border-color: transparent;">
    <span class="carousel-control-prev-icon" aria-hidden="true" style="color: #b6b0b086; "></span>
    <span class="visually-hidden"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next" style="background: #b6b0b086; border-color: transparent;">
    <span class="carousel-control-next-icon" aria-hidden="true" style="color: #b6b0b086;"></span>
    <span class="visually-hidden"></span>
  </button>
</div>
<br>
<echo> As imagens acima, após serem clicadas, encaminharão para as páginas sobre os eventos.</echo>
</center>
	</div>
	</body>
</html>
<?php  
	include ("rodape-desktop.php");
	?>
