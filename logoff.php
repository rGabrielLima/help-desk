<?php 
    session_start();

    // echo "<pre>";
    // print_r($_SESSION);
    // echo "</pre>";

    // //remove os índices do array da sessao //unset
    // unset($_SESSION); //remove o índice apenas se existir

    session_destroy();
    header("Location: index.php");

?>