<?php

    //requerimento
    require_once 'Conexao.php';

    //------------------------
    //classe
    class ConsultarConta {

        //atributos
        private string $numeroConta;
        private string $senha;

        //-------------------
        //construtor

        function __construct(string $numeroConta, string $senha)
        {
            $this->setNumeroConta(strtoupper($numeroConta));
            $this->setSenha(strtoupper($senha));
        }

        //----------------
        //metodos da classe

        public function consultar()
        {
            $conn = new Conexao();
            $conn->conexao();
            $sql = "SELECT * FROM contas WHERE NUMCONTA = :NUMCONTA AND SENHA =:SENHA;";
            $this->prepararL($conn->conexao(), $sql, $this->getNumeroConta(), $this->getSenha());
        }

        private function prepararL($conexao, $sql, $numeroConta, $senha)
        {
            if ($numeroConta == 'null' || $senha == 'null') {
                echo "Algum dado não foi inserido";
            } else {
                $stmt = $conexao->prepare($sql);
                $stmt->BindValue(":NUMCONTA", $numeroConta);
                $stmt->BindValue(":SENHA", $senha);
                $stmt->execute();
                $consulta = $stmt->fetchAll();
                $this->conferir($consulta);
            }
        }

        private function conferir($consulta) {
            foreach ($consulta as $conferencia) {
                $numContaConferido = $conferencia['NUMCONTA'];
                $senhaConferida = $conferencia['SENHA'];
                if ($numContaConferido != $this->getNumeroConta() && $senhaConferida != $this->getSenha()) {
                    echo "Credenciais incorretas";
                }
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