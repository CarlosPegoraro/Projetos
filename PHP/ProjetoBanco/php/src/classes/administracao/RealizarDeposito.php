<?php

    //requerimento
    require_once 'Conexao2.php';

    //------------------------
    //classe
    class RealizarDeposito {

        //atributos
        private string $numeroConta;
        private int $valor;

        //-------------------
        //construtor

        function __construct(string $numeroConta, int $valor)
        {
            $this->setNumeroConta(strtoupper($numeroConta));
            $this->setValor($valor);
        }

        //----------------
        //metodos da classe

        public function depositar()
        {
            $conn = new Conexao2();
            $conn->conexao();
            $tabela = "a" . $this->getNumeroConta();
            $sql = "SELECT * FROM $tabela ORDER BY DIA DESC LIMIT 1;";
            $this->prepararE($conn->conexao(), $sql, $this->getValor(), $tabela);
        }

        private function prepararE($conexao, $sql, $valor, $tabela)
        {
            $stmt = $conexao->query($sql);
            $consulta = $stmt->fetchAll();
            foreach ($consulta as $recebido) {
                $saldo = $recebido['NOVOSALDO'];
            }
            $atualSaldo = $saldo + $valor;
            $sql2 = "INSERT INTO $tabela (SALDO, SAQUE, DEPOSITO, NOVOSALDO, DIA) VALUES (?,?,?,?, NOW());";
            $stmt2 = $conexao->prepare($sql2);
            $stmt2->BindValue(1, $saldo);
            $stmt2->BindValue(2, 0);
            $stmt2->BindValue(3, $valor);
            $stmt2->Bindvalue(4, $atualSaldo);
            $stmt2->execute();
            echo "<p>Deposito realizado com sucesso! Valor de: R$ $valor";
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

        public function getValor()
        {
                return $this->valor;
        }

        public function setValor($valor)
        {
                $this->valor = $valor;

                return $this;
        }
    }

?>