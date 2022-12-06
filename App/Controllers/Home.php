<?php
 
    namespace App\Controllers;

    use App\Factory\Header;

    class Home
    {
        public function index()
        {
            
            $header['status']   = 'Sucesso teste';
            $header['informa'] = $_SERVER['REQUEST_METHOD'];
            $header['msg']     = 'metodo api GET';
            $header['data'] = $_GET;

            $cabecalho = new Header;
            $cabecalho::http_json($header);

        }

        public function show()
        {

            $header['status']   = 'Sucesso';
            $header['informa'] = $_SERVER['REQUEST_METHOD'];
            $header['msg']     = 'metodo api POST';
            $header['body'] = $_POST;
            
            $cabecalho = new Header;
            $cabecalho::http_json($header);
        }

        public function update()
        {
            $header['status']   = 'Sucesso TESTE';
            $header['informa'] = $_SERVER['REQUEST_METHOD'];
            $header['msg']     = 'metodo API PUT';
            $header['body'] = $_REQUEST;
            
            $cabecalho = new Header;
            $cabecalho::http_json($header);
        }

        public function delete($id)
        {
            $header['status']   = 'Sucesso';
            $header['informa'] = $_SERVER['REQUEST_METHOD'];
            $header['msg']     = 'metodo API DELETE';
            $header['body'] = $_REQUEST;
            
            $cabecalho = new Header;
            $cabecalho::http_json($header);
        }
        
    }