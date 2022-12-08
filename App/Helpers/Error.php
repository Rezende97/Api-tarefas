<?php

    namespace App\Helpers;

    class Error
    {
        public function checkMethod($method)
        {
            $data['error'] = false;

            if ($_SERVER['REQUEST_METHOD'] !=  "$method") {
                $data['error']  = true;
                $data['msg']    = "Requisição negada!";
            }

            return $data;
        }
    }