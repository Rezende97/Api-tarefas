<?php

    namespace App\Config;

    use PDO;

    abstract class Database
    {
        protected $connection;

        protected $host     = 'localhost';

        protected $user     = 'root';

        protected $pass     = '';

        protected $database = 'tarefas';

        private function conn()
        {
            try {

                $this->conexao = new PDO("mysql: host=".$this->host.";dbname=".$this->database.";", $this->user, $this->pass);
                $this->conexao->exec("set character set utf8");
                $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            } catch (\PDOException $error) {
                
                $this->erro = "Mensagem do Erro: " .$error->getMessage() .PHP_EOL;
                $this->erro .= "Arquivo do Erro: " .$error->getFile() .PHP_EOL;
                $this->erro .= "Linha do Erro: " .$error->getLine() .PHP_EOL;

                echo $this->erro;
            }
          
            return $this->conexao;
        }

        public function connection()
        {
            return $this->conn();
        }

    }