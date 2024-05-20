<?php
    include($_SERVER['DOCUMENT_ROOT'] ."/fixit/Model/managerModel.php");

    session_start();

    $connection= new databaseConnection();
    $connectionObject=$connection->openConnection();

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
    
    $connection->closeConnection($connectionObject);
    
?>

   