<?php
    include($_SERVER['DOCUMENT_ROOT'] ."/fixit/Model/riderModel.php");

    session_start();

    $connection = new databaseConnection();
    $connectionObject = $connection->openConnection();

    $pickUp = "";
    $pickUpData = $connection->showPickUpProduct($connectionObject);
    
    if($pickUpData->num_rows > 0){
        $pickUp = $pickUpData;      
    }

    if(isset($_REQUEST["confirmDelivery"])){
        $confirmDeliveryId = intval($_REQUEST["confirmDelivery"]);
        $confirmDelivery = $connection->confirmPickUpProduct($connectionObject, $confirmDeliveryId, $_SESSION['id']);
        if($confirmDelivery === TRUE){
            header("Refresh:0");
        }
           
    }

    $confirmPickUp = "";
    $confirmPickUpData = $connection->showConfirmPickUpProduct($connectionObject, $_SESSION['id']);
    
    if($confirmPickUpData->num_rows > 0){
        $confirmPickUp = $confirmPickUpData;      
    }
    

    $connection->closeConnection($connectionObject);

?>