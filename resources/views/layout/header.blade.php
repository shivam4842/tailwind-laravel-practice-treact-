<header class="lg:max-w-7xl lg:mx-auto slide-in from-right transition-transform duration-500">
    <nav class="block lg:flex text-center lg:text-left">
        <div class="flex items-center justify-between">  
            <a href="{{ route('index') }}" class="flex space-x-3 no-underline items-center text-secondary hover:text-primary dark:text-white">
                <img src="{{ asset('images/logo.svg') }}" alt="" class="w-10">
                <span class="font-black text-2xl tracking-wide">
                    Treact
                </span>
            </a>
            <button id="hamburger" class="block lg:hidden p-2 text-gray-700 focus:outline-none relative z-20">
                <!-- Hamburger Icon -->
                <svg id="hamburger-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                <!-- Close Icon -->
                <svg id="close-icon" class="hidden w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <ul id="menu" class="transition-transform duration-500 ease-in-out -translate-x-full lg:translate-x-0 animate-slide-in-from-right-to-left lg:animate-none  fixed lg:static top-0 left-5 right-5 bg-white z-10 mt-6 lg:mt-0 border-slate-200 border lg:border-none hidden lg:flex flex-col lg:flex-row items-center space-y-5 lg:space-y-0 p-6 lg:p-0 lg:gap-12  text-secondary ml-auto text-lg lg:text-sm font-semibold dark:text-white dark:bg-slate-950">
            <li>
                <a class="tracking-wide hover:text-primary hover:underline hover:decoration-2 underline-offset-8 transition ease-in-out duration-500" href="{{ route('about') }}">About</a>
            </li>
            <li>
                <a class="tracking-wide hover:text-primary hover:underline hover:decoration-2 underline-offset-8 transition ease-in-out duration-500" href="{{ route('blog') }}">Blog</a> 
            </li>
            <li>
                <a class="tracking-wide hover:text-primary hover:underline hover:decoration-2 underline-offset-8 transition ease-in-out duration-500" href="{{ route('pricing') }}">Pricing</a> 
            </li>
            <li>
                <a class="tracking-wide hover:text-primary hover:underline hover:decoration-2 underline-offset-8 transition ease-in-out duration-500" href="{{ route('contact-us') }}">Contact Us</a>
            </li>
            <li class="block lg:hidden">
                <a href="javascript:void(0)" class="tracking-wide hover:text-primary hover:underline hover:decoration-2 underline-offset-8 transition ease-in-out duration-500" id="open-modal1">Login</a></li>
            <li class="inline-flex lg:hidden">
                <a href="javascript:void(0)" class="tracking-wide py-2.5 px-8 bg-primary hover:bg-primary-focus text-white rounded transition ease-in-out duration-500" id="open-modal-register1">Sign Up</a>
            </li>
        </ul>
        <ul class="ml-20 hidden lg:flex items-center gap-6 text-sm font-semibold text-secondary dark:text-white">
            <li>
                <a href="javascript:void(0)" class="tracking-wide hover:text-primary hover:underline hover:decoration-2 underline-offset-8 transition ease-in-out duration-500" id="open-modal2">Login</a>
            </li>
            <li>
                <a href="javascript:void(0)" class="tracking-wide py-2.5 px-8 bg-primary hover:bg-primary-focus text-white rounded transition ease-in-out duration-500" id="open-modal-register2">Sign Up</a>
            </li>
        </ul>
    </nav>
</header>