<?php
    class searchController extends Controller{
        public function index(){
            if(isset($_GET['search'])){
                echo $_GET['search'];
            }
        }
    }
?>