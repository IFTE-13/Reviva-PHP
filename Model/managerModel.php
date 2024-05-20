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

    function showAllRiders($connection){
        $sqlQuery="SELECT * FROM user WHERE role='rider'";
        $result = $connection->query($sqlQuery);
        return $result;
    }

    function showAllWorkers($connection){
        $sqlQuery="SELECT * FROM user WHERE role='worker'";
        $result = $connection->query($sqlQuery);
        return $result;
    }

    function showAllServices($connection){
        $sqlQuery="SELECT * FROM service";
        $result = $connection->query($sqlQuery);
        return $result;
    }

    function showAllFeedbacks($connection){
        $sqlQuery="SELECT * FROM feedback";
        $result = $connection->query($sqlQuery);
        return $result;
    }

    function showAllTransactions($connection){
        $sqlQuery="SELECT * FROM transaction";
        $result = $connection->query($sqlQuery);
        return $result;
    }

    function showAllServiceRequest($connection){
        $sqlQuery="SELECT * FROM product";
        $result = $connection->query($sqlQuery);
        return $result;
    }

    function closeConnection($connection)
    {
        $connection -> close();
    }
}        
?>