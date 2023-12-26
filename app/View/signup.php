<?php
// include(__DIR__."/includes/head.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/dist/output.css">
    <title>Contact</title>
</head>

<body>
    <?php
    // include(__DIR__ . "/includes/navbar.php");
    ?>
    <section class="gradiant dark:bg-gray-900 font-poppins">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen">
            <div
                class="w-full bg-white bg-opacity-25 rounded-2xl shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1
                        class="text-2xl md:text-3xl lg:text-4xl  text-center font-bold leading-tight tracking-tight text-gray-100 dark:text-white">
                        Get in <span class="text-orange-600">Touch</span>
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
                                <label for="description"
                                    class="block mb-2 text-sm font-medium text-gray-100 dark:text-white">Your
                                    message</label>
                                <textarea id="description" rows="8"
                                    class="block p-2.5 w-full text-sm text-gray-100 bg-gray-200 rounded-lg border border-gray-300 focus:ring-orange-500 focus:border-orange-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-500 dark:focus:border-orange-500"
                                    placeholder="Write us your message here..."></textarea>
                            </div>
                            <div class="sm:col-span-2">
                                <button type="submit"
                                    class="w-full text-white bg-orange-600 hover:bg-orange-700 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-800">Send</button>
                            </div>
                            <div class="w-full flex justify-center align-middle">
                                <svg class="my-auto" xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 29 29"
                                    fill="none">
                                    <path
                                        d="M16.2047 0.424194V2.35263C18.1121 2.35263 19.899 2.83474 21.5654 3.79896C23.1516 4.74309 24.4165 6.00863 25.3601 7.59557C26.3238 9.26286 26.8057 11.0507 26.8057 12.959H28.7332C28.7332 10.6891 28.1609 8.57988 27.0165 6.63135C25.9122 4.74309 24.4165 3.24654 22.5292 2.14171C20.5816 0.996699 18.4735 0.424194 16.2047 0.424194ZM6.23611 3.31685C5.69401 3.31685 5.22219 3.4876 4.82064 3.82909L1.71863 6.99293L1.80898 6.93267C1.30704 7.35451 0.97576 7.8768 0.815138 8.49952C0.674594 9.12225 0.71475 9.72488 0.935604 10.3074C1.49778 11.8743 2.25069 13.4813 3.19434 15.1285C4.51947 17.3985 6.09557 19.4374 7.92264 21.2453C10.854 24.1982 14.4981 26.5284 18.8549 28.2359H18.8851C19.4673 28.4368 20.0496 28.4769 20.6318 28.3564C21.2341 28.2359 21.7662 27.9747 22.228 27.573L25.2698 24.5297C25.6713 24.1279 25.8721 23.6357 25.8721 23.0532C25.8721 22.4506 25.6713 21.9484 25.2698 21.5466L21.3245 17.5692C20.9229 17.1674 20.421 16.9666 19.8187 16.9666C19.2163 16.9666 18.7144 17.1674 18.3128 17.5692L16.4155 19.4976C14.8896 18.7745 13.5645 17.8806 12.4401 16.8159C11.3158 15.7312 10.4223 14.4154 9.75975 12.8686L11.6872 10.9402C12.1088 10.4983 12.3196 9.97598 12.3196 9.37335C12.3196 8.75062 12.0787 8.24843 11.5969 7.86676L11.6872 7.95715L7.65159 3.82909C7.25003 3.4876 6.77821 3.31685 6.23611 3.31685ZM16.2047 4.28107V6.20951C17.4294 6.20951 18.5538 6.51082 19.5777 7.11346C20.6218 7.7161 21.445 8.5397 22.0473 9.58427C22.6496 10.6088 22.9508 11.7337 22.9508 12.959H24.8782C24.8782 11.3922 24.4867 9.93581 23.7037 8.58992C22.9207 7.28421 21.8766 6.23964 20.5716 5.45621C19.2264 4.67278 17.7707 4.28107 16.2047 4.28107ZM6.23611 5.24529C6.29635 5.24529 6.36662 5.27542 6.44693 5.33568L10.3922 9.37335C10.4123 9.4537 10.3922 9.52401 10.332 9.58427L7.47089 12.4167L7.6817 13.0193L8.07322 13.863C8.39446 14.546 8.7659 15.2089 9.18753 15.8517C9.76978 16.7556 10.4123 17.529 11.115 18.1718C12.0586 19.0959 13.193 19.9396 14.5182 20.7029C15.1807 21.0846 15.7429 21.3658 16.2047 21.5466L16.807 21.8178L19.7283 18.895C19.7685 18.8548 19.7986 18.8347 19.8187 18.8347C19.8387 18.8347 19.8689 18.8548 19.909 18.895L23.9747 22.9628C24.0149 23.003 24.035 23.0331 24.035 23.0532C24.035 23.0532 24.0149 23.0733 23.9747 23.1135L20.9631 26.0965C20.5214 26.4782 20.0395 26.5786 19.5175 26.3978C15.4217 24.8109 12.0084 22.6414 9.27788 19.8894C7.59136 18.202 6.11565 16.2836 4.85075 14.1342C3.94726 12.5874 3.24454 11.0909 2.7426 9.64453V9.6144C2.66228 9.43361 2.65225 9.22269 2.71248 8.98163C2.77271 8.72049 2.88314 8.51961 3.04376 8.379L6.0253 5.33568C6.08553 5.27542 6.1558 5.24529 6.23611 5.24529ZM16.2047 8.13794V10.0664C17.0078 10.0664 17.6904 10.3476 18.2526 10.9101C18.8148 11.4725 19.0959 12.1555 19.0959 12.959H21.0233C21.0233 12.0953 20.8025 11.2917 20.3608 10.5485C19.9391 9.80524 19.3569 9.22269 18.614 8.80084C17.8711 8.35891 17.068 8.13794 16.2047 8.13794Z"
                                        fill="white" />
                                </svg>
                                <div class="ml-3 text-gray-100">
                                    <p>PHONE</p>
                                    <p class="text-orange-600">(+212) 666-6666</p>
                                </div>
                            </div>
                            <div class="w-full flex justify-center align-middle">
                                <svg class="my-auto" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28"
                                    fill="none">
                                    <path
                                        d="M7.95455 2.625V4.59624L1.75 8.63565V25.375H26.5682V8.63565L20.3636 4.59624V2.625H7.95455ZM10.0227 4.69318H18.2955V12.6428L14.1591 15.3249L10.0227 12.6428V4.69318ZM11.0568 6.76136V8.82955H17.2614V6.76136H11.0568ZM7.95455 7.0522V11.2855L4.6907 9.18501L7.95455 7.0522ZM20.3636 7.0522L23.6275 9.18501L20.3636 11.2855V7.0522ZM11.0568 9.86364V11.9318H17.2614V9.86364H11.0568ZM3.81818 11.0916L14.1591 17.7809L24.5 11.0916V23.3068H3.81818V11.0916Z"
                                        fill="white" />
                                </svg>
                                <div class="ml-3 text-gray-100">
                                    <p>EMAIL</p>
                                    <p class="text-orange-600">info@caf.com.af</p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>

</html>