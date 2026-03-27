<?php 
    $horadeentrada = new DateTime('08:00');
    $horadesaida = new DateTime('09:00');
    $horasTrabalhadas = $horadesaida->diff($horadeentrada)->h + ($horadesaida->diff($horadeentrada)->i / 100);
    echo "Horas trabalhadas: " . number_format($horasTrabalhadas, 2);
?>