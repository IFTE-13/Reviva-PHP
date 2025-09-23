<?php
    include($_SERVER['DOCUMENT_ROOT'] ."/PCFixer/Controller/adminController.php");

    if (empty($_SESSION['role'])) {
        header("Location: http://localhost/PCFixer/View/login.php");
        exit();
    } elseif ($_SESSION['role'] !== 'admin') {
        header("Location: http://localhost/PCFixer/View/notfound.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../styles.css">
</head>
<body>
    <div class="flex flex-col">
    <?php include("navbar.php"); ?>
            <div class="container mx-auto">
                <?php
                  while($myrow = $feedbacks->fetch_assoc())
                  {
                    echo '<div class="divide-gray-100 m-8 border">';
                    echo '<div class="py-8 flex flex-wrap md:flex-nowrap p-8">';
                    echo '<div class="md:w-64 md:mb-0 flex-shrink-0 flex flex-col">';
                    echo '<span class="text-gray-500 text-sm mt-2">' .$myrow['email'] . '</span>';
                    echo '</div>';
                    echo '<div class="md:flex-grow">';
                    echo '<h2 class="text-2xl font-medium text-gray-900 title-font">' .$myrow['username'] . '</h2>';
                    echo '<p class="leading-relaxed">' .$myrow['description'] . '</p>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    }
                  ?>
            </div>
    </div>
</body>
</html>