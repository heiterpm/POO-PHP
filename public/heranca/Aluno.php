<?php
require_once "Pessoa.php";
class Aluno extends Pessoa{
    //Atributos
    private $matr;
    private $curso;
    
    //Métodos Especiais
    public function getMatr(){
        return $this -> matr;
    }

    public function getCurso(){
        return $this -> curso;
    }

    public function setMatr($matr){
        $this -> matr = $matr;
    }

    public function setCurso($curso){
        $this -> curso = $curso;
    }

    //Métodos
    public function pagarMensalidade(){
        echo "<p>Pagando Mensalidade do aluno $this->nome</p>";
    }
}