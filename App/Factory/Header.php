<?php

    namespace App\Factory;

    class Header
    {
        protected $header;

        public static function http_json($header)
        {
            header("Content-type: application/json");
            echo json_encode($header, JSON_UNESCAPED_UNICODE);
        }
    }