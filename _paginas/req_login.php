<?php 

    if(isset($_POST["status"])){

        include_once("../_mysql/conect.php");

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
                include_once("sessions.php");

                $user_db = $query->fetch();                
                $sessao = new configSession();

                if($sessao->insertSession($user_db)){
                    $resp_start = $sessao->start($user_db);
                    $resp["status"] = true;
                    $resp["mensagen"] = "Sejá bem vindo ".$_SESSION["user_first_name"];
                }else{
                    $resp["status"] = false;
                    $resp["mensagen"] = "Usuario já está logando em outro aparelho! <br><a href='_paginas/logout.php'>Clique Aqui</a> Para desloga-lo";
                }
                echo json_encode($resp);                
            }else{
                $resp["status"] = false;
                echo $resp;
            }
        }
    }else{
        header("Location: ../index.php");
        exit();
    }
    




?>