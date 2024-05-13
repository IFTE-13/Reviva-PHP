<?php
    include($_SERVER['DOCUMENT_ROOT'] ."/fixit/Controller/userController.php");
    if(empty($_SESSION['role'])){
        header("Location: http://localhost/fixit/View/login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="../../styles.css">
        <script>
        // Function to update delivery charge based on selected weight
        function updateDeliveryCharge() {
            var weight = document.querySelector('input[name="weight"]:checked').value;
            var deliveryChargeInput = document.querySelector('input[name="deliveryCharge"]');
            // Set delivery charge based on weight
            switch (weight) {
                case "light":
                    deliveryChargeInput.value = "100"; // Example delivery charge for light weight
                    break;
                case "medium":
                    deliveryChargeInput.value = "150"; // Example delivery charge for medium weight
                    break;
                case "heavy":
                    deliveryChargeInput.value = "250"; // Example delivery charge for heavy weight
                    break;
                default:
                    deliveryChargeInput.value = ""; // Default value if weight is not selected
                    break;
            }
        }
        </script>
    </head>
    <body class="bg-gray-700">
            <div class="flex flex-col">
            <?php include("navbar.php"); ?>
                <div class="flex">
                    <?php include("sidebar.php"); ?>
                <div class="mt-10 container mx-auto">
                <section class="p-6 bg-gray-900 rounded-md shadow-md">
                <h2 class="text-lg font-semibold text-gray-300 capitalize">Request Service</h2>
    
                <form method="POST">
                    <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                        <div>
                            <label class="text-gray-300">Prodcut Name</label>
                            <input name="name" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-gray-300 border border-gray-200 rounded-md  focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring">
                        </div>
                        <div>
                            <label class="text-gray-300">Issue</label>
                            <input name="description" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md  focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring">
                        </div>
                        <div>
                            <label class="text-gray-300">Service</label>
                            <input name="serviceID" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md  focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring">
                        </div>
                        <div>
                            <label class="text-gray-300">Pick Up</label>
                            <input name="pickUp"  type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md  focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring">
                        </div>
                        <div>
                                <label class="text-gray-300">Weight</label>
                                <div class="mt-2 flex flex-col gap-y-2">
                                    <label class="items-center">
                                        <input type="radio" name="weight" value="light" class="text-blue-600 form-radio" onchange="updateDeliveryCharge()">
                                        <span class="ml-2 text-gray-300">Light</span>
                                    </label>
                                    <label class="items-center">
                                        <input type="radio" name="weight" value="medium" class="text-blue-600 form-radio" onchange="updateDeliveryCharge()">
                                        <span class="ml-2 text-gray-300">Medium</span>
                                    </label>
                                    <label class="items-center">
                                        <input type="radio" name="weight" value="heavy" class="text-blue-600 form-radio" onchange="updateDeliveryCharge()">
                                        <span class="ml-2 text-gray-300">Heavy</span>
                                    </label>
                                </div>
                            </div>
                            <div>
                                <label class="text-gray-300">Delivery Charge</label>
                                <input name="deliveryCharge" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md  focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring" readonly>
                            </div>
                    </div>
                    <?php echo $updateInformation?>
                    <div class="flex justify-end mt-6">
                        <button type="submit" name="requestService" class="px-8 py-2.5 leading-5 text-white transition-colors duration-300 transform bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:bg-gray-600">Request</button>
                    </div>
                </form>
            </section>
            </div>
            </div>
            </div>
    </body>
</html>