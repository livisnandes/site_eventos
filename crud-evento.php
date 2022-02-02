
<?php

    // Select Evento
	function select_Evento($conexao){
	    
        $listaEvento = array();

		$query = "SELECT * FROM EVENTO";

    $resultado = mysqli_query($conexao, $query);

    while($evento = mysqli_fetch_assoc($resultado))
    {
        array_push($listaEvento,$evento);
    }

	 return $listaEvento;


    }  

 function Create_Evento($conexao){

        $criarEvento =  array();

        $query = "INSERT into evento(Codigo_Evento, Nome_Evento) value ('{$_POST["Codigo_Evento"]}','{$_POST["Nome_Evento"]}')";
        
        $resultado = mysqli_query($conexao, $query);
            
            while($criarEvento = mysqli_fetch_assoc($resultado))
            {
                array_push($criarEvento);
    }
    }
  

	include("rodape-desktop.php");
	?>