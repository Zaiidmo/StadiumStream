<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Your Ticket</title>
    <meta name="keywords" content="HTML, CSS, Youcode, tailwindCSS, StadiumStream, CAN24">
    <meta name="author" content="Waheli">
    <meta name="description" content="StadiumStream to Sell Football tickets">
    <link rel="stylesheet" href="<?= URL_DIR ?>public/assets/dist/output.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

</head>

<body class="dark:bg-gray-900 bg-gray-300">

    <?php
    include '../app/View/includes/navbar.php';
    ?>

    <!-- Hero section -->

    <section class="relative">
        <div class="relative">
            <img src="<?= URL_DIR ?>public/assets/images/herobg.svg" class="absolute inset-0 object-cover w-full h-full" alt="" />
            <div class="relative customgradient">
                <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">


                    <div class="flex flex-col items-center justify-around xl:flex-row">
                        <div class="">
                            <img class="rounded-full w-40 h-40" src="<?= URL_DIR ?>public/assets/uploads/<?= $singlematch['flag1'] ?>" alt="image description">
                        </div>
                        <div class="">
                            <div class="flex flex-col items-center justify-center mx-auto max-w-7xl px-6 pt-16 pb-12 sm:px-12 lg:pt-24">
                                <h2 class="font-extrabold tracking-tight sm:text-4xl  text-white">
                                    <span class="mx-2  text-white"><?= $singlematch['team1'] ?>
                                    </span>
                                    VS
                                    <span class="mx-2  text-white"><?= $singlematch['team2'] ?>
                                    </span>
                                </h2>
                                <p class="mt-2 text-sm font-semibold text-gray-400">
                                    <?= $singlematch['stadiumName'] ?>
                                </p>

                                <span class="py-2 text-m font-semibold text-white">
                                    MATCH COMING IN :
                                </span>

                                <div class="flex items-end justify-center z-10">
                                    <div class="m-2 sm:m-5">
                                        <span class="text-orange font-bold text-xl sm:text-5xl">110</span>
                                        <p class="text-white">Days</p>
                                    </div>
                                    <div class="m-2 sm:m-5">
                                        <span class="text-orange font-bold text-xl sm:text-5xl">13</span>
                                        <p class="text-white">Hours</p>
                                    </div>
                                    <div class="m-2 sm:m-5">
                                        <span class="text-orange font-bold text-xl sm:text-5xl">47</span>
                                        <p class="text-white">Minutes</p>
                                    </div>
                                    <div class="m-2 sm:m-5">
                                        <span class="text-orange font-bold text-xl sm:text-5xl">20</span>
                                        <p class="text-white">Seconds</p>
                                    </div>
                                </div>

                                <div class="rounded-md shadow z-10 mt-5">
                                    <span href="#" class="w-full px-8 py-3 border border-transparent text-base leading-6 font-light rounded-full text-white bg-orange  md:py-4 md:text-md md:px-16">
                                        <span class="text-white font-bold"><?= $singlematch['matchDay'] ?></span>
                                    </span>
                                </div>
                            </div>

                        </div>
                        <div class="">
                            <img class="rounded-full w-40 h-40" src="<?= URL_DIR ?>public/assets/uploads/<?= $singlematch['flag2'] ?>" alt="image description">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="">
        <div class="">
            <div class="">
                <div class="px-4  py-4 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
                    <div class="flex shadow-md overflow-hidden  rounded-xl bg-white dark:bg-gray-800 flex-col  xl:flex-row">
                        <div class="col-2">
                            <img class=" w-full m-4 px-4" src="<?= URL_DIR ?>public/assets/uploads/<?= $singlematch['image'] ?>" alt="image description">
                        </div>
                        <div class="col-1">
                            <div class="flex  flex-col  items-start bg-white dark:bg-gray-800  mx-auto max-w-7xl px-2 pt-2 pb-10 sm:px-8 lg:pt-4">
                                <h2 class="font-extrabold tracking-tight sm:text-4xl dark:text-white text-black">
                                    <span class="mx-2 dark:text-white text-black"><?= $singlematch['team1'] ?></span>
                                    VS
                                    <span class="mx-2 dark:text-white text-black"><?= $singlematch['team2'] ?></span>
                                </h2>
                                <p class="mt-2 text-sm font-semibold text-gray-700 dark:text-gray-400">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis eros at sem tincidunt
                                    hendrerit.
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis eros at sem tincidunt
                                    hendrerit.
                                </p>

                                <div class="">
                                <div class="flex justify-between">
                                        <div class="text-4xl text-gray-700 dark:text-gray-400 leading-none text-right py-2">
                                            <?= $singlematch['price'] ?> $ <span class="ml-1 text-dark-2 text-base">/once</span>
                                        </div>
                                    </div>

                                    <div class="flex justify-between">
                                        <div class="text-2xl text-gray-700 dark:text-gray-400 leading-none text-right py-2">
                                           <span ><?= $avaliableTickets  ?></span>  / <span class="ml-1 text-dark-2 text-base" ><?= $totalCapacity  ?></span>
                                             <span class="ml-1 text-dark-2 text-base"> avaliable tickets </span>
                                        </div>
                                    </div>
                                    <div class="border-b  border-light-2 w-full mt-6 mb-8"></div>
                                    <ul class="mb-10">
                                        <li class="flex items-center gap-1 text-gray-700 dark:text-gray-400 text-sm font-medium mb-4">
                                            <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0" viewBox="0 0 24 24">
                                                <path d="M12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm5.676,8.237-6,5.5a1,1,0,0,1-1.383-.03l-3-3a1,1,0,1,1,1.414-1.414l2.323,2.323,5.294-4.853a1,1,0,1,1,1.352,1.474Z" />
                                            </svg>
                                            <span>One payment, access to the game
                                            </span>
                                        </li>
                                        <li class="flex items-center gap-1 text-gray-700 dark:text-gray-400 text-sm font-medium mb-4">
                                            <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0" viewBox="0 0 24 24">
                                                <path d="M12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm5.676,8.237-6,5.5a1,1,0,0,1-1.383-.03l-3-3a1,1,0,1,1,1.414-1.414l2.323,2.323,5.294-4.853a1,1,0,1,1,1.352,1.474Z" />
                                            </svg>
                                            <span>All features and benefits
                                            </span>
                                        </li>
                                    </ul>
                                    <?php
                                    if (isset($_SESSION['Remaining_days']) < 1 || $avaliableTickets === 0 ) : ?>
                                        <button class="inline-flex items-center justify-center bg-primary-100 hover:bg-orange text-white h-10 px-5 rounded-lg text-sm font-medium leading-none transition-all duration-200 whitespace-nowrap disabled:opacity-50 disabled:cursor-default hover:bg-blue-4 w-full" href="../../Buyticket/reserveTicket/<?= $id ?>" disabled>
                                            <span>No tickets</span>
                                        </button>
                                    <?php else : ?>
                                        <a class="inline-flex items-center justify-center bg-primary-100 hover:bg-orange text-white h-10 px-5 rounded-lg text-sm font-medium leading-none transition-all duration-200 whitespace-nowrap disabled:opacity-50 disabled:cursor-default hover:bg-blue-4 w-full" href="../../Buyticket/reserveTicket/<?= $id ?>">
                                            <span>Get ticket</span>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>

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
<script src="<?= URL_DIR ?>public/assets/js/theme.js"></script>
<script src="<?= URL_DIR ?>public/assets/js/navbar.js"></script>
<script src="<?= URL_DIR ?>public/assets/js/home.js"></script>

</html>