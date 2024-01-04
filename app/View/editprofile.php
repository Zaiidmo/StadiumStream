<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML, CSS, Youcode, tailwindCSS, StadiumStream, CAN23">
    <meta name="author" content="TheVlpha">
    <meta name="description" content="StadiumStream to Sell Football tickets">
    <title>Profile</title>
    <link rel="stylesheet" href="public\assets\dist\output.css">
</head>

<body class="bg-gray-300 dark:bg-gray-900">
    <?php include "../app/View/includes/navbar.php"; ?>
    <main id="main" class="pt-20 px-10   ">
        <div class="grid grid-cols-3 gap-4 pt-6 xl:gap-4 ">
            <div id="title" class="col-span-full flex flex-col ">
                <h1 class="text-3xl font-semibold font-mono text-gray-700 dark:text-gray-200">User Profile</h1>
                <hr class="my-4 text-white">
            </div>
            <!-- Left Side -->
            <div class="col-span-full xl:col-auto mt-10">
                <div id="profile-pic"
                    class="items-center p-6 sm:flex gap-16 2xl:flex sm:space-x-4 xl:space-x-0 2xl:space-x-4 mb-4 border border-gray-200 dark:border-gray-700 rounded-lg shadow-sm 2xl:col-span-2 bg-white dark:bg-gray-800">
                    <img class="rounded-lg w-36 h-36 sm:mb-0 xl:mb-4 2xl:mb-0"
                        src="https://images.unsplash.com/photo-1502378735452-bc7d86632805?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&s=aa3a807e1bbdfd4364d1f449eaa96d82"
                        alt="Jese picture">
                    <div>
                        <h3 class="mb-1 text-xl font-bold text-gray-900 dark:text-white">Profile picture</h3>
                        <div class="mb-4 text-sm text-gray-500 dark:text-gray-400">
                            JPG or PNG. Max size of 1MB
                        </div>
                        <div class="flex items-center space-x-4">
                            <button type="button"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-black dark:text-white  border border-gray-200 rounded-lg bg-primary-700 hover:bg-primary-100 hover:text-white focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:focus:ring-gray-700 dark:bg-gray-800  dark:border-gray-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 ">
                                <svg class="w-4 h-4 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.5 13a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 13H11V9.413l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13H5.5z">
                                    </path>
                                    <path d="M9 13h2v5a1 1 0 11-2 0v-5z"></path>
                                </svg>
                                Upload picture
                            </button>
                            <button type="button"
                                class="py-2 px-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200  hover:bg-orange hover:text-white focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-orange">
                                Delete
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Right Side -->
            <div class="lg:col-span-2 lg:mt-10">
                <div
                    class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                    <h3 class="mb-4 text-xl font-semibold dark:text-white">General information</h3>
                    <form action="Editprofile/updateProfile" post="POST">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-3">
                                <label for="first-name" name="first_name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First
                                    Name</label>
                                <input type="text" name="first-name" id="first-name"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    value="<?php echo $userData['first_name']; ?>" required>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="last-name" name="last_name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last
                                    Name</label>
                                <input type="text" name="last-name" id="last-name"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    value="<?php echo $userData['last_name']; ?>" required>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="email" name="email"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                <input type="email" name="email" id="email"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    value="<?php echo $userData['email']; ?>" required>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="phone-number" name="phone_number"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone
                                    Number</label>
                                <input type="number" id="phone-number"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    name="phone_number" value="<?php echo $userData['phone_number']; ?>" required>
                            </div>
                            <div class="col-span-6 sm:col-full">
                                <button
                                    class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                                    type="submit">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </main>
</body>
<script src="public/assets/js/navbar.js"></script>
<script src="public/assets/js/theme.js"></script>
<script src="public/assets/js/home.js"></script>

</html>