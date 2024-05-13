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
        // Function to display the specified page of records
        function displayPage(pageNumber) {
            var records = <?php echo json_encode($service->fetch_all(MYSQLI_ASSOC)); ?>;
            var recordsPerPage = 10;
            var startIndex = (pageNumber - 1) * recordsPerPage;
            var endIndex = Math.min(startIndex + recordsPerPage, records.length);

            var tableBody = document.getElementById("table-body");
            tableBody.innerHTML = ""; // Clear existing rows 
            for (var i = startIndex; i < endIndex; i++) {
                var row = tableBody.insertRow();
                var cell1 = row.insertCell();
                var cell2 = row.insertCell();
                var cell3 = row.insertCell();
                cell1.textContent = records[i]['name'];
                cell2.textContent = records[i]['id'];
                cell3.textContent = records[i]['price'];
                cell1.classList.add('py-4', 'px-4'); // Adding padding to increase row height
                cell2.classList.add('py-4', 'px-4');
                cell3.classList.add('py-4', 'px-4');
            }
        }
    </script>
</head>
<body class="bg-gray-700">
    <div class="flex flex-col">
        <?php include("navbar.php"); ?>
            <div class="flex">
                <?php include("sidebar.php"); ?>
                <section class="container px-4 mx-auto mt-10">
                <a href="http://localhost/fixit/View/User/settings.php" class="px-3 py-2 text-sm text-gray-300 font-bold transition-colors duration-300 transform border bg-transparent rounded cursor-pointer hover:bg-gray-500" tabindex="0" role="button">Request Service</a>
                    <div class="flex flex-col mt-6">
                        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                                <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                        <thead class="bg-gray-50 dark:bg-gray-800">
                                            <tr>
                                                <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">Name</th>
                                                <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">Description</th>
                                                <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">Price ($)</th>
                                            </tr>
                                        </thead>
                                        <tbody id="table-body" class="bg-white divide-y py-4 divide-gray-200 dark:divide-gray-700 dark:bg-gray-900 text-gray-300">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Pagination -->
                    <div class="flex justify-center mt-4">
                        <?php
                            // Assuming you have a fixed number of pages
                            $totalPages = ceil($service->num_rows / 10);
                            for ($i = 1; $i <= $totalPages; $i++) {
                                echo '<button class="block px-3 py-2 mx-1 font-medium text-sm text-gray-600 bg-white rounded-md hover:bg-gray-300" onclick="displayPage(' . $i . ')">' . $i . '</button>';
                            }
                        ?>
                    </div>
                </section>
            </div>
    </div>
    <script>
        displayPage(1);
    </script>
</body>
</html>
