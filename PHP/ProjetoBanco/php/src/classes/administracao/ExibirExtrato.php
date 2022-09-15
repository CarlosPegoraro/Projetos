<?php

    //requerimento
    require_once 'Conexao2.php';

    //------------------------
    //classe
    class ExibirExtrato {

        //atributos
        private string $numeroConta;

        //-------------------
        //construtor

        function __construct(string $numeroConta)
        {
            $this->setNumeroConta(strtoupper($numeroConta));
        }

        //----------------
        //metodos da classe

        public function extrato()
        {
            $conn = new Conexao2();
            $conn->conexao();
            $tabela = "a" . $this->getNumeroConta();
            $sql = "SELECT * FROM $tabela ORDER BY DIA DESC";
            $this->prepararE($conn->conexao(), $sql);
        }

        private function prepararE($conexao, $sql)
        {
            $stmt = $conexao->query($sql);
            $consulta = $stmt->fetchAll();
            foreach ($consulta as $resposta) {
                echo "<p><br/>Saldo em Conta: {$resposta['NOVOSALDO']}<br/>Saque: {$resposta['SAQUE']}<br/> Deposito: {$resposta['DEPOSITO']}<br/>Dia e Hora: {$resposta['DIA']}<br/></p>";
                echo "---------------------------------------------------------------------------";
            }
        }

        //----------------
        //Getters e setters

        public function getNumeroConta()
        {
                return $this->numeroConta;
        }

        public function setNumeroConta($numeroConta)
        {
                $this->numeroConta = $numeroConta;

                return $this;
        }

        public function getSenha()
        {
                return $this->senha;
        }

        public function setSenha($senha)
        {
                $this->senha = $senha;

                return $this;
        }
    }

?>