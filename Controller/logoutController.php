<?php
    session_start();
    echo "hello";
    if(session_destroy())   
        {
            header("Location: http://localhost/fixit/index.php");
        }
?>