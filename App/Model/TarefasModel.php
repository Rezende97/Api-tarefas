<?php

    namespace App\Model;

    use App\Config\Database;

    class TarefasModel extends Database
    {
        public function showTarefas($id)
        {
            $sql = "SELECT 
                agenda.nome_da_tarefa, 
                agenda.motivo, 
                agenda.tarefa, 
                agenda.data_horario
            FROM 
                agenda 
            WHERE 
                agenda.id_users = $id";
            
            $query = parent::connection()->query($sql);
            $query->execute();

            $row = parent::fetchAll($query);

            return $row;
        }
    }