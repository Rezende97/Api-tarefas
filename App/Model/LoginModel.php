<?php

    namespace App\Model;

    use App\Config\Database;

    class LoginModel extends Database
    {
        protected $sql = null;

        protected $query = '';

        protected $consulta = null;

        public function acesso($email)
        {
            $this->sql    = "SELECT name_user, password_user, active FROM users WHERE email   = '$email'";
            $this->query  = parent::connection()->query($this->sql);
            $this->query->execute();

            $this->consulta = parent::fetch($this->query);

            return $this->consulta;

        }


    }