<?php
    include($_SERVER['DOCUMENT_ROOT'] . "/fixit/Controller/userController.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="../styles.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <section class="text-gray-600 body-font">
        <div class="container px-5 mx-auto">
            <h1 class="sm:text-3xl text-2xl font-medium title-font text-start mt-10 text-gray-900 mb-10">Services we
                <span class="text-orange-600">Provide</span></h1>
            <div class="grid grid-cols-1 sm:grid-cols-3 md:grid-cols-3 gap-6">
                <?php
                  while($myrow = $service->fetch_assoc()){
                    echo '<div class="p-4 border rounded-lg">';
                    echo '<div class="flex-grow pl-6">';
                    echo '<h2 class="text-gray-900 text-lg title-font font-medium mb-2">' . $myrow['name'] . '</h2>';
                    echo '<p class="leading-relaxed text-base mb-2">' . $myrow['description'] . '</p>';
                    echo '<p class="leading-relaxed text-base">' . $myrow['price'] . '</p>';
                    echo '</div>';
                    echo '</div>';; 
                  } 
                ?>
            </div>
        </div>
    </section>
</body>

</html>
