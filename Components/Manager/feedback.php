<?php
    include($_SERVER['DOCUMENT_ROOT'] ."/fixit/Controller/managerController.php");
?>

<!DOCTYPE html>
<html lang="en">
<body>
<section>
    <?php include("navbar.php"); ?>
        <div class="container mx-auto p-8">    
            <div class="inline-block min-w-full w-full divide-y align-middle">
                <div class="overflow-hidden border border-gray-200 md:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                <tr>
                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">Feedback ID</th>
                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">Email</th>
                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">Username</th>
                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">Feedback</th>
                </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <?php
                    while($myrow = $feedbacks->fetch_assoc()){
                        echo '<tr>';
                        echo '<td class="px-4 py-4 text-sm text-gray-700 whitespace-nowrap">' . $myrow['id'] . '</td>';
                        echo '<td class="px-4 py-4 text-sm font-bold text-gray-700 whitespace-nowrap">' . $myrow['email'] . '</td>';
                        echo '<td class="px-4 py-4 text-sm text-gray-700 whitespace-nowrap">' . $myrow['username'] . '</td>';
                        echo '<td class="px-4 py-4 text-sm text-gray-700 whitespace-nowrap">' . $myrow['description'] . '</td>';
                        echo '</tr>'; 
                    }  
                    ?>
                </tbody>
                </table>
                </div>
            </div>
    </div>
</section>
</body>
</html>
