<?php
    include($_SERVER['DOCUMENT_ROOT'] . "/fixit/Model/userModel.php");

    session_start();

    $connection = new databaseConnection();
    $connectionObject = $connection->openConnection();

    $updateInformation = '';
    $serviceRequest = '';

    if (isset($_POST["userLogin"])) {
        if (empty($_POST["username"])) {
            //$loginError = 'Fill up email';
        } elseif (empty($_POST["password"])) {
            //$loginError = 'Please input your password';
        } else {
            $result = $connection->userLogin($connectionObject, $_POST["username"], $_POST["password"]);
            if ($result->num_rows > 0) {
                $userData = $connection->showUserByUsername($connectionObject, $_POST["username"]);
                if ($userData->num_rows > 0) {
                    while ($myrow = $userData->fetch_assoc()) {
                        $_SESSION['id'] = $myrow['id'];
                        $_SESSION['username'] = $myrow['username'];
                        $_SESSION['name'] = $myrow['name'];
                        $_SESSION['email'] = $myrow['email'];
                        $_SESSION['role'] = $myrow['role'];
                        $_SESSION['phone'] = $myrow['phone'] ?? "";
                        $_SESSION['address'] = $myrow['address'] ?? "";
                    }
                }
                switch ($_SESSION['role']) {
                    case 'customer':
                        header("Location: http://localhost/fixit/View/User/index.php");
                        break;
                    case 'admin':
                        header("Location: http://localhost/fixit/View/Admin/user.php");
                        break;
                    case 'worker':
                        header("Location: http://localhost/fixit/View/Worker/index.php");
                        break;
                    case 'rider':
                        header("Location: http://localhost/fixit/View/Rider/index.php");
                        break;
                    default:
                        // handle unexpected role
                        break;
                }
                exit();
            }
        }
    }

    if (isset($_POST["updateUserInformation"])) {
        $userPhoneNo = $_POST["phone"] ?? '';
        $userAddress = $_POST["address"] ?? '';

        if (isset($_SESSION["username"])) {
            $updateUserInformation = $connection->updateUserInformation($connectionObject, $_SESSION["username"], $_POST["name"], $_POST["email"], $userPhoneNo, $userAddress);
            if ($updateUserInformation === TRUE) {
                $_SESSION['name'] = $_POST['name'];
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['phone'] = $userPhoneNo;
                $_SESSION['address'] = $userAddress;
                $updateInformation = "Information Updated";
            }
        } else {
            // handle the case where session username is not set
        }
    }

    if (isset($_POST["updateUserPassword"])) {
        if (empty($_POST["password"]) || empty($_POST["confirmPassword"])) {
            $updatePasswordError = 'Provide the same password in both fields';
        } else {
            if (isset($_SESSION["username"])) {
                $updateUserPassword = $connection->updateUserPassword($connectionObject, $_SESSION["username"], $_POST["password"]);
                if ($updateUserPassword === TRUE) {
                    echo '<script>alert("Password Updated")</script>';
                }
            } else {
                // handle the case where session username is not set
            }
        }
    }

    if (isset($_POST["requestService"])) {
        $today = date("Y-m-d");
        if (empty($_POST["name"]) || empty($_POST["description"]) || empty($_POST["serviceID"]) || empty($_POST["pickUp"]) || empty($_POST["weight"]) || empty($_POST["deliveryCharge"])) {
            $serviceRequest = 'Provide all the information';
        } else {
            if (isset($_SESSION["username"])) {
                $requestService = $connection->requestService($connectionObject, $_SESSION["username"], $_POST["name"], $_POST["description"], $_POST["serviceID"], $_POST["pickUp"], $_POST["weight"], $_POST["deliveryCharge"], $_POST["total"]);
                $addTransaction = $connection->addTransaction($connectionObject, $today, $_POST["total"], $_SESSION["id"]);
                if ($requestService === TRUE && $addTransaction === TRUE) {
                    echo '<script>alert("Request Submitted")</script>';
                }
            } else {
                // handle the case where session username is not set
            }
        }
    }

    $service = "";
    $serviceData = $connection->showAllService($connectionObject);
    if ($serviceData->num_rows > 0) {
        $service = $serviceData;
    }

    
    $requestedService = "";
    $transaction = "";
    if (isset($_SESSION['username'])) {

        $requestedServiceData = $connection->showAllRequestedService($connectionObject, $_SESSION['username']);
        if ($requestedServiceData->num_rows > 0) {
            $requestedService = $requestedServiceData;
        }

        $transactionData = $connection->showUserTransaction($connectionObject, $_SESSION['id']);
        if ($transactionData->num_rows > 0) {
            $transaction = $transactionData;
        }
    }

    $connection->closeConnection($connectionObject);
?>

   