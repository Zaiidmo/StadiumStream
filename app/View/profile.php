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
    <link rel="stylesheet" href="public/assets/dist/output.css">
</head>

<body class="bg-gray-300 dark:bg-gray-800">
    <?php include "../app/View/includes/navbar.php"; ?>
    <main id="main">
        <div id="profile-card" class="p-16 pl-24">
            <?php
            if (isset($_SESSION['success'])) {
                echo "<div
                    class='mb-3 hidden w-full items-center rounded-lg bg-green-100 px-6 py-5 text-base text-green-800 data-[te-alert-show]:inline-flex'
                    role='alert'
                    data-te-alert-init
                    data-te-alert-show>
                    <strong class='mr-1'>Success! </strong> {$_SESSION['success']}
                    <button
                      type='button'
                      class='ml-auto box-content rounded-none border-none p-1 text-green-900 opacity-50 hover:text-green-900 hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none'
                      data-te-alert-dismiss
                      aria-label='Close'>
                      <span
                        class='w-[1em] focus:opacity-100 disabled:pointer-events-none disabled:select-none disabled:opacity-25 [&.disabled]:pointer-events-none [&.disabled]:select-none [&.disabled]:opacity-25'>
                        <svg
                          xmlns='http://www.w3.org/2000/svg'
                          viewBox='0 0 24 24'
                          fill='currentColor'
                          class='h-6 w-6'>
                          <path
                            fill-rule='evenodd'
                            d='M5.47 5.47a.75.75 0 011.06 0L12 10.94l5.47-5.47a.75.75 0 111.06 1.06L13.06 12l5.47 5.47a.75.75 0 11-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 01-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 010-1.06z'
                            clip-rule='evenodd' />
                        </svg>
                      </span>
                    </button>
                  </div>";
                unset($_SESSION['success']);
            }
            ?>
            <div class="p-8 bg-white rounded-lg  dark:bg-gray-900 shadow mt-24">
                <div class="grid grid-cols-1 md:grid-cols-3">
                    <div class="grid grid-cols-3 text-center order-last md:order-first mt-20 md:mt-0">
                        <div>
                            <p class="font-bold dark:text-white text-gray-700 text-xl">22</p>
                            <p class="dark:text-white text-gray-400">Friends</p>
                        </div>
                        <div>
                            <p class="font-bold dark:text-white text-gray-700 text-xl">10</p>
                            <p class="dark:text-white text-gray-400">Photos</p>
                        </div>
                        <div>
                            <p class="font-bold dark:text-white text-gray-700 text-xl">89</p>
                            <p class=" dark:text-white text-gray-400">Comments</p>
                        </div>
                    </div>
                    <div class="relative justify-center">
                        <div
                            class="w-48 h-48 bg-indigo-100 mx-auto rounded-full shadow-2xl absolute inset-x-0 top-0 -mt-24 flex items-center justify-center dark:text-white text-indigo-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                    clip-rule="evenodd" />
                            </svg> </div>
                    </div>
                    <div class="space-x-8 flex justify-between mt-32 md:mt-0 md:justify-center">
                        <a href="editprofile" target="_blank" rel="noopener noreferrer"><button
                                class="text-white py-2 px-4 uppercase rounded bg-primary-100 hover:bg-primary-200 shadow hover:shadow-lg font-poppins font-bold transition transform hover:-translate-y-0.5">
                                Edit Profile</button></a>
                        <!-- <button class="text-white py-2 px-4 uppercase rounded bg-gray-700 hover:bg-gray-800 shadow hover:shadow-lg font-medium transition transform hover:-translate-y-0.5"> </button> -->
                    </div>
                </div>
                <div class="mt-20 text-center ">
                    <h1 class="text-4xl font-medium dark:text-white text-gray-700">
                        <?php if (isset($_SESSION['full_name']))
                            echo $_SESSION['full_name']; ?>
                    </h1>
                    <p class="font-light text-gray-600 dark:text-white mt-3">
                        <?php if (isset($_SESSION['email']))
                            echo $_SESSION['email'] ?>
                        </p>
                    </div>
                    <!-- <div class="mt-12 flex flex-col justify-center">
                    <p class="text-gray-600 dark:text-white text-center font-light lg:px-16">An artist of considerable range, Ryan — the name taken by Melbourne-raised, Brooklyn-based Nick Murphy — writes, performs and records all of his own music, giving it a warm, intimate feel with a solid groove structure. An artist of considerable range.</p> <button class="text-indigo-500 py-2 px-4  font-medium mt-4"> Show more</button>
                </div> -->
                </div>
            </div>
            <div id="History" class="p-16 pt-0 pl-24">
                <div class="p-8 bg-white rounded-lg  dark:bg-gray-900 shadow ">
                    <h1 class="font-monospace tracking-widest text-gray-800 mb-10 dark:text-white">My Purchases History</h1>
                    <div class="grid grid-cols-1 md:grid-cols-5 ">
                        <div id="ticket" class="w-full md:w-80 rounded-xl mb-5 bg-white dark:bg-gray-800 shadow-2xl ">
                            <div class="h-48 w-full rounded-t-xl flex flex-col justify-between p-4 bg-cover  bg-center"
                                style="background-image: url('https://images.pexels.com/photos/1592384/pexels-photo-1592384.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940')">
                            </div>
                            <div class="p-4 rounded-b-xl ">
                                <div class="flex items-center justify-between">
                                    <h1 class="text-black dark:text-white font-medium">titan.jpg</h1> <button
                                        class="text-black dark:text-white"> <svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                        </svg> </button>
                                </div>
                                <p class="text-black dark:text-white text-sm my-1">Jack cooper</p> <span
                                    class="uppercase text-xs bg-green-50 p-0.5 border-green-500 border rounded text-green-700 font-medium">Approved</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <script src="public/assets/js/navigation.js"></script>
        <script src="public/assets/js/navbar.js"></script>
        <script src="public/assets/js/theme.js"></script>
        <script src="public/assets/js/home.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
    </body>


    </html>