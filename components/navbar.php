<nav class="flex flex-wrap items-center justify-between p-5 navbar">
    <div class="flex items-center flex-shrink-0 text-white mr-5">
        <span class="font-semibold text-xl tracking-tight">Hosting Free</span>
    </div>

    <div class="block lg:hidden">
        <button
            class="flex items-center px-3 py-2 border rounded text-white border-white hover:text-white hover:border-white"
            onclick="toggleMenu()">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <title>Menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
            </svg>
        </button>
    </div>

    <div id="menu" class="w-full flex-grow hidden lg:block lg:flex lg:items-center lg:w-auto">
        <div class="text-sm lg:flex-grow">
            <a href="#services" class="block mt-4 lg:inline-block lg:mt-0 hover:text-white mr-4">
                Services
            </a>

            <a href="#support" class="block mt-4 lg:inline-block lg:mt-0 hover:text-white mr-4">
                Support
            </a>
        </div>
    </div>
</nav>