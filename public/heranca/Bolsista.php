<?php
require_once "Aluno.php";
class Bolsista extends Aluno{
    //Atributos
    private $bolsa;

    //Métodos especiais
    public function getBolsa(){
        return $this -> bolsa;
    }

    public function setBolsa($bolsa){
        $this -> bolsa = $bolsa;
    }

    public function renovarBolsa(){
        echo "<p>Renovando bolsa do aluno $this->nome</p>";
    }

    public function pagarMensalidade()
    {
        echo "<p>Pagando Mensalidade do BOLSISTA $this->nome</p>";
    }
}