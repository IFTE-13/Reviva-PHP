<?php
    include($_SERVER['DOCUMENT_ROOT'] ."/fixit/Controller/userController.php");
    if(empty($_SESSION['role'])){
        header("Location: http://localhost/fixit/View/login.php");
    }

    $today = date("Y-m-d");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="../../styles.css">
    </head>
    <body>
            <div>
            <?php include("navbar.php"); ?>
            <div  class="flex flex-col">
                <div class="container mx-auto">
                    <div class="mt-10 mb-10">
                    <div class="max-w-lg px-8 py-4 rounded-lg shadow-md">
                    <div class="flex items-center justify-between mb-10">
                        <span class="text-sm  font-semibold text-gray-800"><?php echo $today; ?></span>
                        <a href="http://localhost/fixit/View/User/settings.php" class="px-3 py-1 text-sm text-gray-300 font-bold transition-colors duration-300 transform border bg-gray-900 rounded cursor-pointer hover:bg-gray-500" tabindex="0" role="button">Edit Profile</a>
                    </div>
                        <div class="mt-2 flex flex-col">
                        <p class="text-gray-800 mb-4" tabindex="0" role="link">UserID: <?php echo $_SESSION['id']; ?></p>
                        <p class="text-gray-800 mb-4" tabindex="0" role="link">Username: <?php echo $_SESSION['username']; ?></p>
                        <p class="text-gray-800 mb-4" tabindex="0" role="link">Email: <?php echo $_SESSION['email']; ?></p>
                        <p class="text-gray-800 mb-4" tabindex="0" role="link">Phone: <?php echo $_SESSION['phone']; ?></p>
                        <p class="text-gray-800 mb-4" tabindex="0" role="link">Address: <?php echo $_SESSION['address']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
    </body>
</html>