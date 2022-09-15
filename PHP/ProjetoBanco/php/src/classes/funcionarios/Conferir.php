<?php

    //requerimento
    require_once 'Conexao3.php';

    //------------------------
    //classe
    class Conferir {

        //atributos
        private string $usuario;
        private string $senha;

        //-------------------
        //construtor

        function __construct(string $user, string $senha)
        {
            $this->setUsuario(strtoupper($user));
            $this->setSenha(strtoupper($senha));
        }

        //----------------
        //metodos da classe

        public function conferirCargo()
        {
            $conn = new Conexao3();
            $conn->conexao();

            $sql = "SELECT * FROM funcionarios WHERE USER = :USER AND SENHA = :SENHA;";
            $this->prepararL($conn->conexao(), $sql, $this->getUsuario(), $this->getSenha());
        }

        private function prepararL($conexao, $sql, $user, $senha)
        {
            if ($user == 'null' || $senha == 'null') {
                echo "Algum dado não foi inserido";
            } else {
                $stmt = $conexao->prepare($sql);
                $stmt->BindValue(":USER", $user);
                $stmt->BindValue(":SENHA", $senha);
                $stmt->execute();
                $consulta = $stmt->fetchAll();
                $this->conferir($consulta);
            }
        }

        private function conferir($consulta) {
            foreach ($consulta as $conferencia) {
                $userConferido = strtoupper($conferencia['USER']);
                $senhaConferida = strtoupper($conferencia['SENHA']);
                $cargoConferido = strtoupper($conferencia['CARGO']);
                if ($userConferido == $this->getUsuario() && $senhaConferida == $this->getSenha()) {
                    if ($cargoConferido == 'ATENDENTE') {
                        header('Location: ../funcionarios/verExtrato.php');
                        die();
                    } elseif ($cargoConferido == 'GERENTECONTA') {
                        header('Location: ../clientes/admConta.php');
                        die();
                    } else {
                        header('Location: ../funcionarios/administrar.php');
                        die();
                    }
                } else {
                    echo "Credenciais incorretas";
                }
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
    }

?>