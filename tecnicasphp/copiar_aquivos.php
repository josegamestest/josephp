<?php
    //Pegando o caminho mais o nome do arquivo
    $file = 'localdoarquivo/nomedoarquivo';
    //pegando o destino mais o nome para a copia do arquivo
    $newfile = 'localsalvararquivo/nomedoarquivo';
    //copiando arquivo
    copy($file, $newfile);
?>
