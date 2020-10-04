<?php
    class Usuario extends Model{
        public function login(){
            $array = array();

            if(isset($_POST['email']) && !empty($_POST['email'])){
                $email = addslashes($_POST['email']);

                $sql = "SELECT * FROM `usuarios` WHERE `email` = '$email'";
                $sql = $this->connect->query($sql);

                if($sql->rowCount() > 0){
                    $array = $sql->fetch();
                }                
            }

            return $array; 
        }
    }
?>