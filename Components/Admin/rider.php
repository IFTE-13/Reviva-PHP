<?php
    include($_SERVER['DOCUMENT_ROOT'] ."/fixit/Controller/adminController.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script>
        function toggleModal() {
            var modal = document.getElementById('modal');
            modal.classList.toggle('hidden');
        }
    </script>
</head>
<body>
<section class="">
    <div class="flex flex-col">
    <?php include("navbar.php"); ?>
            <div class="container mx-auto p-8">    
            <button onclick="toggleModal()" class="mb-4 bg-gray-800 px-2 py-1 text-gray-300 rounded-lg text-sm">
                  New
            </button>
            <div id="modal" class="hidden fixed z-10 inset-0 overflow-y-auto">
                    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                        <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                        </div>
                        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                            <div class="p-6">
                                <h2 class="text-lg font-semibold mb-4">Add New Rider</h2>
                                <form method="POST">
                    <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                        <div>
                            <label class="text-gray-300">Name</label>
                            <input name="name" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md  focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring">
                        </div>
                        <div>
                            <label class="text-gray-300">Username</label>
                            <input name="username" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md  focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring">
                        </div>
                        <div>
                            <label class="text-gray-300" for="emailAddress">Email Address</label>
                            <input name="email" type="email" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md  focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring">
                        </div>
                        <div>
                            <label class="text-gray-300" for="emailAddress">Address</label>
                            <input name="address" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md  focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring" value='<?php echo $_SESSION['address']; ?>' >
                        </div>
    
                        <div>
                            <label class="text-gray-300" for="emailAddress">Phone</label>
                            <input name="phone" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md  focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring" value='<?php echo $_SESSION['phone']; ?>'>
                        </div>
                    </div>
                    <?php echo $registrationRiderError?>
                    <div class="px-4 py-3 bg-gray-50 sm:px-6 sm:flex sm:flex-row-reverse">
                        <button type="submit"
                                name="newRider"
                                class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-gray-800 text-base font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 sm:ml-3 sm:w-auto sm:text-sm">
                            Save
                        </button>
                        <button onclick="toggleModal()" type="button"
                                class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                            Cancel
                        </button>
                    </div>
                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="inline-block min-w-full w-full divide-y align-middle">
                <div class="overflow-hidden border border-gray-200 md:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                <tr>
                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">User ID</th>
                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">Customer</th>
                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">Username</th>
                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">Email</th>
                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">Phone</th>
                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">Address</th>
                </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <?php
                    while($myrow = $riders->fetch_assoc()){
                        echo '<tr>';
                        echo '<td class="px-4 py-4 text-sm text-gray-700 whitespace-nowrap">' . $myrow['id'] . '</td>';
                        echo '<td class="px-4 py-4 text-sm font-bold text-gray-700 whitespace-nowrap">' . $myrow['name'] . '</td>';
                        echo '<td class="px-4 py-4 text-sm text-gray-700 whitespace-nowrap">' . $myrow['username'] . '</td>';
                        echo '<td class="px-4 py-4 text-sm text-gray-700 whitespace-nowrap">' . $myrow['email'] . '</td>';
                        echo '<td class="px-4 py-4 text-sm text-gray-700 whitespace-nowrap">' . $myrow['phone'] . '</td>';
                        echo '<td class="px-4 py-4 text-sm text-gray-700 whitespace-nowrap">' . $myrow['address'] . '</td>';
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
