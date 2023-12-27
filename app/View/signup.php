<?php
// include(__DIR__."/includes/head.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/dist/output.css">
    <title>Sign Up</title>
</head>

<body>
    <?php
    // include(__DIR__ . "/includes/navbar.php");
    ?>
    <section class="signup-gradient dark:bg-gray-900 font-poppins relative">
        <img src="/assets/images/orangeShape.svg" class="orange-shape invisible md:visible" alt="orange-shape">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-100 dark:text-white">
                <img class="w-8 h-8 mr-2" src="/assets/images/logo.svg" alt="logo">
                StadiumStream
            </a>
            <div
                class="w-full bg-white bg-opacity-30 rounded-2xl shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1
                        class="text-xl font-bold leading-tight tracking-tight text-gray-100 md:text-2xl dark:text-white">
                        Create An Account
                    </h1>
                    <form action="#">
                        <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                            <div class="w-full">
                                <label for="first_name"
                                    class="block mb-2 text-sm font-medium text-gray-100 dark:text-white">First
                                    name</label>
                                <input type="text" name="first_name" id="first_name"
                                    class="bg-gray-200 border border-gray-300 text-gray-100 text-sm rounded-lg focus:ring-orange-600 focus:border-orange-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-500 dark:focus:border-orange-500"
                                    placeholder="first name" required="">
                            </div>
                            <div class="w-full">
                                <label for="last_name"
                                    class="block mb-2 text-sm font-medium text-gray-100 dark:text-white">Last
                                    name</label>
                                <input type="text" name="last_name" id="last_name"
                                    class="bg-gray-200 border border-gray-300 text-gray-100 text-sm rounded-lg focus:ring-orange-600 focus:border-orange-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-500 dark:focus:border-orange-500"
                                    placeholder="last name" required="">
                            </div>
                            <div class="sm:col-span-2">
                                <label for="email"
                                    class="block mb-2 text-sm font-medium text-gray-100 dark:text-white">Your
                                    email</label>
                                <input type="email" name="email" id="email"
                                    class="bg-gray-200 border border-gray-300 text-gray-100 sm:text-sm rounded-lg focus:ring-orange-600 focus:border-orange-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="name@company.com" required="">
                            </div>
                            <div class="sm:col-span-2">
                                <label for="password"
                                    class="block mb-2 text-sm font-medium text-gray-100 dark:text-white">Password</label>
                                <input type="password" name="password" id="password" placeholder="••••••••"
                                    class="bg-gray-100 border border-gray-300 text-gray-100 sm:text-sm rounded-lg focus:ring-orange-600 focus:border-orange-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required="">
                            </div>
                            <div class="sm:col-span-2">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="terms-conditions" aria-describedby="terms-conditions"
                                                type="checkbox"
                                                class="w-4 h-4 border border-gray-300 rounded bg-gray-100 focus:ring-3 focus:ring-orange-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-orange-600 dark:ring-offset-gray-800"
                                                required="">
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="terms-conditions" class="text-gray-300 dark:text-gray-300">I
                                                agree with
                                                the<a href="#"
                                                    class="text-sm font-medium text-orange-500 hover:underline dark:text-orange-500 drop-shadow-md ml-1">
                                                    terms and conditions</a>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <button type="submit"
                                    class="w-full text-white bg-orange-600 hover:bg-orange-700 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-800">Create
                                    Account</button>
                                <p class="text-sm font-light text-gray-300 dark:text-gray-400 mt-4">
                                    Already have an account <a href="#"
                                        class="font-medium text-orange-500 hover:underline dark:text-orange-500 drop-shadow-md ml-1">Sign
                                        in</a>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <img src="/assets/images/greenShape.svg" class="green-shape invisible md:visible" alt="green-shape">
        <img src="/assets/images/pyramidShape.svg" class="pyramid invisible md:visible" alt="pyramid">
        <img src="/assets/images/ellipse.svg" class="ellipse invisible md:visible" alt="ellipse">
        <img src="/assets/images/yellowShape.svg" class="yellow-shape invisible md:visible" alt="yellow-shape">
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>

</html>