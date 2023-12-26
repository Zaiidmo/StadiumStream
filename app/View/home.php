<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="public/assets/dist/output.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

</head>
<body class="dark:bg-gray-900">
<?php
        include '../app/View/includes/navbar.php';
?>

<section>
<div class="relative">
  <img src="public/assets/images/herobg.svg" class="absolute inset-0 object-cover w-full h-full" alt="" />
  <div class="relative customgradient" >
    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
      <div class="flex flex-col items-center justify-between xl:flex-row">
        <div class="w-full max-w-xl mb-12 xl:mb-0 xl:pr-16 xl:w-7/12">
          <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-white sm:text-4xl sm:leading-none">
          Feel the Passion: Get Your Ticket to the Epic <br class="hidden md:block" />
            <span class="text-teal-accent-400">African Football Journey!</span>
          </h2>
          <p class="max-w-xl mb-4 text-base text-gray-400 md:text-lg">
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudan, totam rem aperiam, eaque ipsa quae.
          </p>
          <a href="/" aria-label="" class="inline-flex items-center font-semibold tracking-wider transition-colors duration-200 text-teal-accent-400 hover:text-teal-accent-700">
            Learn more
            <svg class="inline-block w-3 ml-2" fill="currentColor" viewBox="0 0 12 12">
              <path d="M9.707,5.293l-5-5A1,1,0,0,0,3.293,1.707L7.586,6,3.293,10.293a1,1,0,1,0,1.414,1.414l5-5A1,1,0,0,0,9.707,5.293Z"></path>
            </svg>
          </a>
        </div>
        <div class="w-full max-w-xl xl:px-8 xl:w-5/12">
          <img src="public/assets/images/player.svg"
            class="w-full rounded-lg shadow-lg dark:shadow-black/20" alt="" />
        </div>
      </div>
    </div>
  </div>
</div>  
</section>

<!-- Section: Design Block -->
</body>
<script src="public/assets/js/theme.js"></script>
</html>