<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simplified Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#FF9505]">
    <main class="flex overflow-hidden container mx-auto">
        <div class="flex-1 hidden lg:block">
            <img src="../Assets/contact.jpg" class="w-full object-cover" />
        </div>
        <div class="py-12 flex-1 lg:flex lg:justify-center lg:overflow-auto">
            <div class="max-w-lg flex-1 mx-auto px-4 text-gray-600">
                <div>
                    <h3 class="text-gray-800 text-3xl font-semibold sm:text-4xl">Get in touch</h3>
                    <p class="mt-3">We’d love to hear from you! Please fill out the form below.</p>
                </div>
                <form class="space-y-5 mt-12 lg:pb-12">
                    <div>
                        <label class="font-medium">Full name</label>
                        <input type="text" required class="w-full mt-2 px-3 py-2 text-gray-500 bg-transparent outline-none border focus:border-gray-800 shadow-sm rounded-lg" />
                    </div>
                    <div>
                        <label class="font-medium">Email</label>
                        <input type="email" required class="w-full mt-2 px-3 py-2 text-gray-500 bg-transparent outline-none border focus:border-gray-800 shadow-sm rounded-lg" />
                    </div>
                    <div>
                        <label class="font-medium">Phone number</label>
                        <input type="number" required class="w-full mt-2 px-3 py-2 text-gray-500 bg-transparent outline-none border focus:border-gray-800 shadow-sm rounded-lg" />
                    </div>
                    <div>
                        <label class="font-medium">Message</label>
                        <textarea required class="w-full mt-2 h-36 px-3 py-2 resize-none appearance-none bg-transparent outline-none border focus:border-gray-800 shadow-sm rounded-lg"></textarea>
                    </div>
                    <button class="w-full px-4 py-2 text-white font-medium bg-orange-600 hover:bg-orange-500 active:bg-orange-700 rounded-lg duration-150">Submit</button>
                </form>
            </div>
        </div>
    </main>
</body>
</html>
