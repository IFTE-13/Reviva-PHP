<?php
    // Redirect the user to the index page in the View directory
    header('Location: View/index.php');
    exit; // It's good practice to call exit after a header redirect to prevent further script execution
?>

<!-- 
To compile your Tailwind CSS styles, use the following command in your terminal:
npx tailwindcss -i input.css -o styles.css --watch
-->
