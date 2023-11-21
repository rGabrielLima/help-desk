<?php 

    session_start();

    //montagem do texto
    $titulo = str_replace("#", "-", $_POST["titulo"]);
    $categoria = str_replace("#", "-", $_POST["categoria"]);
    $descricao = str_replace("#", "-", $_POST["descricao"]);
    
    $texto = $_SESSION["id"]. "#" .$titulo. "#" .$categoria. "#" .$descricao. PHP_EOL;

    /*abaixo a sequência é bem importante.
    fopen => permite criar o arquivo de texto e eu escolho qual o nome da extensão, nesse caso foi "hd".
    a => Abre somente para escrita; coloca o ponteiro do arquivo no final do arquivo. Se o arquivo não existir, tenta criá-lo.
    */
    //abrindo o arquivo
    $arquivo = fopen("../../../app_help_desk/arquivo.hd", "a");

    //escrevendo no arquivo
    fwrite($arquivo, $texto);
    //fechando o arquivo
    fclose($arquivo);

    header("Location: abrir_chamado.php");
?>