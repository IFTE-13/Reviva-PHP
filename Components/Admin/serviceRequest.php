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
<body>
<section class="">
    <div class="flex flex-col">
    <?php include("navbar.php"); ?>
        <div class="flex">
            <?php include("sidebar.php"); ?>
            <div class="container  p-8">
            <div class="inline-block min-w-full w-full divide-y align-middle">
                <div class="overflow-hidden border border-gray-200 md:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">Username</th>
                    <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">Product Name</th>
                    <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">Description</th>
                    <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">Service ID</th>
                    <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">Weight</th>
                    <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">Total</th>
                </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <?php
                    while($myrow = $serviceRequest->fetch_assoc()){
                        echo '<tr>';
                        echo '<td class="px-4 py-4 text-sm text-gray-700 whitespace-nowrap">' . $myrow['username'] . '</td>';
                        echo '<td class="px-4 py-4 text-sm font-bold text-gray-700 whitespace-nowrap">' . $myrow['name'] . '</td>';
                        echo '<td class="px-4 py-4 text-sm text-gray-700 whitespace-nowrap">' . $myrow['description'] . '</td>';
                        echo '<td class="px-4 py-4 text-sm text-gray-700 whitespace-nowrap">' . $myrow['serviceID'] . '</td>';
                        echo '<td class="px-4 py-4 text-sm text-gray-700 whitespace-nowrap">' . $myrow['weight'] . '</td>';
                        echo '<td class="px-4 py-4 text-sm text-gray-700 whitespace-nowrap">' . $myrow['total'] . '</td>';
                        echo '</tr>'; 
                    }  
                    ?>
                </tbody>
                </table>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>
</body>
</html>
