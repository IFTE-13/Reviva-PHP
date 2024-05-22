<nav class="relative bg-gray-800 shadow">
    <div class="container px-6 py-3 mx-auto md:flex">
        <div class="flex items-center justify-between">
            <a href="#">
            <svg onmouseover="this.style.fill='#ea580c'" onmouseout="this.style.fill='#FFFFFF'" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" style="fill: #FFFFFF;"><path d="m15.539 14.059-1.874 1.875-1.777 1.777-.347.35a3.993 3.993 0 0 1-3.785 1.048A2.41 2.41 0 0 1 3 18.567c0-1.138.792-2.092 1.852-2.342a3.993 3.993 0 0 1 1.047-3.811l.135-.135 1.777 1.778-.138.135a1.48 1.48 0 0 0 0 2.092 1.462 1.462 0 0 0 2.09 0l.349-.349 1.775-1.778 1.877-1.879 1.775 1.781zm.693 4.988a3.986 3.986 0 0 1-3.996-.988l-.135-.139 1.773-1.777.135.139a1.48 1.48 0 0 0 2.09 0 1.474 1.474 0 0 0-.002-2.086l-.35-.349-1.773-1.777-1.877-1.878 1.777-1.776 1.875 1.879 1.774 1.777.349.349a3.962 3.962 0 0 1 1.058 3.766 2.407 2.407 0 0 1-.336 4.79 2.392 2.392 0 0 1-2.352-1.924l-.01-.006zm-8.001-8.962 1.881-1.879 1.777-1.777.347-.346a3.972 3.972 0 0 1 3.949-1.002 2.408 2.408 0 1 1 2.699 2.716 3.98 3.98 0 0 1-1.012 3.925l-.137.139-1.777-1.777.139-.138a1.474 1.474 0 1 0-2.086-2.085l-.347.346-1.777 1.776-1.879 1.876-1.777-1.774zm-1.99 1.984-.346-.347a3.984 3.984 0 0 1-.999-3.965 2.414 2.414 0 0 1-1.874-2.35A2.41 2.41 0 0 1 5.43 3c1.197 0 2.19.875 2.378 2.019a3.99 3.99 0 0 1 3.734 1.061l.138.14-1.778 1.776-.137-.136a1.481 1.481 0 0 0-2.088 0 1.481 1.481 0 0 0-.004 2.092l.349.35 1.777 1.777 1.879 1.879-1.775 1.777-1.883-1.879-1.778-1.777v-.01h-.001z"></path></svg>
            </a>
        </div>

        <div class="absolute inset-x-0 z-20 w-full px-6 py-4 transition-all duration-300 ease-in-out bg-white dark:bg-gray-800 md:mt-0 md:p-0 md:top-0 md:relative md:opacity-100 md:translate-x-0 md:flex md:items-center md:justify-between">
            <div class="flex flex-col px-2 -mx-4 md:flex-row md:mx-10 md:py-0">
                <a href="http://localhost/fixit/View/User/index.php" class="px-2.5 py-2 text-gray-200 transition-colors duration-300 transform rounded-lg hover:text-blue-500 hover:bg-gray-700 md:mx-2">Home</a>
                <a href="http://localhost/fixit/View/User/services.php" class="px-2.5 py-2 text-gray-200 transition-colors duration-300 transform rounded-lg hover:text-blue-500 hover:bg-gray-700 md:mx-2">Services</a>
                <a href="http://localhost/fixit/View/User/serviceRequest.php" class="px-2.5 py-2 text-gray-200 transition-colors duration-300 transform rounded-lg hover:text-blue-500 hover:bg-gray-700 md:mx-2">Request</a>
                <a href="http://localhost/fixit/View/User/transaction.php" class="px-2.5 py-2 text-gray-200 transition-colors duration-300 transform rounded-lg hover:text-blue-500 hover:bg-gray-700 md:mx-2">Transaction</a>
            </div>

            <div class="relative mt-4 md:mt-0">
                <div class="flex flex-col md:flex-row md:mx-6 items-center gap-x-4">
                    <a href="http://localhost/fixit/View/User/settings.php" class="my-2 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400"><?php echo $_SESSION['name']?></a>
                    <p class="my-2 text-gray-700 dark:text-gray-200"> | </p>
                    <p class="my-2 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400"><?php echo $_SESSION['email']?></p>
                    <p class="my-2 text-gray-700 dark:text-gray-200"> | </p>
                    <a href="http://localhost/fixit/Controller/logoutController.php" class="pt-1 text-red-700">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/><polyline points="16 17 21 12 16 7"/><line x1="21" x2="9" y1="12" y2="12"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
        

            