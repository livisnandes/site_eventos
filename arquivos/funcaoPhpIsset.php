<!DOCTYPE html>
<html lang="br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" 
          href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
          crossorigin="anonymous">

    <title>Questao 1</title>
</head>


<?php

    if(isset($_POST["op"]))
    {

        switch ($_POST["op"]) 
        {
            case '1': $resultado = $_POST["valor1"] + $_POST["valor2"];
                break;

            case '2': $resultado = $_POST["valor1"] - $_POST["valor2"];
                break;
            
            case '3': $resultado = $_POST["valor1"] * $_POST["valor2"];
                break;

            case '4': $resultado = $_POST["valor1"] / $_POST["valor2"];
                break;
        
        }
    }
    else
       {
            $msg1 = "Selecione a Operação";
            $resultado = "Selecione uma Operação";
       }


?>

<body style="text-align: left; padding: 80px 300px;" >


    <form action="02.php" method="POST">
        
        <p><b><center>Questão 01 - Calculadora SENAI</center></b></p>
    
        <div class="form-group">
            <label for="exampleFormControlInput1">1º Número:</label>
            <input type="number" class="form-control" id="exampleFormControlInput1" name="valor1" placeholder="Informe o valor desejado" required>
        </div>

        <label>Selecione a operação Aritmética:</label><br> 
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="customRadio1" name="op" value="1" class="custom-control-input">
            <label class="custom-control-label" for="customRadio1">Adição ( + )</label>
        </div>
        
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="customRadio1" name="op" value="2" class="custom-control-input">
            <label class="custom-control-label" for="customRadio1">Multiplicação ( * )</label>
        </div>

        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="customRadio1" name="op" value="3" class="custom-control-input">
            <label class="custom-control-label" for="customRadio1">Subtração ( - )</label>
        </div>
        
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="customRadio1" name="op" value="4" class="custom-control-input">
            <label class="custom-control-label" for="customRadio1">Divisão ( / )</label>
        </div>
    
        <div class="form-group">
            <br><label for="exampleFormControlInput1">2º Número:</label>
            <input type="number" class="form-control" id="exampleFormControlInput1" name="valor2" placeholder="Informe o valor desejado" required>
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Resultado da Operação Aritmética:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" value=<?=$resultado?>>
        </div>
        
        <input class="btn btn-primary" type="submit" value="Calcular"/>
    </form>    


</body>

</html>