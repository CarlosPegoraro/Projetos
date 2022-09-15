<?php

    //requerimento
    require_once 'Conexao.php';

    //------------------------
    //classe
    class CadastroCliente {

        //atributos
        private string $usuario;
        private string $senha;
        private string $senhaR;

        //-------------------
        //construtor

        function __construct(string $user, string $senha, string $senhaR)
        {
            $this->setUsuario(strtoupper($user));
            $this->setSenha(strtoupper($senha));
            $this->setSenhaR(strtoupper($senhaR));
        }

        //----------------
        //metodos da classe

        public function insercao()
        {
            $conn = new Conexao();
            $conn->conexao();
            if ($this->getSenha() === $this->getSenhaR()) {
                $sql = "INSERT INTO clientes (USER, SENHA) VALUES (?,?)";
                $this->prepararR($conn->conexao(), $sql, $this->getUsuario(), $this->getSenha());
            } else {
                echo "As senhas nao sao iguais";
            }
            
        }

        private function prepararR($conexao, $sql, $user, $senha)
        {
            if ($user == 'null' || $senha == 'null') {
                echo "Algum dado não foi inserido";
            } else {
                $stmt = $conexao->prepare($sql);
                $stmt->BindValue(1, $user);
                $stmt->BindValue(2, $senha);
                $stmt->execute();
            }
        }

        //----------------
        //Getters e setters

        public function getUsuario()
        {
                return $this->usuario;
        }

        public function setUsuario($usuario)
        {
                $this->usuario = $usuario;

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
        public function getSenhaR()
        {
                return $this->senhaR;
        }

        public function setSenhaR($senhaR)
        {
                $this->senhaR = $senhaR;

                return $this;
        }
    }

?>