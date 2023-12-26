<!-- <nav class="fixed top-0 z-50 w-full bg-[#004634] border-b lg:px-10 border-gray-200 dark:bg-gray-800 dark:border-gray-700">
    <div class="flex items-center justify-between px-3 py-3 lg:px-8 lg:pl-3">
        <div id="logo" class="flex items-center ">
            <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" id="sidebar-toggle-button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg smXl:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                <span class="sr-only">Open sidebar</span>

                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                    </path>
                </svg>
            </button>
            <a href="../src/index.php" class="flex ml-2 md:mr-24 gap-5 items-center">
                <svg width="35" height="35" viewBox="0 0 128 128" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M43.53 5.3C43.53 4.22 44.13 3.82 45.28 3.82C46.43 3.82 82.89 3.68 83.5 3.68C84.1 3.68 84.78 4.28 84.71 5.09C84.64 5.9 84.78 17.32 84.71 17.92C84.64 18.52 84.31 19.2 83.43 19.26C82.56 19.33 45.75 19.46 45.01 19.46C44.27 19.46 43.67 18.59 43.6 17.78C43.53 16.97 43.53 5.97 43.53 5.3Z" fill="#546F7B" />
                    <path d="M48.7 18.66H53.47V23.9H48.7V18.66ZM75.17 18.87H79.71V23.95H75.17V18.87Z" fill="#546F7B" />
                    <path d="M47.49 6.71H81.14V15.78H47.49V6.71Z" fill="#C9C8C7" />
                    <path d="M92.83 27.13C92.83 27.13 92.96 10.2 92.96 9.53C92.96 8.86 93.5 8.25 94.44 8.52C95.38 8.79 96.99 9.66 99.81 10.54C102.63 11.42 105.78 12.49 106.07 12.87C106.53 13.48 104.11 15.11 100.61 16.99C97.43 18.7 95.84 19.74 95.84 19.74L95.64 28.2L93.22 29.07L92.83 27.13Z" fill="#2385F8" />
                    <path d="M109.76 35.79V19.2C109.76 18.33 110.77 17.86 111.51 18.06C112.25 18.26 113.66 19.13 116.14 20.14C118.31 21.02 122.24 22.05 122.19 22.76C122.11 23.77 118.93 25.07 117.08 26.26C115.2 27.47 112.38 28.81 112.38 28.81V39.29L109.76 35.79Z" fill="#4BC5FC" />
                    <path d="M36.08 26.24V8.29C36.08 7.41 34.9 7.37 33.98 7.53C32.99 7.71 31.5 8.87 29.16 9.39C26.82 9.91 23.49 10.23 22.99 11.09C22.69 11.61 24.51 13.9 27.08 15.18C29.65 16.46 33.57 18.4 33.57 18.4V27.11L36.08 26.24Z" fill="#2385F8" />
                    <path d="M19.25 33.14C19.25 33.14 19.19 18.35 19.19 18.06C19.19 17.77 18.49 17.3 17.44 17.71C16.39 18.12 6.65999 21.23 6.50999 21.92C6.23999 23.2 11.64 25.11 12.93 25.69C14.22 26.27 16.68 27.41 16.68 27.41V35.71L19.25 33.14Z" fill="#4BC5FC" />
                    <path d="M5.19 53.86C4.45 47.21 12.39 20.82 63.51 21.36C117.66 21.94 122.47 50.38 122.18 53.7C121.98 56.01 121.56 77.82 121.56 77.82C121.56 77.82 63.94 95.87 63.94 95.29C63.94 94.71 11.96 78.25 11.96 78.25C11.96 78.25 5.75 58.89 5.19 53.86Z" fill="#EE3E23" />
                    <path d="M62.62 21.36C62.62 21.36 63.24 21.34 64.11 21.36C64.98 21.38 65.64 21.4 65.64 21.4L65.71 58.97L62.61 58.9C62.6 58.91 62.73 21.47 62.62 21.36ZM100.94 28.36L82.43 61.25L84.98 62.21L103.47 29.59L100.94 28.36ZM122.31 54.15L99.45 70.95L100.14 73.43L122.11 57.52C122.1 57.53 122.44 53.26 122.31 54.15ZM25.94 27.87L42.56 62.28L44.29 59.94L28.41 26.81L25.94 27.87ZM5.51001 49.98L29.35 70.54L27.97 72.54L5.16001 53.26C5.16001 53.26 5.15001 52.3 5.23001 51.57C5.32001 50.83 5.51001 49.98 5.51001 49.98Z" fill="#AE111F" />
                    <path d="M25.37 78.34C25.37 78.34 25.08 75.38 25.76 72.73C26.92 68.18 35.24 55.12 64.56 55.6C93.68 56.08 102.2 68.18 102.29 74.47C102.39 80.76 98.9 80.66 98.9 80.66L62.04 90.04L43.24 84.04L25.37 78.34Z" fill="#B7D016" />
                    <path d="M85.88 67.98C85.88 67.15 85.21 66.49 84.38 66.49H43.26C42.43 66.49 41.76 67.16 41.76 67.99L41.73 84.05L44.73 84.06L44.76 69.5H62.58V86H64.58V69.5H82.89L82.98 83.88L85.98 83.86L85.88 67.98Z" fill="white" />
                    <path d="M5.37999 50.47C5.37999 50.47 4.41999 52.55 4.47999 57.05C4.50999 58.88 4.47999 89.78 4.47999 89.78L13.45 103.47L29.14 114.49L53.79 121.96H73.2L90.75 119.35L110.54 106.84L122.86 91.9C122.86 91.9 122.83 55.91 122.79 55.36C122.47 50.97 121.6 49.8 121.6 49.8C121.6 49.8 126.03 64.52 102.6 76.41C93.71 80.92 79.68 84.53 63.53 84.35C39.69 84.09 25.38 76.69 18.6 71.2C4.10999 59.46 5.37999 50.47 5.37999 50.47Z" fill="#B0B0B0" />
                    <path d="M4.54001 93.71C4.54001 93.71 9.76001 105.99 26.15 115.24C35.07 120.27 47.42 124.69 63.73 125.1C78.46 125.47 92.9 121.19 101.66 115.86C117.85 106 123.16 93.23 123.16 93.23L123.11 87C123.11 87 110.35 119.64 64.2 120.03C48.74 120.16 35.77 115.94 26.32 110.06C11.37 100.75 4.46001 88.09 4.46001 88.09L4.54001 93.71Z" fill="#858585" />
                    <path d="M4.65 64.35C4.65 64.35 15.1 90.6 63.68 90.92C109.86 91.22 122.91 66.43 122.91 66.43L122.83 61.05C122.83 61.05 111.16 88.41 63.79 88.02C14.08 87.62 4.5 58.59 4.5 58.59L4.65 64.35Z" fill="#858585" />
                    <path d="M29.21 116.93C28.89 116.43 29.45 92.76 29.45 91.71C29.45 90.22 30.68 87.5 34.44 88.73C37.96 89.88 38.74 93.25 38.74 95.19C38.74 97.13 38.92 118.69 38.92 119.22C38.92 119.75 39.07 120.97 38.13 120.72C37.71 120.6 35.03 119.85 33.28 119.08C32.15 118.56 29.53 117.42 29.21 116.93ZM10.52 102.72C10.39 102.2 10.43 83.13 10.43 81.89C10.43 79.43 12.57 77.55 15.1 79.04C17.63 80.53 18.92 83.25 18.99 86.88C19.05 90.51 19.08 109.13 19.14 109.65C19.2 110.17 18.89 110.53 18.3 110.1C18.13 109.98 14.86 107.57 13.5 106.21C12.14 104.86 10.52 102.72 10.52 102.72ZM88.89 121.49C88.25 121.03 88.5 98.19 88.5 96.63C88.5 95.07 88.96 90.13 93.56 89.31C98.62 88.4 98.1 93.72 98.16 95.47C98.22 97.03 98.47 117.16 98.31 117.67C98.23 117.93 95.94 118.98 93.68 119.93C91.8 120.71 89.03 121.58 88.89 121.49ZM108.52 111.06C108.07 110.98 108.45 89.2 108.54 86.94C108.64 84.61 109.69 80.46 112.99 79.25C116.17 78.08 117.15 79.97 117.15 83.02C117.15 84.9 116.94 102.55 116.88 103C116.84 103.28 115.49 104.73 113.67 106.6C111.75 108.58 108.74 111.1 108.52 111.06Z" fill="#2F2F2F" />
                    <path d="M13.54 47.21C13.47 47.92 16.98 50.97 17.41 50.93C17.84 50.89 20.41 48.14 20.41 47.57C20.41 47 16.89 43.89 16.66 43.93C16.12 44.03 13.58 46.73 13.54 47.21ZM29.49 52.45C29.52 52.99 31.77 57.16 32.61 57.13C33.66 57.09 36.45 54.91 36.39 54.4C36.33 53.89 33.96 50.02 33.24 49.93C32.53 49.85 29.46 51.86 29.49 52.45ZM18.6 35.98C18.62 36.36 21.11 40 21.56 39.96C22.01 39.92 24.79 37.97 24.85 37.45C24.91 36.86 22.58 33.52 22.01 33.39C21.44 33.26 18.56 35.25 18.6 35.98ZM37.54 38.61C37.51 38.9 39.53 43.76 40.14 43.72C40.99 43.66 43.9 42.64 43.98 42.12C44.06 41.59 42.09 36.75 41.73 36.71C41.37 36.67 37.58 38.21 37.54 38.61ZM44.88 30.95C44.75 31.49 45.84 34.37 46.1 34.88C46.42 35.53 46.99 35.98 48.09 35.69C48.92 35.47 50.77 34.8 50.85 34.11C50.93 33.42 49.35 29.65 48.86 29.4C48.37 29.15 45.04 30.3 44.88 30.95ZM54.13 34.36C54.5 34.59 58.5 34.25 58.63 33.95C58.95 33.22 58.51 28.76 58.06 28.43C57.61 28.11 53.75 28.42 53.56 28.8C52.99 29.93 53.48 33.95 54.13 34.36ZM49.1 46.69C48.61 47.15 50.19 51.7 50.81 52C51.53 52.35 54.87 51.12 55.07 50.7C55.31 50.16 53.68 45.72 53.22 45.58C52.32 45.32 49.7 46.14 49.1 46.69ZM70.11 32.15C69.2 32.85 69.2 37.69 69.65 38.48C70.02 39.13 73.76 39.22 74.31 38.71C74.62 38.42 75.1 33.03 74.77 32.52C74.45 32.01 70.71 31.68 70.11 32.15ZM79.43 27.25C78.88 27.8 78.23 33.11 78.6 33.53C79.16 34.16 82.62 34.55 83.17 34.22C83.72 33.9 84.79 28.63 84.51 27.85C84.24 27.07 80.06 26.63 79.43 27.25ZM80.31 47.3C79.62 47.53 77.8 53.02 77.91 53.49C78.19 54.69 81.88 55.66 82.62 55.24C83.05 55 84.93 49.61 84.84 49.14C84.74 48.69 81.04 47.06 80.31 47.3ZM105.66 38.1C104.6 38.27 101.92 42.63 101.92 43.32C101.92 44.01 104.78 45.95 105.34 45.86C105.89 45.77 109.13 40.78 109.13 40.41C109.13 40.04 106.54 37.96 105.66 38.1ZM105.76 54.45C104.93 54.45 100.91 58.51 100.91 59.11C100.91 59.71 103.22 61.93 104 62.02C104.78 62.11 108.89 57.91 108.94 57.17C108.99 56.44 106.59 54.45 105.76 54.45Z" fill="#FF7879" />
                    <path d="M51.45 124.05C51.04 123.64 51.5 107.38 51.57 104.7C51.65 101.45 53.93 92.92 63.99 92.76C74.06 92.6 76.98 101.86 76.98 104.86C76.98 107.86 77.15 123.75 76.78 124.24C76.62 124.46 71.54 125.34 63.74 125.26C56.34 125.18 51.86 124.45 51.45 124.05Z" fill="#2F2F2F" />
                </svg>
                <span class="font-poppins tracking-wider font-semibold dark:text-white">Stadium Stream</span>
            </a>
        </div>
        <div id="right_side" class="flex relative items-center ml-3">
            <div id="theme-toggler">
                <button aria-label="theme-toggle" id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                    <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
               </svg>
               <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
               </svg>
                    
               
                </button>
            </div>
            <button data-collapse-toggle="navbar-hamburger" type="button" class="inline-flex items-center justify-center p-2 w-10 h-10 text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-hamburger" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>
    </div>
    <div>
        <div class="hidden w-full" id="navbar-hamburger">
            <ul class="flex flex-col font-medium mt-4 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                <li>
                    <a href="#" class="block py-2 px-3 text-white bg-blue-700 rounded dark:bg-blue-600" aria-current="page">Home</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Services</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white">Pricing</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav> -->


