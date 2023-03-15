<?php
    require_once 'pessoa.php';
    class Professor extends Pessoa{
        private $salario = 3000;
        private $profissao = 'Professor';

        public function getSalario(){
            return $this->salario;
        }
        public function getProfissao(){
            return $this->profissao;
        }
    }
?>