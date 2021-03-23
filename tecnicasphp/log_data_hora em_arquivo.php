<?php
        $pasta="log/"; //enderecopara criar pasta
        $texto="mensagemdetest"; //mensagem para log
        $data = date("d-m-Y"); // pega o dia atual
        $hora = date("H:i:s"); // pega a hora atual
        
        mkdir($pasta); //cria a pasta log
        chmod($pasta, 0777); //desbloqueia a pasta para gravacao
       
        $log = fopen("log/".$data.".txt", "a+",0); //prepara items para gravacao
        $escreve = fwrite($log,"\n".$data." ".$hora." - ".$texto);// gravanr arquivo saltando uma linha

        fclose($log); // fecha o arquivo log
?>
