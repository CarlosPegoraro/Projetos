<?php

    //requerimento
    require_once 'Conexao.php';

    //------------------------
    //classe
    class Logando {

        //atributos
        private string $usuario;
        private string $senha;
        private string $tipo;

        //-------------------
        //construtor

        function __construct(string $user, string $senha, string $tipo)
        {
            $this->setUsuario(strtoupper($user));
            $this->setSenha(strtoupper($senha));
            $this->setTipo($tipo);
        }

        //----------------
        //metodos da classe

        public function logar()
        {
            $conn = new Conexao();
            $conn->conexao();

            $sql = "SELECT * FROM {$this->getTipo()} WHERE USER = :USER AND SENHA = :SENHA;";
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
                if ($userConferido == $this->getUsuario() && $senhaConferida == $this->getSenha()) {
                    if ($this->getTipo() == 'funcionarios') {
                        header('Location: ../funcionarios/hub.php');
                        die();
                    } else {
                        header('Location: ../clientes/hub.php');
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
        
        public function getTipo()
        {
                return $this->tipo;
        }

        public function setTipo($tipo)
        {
                $this->tipo = $tipo;

                return $this;
        }
    }

?>