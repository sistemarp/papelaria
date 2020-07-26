<?php
session_start();

include_once("../_mysql/conect.php");

class configSession{
    public function start($user){
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

        // Criação de tokens de sessão
        if($this->insertSession()){
            $resp["status"] = true;
            $resp["mensagen"] = "sessão iniciada com sucesso!";
            return $resp;
        }else{
            $resp["status"] = false;
            $resp["mensagen"] = "Sessão já esta iniciada!";
            return $resp;
        }
    }

    public function insertSession(){
        $banco = new startDB();
        $start = $banco->start();

        if($start["db_status"]){
            $con = $start["db_con"];
        
            $_SESSION["user_session_token"] = sha1($_SESSION["user_token"] + time());
            
            $query = $con->prepare("INSERT INTO sessions (sessions_user, sessions_token, sessions_status) 
                                                VALUES(:userToken, :token, '1')");

            $query->bindValue(":userToken", $_SESSION["user_token"]);
            $query->bindValue(":token", $_SESSION["user_session_token"]);
            $query->execute();

            if($query->errorInfo()[0] == 0){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }
}

?>