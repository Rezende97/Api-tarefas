<?php
 
    namespace App\Controllers;

    use App\Helpers\Header;

    class Home
    {
        public function index()
        {
            
            $header['status']   = 'Sucesso teste';
            $header['request'] = $_SERVER['REQUEST_METHOD'];
            $header['msg']     = 'metodo api GET';
            $header['data'] = $_GET;

            Header::http_json($header);
        }

        public function show()
        {

            $header['status']   = 'Sucesso';
            $header['request'] = $_SERVER['REQUEST_METHOD'];
            $header['msg']     = 'metodo api POST';
            $header['body'] = $_POST;
            
            Header::http_json($header);
        }

        public function update($id)
        {
            $header['status']   = 'Sucesso TESTE';
            $header['request'] = $_SERVER['REQUEST_METHOD'];
            $header['msg']     = 'metodo API PUT';
            $header['body'] = $_REQUEST;
            
            Header::http_json($header);
        }

        public function delete($id)
        {
            $header['status']   = 'Sucesso';
            $header['request'] = $_SERVER['REQUEST_METHOD'];
            $header['msg']     = 'metodo API DELETE';
            $header['body'] = $_REQUEST;
            
            Header::http_json($header);
        }
        
    }