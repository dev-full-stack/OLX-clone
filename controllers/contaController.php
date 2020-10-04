<?php
    class contaController extends Controller{
        public function index(){
            $dados = array();
            $this->loadTemplate('minha_conta', $dados);
        }
    }
?>