<?php 

    if(isset($_POST['hora_entrada']) && isset($_POST['hora_saida']))
    {

        $horadeentrada = new DateTime($_POST['hora_entrada']);
        $horadesaida = new DateTime($_POST['hora_saida']);

        $horasTrabalhadas = $horadesaida->diff($horadeentrada)->h + ($horadesaida->diff($horadeentrada)->i / 100);

        echo number_format($horasTrabalhadas, 2) . " Horas trabalhadas";
    }
?>