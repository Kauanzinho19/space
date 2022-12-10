<?php

class Usuario{


    public function login($email , $senha){
 

        global $pdo;

        $sql = "SELECT * FROM usuario  WHERE email = :email AND senha = :senha";
        $sql = $pdo->prepare($sql);
        $sql->bindvalue("email", $email);
        $sql->bindvalue("senha", $senha);
        $sql->execute();


        if($sql->rowCount() > 0){


            $dado = $sql->fetch();

            echo $dado['nome'];
        }

    }


}






?>