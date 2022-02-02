<?php

    include ("cabecalho-eventopessoa.php");
    include ("connection-MySql.php");
    include ("crud-evento.php");
    include ("crud-registroevento.php");

    // Data/Hora do Sistema
    date_default_timezone_set('America/Sao_Paulo');
    $data = date("y/m/d");
    $hora = date("H:i:s");
    $datahora = $data.'-'.$hora;
?>

		<div class="container">
	    	<div class="principal">
  <div class="form">
  <h3>→ Registro de Pessoas em nossos eventos:</h3>
  <br>
  <b>
	<form action="insert-evento.php" method="post">

  <?php
            $listaEvento = select_Evento($conexao);
    ?>

    <div id="line" style="height">
    <div class="form-group">
      <label for="exampleFormControlSelect1">Código de Registro::</label>
      <input  style="width: 400px;" class="form-control" id="exampleFormControlSelect1" name="Codigo_Registro" placeholder="Digite seu código de registro" required>
      </input>

    <div class="form-group">
      <label for="exampleFormControlSelect1">Evento:</label>
      <select style="width: 400px;" class="form-control" id="exampleFormControlSelect1" name="Codigo_Evento" required>
          <?php foreach($listaEvento as $evento): ?>
                <option value="<?=$evento['Codigo_Evento']?>"><?=$evento['Nome_Evento']?></option>
          <?php endforeach ?>
      </select>
    </div>

<br>
    <div class="form-group">
      <label for="exampleFormControlInput1">Nome Completo:</label>
      <input type="text" style="width: 400px;" class="form-control" id="exampleFormControlInput1" name="Nome_Pessoa" placeholder="Informe o Nome Completo" required>
    </div>

    <div class="form-group">
      <label for="exampleFormControlInput1">Telefone para contato:</label>
      <input style="width: 400px;" type="tel" class="form-control" id="exampleFormControlInput1" name="Telefone" minlength="12" maxlength="12" pattern="[0-9]{3}[9]{1}[0-9]{8}" placeholder="Informe seu Telefone - (DDD+9+Número)" required>
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">Data\Hora Entrada:</label>
      <input style="width: 400px;" type="text" class="form-control" id="exampleFormControlInput1" name="datahora1" value=<?=$datahora?> readonly>
    </div>

    <div style="margin-bottom: 40px;">
    <input class="btn btn-info" type="submit" value="Cadastrar"/>
    <input class="btn btn-secondary" type="reset" value="Cancelar"/>
    </div>
    </form>
  </div>


