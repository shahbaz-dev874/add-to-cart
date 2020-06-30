<?php

     $host = "localhost";
     $username = "root";
     $password = "";
     $dbname = "addToCartDb";

     $con = mysqli_connect($host,$username,$password,$dbname);
     if( mysqli_connect_errno() ){
         die("Db connection error");
     }

    // class Database {

    //     private $host = "localhost";
    //     private $username = "roots";
    //     private $password = "";
    //     private $dbname = "addToCartDb";

    //     public function __constructor(){
    //         dbConnection();
    //     }

    //     public function dbConnection(){
    //         $con = mysqli_connect($host,$username,$password,$dbname);
    //         if( mysqli_connect_errno() ){
    //             die("Db connection error");
    //         }
    //     }

    //     public function check(){
    //         echo "db class";
    //     }


    // }