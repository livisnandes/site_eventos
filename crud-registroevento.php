<?php
    date_default_timezone_set('America/Sao_Paulo');
    $datehora = date('d-m-Y H:i');

    // Select Modelo
	function select_registroEvento($conexao){
	    
        $listaRegistroEvento = array();

		$query = "SELECT * FROM registroevento WHERE Nome_Pessoa IS NOT NULL
        ORDER BY Codigo_Registro DESC";

		$resultado = mysqli_query($conexao,$query);
		
        while($registro = mysqli_fetch_assoc($resultado))
        {
            array_push($listaRegistroEvento,$registro);
		}

		return $listaRegistroEvento;
	} 
    
    // Insert Entrada 
    function insert_registroEvento($conexao,
                            $Codigo_Registro,
                            $Tipo_Evento,
                            $Nome_Pessoa,
                            $Telefone,
                            $datahora1){

        $query = "INSERT INTO REGISTROEVENTO (Codigo_Registro, Codigo_Evento, Nome_Pessoa, Telefone_Pessoa, DataHora_Cadastro)
                   VALUES ('{$Codigo_Registro}','{$Tipo_Evento}','{$Nome_Pessoa}','{$Telefone}','{$datahora1}')";

        return mysqli_query($conexao,$query);
    } 
    
function registroEvento($conexao){
    $registroEvento = array();
    
    $query = "INSERT into REGISTROEVENTO(Codigo_Registro, Codigo_Evento, Nome_Pessoa, Telefone_Pessoa, DataHora_Cadastro) value ('{$Codigo_Registro}','{$Tipo_Evento}','{$Nome_Pessoa}','{$Telefone}','{$datahora1}')";

    $resultado = mysqli_query($conexao, $query);
    
    while($registro = mysqli_fetch_assoc($resultado))   
    {
    array_push($registroEvento,$registro);
    }

     return $registroEvento;
}
function delete_registroEvento($conexao,$Codigo_Registro){
		
    $query = "DELETE 
                FROM REGISTROEVENTO 
               WHERE Codigo_Registro = '{$Codigo_Registro}'
               AND DataHora_Cadastro = '{$datahora1}'";
               
    mysqli_query($conexao,$query);		
    
    return mysqli_query($conexao,$query);
} 

// Select Update registroEvento
function select_update_registroEvento($conexao,$Codigo_Registro){	
    $query = "SELECT * 
                FROM REGISTROEVENTO 
               WHERE Codigo_Registro = '{$Codigo_Registro}'";
    
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}

// Update registroEvento 
function update_registroEvento($conexao,
                            $Codigo_Registro,
                            $Tipo_Evento,
                            $Nome_Pessoa,
                            $Telefone,
                            $datahora1){

    $query = "UPDATE REGISTROEVENTO 
                 SET
                 Codigo_Evento = '{$Tipo_Evento}',
                 Nome_Pessoa = '{$Nome_Pessoa}',
                 Telefone = '{$Telefone}',
                 datahora1 = '{$datahora1}',
            WHERE Codigo_Registro = '{$Codigo_Registro}'";
            
    return mysqli_query($conexao,$query);
    }
?>