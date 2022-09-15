<?php

    //requerimento
    require_once 'Conexao.php';

    //------------------------
    //classe
    class CriarConta {

        //atributos
        private string $nome;
        private string $senha;
        private string $tipo;
        private int $numeroConta;

        //-------------------
        //construtor

        function __construct(string $nome, string $senha, string $tipo)
        {
            $this->setNome(strtoupper($nome));
            $this->setSenha(strtoupper($senha));
            $this->setTipo($tipo);
            $this->setNumeroConta();
        }

        //----------------
        //metodos da classe

        public function criarConta()
        {
            $conn = new Conexao();
            $conn->conexao();
            
            $sql = "INSERT INTO contas (NUMCONTA, NOME, SENHA, TIPO) VALUES (?,?,?,?);";
            $this->prepararCC($conn->conexao(), $sql, $this->getNumeroConta(), $this->getNome(), $this->getSenha(), $this->getTipo());
            $this->criarTabela($conn->conexao());
        }

        private function prepararCC($conexao, $sql, $numeroConta, $nome, $senha, $tipo)
        {
            if ($nome == 'null' || $senha == 'null' || $tipo == null || $numeroConta == null) {
                echo "Algum dado não foi inserido";
            } else {
                $stmt = $conexao->prepare($sql);
                $stmt->BindValue(1, $numeroConta);
                $stmt->BindValue(2, $nome);
                $stmt->BindValue(3, $senha);
                $stmt->Bindvalue(4, $tipo);
                $stmt->execute();
            }
        }

        private function criarTabela($conn) {
            $editNumConta = "a" . $this->getNumeroConta();
            $sql2 = "CREATE TABLE IF NOT EXISTS $editNumConta (ID INT AUTO_INCREMENT NOT NULL PRIMARY KEY, 
            SALDO INT, SAQUE INT, DEPOSITO INT, NOVOSALDO INT, DIA DATETIME);";
            $stmt = $conn->prepare($sql2);
            $stmt->execute();
            $this->bonusConta($conn, $editNumConta);
        }

        private function bonusConta ($conn, $numeroConta) {
            $sql3 = "INSERT INTO $numeroConta (SALDO, SAQUE, DEPOSITO, NOVOSALDO, DIA) VALUES (?,?,?,?, NOW());";
            $stmt = $conn->prepare($sql3);
            if ($this->getTipo() == "corrente") {
                $bonus = 500;
            } elseif ($this->getTipo() == "poupanca") {
                $bonus = 1000;
            } else {
                $bonus = 0;
            }
            $stmt->BindValue(1, 0);
            $stmt->BindValue(2, 0);
            $stmt->BindValue(3, $bonus);
            $stmt->Bindvalue(4, $bonus);
            $stmt->execute();
        }

        //----------------
        //Getters e setters

        public function getNome()
        {
                return $this->nome;
        }

        public function setNome($nome)
        {
                $this->nome = $nome;

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

        public function getTipo()
        {
                return $this->tipo;
        }

        public function setTipo($tipo)
        {
                $this->tipo = $tipo;

                return $this;
        }
        public function getNumeroConta()
        {
                return $this->numeroConta;
        }

        public function setNumeroConta()
        {
                $this->numeroConta = rand(10000, 99999);
                return $this;
        }
    }

?>