<?php
 
    //Declaração da classe
    abstract class Forma
    {
        //declarção e atribuição do atributo
        public $tipoForma ="Forma Abstrata";
 
        //declaração do metodo
        public function imprimeForma()
        {
            echo $this-> tipoForma . "com Área de: " . $this->calcularArea();
        }
 
        abstract public function calcularArea();
    }
 
    //criando herança entre a classe base Forma e a filha quadrado
    class Quadrado extends Forma
    {
        //declarando atributo
        public $lado;
 
        //declaração do construtor
        public function __construct(float $varLado)
        {
            $this-> tipoForma = "Quadrado ";
            $this-> lado = $varLado;
        }
 
        //implementando o método abstrato de classe base
        public function calcularArea()
        {
            return $this-> lado * $this-> lado;
        }
    }
 
    //instanciação da classe
    $obj = new Quadrado(10.0);
 
    //atribuir o valor do atributo
 
    // $obj-> lado = 10;
 
    //acessando o membro de uma classe
    $obj-> imprimeForma();
?>