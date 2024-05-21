<?php
    include($_SERVER['DOCUMENT_ROOT'] ."/fixit/Model/workerModel.php");

    session_start();

    $connection= new databaseConnection();
    $connectionObject=$connection->openConnection();

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

    if(isset($_REQUEST["updateDeliveryDate"])){
        $updateDeliveryInformation = $connection->updateDeliveryDate($connectionObject, $_REQUEST["deliveryDate"], $_REQUEST["requestID"]);
        if($updateDeliveryInformation === TRUE){
            header("Refresh:0");
        }
           
    }
    
    $connection->closeConnection($connectionObject);
    
?>

   