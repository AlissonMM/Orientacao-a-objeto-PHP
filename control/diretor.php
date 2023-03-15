<?php
    require_once 'pessoa.php';
    class Diretor extends Pessoa{
        private $salario = 15000;
        private $profissao = 'Diretor';

        public function getSalario(){
            return $this->salario;
        }
        public function getProfissao(){
            return $this->profissao;
        }
    }
?>