<?php


include_once "paginas/includes/header.php";





include_once "paginas/inicial.php";


$paginas = isset($_GET['pg']);


if ($paginas) {

    switch ($_GET['pg']) {
        case 'termos':
            include_once "paginas/termosdeuso.php";
            break;
        case 'politica':
            include_once "paginas/politica.php";
            break;
        default:
            break;
    }
}else{
    include_once "paginas/inicial.php";
}





include_once "paginas/sobre.php";






include_once "paginas/includes/foother.php";
