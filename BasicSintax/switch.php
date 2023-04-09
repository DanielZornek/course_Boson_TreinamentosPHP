<?php
    $valor = 8;
    switch($valor){
        case 1:
            echo "Domingo";
            break;
        case 2:
            echo "Segunda-feira";
            break;
        case 3:
            echo "Terça-feira";
            break;
        case 4:
            echo "Quarta-feira";
            break;
        case 5:
            echo "Quinta-feira";
            break;
        case 6:
            echo "Sexta-feira";
            break;
        case 7:
            echo "Sábado";
            break;
        default:
            echo "Dia inválido";
    }

    echo "<br> <br>";

    $nome = "Toya Todoroki";

    switch($nome){
        case "Toya Todoroki";
            echo "Seu nome é Toya";
            break;

        case "Dabi":
            echo "Seu nome é Dabi";
            break;
        default:
            echo "Nome inválido";
    }
?>