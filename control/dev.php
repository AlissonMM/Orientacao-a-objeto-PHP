<?php
    require_once 'pessoa.php';
    class Dev extends Pessoa{
        private $salario = 5000;
        private $profissao = 'Dev';

        public function getSalario(){
            return $this->salario;
        }

        public function getProfissao(){
            return $this->profissao;
        }
    }
?>