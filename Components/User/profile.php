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
    <body class="bg-gray-700">
            <div class="flex flex-col">
            <?php include("navbar.php"); ?>
            <div class="flex">
                <?php include("sidebar.php"); ?>
                <div class="container mx-auto">
                    <div class="mt-10 mb-10">
                    <div class="max-w-lg px-8 py-4 bg-gray-900 rounded-lg shadow-md">
                    <div class="flex items-center justify-between mb-10">
                        <span class="text-sm  font-semibold text-gray-300"><?php echo $today; ?></span>
                        <a href="http://localhost/fixit/View/Manager/settings.php" class="px-3 py-1 text-sm text-gray-300 font-bold transition-colors duration-300 transform border bg-gray-600 rounded cursor-pointer hover:bg-gray-500" tabindex="0" role="button">Edit Profile</a>
                    </div>
                        <div class="mt-2 flex flex-col">
                        <p class="text-gray-300 mb-4" tabindex="0" role="link">UserID: <?php echo $_SESSION['id']; ?></p>
                        <p class="text-gray-300 mb-4" tabindex="0" role="link">Username: <?php echo $_SESSION['username']; ?></p>
                        <p class="text-gray-300 mb-4" tabindex="0" role="link">Email: <?php echo $_SESSION['email']; ?></p>
                        <p class="text-gray-300 mb-4" tabindex="0" role="link">Phone: <?php echo $_SESSION['phone']; ?></p>
                        <p class="text-gray-300 mb-4" tabindex="0" role="link">Address: <?php echo $_SESSION['address']; ?></p>
                        </div>
                    </div>
                    <section class="text-gray-600 body-font">
                    <div class="container px-5 mx-auto">
                        <h1 class="sm:text-3xl text-2xl font-medium title-font text-start mt-10 text-gray-300 mb-10">Services we
                            <span class="text-orange-600">Provide</span></h1>
                        <div class="grid grid-cols-4 gap-6">
                            <?php
                            $counter = 0;
                            while($myrow = $service->fetch_assoc()){
                                if($counter < 7){
                                    echo '<div class="p-4 rounded-lg bg-gray-900">';
                                    echo '<div class="flex-grow pl-3">';
                                    echo '<h2 class="text-gray-300 text-lg title-font font-medium mb-2">' . $myrow['name'] . '</h2>';
                                    echo '<p class="leading-relaxed text-base text-gray-300">' . $myrow['description'] . '</p>';
                                    echo '</div>';
                                    echo '</div>';; 
                                    $counter++;
                                }
                            } 
                            ?>
                            <a href="http://localhost/fixit/View/User/services.php" class="p-4 border rounded-lg cursor-pointer flex items-center justify-center">
                                    <div class="flex-grow pl-6 ">
                                        <h2 class="text-gray-300 text-lg text-center title-font font-medium mb-2">View ALL</h2>
                                    </div>
                            </a>
                        </div>
                    </div>
                </section>
                </div>
            </div>
            </div>
    </body>
</html>