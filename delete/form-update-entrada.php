<?php

    include ("header-entrada.php");
    include ("connection-MySql.php");
    include ("crud-entrada.php");

    // Função
    $registroVeiculo = select_update_Entrada($conexao,$_GET["codigo"]);

?>

  <h3>→ Formulário Edição de Entrada de Veículo</h3>
  <br>
  <b>
	<form action="update-entrada.php" method="post">
  
  <div class="form-group">
      <label for="exampleFormControlSelect1">Codigo:</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="codigo"  value="<?=$registroVeiculo['IDRV']?>" readonly>
    </div>

    <div class="form-group">
      <label for="exampleFormControlSelect1">Data\Hora Entrada:</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="datahora1"  value="<?=$registroVeiculo['DATAHORA1']?>" readonly>
    </div>

    <div class="form-group">
      <label for="exampleFormControlInput1">Nome do Cliente:</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="nomeCliente" value="<?=$registroVeiculo['NOMECLIENTE']?>"  required>
    </div>

    <div class="form-group">
      <label for="exampleFormControlInput1">Telefone Móvel do Cliente:</label>
      <input type="tel" class="form-control" id="exampleFormControlInput1" name="telefoneCliente" minlength="12" maxlength="12" value="<?=$registroVeiculo['TELEFONECLIENTE']?>"  required>
    </div>

    <div class="form-group">
      <label for="exampleFormControlInput1">Placa do Veículo:</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="placaveiculo" value="<?=$registroVeiculo['PLACAVEICULO']?>"  required>
    </div>

    <div class="form-group">
      <label for="exampleFormControlSelect1">Modelo do Veículo:</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="modeloveiculo" value="<?=$registroVeiculo['MODELOVEICULO']?>"  required>
    </div>    

    <div class="form-group">
      <label for="exampleFormControlSelect1">Tipo do Veículo:</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="tipoveiculo" value="<?=$registroVeiculo['TIPOVEICULO']?>"  required>
    </div>

    <div class="form-group">
      <label for="exampleFormControlSelect1">Porte do Veículo:</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="porteveiculo" value="<?=$registroVeiculo['PORTEVEICULO']?>"  required>
    </div>
    
    <input class="btn btn-success" type="submit" value="Salvar"/>

  </form>
