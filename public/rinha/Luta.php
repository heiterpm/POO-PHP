<?php 
require_once "ILuta.php";
require_once "Lutador.php";
class Luta implements ILuta{
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    //Métodos especiais

    private function getDesafiado(){
        return $this -> desafiado;
    }

    private function getDesafiante(){
        return $this -> desafiante;
    }

    private function getRounds(){
        return $this -> rounds;
    }

    private function getAprovada(){
        return $this -> aprovada;
    }

    private function setDesafiado($dd){
        $this -> desafiado = $dd;
    }

    private function setDesafiante($desafiado){
        $this -> desafiante = $desafiado;
    }

    private function setRounds($rounds){
        $this -> rounds = $rounds;
    }

    private function setAprovada($aprovada){
        $this -> aprovada = $aprovada;
    }

    public function marcarLuta($l1, $l2){
        if ($l1 -> getCategoria() === $l2 -> getCategoria() && $l1 != $l2){
            $this -> setAprovada(true);
            $this -> desafiado = $l1;
            $this -> desafiante = $l2;
        } else{
            $this -> setAprovada(false);
            $this -> desafiado = null;
            $this -> desafiante = null;
            echo ("Luta não aprovada");
        }   
    }

    public function lutar(){
        if ($this -> aprovada){
            $this -> desafiado -> apresentar();
            $this -> desafiante -> apresentar();
            $vencedor = rand(0,2);
            switch($vencedor)
            {
                case 0:
                    echo("<p> Empate!!! </p>");
                    $this -> desafiado -> empatarLuta();
                    $this -> desafiante -> empatarLuta();
                    break;

                case 1:
                    echo("<p> " . $this -> desafiado -> getNome() . " Foi o Vencedor</p>");
                    $this -> desafiado -> ganharLuta();
                    $this -> desafiante -> perderLuta();
                    break;

                case 2:
                    echo("<p> " . $this -> desafiante -> getNome() . " Foi o Vencedor</p>");
                    $this -> desafiante -> ganharLuta();
                    $this -> desafiado -> perderLuta();
                    break;
            }
        }
        
    }
}