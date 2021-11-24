<?php

class Calendario{

    private $mes;
    private $anio;

    public function __construct ($mes, $anio){

        $this -> mes = date("F");
        $this -> anio = date("y");

    }
    


}


$nombreDias = ['L','M','X','J','V','S','D'];

function nombreDias($nombreDias){
    
    echo "<section class='nombreDias'>";
    for($i = 0; $i < count($nombreDias); $i++){
        echo "<p>{$nombreDias[$i]}</p>";
    }
    echo "</section>";
}

function calendario($nombreDias){

    $mes = $_POST['mes'];
    $anio = $_POST['anio'];
    $fechaUsuario = mktime(0,0,0,$mes,1,$anio);
    $nombreMes = date('F', $fechaUsuario);
    $numeroDiasMes = date('t', $fechaUsuario);
    $numeroDiaSemana = intval(date('N', $fechaUsuario));
    $comienzoSemana = false;

/*Crear una condición que compare el dia que empieza el mes con el dia de la semana*/

    echo $nombreMes;
    echo "<article>";
    nombreDias($nombreDias);
    echo "<div class='diasMes'>";
    
    for($i = 1; $i <= $numeroDiasMes; $i++){
       if($i === $numeroDiaSemana ){

       }
        echo "<p>{$i}</p>"; 
    }


    echo "</div>";
    echo "</article>";


}

?>