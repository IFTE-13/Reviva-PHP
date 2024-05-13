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

    function showAllUsers($connection){
        $sqlQuery="SELECT * FROM user WHERE role='customer'";
        $result = $connection->query($sqlQuery);
        return $result;
    }

    function showAllRiders($connection){
        $sqlQuery="SELECT * FROM user WHERE role='rider'";
        $result = $connection->query($sqlQuery);
        return $result;
    }

    function showAllManagers($connection){
        $sqlQuery="SELECT * FROM user WHERE role='manager'";
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

    function registerRider($connection, $username, $email, $address, $phone, $name)
    {
        $sqlQuery = "INSERT INTO user (username, name, email, password, role, address, phone) VALUES ('$username', '$name', '$email', '00000000', 'rider', '$address', '$phone')";
        $result = $connection->query($sqlQuery);
        return $result;
    }

    function registerManager($connection, $username, $email, $address, $phone, $name)
    {
        $sqlQuery = "INSERT INTO user (username, name, email, password, role, address, phone) VALUES ('$username', '$name', '$email', '00000000', 'manager', '$address', '$phone')";
        $result = $connection->query($sqlQuery);
        return $result;
    }

    function registerWorker($connection, $username, $email, $address, $phone, $name)
    {
        $sqlQuery = "INSERT INTO user (username, name, email, password, role, address, phone) VALUES ('$username', '$name', '$email', '00000000', 'worker', '$address', '$phone')";
        $result = $connection->query($sqlQuery);
        return $result;
    }

    function addNewService($connection, $name, $price, $description)
    {
        $sqlQuery = "INSERT INTO service (name, price, description) VALUES ('$name', '$price', '$description')";
        $result = $connection->query($sqlQuery);
        return $result;
    }

    function closeConnection($connection)
    {
        $connection -> close();
    }
}        
?>