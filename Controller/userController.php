<?php
    include($_SERVER['DOCUMENT_ROOT'] ."/fixit/Model/userModel.php");

    session_start();

    $connection= new databaseConnection();
    $connectionObject=$connection->openConnection();

    $updateInformation = '';
    $serviceRequest = '';

    if(isset($_POST["userLogin"])){
        

        if(empty($_REQUEST["username"])) {
        //$loginError = 'Fill up email';

        } elseif (empty($_REQUEST["password"])) {

            //$loginError = 'Please input your password';

        } else {
            $result=$connection->userLogin($connectionObject, $_REQUEST["username"], $_REQUEST["password"]);
            if($result->num_rows > 0){
                $userData=$connection->showUserByUsername($connectionObject, $_REQUEST["username"]);
                if($userData->num_rows > 0){
                    while($myrow = $userData->fetch_assoc())
                        {   
                            $_SESSION['id'] = $myrow['id'];
                            $_SESSION['username'] = $myrow['username'];
                            $_SESSION['name'] = $myrow['name'];
                            $_SESSION['email'] = $myrow['email'];
                            $_SESSION['role'] = $myrow['role'];
                            if($myrow['phone'] === NULL){
                                $_SESSION['phone'] = "";
                            } else {
                                $_SESSION['phone'] = $myrow['phone'];
                            }
                            if($myrow['address'] === NULL){
                                $_SESSION['address'] = "";
                            } else {
                                $_SESSION['address'] = $myrow['address'];
                            }
                        }
                }
                if($_SESSION['role'] === 'customer'){
                    header("Location: http://localhost/fixit/View/User/index.php");
                } elseif ($_SESSION['role'] === 'admin') {
                    header("Location: http://localhost/fixit/View/Admin/user.php");
                }
            }
        }
           
    }

    if(isset($_POST["updateUserInformation"])){
        $userPhoneNo = '';
        $userAddress = '';

        if(empty($_REQUEST["phone"])) {
            $userPhoneNo = '';
        } 

        if (empty($_REQUEST["address"])) {
            $userAddress = '';
        } 

        $userPhoneNo = $_REQUEST["phone"];
        $userAddress = $_REQUEST["address"];

        $updateUserInfromation=$connection->updateUserInformation($connectionObject, $_SESSION["username"], $_REQUEST["name"], $_REQUEST["email"], $userPhoneNo, $userAddress);
        if($updateUserInfromation === TRUE){
            $_SESSION['name'] = $_REQUEST['name'];
            $_SESSION['email'] = $_REQUEST['email'];
            $_SESSION['phone'] = $userPhoneNo;
            $_SESSION['address'] = $userAddress;
            $updateInformation = "Information Updated";

        }
           
    }

    if(isset($_POST["updateUserPassword"])){

        if(empty($_REQUEST["password"]) | empty($_REQUEST["confirmPassword"])) {
            $updatePasswordError = 'Provide the same password in both fields';
        } else {
            $updateUserPassword=$connection->updateUserPassword($connectionObject, $_SESSION["username"], $_REQUEST["password"]);
            if($updateUserPassword === TRUE){
                echo '<script>alert("Password Updated")</script>';
            }
        }
    }

    if(isset($_POST["requestService"])){

        if(empty($_REQUEST["name"]) | empty($_REQUEST["description"]) | empty($_REQUEST["serviceID"]) | empty($_REQUEST["pickUp"]) | empty($_REQUEST["weight"]) | empty($_REQUEST["deliveryCharge"])) {
            $serviceRequest = 'Provide all the information';
        } else {
            $requestService=$connection->requestService($connectionObject, $_SESSION["username"], $_REQUEST["name"], $_REQUEST["description"], $_REQUEST["serviceID"], $_REQUEST["pickUp"], $_REQUEST["weight"], $_REQUEST["deliveryCharge"]) ;
            if($requestService === TRUE){
                echo '<script>alert("Request Submitted")</script>';
            }
        }
    }
    
    $service = "";
    $serviceData = $connection->showAllService($connectionObject);
    
    if($serviceData->num_rows > 0){
        $service = $serviceData;      
    }
    
    $connection->closeConnection($connectionObject);
    
?>

   