<?php
    abstract class Pessoa
    {
        private string $tipoInscricao;
        private string $numeroInscricao;

        public function __construct (string $tipoInscricao, string $numeroInscricao)
        {
            $this->tipoInscricao = $tipoInscricao;
            $this->numeroInscricao = $numeroInscricao;
        }

        public function imprimir()
        {
            echo $this->tipoInscricao . "-" . $this->numeroInscricao . "Renda: " . $this->calcularRenda();
        }

        abstract public function calcularRenda();
    } 
?>