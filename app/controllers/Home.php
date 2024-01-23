<?php

    class Home extends Controller{

        public function index ($nama = "ian", $hobi = "menyanyi")
        {
            $this->view ("Home/index");
            }

            public function login ($nama = "", $hari =""){

            
            echo "Hallo";
        }
    }