<?php
    class anunciosController{
        public function index(){
            header("Location: ".BASE_URL."/anuncios/publicados");
        }

        public function publicados(){
            echo "AP";
        }
    }
?>