<?php
    include($_SERVER['DOCUMENT_ROOT'] ."/fixit/Controller/riderController.php");
    
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
            <div  class="flex flex-col">
                <div class="container mx-auto">
                <section class="container px-4 mx-auto">

    <div class="flex flex-col mt-6">
        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead class="bg-gray-50 dark:bg-gray-800">
                            <tr>
                                <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-400">ID</th>
                                <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-400">Username</th>
                                <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-400">Product</th>
                                <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-400">Pick Up</th>
                                <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-400">Weight</th>

                                <th scope="col" class="relative py-3.5 px-4">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                        <?php
                            while($myrow = $pickUp->fetch_assoc()){
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
                                        <h2 class="text-sm font-normal capitalize ' . ' ' . $weightClass . '">' . $myrow['weight'] . '</h2>
                                    </div>
                                </td>
                                <td class="px-4 py-4 text-sm whitespace-nowrap">
                                    <form method="POST">
                                        <div class="flex items-center gap-x-6">
                                            <button type="submit" name="confirmDelivery" value=' . $myrow['id'] . ' class="text-gray-500 transition-colors duration-200 dark:hover:text-red-500 dark:text-gray-300 hover:text-red-500 focus:outline-none">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-package-check"><path d="m16 16 2 2 4-4"/><path d="M21 10V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l2-1.14"/><path d="m7.5 4.27 9 5.15"/><polyline points="3.29 7 12 12 20.71 7"/><line x1="12" x2="12" y1="22" y2="12"/></svg>
                                            </button>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        ';}
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