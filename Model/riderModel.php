<?php
class databaseConnection{

    function openConnection(){
        $dataBaseHost = 'localhost';
        $dataBaseUser = 'root';
        $dataBasePass = '';
        $dataBase = 'PCFixr';

        $connection = new mysqli($dataBaseHost, $dataBaseUser, $dataBasePass, $dataBase);

        if($connection->connect_error)
        {
            echo "error setting connection";
        }
        return $connection;
    }

    function showRequestedService($connection){
        $sqlQuery="SELECT * FROM product where status = 'requested'";
        $result = $connection->query($sqlQuery);
        return $result;
    }

    function moveToInventory($connection, $productID, $riderID){
        $sqlQuery="UPDATE product SET status = 'inventory', riderID = $riderID WHERE id = $productID";
        $result = $connection->query($sqlQuery);
        return $result;
    }


    function showInventoryProduct($connection){
        $sqlQuery="SELECT * FROM product where status = 'inventory' and deliveryDate IS NOT NULL";
        $result = $connection->query($sqlQuery);
        return $result;
    }

    function returnProduct($connection, $productID){
        $sqlQuery="UPDATE product SET status = 'delivered' WHERE id = $productID";
        $result = $connection->query($sqlQuery);
        return $result;
    }

    function showDeliveredProduct($connection, $riderID){
        $sqlQuery="SELECT * FROM product where status = 'delivered' and riderID = $riderID";
        $result = $connection->query($sqlQuery);
        return $result;
    }

    function closeConnection($connection)
    {
        $connection -> close();
    }
}        
?>