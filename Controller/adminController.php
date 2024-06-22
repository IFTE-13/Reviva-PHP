<?php
    include($_SERVER['DOCUMENT_ROOT'] ."/fixit/Model/adminModel.php");

    session_start();

    $connection= new databaseConnection();
    $connectionObject=$connection->openConnection();
    
    $users = "";
    $usersData = $connection->showAllUsers($connectionObject);
    
    if($usersData->num_rows > 0){
        $users = $usersData;      
    }

    $riders = "";
    $rdersData = $connection->showAllRiders($connectionObject);
    
    if($rdersData->num_rows > 0){
        $riders = $rdersData;      
    }

    $workers = "";
    $workersData = $connection->showAllWorkers($connectionObject);
    
    if($workersData->num_rows > 0){
        $workers = $workersData;      
    }

    $services = "";
    $servicesData = $connection->showAllServices($connectionObject);
    
    if($servicesData->num_rows > 0){
        $services = $servicesData;      
    }

    $feedbacks = "";
    $feedbackssData = $connection->showAllFeedbacks($connectionObject);
    
    if($feedbackssData->num_rows > 0){
        $feedbacks = $feedbackssData;      
    }

    $transactions = "";
    $transactionsData = $connection->showAllTransactions($connectionObject);
    
    if($transactionsData->num_rows > 0){
        $transactions = $transactionsData;      
    }

    $serviceRequest = "";
    $serviceRequestData = $connection->showAllServiceRequest($connectionObject);
    
    if($serviceRequestData->num_rows > 0){
        $serviceRequest = $serviceRequestData;      
    }


    $registrationRiderError = "";
    if(isset($_POST["newRider"])){
        if(empty($_REQUEST["username"]) | empty($_REQUEST["email"]) | empty($_REQUEST["address"]) | empty($_REQUEST["phone"]) | empty($_REQUEST["name"])) {
            $registrationRiderError = "Please input all the fields";
        } else {
            $result = $connection->registerRider($connectionObject, $_REQUEST["username"], $_REQUEST["email"], $_REQUEST["address"],$_REQUEST["phone"], $_REQUEST["name"]);
            if($result == TRUE){
                header("Refresh:0");
                $registrationRiderError = "";
            } else {
                $registrationRiderError = "Error, couldn't add new rider";
            }
        }  
    }

    $registrationWorkerError = "";
    if(isset($_POST["newWorker"])){
        if(empty($_REQUEST["username"]) | empty($_REQUEST["email"]) | empty($_REQUEST["address"]) | empty($_REQUEST["phone"]) | empty($_REQUEST["name"])) {
            $registrationWorkerError = "Please input all the fields";
        } else {
            $result = $connection->registerWorker($connectionObject, $_REQUEST["username"], $_REQUEST["email"], $_REQUEST["address"],$_REQUEST["phone"], $_REQUEST["name"]);
            if($result == TRUE){
                header("Refresh:0");
                $registrationWorkerError = "";
            } else {
                $registrationWorkerError = "Error, couldn't add new worker";
            }
        }  
    }

    $addServiceError = "";
    if(isset($_POST["newService"])){
        if(empty($_REQUEST["name"]) | empty($_REQUEST["price"]) | empty($_REQUEST["description"])) {
            $addServiceError = "Please input all the fields";
        } else {
            $result = $connection->addNewService($connectionObject, $_REQUEST["name"], $_REQUEST["price"], $_REQUEST["description"]);
            if($result == TRUE){
                header("Refresh:0");
                $addServiceError = "";
            } else {
                $addServiceError = "Error, couldn't add new service";
            }
        }  
    }
    
    $connection->closeConnection($connectionObject);
    
?>

   