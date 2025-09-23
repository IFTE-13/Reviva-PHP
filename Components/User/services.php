<?php
    include($_SERVER['DOCUMENT_ROOT'] ."/PCFixer/Controller/userController.php");

    if (empty($_SESSION['role'])) {
        header("Location: http://localhost/PCFixer/View/login.php");
        exit();
    } elseif ($_SESSION['role'] !== 'customer') {
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
        <div>
            <?php include("navbar.php"); ?>
            <div class="flex flex-col">
                <div class="container mx-auto">
                    <section class="container px-4 mx-auto">
                        <div class="flex flex-col mt-6">
                            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                                    <div class="overflow-hidden border border-gray-700 md:rounded-lg">
                                        <table class="min-w-full divide-y divide-gray-700">
                                            <thead class="bg-gray-800">
                                                <tr>
                                                    <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">Service ID</th>
                                                    <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">Product</th>
                                                    <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">Total</th>
                                                    <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">Description</th>
                                                    <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">Delivery Date</th>
                                                    <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">Pickup Date</th>
                                                </tr>
                                            </thead>
                                            <tbody class="divide-y divide-gray-700 bg-gray-900">
                                                <?php
                                                if ($requestedService && $requestedService->num_rows > 0) {
                                                    while($myrow = $requestedService->fetch_assoc()) {
                                                        echo '<tr>
                                                        <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                                            <h2 class="font-medium text-white">' . $myrow['serviceID'] . '</h2>
                                                        </td>
                                                        <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                                            <h2 class="font-medium text-white capitalize">' . $myrow['name'] . '</h2>
                                                        </td>
                                                        <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                                            <h2 class="font-medium text-white capitalize">' . $myrow['total'] . '</h2>
                                                        </td>
                                                        <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                                            <h2 class="font-medium text-white capitalize">' . $myrow['description'] . '</h2>
                                                        </td>
                                                        <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                                            <h2 class="font-medium text-white capitalize">' . $myrow['deliveryDate'] . '</h2>
                                                        </td>
                                                        <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                                            <h2 class="font-medium text-white capitalize">' . $myrow['pickupDate'] . '</h2>
                                                        </td>
                                                    </tr>';
                                                    }
                                                } else {
                                                    echo '<tr>
                                                        <td colspan="6" class="px-4 py-4 text-sm font-medium text-center text-gray-700 whitespace-nowrap">
                                                            <h2 class="font-medium text-white">No records found</h2>
                                                        </td>
                                                    </tr>';
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </body>
</html>
