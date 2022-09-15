<?php

    //requerimento
    require_once 'Conexao3.php';

    //------------------------
    //classe
    class GerenciarFuncionario {

        //atributos
        private string $nome;
        private string $senha;
        private string $cargo;
        private string $acao;

        //-------------------
        //construtor

        function __construct(string $nome, string $senha, string $cargo, string $acao)
        {
            $this->setNome(strtoupper($nome));
            $this->setSenha(strtoupper($senha));
            $this->setCargo($cargo);
            $this->setAcao($acao);
        }

        //----------------
        //metodos da classe

        public function gerenciar()
        {
            $conn = new Conexao3();
            $conn->conexao();
            if ($this->getAcao() == 'cadastrar') {
                $sql = "INSERT INTO funcionarios (USER, SENHA, CARGO) VALUES (?,?,?);";
                $this->prepararF($conn->conexao(), $sql, $this->getNome(), $this->getSenha(), $this->getCargo());
            } else {
                $sql = "DELETE FROM funcionarios WHERE USER = ?;";
                $this->prepararD($conn->conexao(), $sql, $this->getNome());
            }
            
        }

        private function prepararF($conexao, $sql, $nome, $senha, $tipo)
        {
            if ($nome == 'null' || $senha == 'null' || $tipo == null) {
                echo "Algum dado não foi inserido";
            } else {
                $stmt = $conexao->prepare($sql);
                $stmt->BindValue(1, $nome);
                $stmt->BindValue(2, $senha);
                $stmt->Bindvalue(3, $tipo);
                $stmt->execute();
            }
        }

        private function prepararD($conexao, $sql, $nome)
        {
            if ($nome == 'null') {
                echo "Algum dado não foi inserido";
            } else {
                $stmt = $conexao->prepare($sql);
                $stmt->BindValue(1, $nome);
                $stmt->execute();
            }
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
        
        public function getCargo()
        {
                return $this->cargo;
        }

        public function setCargo($cargo)
        {
                $this->cargo = $cargo;

                return $this;
        }

        public function getAcao()
        {
                return $this->acao;
        }

        public function setAcao($acao)
        {
                $this->acao = $acao;

                return $this;
        }
    }

?>