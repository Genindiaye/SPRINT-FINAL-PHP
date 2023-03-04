<?php
        $host="localhost";
        $user="root";
        $password="";
        $dbname="chambre";
        $conn=mysqli_connect($host,$user,$password,$dbname);
        if(!$conn){
            die("Erreur de connection à la base, ".mysqli_connect_error());
        }
    ?>
    
