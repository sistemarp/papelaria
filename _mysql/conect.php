<?php

class startDB{
    public function start(){
        try{
            $host = "localhost";
            $user = "sistemarp";
            $pass = "SistemArp";
            $dbnm = "db_papelaria";

            $conexao = new PDO("mysql:dbname=".$dbnm.";host=".$host, $user, $pass);
            //Devolvendo array
            $resp_status["db_status"] = true; //Status da conexão se realizado sem erro
            $resp_status["db_con"] = $conexao; //A instancia da conexão
            $resp_status["db_mensagen"] = "Conexão com o banco de dados, realizada com sucesso!"; //mensagem de sucesso!
            $resp_status["db_error_info"] = $conexao->errorInfo();

            return $resp_status;
        }catch (PDOException $e){
            $resp_status["db_status"] = false; //Status da conexão se ouver falha
            $resp_status["db_mensagen"] = "Falha ao realizar conexão com o banco, contate um administador!"; //mensagem de erro!

            return $resp_status;            
        }
    }
}


?>