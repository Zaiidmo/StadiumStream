<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/assets/dist/output.css">
    <title>Sign In</title>
</head>

<body>
    <?php
    include '../app/View/includes/navbar.php';
    ?>
    <!-- <img src="public/assets/images/herobg.svg" class="z-1 absolute inset-0 object-cover w-full h-full" alt="" /> -->
    <section class="signin-gradient z-9 dark:bg-gray-900 font-poppins relative md:py-10">
        <img src="public/assets/images/orangeShape.svg" class="orange-shape invisible md:visible" alt="orange-shape">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-100 dark:text-white">
                <img class="w-8 h-8 mr-2 drop-shadow-md" src="public/assets/images/logo.svg" alt="logo">
                StadiumStream
            </a>
            <div
                class="w-full z-10 bg-primary-100 rounded-2xl shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1
                        class="text-xl font-bold leading-tight tracking-tight text-gray-100 md:text-2xl dark:text-white drop-shadow-md">
                        Sign in to your account
                    </h1>
                    <?php if (isset($_SESSION['error'])) {
                        echo '<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">';
                        echo '<strong class="font-bold">Error!</strong>';
                        echo '<span class="block sm:inline">' . $_SESSION['error'] . '</span>';
                        echo '<span class="absolute top-0 bottom-0 right-0 px-4 py-3">';
                        echo '<svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">';
                        echo '<title>Close</title>';
                        echo '<path d="M14.348 14.849a1 1 0 0 1-1.414 0L10 11.414l-2.93 2.435a1 1 0 1 1-1.242-1.566l3-2.5a1 1 0 0 1 1.172 0l3 2.5a1 1 0 0 1 0 1.566z"/>';
                        echo '</svg>';
                        echo '</span>';
                        echo '</div>';
                        unset($_SESSION['error']); // Clear the error message after displaying it
                    }
                    ?>
                    <form class="space-y-4 md:space-y-6" id="form" method="POST" action="Signin/readUser">
                        <div class="formGroup">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-100 dark:text-white">Your
                                email</label>
                            <input type="email" name="email" id="email"
                                class="bg-gray-100 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-orange focus:border-orange block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="name@example.com" pattern="^(.+)@(.+)$" required>
                            <p class="error mt-2 text-sm text-red-600 dark:text-red-500 drop-shadow-md hidden"></p>
                        </div>
                        <div class="formGroup">
                            <label for="password"
                                class="block mb-2 text-sm font-medium text-gray-100 dark:text-white">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••"
                                class="bg-gray-100 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-orange focus:border-orange block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                minlength="8" required>
                            <p class="error mt-2 text-sm text-red-600 dark:text-red-500 drop-shadow-md hidden">
                            </p>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-start formGroup">
                                <div class="flex items-center h-5">
                                    <input id="remember" name="remember" aria-describedby="remember" type="checkbox"
                                        class="w-4 h-4 border border-gray-300 rounded bg-gray-100 focus:ring-3 focus:ring-orange dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-orange dark:ring-offset-gray-800"
                                        required>
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="remember" class="text-gray-300 dark:text-gray-300">Remember me</label>
                                </div>
                            </div>
                            <a href="#"
                                class="text-sm font-medium text-orange hover:underline dark:text-orange drop-shadow-md">Forgot
                                password?</a>
                        </div>
                        <button type="submit"
                            class="w-full text-white bg-orange hover:bg-orange focus:ring-4 focus:outline-none focus:ring-orange font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-orange dark:hover:bg-orange dark:focus:ring-orange">Sign
                            in</button>
                        <p class="text-sm font-light text-gray-300 dark:text-gray-400">
                            Don't have an account yet? <a href="signup"
                                class="font-medium text-orange hover:underline dark:text-orange drop-shadow-md">Sign
                                up</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
        <img src="public/assets/images/greenShape.svg" class="green-shape invisible md:visible" alt="green-shape">
        <img src="public/assets/images/pyramidShape.svg" class="pyramid invisible md:visible" alt="pyramid">
        <img src="public/assets/images/ellipse.svg" class="ellipse invisible md:visible" alt="ellipse">
        <img src="public/assets/images/yellowShape.svg" class="yellow-shape invisible md:visible" alt="yellow-shape">
    </section>
    <?php
    include '../app/View/includes/footer.php';
    ?>

</body>
<script src="public/assets/js/validation.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
<script src="public/assets/js/navbar.js"></script>
<script src="public/assets/js/theme.js"></script>

</html>