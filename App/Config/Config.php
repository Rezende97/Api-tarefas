<?php

    namespace App\Config;

    class Config
    {
        protected static $url;

        public static function url()
        {
            self::$url = "http://localhost/Projetos-pessoal/projetos-back-end/Api-tarefas/";

            return self::$url;
        }
    }
