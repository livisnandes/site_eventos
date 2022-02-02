<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>SENAI - Desenvolvimento de Sistemas Web®</title>
</head>
<body>
    
    <?php
      $x = $_POST["N1"];
      $y = $_POST["N2"];
      $z = ($x+$y);
    ?>

    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
      
        <label for="inputN1"> Primeiro Número:</label>
        <input type="number" id="N1" name="N1" min="1" max="1000">
    
        <label for="inputN2"> Segundo Número:</label>
        <input type="number" id="N2" name="N2" min="1" max="1000">

        <label for="inputN2"> Resulado:</label>
        <input type="text" name="N3" value=<?=$z?>>
        
        <input type="submit" value="Calcular">

    </form>

</body>
</html>