<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StadiumStream</title>
    <meta name="keywords" content="HTML, CSS, Youcode, tailwindCSS, StadiumStream, CAN24">
    <meta name="author" content="Waheli">
    <meta name="description" content="StadiumStream to Sell Football tickets">
    <link rel="stylesheet" href="public/assets/dist/output.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

</head>

<body class="bg-gray-300 dark:bg-gray-900">
    <?php
    include '../app/View/includes/navbar.php';
    ?>
    <!-- Hero section -->

    <section class="relative">
        <?php
        if (isset($_SESSION['success'])) {
            echo '<div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">';
            echo '<strong class="font-bold">Success!</strong>';
            echo '<span class="block sm:inline">' . $_SESSION['success'] . '</span>';
            echo '<span class="absolute top-0 bottom-0 right-0 px-4 py-3">';
            echo '<svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">';
            echo '<title>Close</title>';
            echo '<path d="M14.348 14.849a1 1 0 0 1-1.414 0L10 11.414l-2.93 2.435a1 1 0 1 1-1.242-1.566l3-2.5a1 1 0 0 1 1.172 0l3 2.5a1 1 0 0 1 0 1.566z"/>';
            echo '</svg>';
            echo '</span>';
            echo '</div>';
            unset($_SESSION['success']);
        } ?>
        <div class="relative">
            <img src="public/assets/images/herobg.svg" class="absolute inset-0 object-cover w-full h-full" alt="" />
            <div class="relative customgradient">
                <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
                    <div class="flex flex-col items-center justify-between xl:flex-row">
                        <div class="w-full max-w-3xl mb-10 xl:mb-0  xl:w-12/16">
                            <h2 class="max-w-3/5 mb-10 font-sans text-7xl font-bold tracking-tight text-white">
                                Feel the Passion: Get Your Ticket to the Epic African
                                <br class="hidden md:block" />
                                <span class=" text-orange text-7xl font-bold ">Football Journey!</span>
                            </h2>


                            <p class="max-w-xl mb-4 text-base text-gray-200 md:text-lg">
                                Look no further! Our SBS The Show tickets are the simplest way for you to experience a
                                live Kpop recording. </p>
                            <a href="contact">
                                <button type="button"
                                    class="text-gray-300 bg-orange hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-3.5 text-center inline-flex items-center dark:bg-orange-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                    Get in touch
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </button>
                            </a>
                            <a href="buyticket">
                                <button type="button"
                                    class="mx-5 text-white bg-orange hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-3.5 text-center inline-flex items-center dark:bg-orange-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                    Get Your Ticket
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </button>
                            </a>
                        </div>
                        <div class="w-full max-w-xl xl:px-8 xl:w-5/12 relative">
                            <img src="public/assets/images/player.svg" class="w-full rounded-lg h-auto" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--  end Hero section -->
    <!-- filter section -->

    <section class="text-gray-300 w-full dark:bg-gray-900 ">
        <div class=" container max-w-7xl my-5 flex justify-center mx-auto">
            <div class="w-full bg-primary-100  py-8 shadow-md dark:bg-gray-800 sm:rounded-lg">
                <div
                    class="flex flex-col items-center justify-between p-4 space-y-3 md:flex-row md:space-y-0 md:space-x-4">
                    <div class="w-full md:w-1/2 py-2">
                        <label for="phone-input" class="block mb-5 text-s font-medium text-white dark:text-white">Search
                            For Match :</label>
                        <form class="flex items-center">
                            <label for="simple-search" class="sr-only">Search Match</label>
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                        fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <input type="text" id="simple-search"
                                    class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg focus:ring-primary-500 focus:border-primary-500 dark:bg-green-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Search For Match" required="">
                            </div>
                        </form>
                    </div>
                    <div class="w-full md:w-1/2 py-2">
                        <label for="phone-input" class="block mb-5 text-s font-medium text-white dark:text-white">Search
                            For stadium :</label>

                        <form class="flex items-center">
                            <label for="simple-search" class="sr-only">Search</label>
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                        fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <input type="text" id="simple-search"
                                    class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Search For Stadium" required="">
                            </div>
                        </form>
                    </div>
                    <div class="w-full md:w-1/3 py-2">
                        <label for="phone-input" class="block mb-5 text-s font-medium text-white dark:text-white">Filter
                            by Date</label>
                        <button id="filterDropdownButton" data-dropdown-toggle="filterDropdown"
                            class="flex items-center justify-center w-full px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg focus:outline-none hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
                            type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                class="w-4 h-4 mr-2 text-gray-400" viewbox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z"
                                    clip-rule="evenodd" />
                            </svg>
                            Filter
                            <svg class="-mr-1 ml-1.5 w-5 h-5" fill="currentColor" viewbox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="filterDropdown"
                            class="z-10 hidden w-48 p-3 bg-white rounded-lg shadow dark:bg-gray-700">
                            <h6 class="mb-3 text-sm font-medium text-gray-900 dark:text-white">
                                Upcoming Match
                            </h6>
                            <ul class="space-y-2 text-sm" aria-labelledby="dropdownDefault">
                                <li class="flex items-center">
                                    <input id="apple" type="checkbox" value=""
                                        class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />
                                    <label for="apple"
                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                                        top games
                                    </label>
                                </li>
                                <li class="flex items-center">
                                    <input id="fitbit" type="checkbox" value=""
                                        class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />
                                    <label for="fitbit"
                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                                        this week (56)
                                    </label>
                                </li>
                                <li class="flex items-center">
                                    <input id="dell" type="checkbox" value=""
                                        class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />
                                    <label for="dell" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                                        today's matchs
                                    </label>
                                </li>
                                <li class="flex items-center">
                                    <input id="asus" type="checkbox" value="" checked
                                        class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />
                                    <label for="asus" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                                        this mounth
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end filter section -->
    <!-- Matches section -->

    <section class="py-4">
        <div>
            <h2 class=" text-2xl font-bold text-center sm:text-4xl text-orange">Upcoming Matchs</h2>
            <p class="max-w-3xl mx-auto mt-4 text-xl dark:text-white text-center ">Explore the latest features that
                enhance your learning experience and make it even more exciting.</p>
        </div>
        <div class="container max-w-7xl px-2 mx-auto">
            <div class="grid-cols-1 sm:grid md:grid-cols-3 ">
                <div
                    class="match-card-display  mx-3 mt-6 flex flex-col rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-gray-800 sm:shrink-0 sm:grow sm:basis-0">
                    <a href="#!">
                        <img class="rounded-t-lg" src="public/assets/images/match4.jpg" alt="football" />
                    </a>
                    <div class="p-5">
                        <h5 class="mb-2 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                            Card title
                        </h5>
                        <p class=" text-base text-neutral-600 dark:text-neutral-200">
                            This is a wider card with supporting text below as a natural
                            lead-in to additional content. This content is a little bit
                            longer.
                        </p>
                    </div>
                    <div class="p-3 flex justify-end">
                        <a href="buyTicket"
                            class="text-orange border border-orange py-2 px-3 rounded inline-flex  items-center">
                            Buy Ticket
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" class="w-6 h-6 ml-2">
                                <path d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                    <div
                        class="mt-auto border-t-2 border-neutral-100 px-6 py-3 text-center dark:border-neutral-600 dark:text-neutral-50">
                        <small>Last updated 3 mins ago</small>
                    </div>
                </div>
                <div
                    class="match-card-display  mx-3 mt-6 flex flex-col rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-gray-800 sm:shrink-0 sm:grow sm:basis-0">
                    <a href="#!">
                        <img class="rounded-t-lg" src="public/assets/images/match4.jpg" alt="Skyscrapers" />
                    </a>
                    <div class="p-5">
                        <h5 class="mb-2 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                            Card title
                        </h5>
                        <p class=" text-base text-neutral-600 dark:text-neutral-200">
                            This is a wider card with supporting text below as a natural
                            lead-in to additional content. This content is a little bit
                            longer.
                        </p>
                    </div>
                    <div class="p-3 flex justify-end">
                        <a href="buyTicket"
                            class="text-orange border border-orange py-2 px-3 rounded inline-flex  items-center">
                            Buy Ticket
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" class="w-6 h-6 ml-2">
                                <path d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                    <div
                        class="mt-auto border-t-2 border-neutral-100 px-6 py-3 text-center dark:border-neutral-600 dark:text-neutral-50">
                        <small>Last updated 3 mins ago</small>
                    </div>
                </div>
                <div
                    class="match-card-display  mx-3 mt-6 flex flex-col rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-gray-800 sm:shrink-0 sm:grow sm:basis-0">
                    <a href="#!">
                        <img class="rounded-t-lg" src="public/assets/images/match4.jpg" alt="Skyscrapers" />
                    </a>
                    <div class="p-5">
                        <h5 class="mb-2 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                            Card title
                        </h5>
                        <p class=" text-base text-neutral-600 dark:text-neutral-200">
                            This is a wider card with supporting text below as a natural
                            lead-in to additional content. This content is a little bit
                            longer.
                        </p>
                    </div>
                    <div class="p-3 flex justify-end">
                        <a href="buyTicket"
                            class="text-orange border border-orange py-2 px-3 rounded inline-flex  items-center">
                            Buy Ticket
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" class="w-6 h-6 ml-2">
                                <path d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                    <div
                        class="mt-auto border-t-2 border-neutral-100 px-6 py-3 text-center dark:border-neutral-600 dark:text-neutral-50">
                        <small>Last updated 3 mins ago</small>
                    </div>
                </div>
                <div
                    class="match-card-display hidden mx-3 mt-6 flex-col rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-gray-800 sm:shrink-0 sm:grow sm:basis-0">
                    <a href="#!">
                        <img class="rounded-t-lg" src="public/assets/images/match4.jpg" alt="Skyscrapers" />
                    </a>
                    <div class="p-5">
                        <h5 class="mb-2 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                            Card title
                        </h5>
                        <p class=" text-base text-neutral-600 dark:text-neutral-200">
                            This is a wider card with supporting text below as a natural
                            lead-in to additional content. This content is a little bit
                            longer.
                        </p>
                    </div>
                    <div class="p-3 flex justify-end">
                        <a href="buyTicket"
                            class="text-orange border border-orange py-2 px-3 rounded inline-flex  items-center">
                            Buy Ticket
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" class="w-6 h-6 ml-2">
                                <path d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                    <div
                        class="mt-auto border-t-2 border-neutral-100 px-6 py-3 text-center dark:border-neutral-600 dark:text-neutral-50">
                        <small>Last updated 3 mins ago</small>
                    </div>
                </div>
                <div
                    class="match-card-display hidden mx-3 mt-6 flex-col rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-gray-800 sm:shrink-0 sm:grow sm:basis-0">
                    <a href="#!">
                        <img class="rounded-t-lg" src="public/assets/images/match4.jpg" alt="Skyscrapers" />
                    </a>
                    <div class="p-5">
                        <h5 class="mb-2 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                            Card title
                        </h5>
                        <p class=" text-base text-neutral-600 dark:text-neutral-200">
                            This is a wider card with supporting text below as a natural
                            lead-in to additional content. This content is a little bit
                            longer.
                        </p>
                    </div>
                    <div class="p-3 flex justify-end">
                        <a href="buyTicket"
                            class="text-orange border border-orange py-2 px-3 rounded inline-flex  items-center">
                            Buy Ticket
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" class="w-6 h-6 ml-2">
                                <path d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                    <div
                        class="mt-auto border-t-2 border-neutral-100 px-6 py-3 text-center dark:border-neutral-600 dark:text-neutral-50">
                        <small>Last updated 3 mins ago</small>
                    </div>
                </div>
                <div
                    class="match-card-display hidden mx-3 mt-6 flex-col rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-gray-800 sm:shrink-0 sm:grow sm:basis-0">
                    <a href="#!">
                        <img class="rounded-t-lg" src="public/assets/images/match4.jpg" alt="Skyscrapers" />
                    </a>
                    <div class="p-5">
                        <h5 class="mb-2 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                            Card title
                        </h5>
                        <p class=" text-base text-neutral-600 dark:text-neutral-200">
                            This is a wider card with supporting text below as a natural
                            lead-in to additional content. This content is a little bit
                            longer.
                        </p>
                    </div>
                    <div class="p-3 flex justify-end">
                        <a href="buyTicket"
                            class="text-orange border border-orange py-2 px-3 rounded inline-flex  items-center">
                            Buy Ticket
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" class="w-6 h-6 ml-2">
                                <path d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                    <div
                        class="mt-auto border-t-2 border-neutral-100 px-6 py-3 text-center dark:border-neutral-600 dark:text-neutral-50">
                        <small>Last updated 3 mins ago</small>
                    </div>
                </div>

            </div>
        </div>
        <div
            class="fter:h-px my-16 flex items-center before:h-px before:flex-1  before:bg-gray-300 before:content-[''] after:h-px after:flex-1 after:bg-gray-300  after:content-['']">
            <button id="loadmoreId" type="button"
                class="flex items-center rounded-full border border-gray-300 bg-secondary-50 px-3 py-2 text-center text-sm font-medium dark:bg-gray-100  text-gray-900 hover:bg-gray-100">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="mr-1 h-4 w-4">
                    <path fill-rule="evenodd"
                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                        clip-rule="evenodd" />
                </svg>
                View More
            </button>
        </div>
    </section>
    <!-- End Matches section -->
    <!-- stadium section -->

    <section class="py-4">
        <div>
            <h2 class=" text-2xl font-bold text-center sm:text-4xl text-orange">Stadiums</h2>
            <p class="max-w-3xl mx-auto mt-4 text-xl text-black dark:text-white text-center ">Explore the latest
                features that enhance your learning experience and make it even more exciting.</p>
        </div>
        <div class="container max-w-7xl px-2 mx-auto">
            <div class="grid-cols-1 sm:grid  md:grid-cols-2 ">
                <div
                    class="mx-3 mt-6 flex flex-col self-start rounded-lg bg-white dark:bg-gray-800 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)]  sm:shrink-0 sm:grow sm:basis-0">
                    <a href="#!">
                        <img class="rounded-t-lg" src="public/assets/images/abidjan.jpg"
                            alt="Hollywood Sign on The Hill" />
                    </a>
                    <div class="p-6 dark:bg-gray-800">
                        <h5 class="mb-2 text-xl font-medium leading-tight  text-neutral-800 dark:text-neutral-50">
                            Card title
                        </h5>
                        <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                            This is a longer card with supporting text below as a natural
                            lead-in to additional content. This content is a little bit
                            longer.
                        </p>
                    </div>
                    <div class="p-3 flex justify-center">
                        <a href="" class="text-orange border border-orange py-2 px-3 rounded inline-flex  items-center">
                            View More
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" class="w-6 h-6 ml-2">
                                <path d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div
                    class="mx-3 mt-6 flex flex-col self-start rounded-lg bg-white dark:bg-gray-800 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)]  sm:shrink-0 sm:grow sm:basis-0">
                    <a href="#!">
                        <img class="rounded-t-lg" src="public/assets/images/abidjan.jpg"
                            alt="Hollywood Sign on The Hill" />
                    </a>
                    <div class="p-6 dark:bg-gray-800">
                        <h5 class="mb-2 text-xl font-medium leading-tight  text-neutral-800 dark:text-neutral-50">
                            Card title
                        </h5>
                        <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                            This is a longer card with supporting text below as a natural
                            lead-in to additional content. This content is a little bit
                            longer.
                        </p>
                    </div>
                    <div class="p-3 flex justify-center">
                        <a href="" class="text-orange border border-orange py-2 px-3 rounded inline-flex  items-center">
                            View More
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" class="w-6 h-6 ml-2">
                                <path d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div
                    class="mx-3 mt-6 flex flex-col self-start rounded-lg bg-white dark:bg-gray-800 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)]  sm:shrink-0 sm:grow sm:basis-0">
                    <a href="#!">
                        <img class="rounded-t-lg" src="public/assets/images/abidjan.jpg"
                            alt="Hollywood Sign on The Hill" />
                    </a>
                    <div class="p-6 dark:bg-gray-800">
                        <h5 class="mb-2 text-xl font-medium leading-tight  text-neutral-800 dark:text-neutral-50">
                            Card title
                        </h5>
                        <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                            This is a longer card with supporting text below as a natural
                            lead-in to additional content. This content is a little bit
                            longer.
                        </p>
                    </div>
                    <div class="p-3 flex justify-center">
                        <a href="" class="text-orange border border-orange py-2 px-3 rounded inline-flex  items-center">
                            View More
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" class="w-6 h-6 ml-2">
                                <path d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div
                    class="mx-3 mt-6 flex flex-col self-start rounded-lg bg-white dark:bg-gray-800 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)]  sm:shrink-0 sm:grow sm:basis-0">
                    <a href="#!">
                        <img class="rounded-t-lg" src="public/assets/images/abidjan.jpg"
                            alt="Hollywood Sign on The Hill" />
                    </a>
                    <div class="p-6 dark:bg-gray-800">
                        <h5 class="mb-2 text-xl font-medium leading-tight  text-neutral-800 dark:text-neutral-50">
                            Card title
                        </h5>
                        <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                            This is a longer card with supporting text below as a natural
                            lead-in to additional content. This content is a little bit
                            longer.
                        </p>
                    </div>
                    <div class="p-3 flex justify-center">
                        <a href="" class="text-orange border border-orange py-2 px-3 rounded inline-flex  items-center">
                            View More
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" class="w-6 h-6 ml-2">
                                <path d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="fter:h-px my-16 flex items-center before:h-px before:flex-1  before:bg-gray-300 before:content-[''] after:h-px after:flex-1 after:bg-gray-300  after:content-['']">
            <button type="button"
                class="flex items-center rounded-full border border-gray-300 bg-secondary-50 px-3 py-2 text-center text-sm font-medium bg-white dark:bg-gray-100  text-gray-900 hover:bg-gray-100">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="black" class="mr-1 h-4 w-4">
                    <path fill-rule="evenodd"
                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                        clip-rule="evenodd" />
                </svg>
                View More
            </button>
        </div>
    </section>
    <!-- End Stadium section -->
    <!-- companys  section -->

    <section class="relative">
        <div class="relative ">
            <div class=" relative customgradient">
                <div class=" w-full mx-auto h-fit sm:max-w-xl md:max-w-full lg:max-w-screen-xl">
                    <div class="flex flex-col items-center justify-between xl:flex-row">
                        <div class="w-full max-w-3xl mb-10 xl:mb-0  xl:w-12/16">
                            <h2 class="max-w-3/5 mb-10 font-sans text-5xl font-bold tracking-tight text-white">
                                Empowering Can Cote Devoir: Partner with Us for a
                                <br class="hidden md:block" />
                                <span class=" text-orange text-6xl font-bold ">Brighter Future!</span>
                            </h2>


                            <p class="max-w-xl mb-4 text-base text-gray-200 md:text-lg">
                                Look no further! Our SBS The Show tickets are the simplest way for you to experience a
                                live Kpop recording. </p>
                            <div class="flex">
                                <a class="px-2" href="#!">
                                    <img class="rounded-t-lg" src="public/assets/images/cmp1.svg"
                                        alt="stadium can 2024 " />
                                </a>
                                <a class="px-2" href="#!">
                                    <img class="rounded-t-lg" src="public/assets/images/cmp5.png"
                                        alt="stadium can 2024 " />
                                </a>
                                <a class="px-2" href="#!">
                                    <img class="rounded-t-lg" src="public/assets/images/cmp3.svg"
                                        alt="stadium can 2024 " />
                                </a>
                                <a class="px-2" href="#!">
                                    <img class="rounded-t-lg" src="public/assets/images/cmp2.svg"
                                        alt="stadium can 2024 " />
                                </a>
                            </div>


                        </div>
                        <div class="w-full max-w-xl xl:px-4 xl:w-5/12 relative">
                            <img src="public/assets/images/SadioMane.svg" class=" rounded-lg h-auto" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    include '../app/View/includes/footer.php';
    ?>

</body>

<script src="public/assets/js/navbar.js"></script>
<script src="public/assets/js/theme.js"></script>
<script src="public/assets/js/home.js"></script>

</html>