<!-- 
<div class="p-4 sm:ml-64">
   <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
      <div class="grid grid-cols-3 gap-4 mb-4">
         <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500">
               <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
               </svg>
            </p>
         </div>
         <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500">
               <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
               </svg>
            </p>
         </div>
         <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500">
               <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
               </svg>
            </p>
         </div>
      </div>
      <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
         <p class="text-2xl text-gray-400 dark:text-gray-500">
            <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
               <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
            </svg>
         </p>
      </div>
      <div class="grid grid-cols-2 gap-4 mb-4">
         <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500">
               <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
               </svg>
            </p>
         </div>
         <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500">
               <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
               </svg>
            </p>
         </div>
         <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500">
               <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
               </svg>
            </p>
         </div>
         <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500">
               <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
               </svg>
            </p>
         </div>
      </div>
      <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
         <p class="text-2xl text-gray-400 dark:text-gray-500">
            <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
               <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
            </svg>
         </p>
      </div>
      <div class="grid grid-cols-2 gap-4">
         <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500">
               <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
               </svg>
            </p>
         </div>
         <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500">
               <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
               </svg>
            </p>
         </div>
         <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500">
               <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
               </svg>
            </p>
         </div>
         <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500">
               <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
               </svg>
            </p>
         </div>
      </div>
   </div>
