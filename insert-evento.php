<?php

    include ("cabecalho-eventopessoa.php");
    include ("connection-MySql.php");
    include ("crud-registroevento.php");
    include ("crud-evento.php");

      // Função Insert
	if(insert_registroEvento($conexao,
                      $_POST["Codigo_Registro"],
                      $_POST["Codigo_Evento"],
                      $_POST["Nome_Pessoa"],
                      $_POST["Telefone"],
                      $_POST["datahora1"]))
		{?>
			<h3><p class="text-success">A Pessoa foi adicionada ao Evento c/Sucesso!!!</p></h3>

			<hr>
      <b>Codigo de Registro:</b> <?=$_POST["Codigo_Registro"];?><br>
      <hr>
      <b>Nome do Evento:</b> <?=$_POST["Codigo_Evento"];?><br>
      <hr>
      <b>Nome da Pessoa:</b> <?=$_POST["Nome_Pessoa"];?><br>
      <hr>
      <b>Telefone Móvel do Cliente:</b> <?=$_POST["Telefone"];?><br>
      <hr>
      <b>Data\Hora:</b> <?=$_POST["datahora1"];?>
      <hr>
		<?php
    }
	else
		{
			$msg = mysqli_error($conexao);?>
			<?php echo $msg;   ?>
			<h3><p class="text-danger"> A Pessoa Não foi adicionada ao Evento!!!</p></h3>
		<?php
		}
    include ("rodape-eventopessoa.php");
    ?>

