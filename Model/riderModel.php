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

    function showPickUpProduct($connection){
        $sqlQuery="SELECT * FROM product where status = 'requested'";
        $result = $connection->query($sqlQuery);
        return $result;
    }

    function confirmPickUpProduct($connection, $productID, $riderID){
        $sqlQuery="UPDATE product SET status = 'confirmPickUp', riderID = $riderID WHERE id = $productID";
        $result = $connection->query($sqlQuery);
        return $result;
    }

    function riderConfirms($connection, $productID){
        $sqlQuery="UPDATE product SET status = 'picked' WHERE id = $productID";
        $result = $connection->query($sqlQuery);
        return $result;
    }

    function showConfirmPickUpProduct($connection, $riderID){
        $sqlQuery="SELECT * FROM product where riderID = $riderID";
        $result = $connection->query($sqlQuery);
        return $result;
    }

    function closeConnection($connection)
    {
        $connection -> close();
    }
}        
?>