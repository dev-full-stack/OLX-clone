<?php
    class loginController extends Controller{
        public function index(){
            $dados = array();
            
            $u = new Usuario();
            $login = $u->login();

            $this->loadView('login', $dados);
        }
    }
?>