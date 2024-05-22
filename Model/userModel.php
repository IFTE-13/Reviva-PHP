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

    function registerUser($connection, $username, $email, $password)
    {
        $sqlQuery = "INSERT INTO user (username, name, email, password, role) VALUES ('$username', '$username', '$email', '$password', 'customer')";
        $result = $connection->query($sqlQuery);
        return $result;
    }

    function userLogin($connection, $username, $password){
        $result = $connection->query("SELECT * FROM user WHERE username='". $username."' AND password='". $password."'");
        return $result;
    }

    function showUserByUsername($connection, $username){
        $sqlQuery="SELECT * FROM user where username='$username'";
        $result = $connection->query($sqlQuery);
        return $result;
    }

    function showAllRequestedService($connection, $username){
        $sqlQuery="SELECT * FROM product where username = '$username'";
        $result = $connection->query($sqlQuery);
        return $result;
    }

    function showAllService($connection){
        $sqlQuery="SELECT * FROM service";
        $result = $connection->query($sqlQuery);
        return $result;
    }

    function updateUserInformation($connection, $username, $name, $email, $phone, $address){
        $sqlQuery = "UPDATE user SET name='$name', email='$email', phone='$phone',address='$address' WHERE username = '$username'";
        $result = $connection->query($sqlQuery);
        return $result;
    }

    function updateUserPassword($connection, $username, $password){
        $sqlQuery = "UPDATE user SET password='$password'WHERE username = '$username'";
        $result = $connection->query($sqlQuery);
        return $result;
    }

    function requestService($connection, $username, $name, $description, $serviceID, $pickUp, $weight, $deliveryCharge, $total){
        $sqlQuery = "INSERT INTO product (username, name, description, serviceID, pickupDate, weight, deliveryCharge, total, status) VALUES ('$username', '$name', '$description', '$serviceID', '$pickUp', '$weight', '$deliveryCharge', '$total', 'requested')";
        $result = $connection->query($sqlQuery);
        return $result;
    }

    function showUserTransaction($connection, $id){
        $sqlQuery = "SELECT * FROM transaction where userID = $id";
        $result = $connection->query($sqlQuery);
        return $result;
    }

    function addTransaction($connection, $date, $amount, $userID){
        $sqlQuery = "INSERT INTO transaction (date, amount, userID) VALUES ('$date', '$amount', $userID)";
        $result = $connection->query($sqlQuery);
        return $result;
    }

    function closeConnection($connection)
    {
        $connection -> close();
    }
}        
?>