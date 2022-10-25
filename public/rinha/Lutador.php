<?php
    require_once "ILutador.php";
    class Lutador implements ILutador
    {

        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $categoria;
        private $vitorias;
        private $derrotas;
        private $empates;

        //Métodos especiais
        function __construct($no, $na, $id, $al, $pe, $vi, $de, $em){
            $this -> nome = $no;
            $this -> nacionalidade = $na;
            $this -> idade = $id;
            $this -> altura = $al;
            $this -> setPeso($pe);
            $this -> vitorias = $vi;
            $this -> derrotas = $de;
            $this -> empates = $em;
        }

        function getNome(){
            return $this -> nome;
        }

        function getNacionalidade(){
            return $this -> nacionalidade;
        }

        function getIdade(){
            return $this -> idade;
        }

        function getAltura(){
            return $this -> altura;
        }

        function getPeso(){
            return $this -> peso;
        }

        function getCategoria(){
            return $this -> categoria;
        }

        function getVitorias(){
            return $this -> vitorias;
        }

        function getDerrotas(){
            return $this -> derrotas;
        }

        function getEmpates(){
            return $this -> empates;
        }

        private function setNome($nm){
            $this -> nome = $nm;
        }

        private function setNacionalidade($nac){
            $this -> nacionalidade = $nac;
        }

        private function setIdade($i){
            $this -> idade = $i;
        }

        private function setAltura($a){
            $this -> altura = $a;
        }

        private function setPeso($p){
            $this -> peso = $p;
            $this -> setCategoria($p);
        }

        private function setCategoria($c){
            if ($c < 52.2 || $c > 120.2){
                $this -> categoria = "Invalido";
            } elseif($c <= 70.3 ) {
                $this -> categoria = "Leve";
            }elseif($c <= 83.9 ) {
                $this -> categoria = "Médio";
            }elseif($c <= 120.2 ) {
                $this -> categoria = "Pesado";
            }
        }

        private function setVitorias($v){
            $this -> vitorias = $v;
        }

        private function setDerrotas($d){
            $this -> derrotas = $d;
        }

        private function setEmpates($e){
            $this -> empates = $e;
        }
        //Metódos da classe

        public function apresentar(){
            echo("<br>Lutador: ". $this -> getNome());
            echo("<br>Origem: ". $this -> getNacionalidade());
            echo("<br>" . $this -> getIdade() . " Anos");
            echo("<br>" . $this -> getAltura() . "m de Altura");
            echo("<br>" . $this -> getPeso() . "Kg");
            echo("<br>Vitórias: ". $this -> getVitorias());
            echo("<br>Derrotas: ". $this -> getDerrotas());
            echo("<br>Empates: ". $this -> getEmpates());
        }

        public function status(){
            echo("<br>" . $this -> getNome());
            echo(" é um peso " . $this -> getCategoria());
            echo(" com " . $this -> getVitorias() . " Vitórias ");
            echo( $this -> getDerrotas() . " Derrotas ");
            echo($this -> getEmpates() . " Empates");
        }

        public function ganharLuta(){
            $this -> setVitorias($this -> getVitorias() + 1);
        }

        public function perderLuta(){
            $this -> setDerrotas($this -> getDerrotas() + 1);
        }

        public function empatarLuta(){
            $this -> setEmpates($this -> getEmpates() + 1);
        }
    }