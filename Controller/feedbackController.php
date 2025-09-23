<?php
    include($_SERVER['DOCUMENT_ROOT'] ."/PCFixer/Model/feedbackModel.php");

    $connection = new databaseConnection();
    $connectionObject = $connection->openConnection();

    if(isset($_REQUEST['submitGuestFeedback'])){
        $submitGuestFeedback = $connection->submitGuestFeedBack($connectionObject, $_REQUEST["email"], $_REQUEST["description"]);
        if($submitGuestFeedback == TRUE){
            echo '<script>alert("Feedback")</script>';
        }
    }

    $connection->closeConnection($connectionObject);

?>