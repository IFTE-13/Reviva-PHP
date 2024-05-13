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
    </head>
    <body class="bg-gray-700">
            <div class="flex flex-col">
            <?php include("navbar.php"); ?>
                <div class="flex">
                    <?php include("sidebar.php"); ?>
                <div class="mt-10 container mx-auto">
                <div>
                <section class="p-6 bg-gray-900 rounded-md shadow-md">
                <h2 class="text-lg font-semibold text-gray-300 capitalize">Update Information</h2>
                
                <form method="POST">
                    <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                        <div>
                            <label class="text-gray-300">UserID</label>
                            <input value='<?php echo $_SESSION['id']; ?>' type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-gray-300 border border-gray-200 rounded-md  focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring" readonly>
                        </div>
                        <div>
                            <label class="text-gray-300">Name</label>
                            <input name="name" value='<?php echo $_SESSION['name']; ?>' type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md  focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring">
                        </div>
                        <div>
                            <label class="text-gray-300">Username</label>
                            <input value='<?php echo $_SESSION['username']; ?>' type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md  focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring">
                        </div>
                        <div>
                            <label class="text-gray-300" for="emailAddress">Email Address</label>
                            <input name="email" value='<?php echo $_SESSION['email'];  ?>' type="email" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md  focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring">
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
                    <?php echo $updateInformation?>
                    <div class="flex justify-end mt-6">
                        <button type="submit" name="updateUserInformation" class="px-8 py-2.5 leading-5 text-white transition-colors duration-300 transform bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:bg-gray-600">Update</button>
                    </div>
                </form>
            </section>
            </div>
                <div class="mt-10 w-1/2">
                <section class="p-6 bg-gray-900 rounded-md shadow-md">
                <h2 class="text-lg font-semibold text-gray-300 capitalize">Change Password</h2>
    
                <form method="POST">
                    <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-1">
                        <div>
                            <label class="text-gray-300">Password</label>
                            <input name="password" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md  focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring">
                        </div>
                        <div>
                            <label class="text-gray-300">Confirm Password</label>
                            <input name="confirmPassword" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md  focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring">
                        </div>
                    </div>
                    <?php echo $updateInformation?>
                    <div class="flex justify-end mt-6">
                        <button type="submit" name="updateUserPassword" class="px-8 py-2.5 leading-5 text-white transition-colors duration-300 transform bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:bg-gray-600">Change</button>
                    </div>
                </form>
            </section>
            </div>
            </div>
                </div>
            </div>
    </body>
</html>