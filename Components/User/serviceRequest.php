<?php
    include($_SERVER['DOCUMENT_ROOT'] ."/fixit/Controller/userController.php");
    
    if (empty($_SESSION['role'])) {
        header("Location: http://localhost/fixit/View/login.php");
        exit();
    } elseif ($_SESSION['role'] !== 'customer') {
        header("Location: http://localhost/fixit/View/notfound.php");
        exit();
    }

    // Fetch services from the database
    $services = [];
    if ($service && $service->num_rows > 0) {
        while($row = $service->fetch_assoc()) {
            $services[] = $row;
        }
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
            updateTotal();
        }

        // Function to update service charge and total based on selected service
        function updateServiceCharge() {
            var serviceSelect = document.querySelector('select[name="serviceID"]');
            var serviceChargeInput = document.querySelector('input[name="serviceCharge"]');
            var selectedService = serviceSelect.options[serviceSelect.selectedIndex];
            var serviceCharge = selectedService.getAttribute('data-price');
            serviceChargeInput.value = serviceCharge;
            updateTotal();
        }

        // Function to update the total charge
        function updateTotal() {
            var serviceCharge = parseFloat(document.querySelector('input[name="serviceCharge"]').value) || 0;
            var deliveryCharge = parseFloat(document.querySelector('input[name="deliveryCharge"]').value) || 0;
            var totalChargeInput = document.querySelector('input[name="total"]');
            totalChargeInput.value = serviceCharge + deliveryCharge;
        }
        </script>
    </head>
    <body>
        <div class="flex flex-col">
            <?php include("navbar.php"); ?>
            <div class="mt-10 container mx-auto">
                <section class="p-6 bg-gray-100 rounded-md shadow-md">
                    <h2 class="text-lg font-semibold text-gray-700 capitalize">Request Service</h2>
                    <form method="POST">
                        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                            <div>
                                <label class="text-gray-700">Product Name</label>
                                <input name="name" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md">
                            </div>
                            <div>
                                <label class="text-gray-700">Issue</label>
                                <input name="description" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md">
                            </div>
                            <div>
                                <label class="text-gray-700">Service</label>
                                <select name="serviceID" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md" onchange="updateServiceCharge()">
                                    <option value="" disabled selected>Select a service</option>
                                    <?php
                                        foreach($services as $row) {
                                            echo '<option value="' . $row['id'] . '" data-price="' . $row['price'] . '">' . $row['name'] . '</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                            <div>
                                <label class="text-gray-700">Service Charge</label>
                                <input name="serviceCharge" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md" readonly>
                            </div>
                            <div>
                                <label class="text-gray-700">Pick Up</label>
                                <input name="pickUp" type="date" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md">
                            </div>
                            <div>
                                <label class="text-gray-700">Weight</label>
                                <div class="mt-4 flex flex-row gap-x-4">
                                    <label class="items-center">
                                        <input type="radio" name="weight" value="light" class="text-blue-600 form-radio" onchange="updateDeliveryCharge()">
                                        <span class="ml-2 text-gray-700">Light</span>
                                    </label>
                                    <label class="items-center">
                                        <input type="radio" name="weight" value="medium" class="text-blue-600 form-radio" onchange="updateDeliveryCharge()">
                                        <span class="ml-2 text-gray-700">Medium</span>
                                    </label>
                                    <label class="items-center">
                                        <input type="radio" name="weight" value="heavy" class="text-blue-600 form-radio" onchange="updateDeliveryCharge()">
                                        <span class="ml-2 text-gray-700">Heavy</span>
                                    </label>
                                </div>
                            </div>
                            <div>
                                <label class="text-gray-700">Delivery Charge</label>
                                <input name="deliveryCharge" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md" readonly>
                            </div>
                            <div>
                                <label class="text-gray-700">Total</label>
                                <input name="total" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md" readonly>
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
    </body>
</html>
