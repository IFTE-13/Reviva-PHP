<?php
    include($_SERVER['DOCUMENT_ROOT'] ."/fixit/Controller/adminController.php");

    if (empty($_SESSION['role'])) {
        header("Location: http://localhost/fixit/View/login.php");
        exit();
    } elseif ($_SESSION['role'] !== 'admin') {
        header("Location: http://localhost/fixit/View/notfound.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<body>
<section class="">
    <div class="flex flex-col">
    <?php include("navbar.php"); ?>
            <div class="container mx-auto p-8">
            <div class="inline-block min-w-full w-full divide-y align-middle">
                <div class="overflow-hidden border border-gray-200 md:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                <tr>
                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">Transaction ID</th>
                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">Customer ID</th>
                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">Date</th>
                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">Amount</th>
                </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <?php
                    while($myrow = $transactions->fetch_assoc()){
                        echo '<tr>';
                        echo '<td class="px-4 py-4 text-sm text-gray-700 whitespace-nowrap">' . $myrow['id'] . '</td>';
                        echo '<td class="px-4 py-4 text-sm font-bold text-gray-700 whitespace-nowrap">' . $myrow['userID'] . '</td>';
                        echo '<td class="px-4 py-4 text-sm text-gray-700 whitespace-nowrap">' . $myrow['date'] . '</td>';
                        echo '<td class="px-4 py-4 text-sm text-gray-700 whitespace-nowrap">' . $myrow['amount'] . '</td>';
                        echo '</tr>'; 
                    }  
                    ?>
                </tbody>
                </table>
                </div>
        </div>
        </div>
    </div>
</section>
</body>
</html>
