<?php
    include($_SERVER['DOCUMENT_ROOT'] ."/fixit/Model/riderModel.php");

    session_start();

    $connection = new databaseConnection();
    $connectionObject = $connection->openConnection();

    $requestedService = "";
    $requestedServiceData = $connection->showRequestedService($connectionObject);
    
    if($requestedServiceData->num_rows > 0){
        $requestedService = $requestedServiceData;      
    }

    
    if(isset($_REQUEST["confirmPickUp"])){
        $confirmDeliveryId = intval($_REQUEST["confirmPickUp"]);
        $confirmDelivery = $connection->moveToInventory($connectionObject, $confirmDeliveryId, $_SESSION['id']);
        if($confirmDelivery === TRUE){
            header("Refresh:0");
        }
            
    }

    $inventoryProduct = "";
    $inventoryProductData = $connection->showInventoryProduct($connectionObject, $_SESSION['id']);
    
    if($inventoryProductData->num_rows > 0){
        $inventoryProduct = $inventoryProductData;      
    }

    if(isset($_REQUEST["returnProduct"])){
        $confirmDeliveryId = intval($_REQUEST["returnProduct"]);
        $confirmDelivery = $connection->returnProduct($connectionObject, $confirmDeliveryId);
        if($confirmDelivery === TRUE){
            header("Refresh:0");
        }
           
    }

    $delivery = "";
    $deliveryData = $connection->showDeliveredProduct($connectionObject, $_SESSION['id']);
    
    if($deliveryData->num_rows > 0){
        $delivery = $deliveryData;      
    }    

    $connection->closeConnection($connectionObject);

?>