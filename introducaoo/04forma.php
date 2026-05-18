<?php
 
    //Declaração da classe
    abstract class Forma
    {
        //declarção e atribuição do atributo
        public $tipoForma ="Forma Abstrata";
 
        //declaração do metodo
        public function imprimeForma()
        {
            echo $this->tipoForma . " com Área de: " . $this->calcularArea();
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
            $this->tipoForma = "Quadrado";
            $this->lado = $varLado;
        }
 
        //implementando o método abstrato de classe base
        public function calcularArea()
        {
            return $this-> lado * $this-> lado;
        }
    }
 
    class Retangulo extends Forma
    {
        //declarando atributo
        private $base;
        private $altura;
 
        //declaração do construtor
        public function __construct(float $varBase, float $varAltura)
        {
            $this-> tipoForma = "Retangulo ";
            $this-> base = $varBase;
            $this-> altura = $varAltura;
        }
 
        //implementando o método abstrato de classe base
        public function calcularArea()
        {
            return $this-> base * $this-> altura;
        }
    }
 
    //instanciação da classe
    $objQuadrado = new Quadrado(10.0);
    $objRetangulo = new Retangulo(8.0,5.0);
 
 
    //atribuir o valor do atributo
 
    // $obj-> lado = 10;
 
    //acessando o membro de uma classe
    $objQuadrado-> imprimeForma();
    echo "<br>"; 
    $objRetangulo-> imprimeForma();
?>