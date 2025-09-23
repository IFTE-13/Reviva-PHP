<?php
    include($_SERVER['DOCUMENT_ROOT'] ."/PCFixer/Controller/riderController.php");
    
    function getWeightClass($weight) {
        if ($weight === 'light') {
            return 'text-emerald-500';
        } elseif ($weight === 'medium') {
            return 'text-orange-500';
        } else {
            return 'text-red-500';
        }
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
                                                    <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-400">ID</th>
                                                    <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-400">Username</th>
                                                    <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-400">Product</th>
                                                    <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-400">Pick Up</th>
                                                    <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-400">Weight</th>
                                                </tr>
                                            </thead>
                                            <tbody class="divide-y divide-gray-700 bg-gray-900">
                                                <?php
                                                if ($delivery && $delivery->num_rows > 0) {
                                                    while($myrow = $delivery->fetch_assoc()) {
                                                        $weightClass = getWeightClass($myrow['weight']);
                                                        echo '<tr>
                                                        <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                                            <h2 class="font-medium text-white">' . $myrow['id'] . '</h2>
                                                        </td>
                                                        <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                                            <h2 class="font-medium text-white capitalize">' . $myrow['username'] . '</h2>
                                                        </td>
                                                        <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                                            <h2 class="font-medium text-white capitalize">' . $myrow['name'] . '</h2>
                                                        </td>
                                                        <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                                            <h2 class="font-medium text-white capitalize">' . $myrow['pickupDate'] . '</h2>
                                                        </td>
                                                        <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                                            <div class="inline-flex items-center py-1 rounded-full gap-x-2">
                                                                <h2 class="text-sm font-normal capitalize ' . $weightClass . '">' . $myrow['weight'] . '</h2>
                                                            </div>
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
