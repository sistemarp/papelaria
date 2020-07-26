<?php 

    if(isset($_POST["status"])){

        include_once("../_mysql/conect.php");
        include_once("sessions.php");

        $banco = new startDB();
        $start = $banco->start();

        if($start["db_status"]){
            $con = $start["db_con"];
            
            $senha = $_POST["txt_passw"];

            $query = $con->prepare("SELECT * FROM usuario WHERE BINARY usuario_email = :email AND usuario_pass = :pass");
            $query->bindValue(":email", $_POST["txt_login"]);
            $query->bindValue(":pass", md5($_POST["txt_passw"]));
            $query->execute();

            if($query->rowCount() > 0){
                $sessao = new configSession();
                $resp_session = $sessao->start($query->fetch());
                $resp_session;
                echo $_SESSION["user_session_token"];
            }else{
                echo false;
            }
        }
    }else{
        header("Location: ../index.php");
        exit();
    }
    




?>