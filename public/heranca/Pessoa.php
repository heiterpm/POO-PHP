<?php
abstract class Pessoa{
    //Atributos
    protected $nome;
    private $idade;
    private $sexo;
    //Metódos especiais
    public function getNome(){
        return $this -> nome;
    }

    public function getIdade(){
        return $this -> idade;
    }

    public function getSexo(){
        return $this -> sexo;
    }

    public function setNome($nome){
        $this -> nome = $nome;
    }

     function setIdade($idade){
        $this -> idade = $idade;
    }

    public function setSexo($sexo){
        $this -> sexo = $sexo;
    }

    //Métodos
    public final function fazerAniv(){
        $this -> idade ++;
    }
}