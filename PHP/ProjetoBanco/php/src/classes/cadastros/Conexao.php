<?php

    class Conexao {
        
        //atributos
        private string $servidor;
        private string $bancodados;
        private string $root;
        private string $senha;

        //--------------------
        //construtor

        function __construct()
        {
            $this->setServidor("localhost");
            $this->setBancodados("projetobancophp");
            $this->setRoot("root");
            $this->setSenha("");
        }

        //-----------------------
        //metodo da classe
        
        public function conexao()
        {
            try {
                $conn = new PDO("mysql:host={$this->getServidor()};dbname={$this->getBancodados()}", $this->getRoot(), $this->getSenha());
                return $conn;
            } catch (PDOException $pe) {
                die("Não foi possível se conectar ao banco de dados {$this->getBancodados()}, erro:" . $pe->getMessage());
            }
        }

        //-------------------
        //getters e setters

        public function getServidor()
        {
                return $this->servidor;
        }

        public function setServidor($servidor)
        {
                $this->servidor = $servidor;

                return $this;
        }

        public function getBancodados()
        {
                return $this->bancodados;
        }

        public function setBancodados($bancodados)
        {
                $this->bancodados = $bancodados;

                return $this;
        }

        public function getRoot()
        {
                return $this->root;
        }

        public function setRoot($root)
        {
                $this->root = $root;

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