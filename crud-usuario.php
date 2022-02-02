<?php
// $email = 
// $senha = 

// Select Usuario
function select_usuario($conexao,$email,$senha){

    $query = "SELECT * 
    FROM USUARIO
    WHERE Email = '{$email}'
    AND Senha = '{$senha}';";

    $resultado = mysqli_query($conexao,$query);		
    $usuario =  mysqli_fetch_assoc($resultado);

    return $usuario;
}


?>