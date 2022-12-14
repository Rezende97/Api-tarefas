<?php

    namespace App\Controllers;

    session_start();

    use App\Model\TarefasModel;
    use App\Helpers\Header;

    class Tarefas
    {
        protected $tarefa       = '';

        protected $motivo       = '';

        protected $description  = '';

        public function show()
        {            
            $data['error'] = false;            
            
            $tarefa = new TarefasModel;
            $data['tarefas'] = $tarefa->showTarefas($_GET['id']);
            
            echo Header::http_json($data);
        }

        public function tarefasDiarias()
        {
            var_dump($_SESSION);
            var_dump($_POST);
        }
    }