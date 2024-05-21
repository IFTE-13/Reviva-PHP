<?php
    include($_SERVER['DOCUMENT_ROOT'] ."/fixit/Controller/workerController.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script>
        function openModal(row) {
            const modal = document.getElementById("updateModal");

            // Extract data from the row
            const requestID = row.querySelector(".requestID").innerText;
            const deliveryDate = row.querySelector(".deliveryDate").innerText;

            // Populate the modal fields
            document.getElementById("modalRequestID").value = requestID;
            document.getElementById("modalDeliveryDate").value = deliveryDate;

            // Show the modal
            modal.classList.remove("hidden");
        }

        function closeModal() {
            document.getElementById("updateModal").classList.add("hidden");
        }

        window.onclick = function(event) {
            const modal = document.getElementById("updateModal");
            if (event.target == modal) {
                modal.classList.add("hidden");
            }
        }
    </script>
</head>
<body>
<section>
    <?php include("navbar.php"); ?>
    <div class="container mx-auto p-8">    
        <div class="inline-block min-w-full w-full divide-y divide-gray-200 align-middle">
            <div class="overflow-hidden border border-gray-200 md:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left text-gray-500">Request ID</th>
                            <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left text-gray-500">Username</th>
                            <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left text-gray-500">Product Name</th>
                            <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left text-gray-500">Description</th>
                            <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left text-gray-500">Service ID</th>
                            <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left text-gray-500">Delivery Date</th>
                            <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left text-gray-500"></th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <?php
                        while($myrow = $serviceRequest->fetch_assoc()){
                            echo '<tr>';
                            echo '<td class="px-4 py-4 text-sm text-gray-700 whitespace-nowrap requestID">' . $myrow['id'] . '</td>';
                            echo '<td class="px-4 py-4 text-sm text-gray-700 whitespace-nowrap username">' . $myrow['username'] . '</td>';
                            echo '<td class="px-4 py-4 text-sm font-bold text-gray-700 whitespace-nowrap name">' . $myrow['name'] . '</td>';
                            echo '<td class="px-4 py-4 text-sm text-gray-700 whitespace-nowrap description">' . $myrow['description'] . '</td>';
                            echo '<td class="px-4 py-4 text-sm text-gray-700 whitespace-nowrap serviceID">' . $myrow['serviceID'] . '</td>';
                            echo '<td class="px-4 py-4 text-sm text-gray-700 whitespace-nowrap deliveryDate">' . $myrow['deliveryDate'] . '</td>';
                            echo '<td class="px-4 py-4 text-sm text-gray-700 whitespace-nowrap">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-settings-2 cursor-pointer" onclick="openModal(this.parentElement.parentElement)">
                                        <path d="M20 7h-9"/><path d="M14 17H5"/><circle cx="17" cy="17" r="3"/><circle cx="7" cy="7" r="3"/>
                                    </svg>
                                  </td>'; 
                            echo '</tr>'; 
                        }  
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<!-- Modal Structure -->
<div id="updateModal" class="fixed z-10 inset-0 overflow-y-auto hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true" onclick="closeModal()"></div>
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
        <div class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6">
            <div class="sm:flex sm:items-start">
                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                    <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">Update Service</h3>
                    <div class="mt-2">
                        <form method="POST" id="updateForm">
                            <div>
                                <label class="text-gray-700" for="modalRequestID">Request ID</label>
                                <input id="modalRequestID" name="requestID" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md  focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring" readonly>
                            </div>
                            <div class="mt-4 mb-6">
                                <label class="text-gray-700" for="modalDeliveryDate">Delivery Date</label>
                                <input id="modalDeliveryDate" name="deliveryDate" type="date" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md  focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring">
                            </div>
                            <div>
                                <button type="submit" name="updateDeliveryDate" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:w-auto sm:text-sm">Update</button>
                                <button type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 sm:mt-0 sm:w-auto sm:text-sm" onclick="closeModal()">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