</div> -->
<!-- Desktop sidebar -->
<header class="z-40 py-4 flex bg-white shadow-md dark:bg-gray-800">
    <div id="logo" class="flex items-center ml-auto z-40">
        <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" id="sidebar-toggle-button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg smXl:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                </path>
            </svg>
        </button>
        <a href="../src/index.php" class="flex ml-4 md:mr-24 gap-5 items-center">
            <svg width="35" height="35" viewBox="0 0 128 128" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M43.53 5.3C43.53 4.22 44.13 3.82 45.28 3.82C46.43 3.82 82.89 3.68 83.5 3.68C84.1 3.68 84.78 4.28 84.71 5.09C84.64 5.9 84.78 17.32 84.71 17.92C84.64 18.52 84.31 19.2 83.43 19.26C82.56 19.33 45.75 19.46 45.01 19.46C44.27 19.46 43.67 18.59 43.6 17.78C43.53 16.97 43.53 5.97 43.53 5.3Z" fill="#546F7B" />
                <path d="M48.7 18.66H53.47V23.9H48.7V18.66ZM75.17 18.87H79.71V23.95H75.17V18.87Z" fill="#546F7B" />
                <path d="M47.49 6.71H81.14V15.78H47.49V6.71Z" fill="#C9C8C7" />
                <path d="M92.83 27.13C92.83 27.13 92.96 10.2 92.96 9.53C92.96 8.86 93.5 8.25 94.44 8.52C95.38 8.79 96.99 9.66 99.81 10.54C102.63 11.42 105.78 12.49 106.07 12.87C106.53 13.48 104.11 15.11 100.61 16.99C97.43 18.7 95.84 19.74 95.84 19.74L95.64 28.2L93.22 29.07L92.83 27.13Z" fill="#2385F8" />
                <path d="M109.76 35.79V19.2C109.76 18.33 110.77 17.86 111.51 18.06C112.25 18.26 113.66 19.13 116.14 20.14C118.31 21.02 122.24 22.05 122.19 22.76C122.11 23.77 118.93 25.07 117.08 26.26C115.2 27.47 112.38 28.81 112.38 28.81V39.29L109.76 35.79Z" fill="#4BC5FC" />
                <path d="M36.08 26.24V8.29C36.08 7.41 34.9 7.37 33.98 7.53C32.99 7.71 31.5 8.87 29.16 9.39C26.82 9.91 23.49 10.23 22.99 11.09C22.69 11.61 24.51 13.9 27.08 15.18C29.65 16.46 33.57 18.4 33.57 18.4V27.11L36.08 26.24Z" fill="#2385F8" />
                <path d="M19.25 33.14C19.25 33.14 19.19 18.35 19.19 18.06C19.19 17.77 18.49 17.3 17.44 17.71C16.39 18.12 6.65999 21.23 6.50999 21.92C6.23999 23.2 11.64 25.11 12.93 25.69C14.22 26.27 16.68 27.41 16.68 27.41V35.71L19.25 33.14Z" fill="#4BC5FC" />
                <path d="M5.19 53.86C4.45 47.21 12.39 20.82 63.51 21.36C117.66 21.94 122.47 50.38 122.18 53.7C121.98 56.01 121.56 77.82 121.56 77.82C121.56 77.82 63.94 95.87 63.94 95.29C63.94 94.71 11.96 78.25 11.96 78.25C11.96 78.25 5.75 58.89 5.19 53.86Z" fill="#EE3E23" />
                <path d="M62.62 21.36C62.62 21.36 63.24 21.34 64.11 21.36C64.98 21.38 65.64 21.4 65.64 21.4L65.71 58.97L62.61 58.9C62.6 58.91 62.73 21.47 62.62 21.36ZM100.94 28.36L82.43 61.25L84.98 62.21L103.47 29.59L100.94 28.36ZM122.31 54.15L99.45 70.95L100.14 73.43L122.11 57.52C122.1 57.53 122.44 53.26 122.31 54.15ZM25.94 27.87L42.56 62.28L44.29 59.94L28.41 26.81L25.94 27.87ZM5.51001 49.98L29.35 70.54L27.97 72.54L5.16001 53.26C5.16001 53.26 5.15001 52.3 5.23001 51.57C5.32001 50.83 5.51001 49.98 5.51001 49.98Z" fill="#AE111F" />
                <path d="M25.37 78.34C25.37 78.34 25.08 75.38 25.76 72.73C26.92 68.18 35.24 55.12 64.56 55.6C93.68 56.08 102.2 68.18 102.29 74.47C102.39 80.76 98.9 80.66 98.9 80.66L62.04 90.04L43.24 84.04L25.37 78.34Z" fill="#B7D016" />
                <path d="M85.88 67.98C85.88 67.15 85.21 66.49 84.38 66.49H43.26C42.43 66.49 41.76 67.16 41.76 67.99L41.73 84.05L44.73 84.06L44.76 69.5H62.58V86H64.58V69.5H82.89L82.98 83.88L85.98 83.86L85.88 67.98Z" fill="white" />
                <path d="M5.37999 50.47C5.37999 50.47 4.41999 52.55 4.47999 57.05C4.50999 58.88 4.47999 89.78 4.47999 89.78L13.45 103.47L29.14 114.49L53.79 121.96H73.2L90.75 119.35L110.54 106.84L122.86 91.9C122.86 91.9 122.83 55.91 122.79 55.36C122.47 50.97 121.6 49.8 121.6 49.8C121.6 49.8 126.03 64.52 102.6 76.41C93.71 80.92 79.68 84.53 63.53 84.35C39.69 84.09 25.38 76.69 18.6 71.2C4.10999 59.46 5.37999 50.47 5.37999 50.47Z" fill="#B0B0B0" />
                <path d="M4.54001 93.71C4.54001 93.71 9.76001 105.99 26.15 115.24C35.07 120.27 47.42 124.69 63.73 125.1C78.46 125.47 92.9 121.19 101.66 115.86C117.85 106 123.16 93.23 123.16 93.23L123.11 87C123.11 87 110.35 119.64 64.2 120.03C48.74 120.16 35.77 115.94 26.32 110.06C11.37 100.75 4.46001 88.09 4.46001 88.09L4.54001 93.71Z" fill="#858585" />
                <path d="M4.65 64.35C4.65 64.35 15.1 90.6 63.68 90.92C109.86 91.22 122.91 66.43 122.91 66.43L122.83 61.05C122.83 61.05 111.16 88.41 63.79 88.02C14.08 87.62 4.5 58.59 4.5 58.59L4.65 64.35Z" fill="#858585" />
                <path d="M29.21 116.93C28.89 116.43 29.45 92.76 29.45 91.71C29.45 90.22 30.68 87.5 34.44 88.73C37.96 89.88 38.74 93.25 38.74 95.19C38.74 97.13 38.92 118.69 38.92 119.22C38.92 119.75 39.07 120.97 38.13 120.72C37.71 120.6 35.03 119.85 33.28 119.08C32.15 118.56 29.53 117.42 29.21 116.93ZM10.52 102.72C10.39 102.2 10.43 83.13 10.43 81.89C10.43 79.43 12.57 77.55 15.1 79.04C17.63 80.53 18.92 83.25 18.99 86.88C19.05 90.51 19.08 109.13 19.14 109.65C19.2 110.17 18.89 110.53 18.3 110.1C18.13 109.98 14.86 107.57 13.5 106.21C12.14 104.86 10.52 102.72 10.52 102.72ZM88.89 121.49C88.25 121.03 88.5 98.19 88.5 96.63C88.5 95.07 88.96 90.13 93.56 89.31C98.62 88.4 98.1 93.72 98.16 95.47C98.22 97.03 98.47 117.16 98.31 117.67C98.23 117.93 95.94 118.98 93.68 119.93C91.8 120.71 89.03 121.58 88.89 121.49ZM108.52 111.06C108.07 110.98 108.45 89.2 108.54 86.94C108.64 84.61 109.69 80.46 112.99 79.25C116.17 78.08 117.15 79.97 117.15 83.02C117.15 84.9 116.94 102.55 116.88 103C116.84 103.28 115.49 104.73 113.67 106.6C111.75 108.58 108.74 111.1 108.52 111.06Z" fill="#2F2F2F" />
                <path d="M13.54 47.21C13.47 47.92 16.98 50.97 17.41 50.93C17.84 50.89 20.41 48.14 20.41 47.57C20.41 47 16.89 43.89 16.66 43.93C16.12 44.03 13.58 46.73 13.54 47.21ZM29.49 52.45C29.52 52.99 31.77 57.16 32.61 57.13C33.66 57.09 36.45 54.91 36.39 54.4C36.33 53.89 33.96 50.02 33.24 49.93C32.53 49.85 29.46 51.86 29.49 52.45ZM18.6 35.98C18.62 36.36 21.11 40 21.56 39.96C22.01 39.92 24.79 37.97 24.85 37.45C24.91 36.86 22.58 33.52 22.01 33.39C21.44 33.26 18.56 35.25 18.6 35.98ZM37.54 38.61C37.51 38.9 39.53 43.76 40.14 43.72C40.99 43.66 43.9 42.64 43.98 42.12C44.06 41.59 42.09 36.75 41.73 36.71C41.37 36.67 37.58 38.21 37.54 38.61ZM44.88 30.95C44.75 31.49 45.84 34.37 46.1 34.88C46.42 35.53 46.99 35.98 48.09 35.69C48.92 35.47 50.77 34.8 50.85 34.11C50.93 33.42 49.35 29.65 48.86 29.4C48.37 29.15 45.04 30.3 44.88 30.95ZM54.13 34.36C54.5 34.59 58.5 34.25 58.63 33.95C58.95 33.22 58.51 28.76 58.06 28.43C57.61 28.11 53.75 28.42 53.56 28.8C52.99 29.93 53.48 33.95 54.13 34.36ZM49.1 46.69C48.61 47.15 50.19 51.7 50.81 52C51.53 52.35 54.87 51.12 55.07 50.7C55.31 50.16 53.68 45.72 53.22 45.58C52.32 45.32 49.7 46.14 49.1 46.69ZM70.11 32.15C69.2 32.85 69.2 37.69 69.65 38.48C70.02 39.13 73.76 39.22 74.31 38.71C74.62 38.42 75.1 33.03 74.77 32.52C74.45 32.01 70.71 31.68 70.11 32.15ZM79.43 27.25C78.88 27.8 78.23 33.11 78.6 33.53C79.16 34.16 82.62 34.55 83.17 34.22C83.72 33.9 84.79 28.63 84.51 27.85C84.24 27.07 80.06 26.63 79.43 27.25ZM80.31 47.3C79.62 47.53 77.8 53.02 77.91 53.49C78.19 54.69 81.88 55.66 82.62 55.24C83.05 55 84.93 49.61 84.84 49.14C84.74 48.69 81.04 47.06 80.31 47.3ZM105.66 38.1C104.6 38.27 101.92 42.63 101.92 43.32C101.92 44.01 104.78 45.95 105.34 45.86C105.89 45.77 109.13 40.78 109.13 40.41C109.13 40.04 106.54 37.96 105.66 38.1ZM105.76 54.45C104.93 54.45 100.91 58.51 100.91 59.11C100.91 59.71 103.22 61.93 104 62.02C104.78 62.11 108.89 57.91 108.94 57.17C108.99 56.44 106.59 54.45 105.76 54.45Z" fill="#FF7879" />
                <path d="M51.45 124.05C51.04 123.64 51.5 107.38 51.57 104.7C51.65 101.45 53.93 92.92 63.99 92.76C74.06 92.6 76.98 101.86 76.98 104.86C76.98 107.86 77.15 123.75 76.78 124.24C76.62 124.46 71.54 125.34 63.74 125.26C56.34 125.18 51.86 124.45 51.45 124.05Z" fill="#2F2F2F" />
            </svg>
            <span class="font-poppins tracking-wider font-semibold dark:text-white">Stadium Stream</span>
        </a>
    </div>
    <div class="container flex items-center h-full px-6 ml-auto text-gray-600 dark:text-gray-300">
        <!-- Mobile hamburger -->
        <button class="p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-purple" @click="toggleSideMenu" aria-label="Menu"> <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
            </svg>
        </button>
        <!-- Search input -->
        <!-- <div class="flex justify-center flex-1 lg:mr-32">
                <div class="relative w-full max-w-xl mr-6 focus-within:text-purple-500">
                    <div class="absolute inset-y-0 flex items-center pl-2">
                        <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <input class="w-full pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input" type="text" placeholder="Search for projects" aria-label="Search" />
                </div>
            </div> -->
        <ul class="flex items-center ml-auto lg:mr-24 flex-shrink-0 space-x-6">
            <!-- Theme toggler -->
            <li class="flex">
                <div id="theme-toggler">
                    <button aria-label="theme-toggle" id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                        <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                        </svg>
                        <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            </li>
            <!-- Notifications menu -->
            <li class="relative">
                <button id="notification-button" class="relative align-middle rounded-md focus:outline-none focus:shadow-outline-purple">
                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"></path>
                    </svg>
                    <!-- Notification badge -->
                    <span aria-hidden="true" class="absolute top-0 right-0 inline-block w-3 h-3 transform translate-x-1 -translate-y-1 bg-red-600 border-2 border-white rounded-full dark:border-gray-800"></span>
                </button>
                <ul id="notifications" class="hidden absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md dark:border-gray-700 dark:text-gray-300 dark:bg-gray-700">
                    <li class="flex">
                        <a class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200" href="#">
                            <span>Messages</span>
                            <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-600 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-600">
                                13
                            </span>
                        </a>
                    </li>
                    <li class="flex">
                        <a class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200" href="#">
                            <span>Sales</span>
                            <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-600 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-600">
                                2
                            </span>
                        </a>
                    </li>
                    <li class="flex">
                        <a class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200" href="#">
                            <span>Alerts</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- Profile menu -->
            <li class="relative">
                <button id="profile-menu-toggler" class="align-middle rounded-full focus:shadow-outline-purple focus:outline-none">
                    <img class="object-cover w-8 h-8 rounded-full" src="https://images.unsplash.com/photo-1502378735452-bc7d86632805?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&s=aa3a807e1bbdfd4364d1f449eaa96d82" alt="profile-picture" />
                </button>
                <ul id="profile-menu" class="hidden absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md dark:border-gray-700 dark:text-gray-300 dark:bg-gray-700" aria-label="submenu">
                    <li class="flex">
                        <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200" href="#">
                            <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            <span>Profile</span>
                        </a>
                    </li>
                    <li class="flex">
                        <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200" href="#">
                            <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span>Settings</span>
                        </a>
                    </li>
                    <li class="flex">
                        <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200" href="#">
                            <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                            </svg>
                            <span>Log out</span>
                        </a>
                    </li>
                </ul>

            </li>
        </ul>
    </div>
