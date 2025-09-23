<?php
    include($_SERVER['DOCUMENT_ROOT'] ."/PCFixer/Model/userModel.php");

    $registrationError = "";

    $connection= new databaseConnection();
    $connectionObject=$connection->openConnection();

    if(isset($_POST['userRegistration'])){

        if($_REQUEST["password"] === $_REQUEST["confirmPassword"]){
            $results = $connection->registerUser($connectionObject, $_REQUEST["username"] , $_REQUEST["email"] ,$_REQUEST["password"]);
        } else{
            $registrationError = "passwords don't match";
        }

        if($results==TRUE){
        header("Location: http://localhost/PCFixer/View/login.php");
        }
        else{
            $registrationError = "registration failed";
        }
    }

    $connection->closeConnection($connectionObject);
?>