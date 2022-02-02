<?php

    include ("cabecalho-eventopessoa.php");
    include ("connection-MySql.php");
    include ("crud-registroevento.php");


?>

<h3 style="margin:20px;"> → Registro de Eventos:</h3>

<?php

if(array_key_exists("removido", $_GET) && $_GET["removido"]=="true"){
?>
	<h3><b><p class="text-danger"> Registro de Evento Excluido c/Sucesso!!!</p></b></h3>	
<?php
} ?>	


<table class="table table-striped">
		
	<tr>
		<th><b> ID Registro</b></th>
		<th><b> ID Evento</b></th>
		<th><b> Nome Pessoa</b></th>
		<th><b> Telefone Pessoa</b></th>
		<th><b> Data/Hora Cadastro</b></th>
		<th><b> Editar</b> </th>
		<th><b> Excluir</b> </th>
	</tr>
	<?php
    	
	    $listaRegistroEvento = select_registroEvento($conexao);

   	foreach($listaRegistroEvento as $registro):
?>
		<tr>
			<td><?= $registro['Codigo_Registro'] ?></td>
			<td><?= $registro['Codigo_Evento'] ?></td>
			<td><?= $registro['Nome_Pessoa'] ?></td>
			<td><?= $registro['Telefone_Pessoa'] ?></td>
			<td><?= $registro['DataHora_Cadastro'] ?></td>
			
		</td>
		<td>
		<a class = "btn btn-info" 
			   href="">Editar</a>
		</td>
		<td>
			<form action="" method = "post">
				<input type="hidden" name="idevento" value="">
				<button class="btn btn-secondary">Excluir</button> 
			</form>
		</td>
	</tr>
<?php
	endforeach
?>

</table>

<?php include("rodape-eventopessoa.php");?>
