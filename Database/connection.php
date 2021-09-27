<?php
    //PDO -- for security
    $host = 'localhost';  //or ip 127.0.0.1
    $db = 'door-step_db';
    $user = 'root';   //as a user
    $pass = '';   //password
    $charset = 'utf8mb4';  
    $dsn = "mysql:host=$host;dbname=$db;chartset=$charset";
    try{
        $pdo = new PDO($dsn,$user,$pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
     }
        catch(PDOException $e){
            //echo "<h1 class='text-danger'>No DataBase Found</h1>";
            throw new PDOException($e->getMessage());

        }
        require_once 'crud.php';
        $crud = new crud($pdo);
?>