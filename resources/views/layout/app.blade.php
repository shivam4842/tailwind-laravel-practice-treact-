<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Treact</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>
    <link rel="icon" href="{{ asset('images/logo.svg') }}">
    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-inter dark:bg-slate-950">
    <div class="flex flex-col min-h-screen overflow-hidden p-8">
        <main class="flex-grow">
            @include('layout.header')
            
            @yield('content')
        </main>
        @include('layout.footer')
    </div>

    <!-- modal login -->
    <div id="modal" class="fixed z-50 inset-0  bg-gray-800 bg-opacity-50 hidden items-center justify-center">
        <!-- Modal Container -->
        <div class="bg-white rounded-lg shadow-lg max-w-sm mx-4 md:mx-0 relative dark:bg-slate-950/85">
            <!-- Modal Header -->
            <div class="flex items-center justify-center">
                <h3 class="text-2xl font-black flex space-x-3 no-underline items-center text-secondary hover:text-primary px-6 pt-8 dark:text-white"> 
                    <img src="{{ asset('images/logo.svg') }}" alt="" class="w-10">
                    <span class="tracking-wide">
                        Treact
                    </span>
                </h3>
            </div>
            <button id="close-modal" class="absolute top-3 right-3 text-xl text-gray-500 hover:text-gray-700 py-0.5 px-2.5">
                <i class="fa-solid fa-xmark"></i>
            </button>
            <!-- Modal Body -->
            <div class="px-6 pt-8 pb-8">
                <form id="login-form">
                    <div class="mb-6">
                        <label for="email" class="text-gray-700 dark:text-white">Email</label>
                        <input type="email" id="email" name="email" class="w-full rounded border-solid py-2 px-4 hover:border-primary-focus placeholder-slate-500 border-slate-200 border-2 outline-none" placeholder="Enter email" required>
                    </div>
                    <div class="mb-6">
                        <label for="password" class="text-gray-700 dark:text-white">Password</label>
                        <input type="password" id="password" name="password" class="w-full rounded border-solid py-2 px-4 hover:border-primary-focus placeholder-slate-500 border-slate-200 border-2 outline-none" placeholder="Enter password" required>
                        <div class="text-end mt-2">
                            <a href="#" class="text-primary font-medium hover:underline hover:decoration-2 hover:underline-offset-4
                            text-sm">Forgot Password ?</a>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="w-full bg-primary text-white py-2 px-6 rounded-md shadow-sm hover:bg-primary-focus focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Log In</button>
                    </div>
                    <p class="pt-8 text-center text-gray-500/90 text-base font-medium dark:text-white">Not Yet Account. <a href="javascript:void(0)" id="sign-up-link" class="text-primary hover:underline hover:decoration-2 hover:underline-offset-4
                        ">Sign Up</a></p>
                </form>
                <form id="register-form">
                    <div class="mb-6">
                        <label for="first-name" class="text-gray-700 dark:text-white">First Name</label>
                        <input type="text" id="first-name" name="first-name" class="w-full rounded border-solid py-2 px-4 hover:border-primary-focus placeholder-slate-500 border-slate-200 border-2 outline-none" placeholder="Enter first name" required>
                    </div>
                    <div class="mb-6">
                        <label for="last-name" class="text-gray-700 dark:text-white">Last Name</label>
                        <input type="text" id="last-name" name="last-name" class="w-full rounded border-solid py-2 px-4 hover:border-primary-focus placeholder-slate-500 border-slate-200 border-2 outline-none" placeholder="Enter last name" required>
                    </div>
                    <div class="mb-6">
                        <label for="email" class="text-gray-700 dark:text-white">Email</label>
                        <input type="email" id="email" name="email" class="w-full rounded border-solid py-2 px-4 hover:border-primary-focus placeholder-slate-500 border-slate-200 border-2 outline-none" placeholder="Enter email" required>
                    </div>
                    <div class="mb-6">
                        <label for="password" class="text-gray-700 dark:text-white">Password</label>
                        <input type="password" id="password" name="password" class="w-full rounded border-solid py-2 px-4 hover:border-primary-focus placeholder-slate-500 border-slate-200 border-2 outline-none" placeholder="Enter password" required>
                    </div>
                    <div class="mb-6">
                        <label for="confirm-password" class="text-gray-700 dark:text-white">Confirm Password</label>
                        <input type="password" id="confirm-password" name="confirm-password" class="w-full rounded border-solid py-2 px-4 hover:border-primary-focus placeholder-slate-500 border-slate-200 border-2 outline-none" placeholder="Enter confirm password" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="w-full bg-primary text-white py-2 px-6 rounded-md shadow-sm hover:bg-primary-focus focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Loading overlay -->
    <div id="loading-overlay" class="fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center z-50">
        <div class="text-white text-xl">Loading...</div>
    </div>
    <script>
        // tabs js
        document.addEventListener('DOMContentLoaded', function () {
        const tabs = document.querySelectorAll('.tab-button');
        const contents = document.querySelectorAll('.tab-content');

            tabs.forEach((tab, index) => {
                tab.addEventListener('click', function () {
                    // Remove active classes from all tabs and hide all content
                    tabs.forEach((item) => {
                        item.classList.remove('bg-primary', 'text-white', 'pointer-events-none');
                        item.classList.add('hover:bg-slate-200', 'hover:text-slate-600');
                    });
                    contents.forEach((item) => {
                        // Reset content to hidden state
                        item.classList.add('opacity-0', 'scale-90', '-translate-y-1', 'hidden');
                        item.classList.remove('opacity-100', 'scale-100', 'translate-y-0', 'active');
                    });

                    // Add active classes to the clicked tab and show corresponding content
                    tab.classList.add('bg-primary', 'text-white', 'pointer-events-none');
                    tab.classList.remove('hover:bg-slate-200', 'hover:text-slate-600');
                    const content = contents[index];
                    // Remove hidden class before applying transition classes
                    content.classList.remove('hidden');
                    // Activate content with smooth transition
                    setTimeout(() => {
                        content.classList.remove('opacity-0', 'scale-90', '-translate-y-1');
                        content.classList.add('opacity-100', 'scale-100', 'translate-y-0', 'active');
                    }, 150); // Small delay to allow hidden class to be removed before transition starts
                });
            });

            // Activate the first tab by default
            tabs[0].classList.add('bg-primary', 'text-white', 'pointer-events-none');
            tabs[0].classList.remove('hover:bg-slate-200', 'hover:text-slate-600');
            const defaultContent = contents[0];
            // Set initial state for first tab content
            defaultContent.classList.remove('hidden', 'opacity-0', 'scale-90', '-translate-y-1');
            defaultContent.classList.add('opacity-100', 'scale-100', 'translate-y-0', 'active');
        });



        // hamburger menu
        document.getElementById('hamburger').addEventListener('click', function () {
            const menu = document.getElementById('menu');
            const hamburgerIcon = document.getElementById('hamburger-icon');
            const closeIcon = document.getElementById('close-icon');
            
            // Toggle menu visibility
            menu.classList.toggle('hidden');
            
            // Toggle icons
            hamburgerIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');
        });

        // after scroll effect
        document.addEventListener('DOMContentLoaded', () => {
            const elements = document.querySelectorAll('.slide-in');

            const checkSlide = () => {
                elements.forEach(element => {
                    const slideInAt = window.scrollY + window.innerHeight - 100;
                    const elementTop = element.offsetTop;

                    if (slideInAt > elementTop) {
                        if (element.classList.contains('from-right')) {
                            element.classList.add('animate-slide-in-from-left-to-right');
                        } else if (element.classList.contains('from-left')) {
                            element.classList.add('animate-slide-in-from-right-to-left');
                        }
                    }
                });
            };

            window.addEventListener('scroll', checkSlide);
            checkSlide(); // Initial check
        });




        // Modal open-close functionality
        const modal = document.getElementById('modal');
        const loginForm = document.getElementById('login-form');
        const registerForm = document.getElementById('register-form');
        const hamburgerMenu = document.getElementById('hamburger');
        const menu = document.getElementById('menu'); // Get menu element here

        // Function to disable the hamburger menu
        function disableHamburgerMenu() {
            hamburgerMenu.classList.add('pointer-events-none', 'opacity-50'); // Add Tailwind classes to visually indicate it's disabled
        }

        // Function to enable the hamburger menu
        function enableHamburgerMenu() {
            hamburgerMenu.classList.remove('pointer-events-none', 'opacity-50'); // Remove Tailwind classes
        }

        function showLoginForm() {
            loginForm.classList.remove('hidden');
            registerForm.classList.add('hidden');
        }

        function showRegisterForm() {
            registerForm.classList.remove('hidden');
            loginForm.classList.add('hidden');
        }

        document.getElementById('open-modal1').addEventListener('click', function() {
            modal.classList.remove('hidden');
            showLoginForm(); // Show login form by default
            disableHamburgerMenu(); // Disable the hamburger menu when the modal opens
            if (!menu.classList.contains('hidden')) {
                // Close the hamburger menu if it's open
                hamburgerMenu.click();
            }
        });

        document.getElementById('open-modal2').addEventListener('click', function() {
            modal.classList.remove('hidden');
            showLoginForm(); // Show login form by default
            disableHamburgerMenu(); // Disable the hamburger menu when the modal opens
            if (!menu.classList.contains('hidden')) {
                // Close the hamburger menu if it's open
                hamburgerMenu.click();
            }
        });

        document.getElementById('open-modal-register1').addEventListener('click', function() {
            modal.classList.remove('hidden');
            showRegisterForm(); // Show register form
            disableHamburgerMenu(); // Disable the hamburger menu when the modal opens
            if (!menu.classList.contains('hidden')) {
                // Close the hamburger menu if it's open
                hamburgerMenu.click();
            }
        });

        document.getElementById('open-modal-register2').addEventListener('click', function() {
            modal.classList.remove('hidden');
            showRegisterForm(); // Show register form
            disableHamburgerMenu(); // Disable the hamburger menu when the modal opens
            if (!menu.classList.contains('hidden')) {
                // Close the hamburger menu if it's open
                hamburgerMenu.click();
            }
        });

        document.getElementById('close-modal').addEventListener('click', function() {
            modal.classList.add('hidden');
            enableHamburgerMenu(); // Enable the hamburger menu when the modal closes
        });


        document.addEventListener("DOMContentLoaded", function() {
            if (modal.classList.contains('hidden')) {
                modal.classList.remove('hidden');
                modal.classList.add('flex');
            } else if (modal.classList.contains('flex')) {
                modal.classList.remove('flex');
                modal.classList.add('hidden');
            }

            modal.classList.add('hidden');
            enableHamburgerMenu(); // Ensure the hamburger menu is enabled on page load
        });

        document.getElementById('sign-up-link').addEventListener('click', function() {
            // Open the registration form within the modal
            showRegisterForm();
        });

        // JavaScript to hide the loading overlay and show the content
        window.onload = () => {
            document.getElementById('loading-overlay').style.display = 'none';
            document.getElementById('main-content').classList.remove('hidden-content');
        };
    </script>
</body>
</html>