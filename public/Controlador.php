<?php
require_once "IControlador.php";
class Controlador implements IControlador
{
    //Atributes
    private $volume;
    private $ligado;
    private $tocando;
    //Metodos
    public function __construct(){
        $this -> volume = 50;
        $this -> ligado = false;
        $this -> tocando = false;
    }
    
    private function getVolume(){
        return $this -> volume;
    }

    private function getLigado(){
        return $this -> ligado;
    }

    private function getTocando(){
        return $this -> tocando;
    }
    
    private function setVolume(int $v){
        $this -> volume = $v;
    }

    private function setLigado(int $l){
        $this -> ligado = $l;
    }

    private function setTocando(int $t){
        $this -> tocando = $t;
    }

    //Métodos
    public function ligar(){

        $this -> setLigado(true);
    }

    public function desligar(){

        $this -> setLigado(false);
    }

    public function abrirMenu(){
        echo("<p>----- Menu ------</p>");
        echo "<br> Está ligado: " . ($this -> getLigado() ? "Sim" : "Não");
        echo( "<br> Está Tocando: " . ($this -> getTocando() ? "Sim" : "Não"));
        echo( "<br> Volume: " . $this -> getVolume() );
        echo("<br>");
        for( $i = 0; $i < $this -> getVolume(); $i += 10){
            echo("|");
        }
        echo("<br>");
    }

    public function fecharMenu(){
        echo("Fechando menu");
    }
    public function maisVolume(){
        if($this -> getLigado()){
            $this -> setVolume($this -> getVolume() + 10);
        }

    }
    public function menosVolume(){
        if($this -> getLigado()){
            $this -> setVolume($this -> getVolume() - 10);
        }

    }
    public function ligarMudo(){
        if($this -> getLigado() && $this -> getVolume() > 0){
            $this -> setVolume(0);
        }

    }
    public function desligarMudo(){
        if($this -> getLigado() && $this -> getVolume() == 0){
            $this -> setVolume(50);
        }
    }
    public function play(){
        if($this -> getLigado() && !($this -> getTocando())){
            $this -> setTocando(true);
        }
    }
    public function pause(){
        if($this -> getLigado() && $this -> getTocando()){
            $this -> setTocando(false);
        }
    }
}