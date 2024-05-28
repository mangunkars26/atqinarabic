<nav class="fixed top-0 left-0 right-0 mb-10 bg-white border-gray-200 dark:bg-gray-900 dark:border-gray-700 shadow-md z-50">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="/images/logoatqin.jpg" class="h-10" alt="Atqin Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Atqin Course</span>
        </a>
        <button data-collapse-toggle="navbar-dropdown" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="navbar-dropdown" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
            <ul
                class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">

                <li class="relative" x-data="{ open: false }">
                    <button @click="open = !open" type="button"
                        class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">
                        Program
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div x-show="open" x-transition class="absolute left-0 mt-2 w-40 rounded-md bg-white shadow-md"
                        @click.away="open = false">
                        <a href="/programs/regular"
                            class="block px-6 py-3 text-md text-gray-700 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Kelas Reguler</a>
                        <a href="/programs/private"
                            class="block px-6 py-3 text-md text-gray-700 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Kelas Private</a>
                        <a href="/programs/kelas-gratis"
                            class="block px-6 py-3 text-md text-gray-700 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Kelas Gratis</a>
                    </div>
                </li>


                <li>
                    <a href="/profile"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 
                        md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0
                         dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700
                          dark:hover:text-white md:dark:hover:bg-transparent">Profil</a>
                </li>
                <li>
                    <a href="/testimoni"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Testimoni</a>
                </li>
                <li>
                    <a href="/blog"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Blog</a>
                </li>
            </ul>
        </div>
    </div>
</nav>