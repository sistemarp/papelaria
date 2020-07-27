<?php
session_start();
include_once("../_mysql/conect.php");

error_reporting(E_ALL);
ini_set('display_errors', 1);    

class configSession{
    public function start($user){
        try{
            // Sessão criada com dados recebidos do banco de dados!
            $_SESSION["user_full_name"] = $user["usuario_full_name"];
            $_SESSION["user_first_name"] = $user["usuario_first_name"];
            $_SESSION["user_pass"] = $user["usuario_pass"];
            $_SESSION["user_email"] = $user["usuario_email"];
            $_SESSION["user_phone"] = $user["usuario_phone"];
            $_SESSION["user_cep"] = $user["usuario_cep"];
            $_SESSION["user_rua"] = $user["usuario_rua"];
            $_SESSION["user_bairro"] = $user["usuario_bairro"];
            $_SESSION["user_numero"] = $user["usuario_numero"];
            $_SESSION["user_token"] = $user["usuario_token"];
            $_SESSION["user_data"] = $user["usuario_data_create"];
            $_SESSION['data'] = $user;
            return true;
        }catch(Exception $e){
            return false;
        }
    }

    public function insertSession($user){
        $con = $this->connect_db();

        $query = $con->prepare("INSERT INTO sessions (sessions_user, sessions_token, sessions_status) 
                                                        VALUES(:usToken, :ssToken, '1')");
        $newToken = sha1($user["usuario_token"].time());
        $query->bindValue(":usToken", $user["usuario_token"]);
        $query->bindValue(":ssToken", $newToken);
        $query->execute();

        $state = $query->errorInfo();

        if($state[0] == 0){
            $_SESSION["user_session_token"] = $newToken;
            return true;
        }else{
            return false;
        }
    }

    public function logoutUser(){
        $con = $this->connect_db();

        $query = $con->prepare("DELETE FROM sessions WHERE BINARY sessions_token = :token");
        $query->bindValue(":token", $_SESSION["user_session_token"]);
        $query->execute();

        if($query->rowCount() > 0){
            session_destroy();
            return true;
        }else{
            return false;
        }
    }

    public function connect_db(){
        $banco = new startDB();
        $start = $banco->start();
        return $start["db_con"];
    }
}

?>