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

    function showAllTransactions($connection){
        $sqlQuery="SELECT * FROM transaction";
        $result = $connection->query($sqlQuery);
        return $result;
    }

    function showAllServiceRequest($connection){
        $sqlQuery="SELECT * FROM product where status = 'inventory'";
        $result = $connection->query($sqlQuery);
        return $result;
    }

    function updateDeliveryDate($connection, $deliveryDate, $id){
        $sqlQuery = "UPDATE product SET deliveryDate = '$deliveryDate' WHERE id = $id";
        $result = $connection->query($sqlQuery);
        return $result;
    }

    function closeConnection($connection)
    {
        $connection -> close();
    }
}        
?>