</header>
<aside id="sidebar" class="fixed hidden top-0 left-0 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
        <ul class="space-y-2 font-medium mt-16">
            <li>
                <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                        <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                        <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                    </svg>
                    <span class="ms-3">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                        <path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Home</span>
                    <!-- <span class="inline-flex items-center justify-center px-2 ms-3 text-sm font-medium text-gray-800 bg-gray-100 rounded-full dark:bg-gray-700 dark:text-gray-300">Pro</span> -->
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                        <path d="M1 1V17C1 17.5304 1.21071 18.0391 1.58579 18.4142C1.96086 18.7893 2.46957 19 3 19H19" stroke="#ABB2BF" stroke-width="2" stroke-miterlimit="5.759" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M5 12L9 8L13 12L19 6" stroke="#ABB2BF" stroke-width="2" stroke-miterlimit="5.759" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M16 6H19V9" stroke="#ABB2BF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span class="flex-1 ms-3  whitespace-nowrap">Statistics </span>
                    <!-- <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span> -->
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                        <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Users</span>
                </a>
            </li>
            <li>
                <a href="teams.php" class="flex items-center p-2 text--900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                        <path d="M10.5 2.5C10.5 3.16304 10.2366 3.79893 9.76777 4.26777C9.29893 4.73661 8.66304 5 8 5C7.33696 5 6.70107 4.73661 6.23223 4.26777C5.76339 3.79893 5.5 3.16304 5.5 2.5C5.5 1.83696 5.76339 1.20107 6.23223 0.732233C6.70107 0.263392 7.33696 0 8 0C8.66304 0 9.29893 0.263392 9.76777 0.732233C10.2366 1.20107 10.5 1.83696 10.5 2.5ZM15.5 3C15.5 3.53043 15.2893 4.03914 14.9142 4.41421C14.5391 4.78929 14.0304 5 13.5 5C12.9696 5 12.4609 4.78929 12.0858 4.41421C11.7107 4.03914 11.5 3.53043 11.5 3C11.5 2.46957 11.7107 1.96086 12.0858 1.58579C12.4609 1.21071 12.9696 1 13.5 1C14.0304 1 14.5391 1.21071 14.9142 1.58579C15.2893 1.96086 15.5 2.46957 15.5 3ZM2.5 5C3.03043 5 3.53914 4.78929 3.91421 4.41421C4.28929 4.03914 4.5 3.53043 4.5 3C4.5 2.46957 4.28929 1.96086 3.91421 1.58579C3.53914 1.21071 3.03043 1 2.5 1C1.96957 1 1.46086 1.21071 1.08579 1.58579C0.710714 1.96086 0.5 2.46957 0.5 3C0.5 3.53043 0.710714 4.03914 1.08579 4.41421C1.46086 4.78929 1.96957 5 2.5 5ZM4 7.25C4 6.56 4.56 6 5.25 6H10.75C11.44 6 12 6.56 12 7.25V12C12 13.0609 11.5786 14.0783 10.8284 14.8284C10.0783 15.5786 9.06087 16 8 16C6.93913 16 5.92172 15.5786 5.17157 14.8284C4.42143 14.0783 4 13.0609 4 12V7.25ZM3 7.25C3 6.787 3.14 6.358 3.379 6H1.25C0.56 6 1.78381e-08 6.56 1.78381e-08 7.25V11C-4.66659e-05 11.4281 0.0915386 11.8513 0.268602 12.2411C0.445665 12.6309 0.704104 12.9782 1.02655 13.2599C1.34901 13.5415 1.728 13.7508 2.13807 13.8738C2.54813 13.9968 2.97978 14.0307 3.404 13.973C3.13645 13.3497 2.99898 12.6783 3 12V7.25ZM13 12C13 12.7 12.856 13.368 12.596 13.973C13.0202 14.0307 13.4519 13.9968 13.8619 13.8738C14.272 13.7508 14.651 13.5415 14.9734 13.2599C15.2959 12.9782 15.5543 12.6309 15.7314 12.2411C15.9085 11.8513 16 11.4281 16 11V7.25C16 6.56 15.44 6 14.75 6H12.621C12.861 6.358 13 6.787 13 7.25V12Z" />
                    </svg>

                    <span class="flex-1 ms-3 whitespace-nowrap">Teams</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Sign In</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z" />
                        <path d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z" />
                        <path d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Sign Up</span>
                </a>
            </li>
        </ul>
    </div>
</aside>