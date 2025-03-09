<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- @vite('resources/css/app.css') --}}

    <script src="https://cdn.tailwindcss.com"></script>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap"
        rel="stylesheet">

    <title>Ren - Acquire</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <script src="{{ asset('assets/js/sweet-alert.js') }}"></script>



    <script>
        tailwind.config = {
            theme: {
                screens: {
                    sm: "480px",
                    md: "768px",
                    lg: "1020px",
                    xl: "1440px",
                },
                extend: {
                    colors: {
                        primary: "#254868",
                        secondary: "#EBC585",
                        black: "#1A1510",
                        gray: "#5f5b58",
                        lightGray: "#b9babd",
                        white: "#FFFFFF",
                        softWhite: "#F7F5F4 ",
                        textGray: "#656565",
                        green: "#54BE73",
                        grayBorder: "#E5E3E3",
                    },
                    fontFamily: {
                        sans: ["DM Sans", "sans-serif"],
                    },
                },
            },
            plugins: [],
        };
    </script>


</head>

<body class="overflow-x-hidden">

    {{-- Header --}}

    <section class="relative">
        <div class="container mx-auto px-6 py-8 lg:px-0 xl:px-16">
            <div class="flex justify-between items-center">
                <div>
                    <a href=""{{ route('home') }}>
                        <img class="w-[13rem]" src="{{ asset('assets/img/logo.png') }}" alt="">
                    </a>
                </div>

                <div class="space-x-10 hidden lg:block">
                    <a href="{{ route('home') }}"
                        class="relative font-semibold text-base text-gray transition-all duration-150 hover:text-primary pb-4 tracking-wider before:content-[''] before:absolute before:bottom-0 before:left-0 before:h-[4px] before:w-0 before:bg-primary before:transition-all before:duration-300 hover:before:w-full">
                        Home
                    </a>
                    <a href="{{ route('services') }}"
                        class="relative font-semibold text-base text-gray transition-all duration-150 hover:text-primary pb-4 tracking-wider before:content-[''] before:absolute before:bottom-0 before:left-0 before:h-[4px] before:w-0 before:bg-primary before:transition-all before:duration-300 hover:before:w-full">
                        Our Services
                    </a>
                    {{-- <a href=""
                        class="relative font-semibold text-base text-gray transition-all duration-150 hover:text-primary pb-4 tracking-wider before:content-[''] before:absolute before:bottom-0 before:left-0 before:h-[4px] before:w-0 before:bg-primary before:transition-all before:duration-300 hover:before:w-full">
                        Page
                    </a> --}}
                    <a href="{{ route('about') }}"
                        class="relative font-semibold text-base text-gray transition-all duration-150 hover:text-primary pb-4 tracking-wider before:content-[''] before:absolute before:bottom-0 before:left-0 before:h-[4px] before:w-0 before:bg-primary before:transition-all before:duration-300 hover:before:w-full">
                        About
                    </a>
                    <a href="{{ route('team') }}"
                        class="relative font-semibold text-base text-gray transition-all duration-150 hover:text-primary pb-4 tracking-wider before:content-[''] before:absolute before:bottom-0 before:left-0 before:h-[4px] before:w-0 before:bg-primary before:transition-all before:duration-300 hover:before:w-full">
                        Team
                    </a>
                    <a href="{{ route('contact') }}"
                        class="relative font-semibold text-base text-gray transition-all duration-150 hover:text-primary pb-4 tracking-wider before:content-[''] before:absolute before:bottom-0 before:left-0 before:h-[4px] before:w-0 before:bg-primary before:transition-all before:duration-300 hover:before:w-full">
                        Contacts
                    </a>
                </div>

                {{-- Open Mobile Menu --}}
                <div class="openMenuButton cursor-pointer block lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px"
                        fill="#2E5A82">
                        <path
                            d="M666-440 440-666l226-226 226 226-226 226Zm-546-80v-320h320v320H120Zm400 400v-320h320v320H520Zm-400 0v-320h320v320H120Zm80-480h160v-160H200v160Zm467 48 113-113-113-113-113 113 113 113Zm-67 352h160v-160H600v160Zm-400 0h160v-160H200v160Zm160-400Zm194-65ZM360-360Zm240 0Z" />
                    </svg>
                </div>

            </div>

        </div>

        <div id="mobileMenu"
            class="mobileMenu absolute top-0 left-0 hidden z-50 bg-primary w-screen h-screen transition-transform transform -translate-x-full opacity-0 duration-500 ease-in-out">
            <div class="container mx-auto p-6 flex justify-between items-center">
                <div>
                    <a href="{{ route('home') }}">
                        <img class="w-[13rem]" src="{{ asset('assets/img/white-logo.png') }}" alt="">
                    </a>
                </div>

                {{-- Close Mobile Menu --}}
                <div id="closeMenuButton" class="closeMenuButton cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px"
                        fill="#fff">
                        <path
                            d="m336-280 144-144 144 144 56-56-144-144 144-144-56-56-144 144-144-144-56 56 144 144-144 144 56 56ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                    </svg>
                </div>
            </div>

            <div class="flex flex-col px-10 pt-12 space-y-8">
                <a href="{{ route('home') }}"
                    class="relative font-semibold text-base text-white transition-all duration-300 hover:translate-x-5">Home</a>
                <a href="{{ route('services') }}"
                    class="relative font-semibold text-base text-white transition-all duration-300 hover:translate-x-5">Our
                    Services</a>
                {{-- <a href=""
                    class="relative font-semibold text-base text-white transition-all duration-300 hover:translate-x-5">Pages</a> --}}
                <a href="{{ route('team') }}"
                    class="relative font-semibold text-base text-white transition-all duration-300 hover:translate-x-5">Team</a>
                <a href=""
                    class="relative font-semibold text-base text-white transition-all duration-300 hover:translate-x-5">About</a>
                <a href="{{ route('contact') }}"
                    class="relative font-semibold text-base text-white transition-all duration-300 hover:translate-x-5">Contacts</a>
            </div>
        </div>


        <script>
            const openMenuButton = document.querySelector('.openMenuButton');
            const mobileMenu = document.querySelector('#mobileMenu');
            const closeMenuButton = document.querySelector('#closeMenuButton');
            const body = document.body; // Access the body for scroll locking

            // Open the menu
            openMenuButton.addEventListener('click', () => {
                mobileMenu.classList.remove('hidden');
                mobileMenu.classList.add('block');
                setTimeout(() => {
                    mobileMenu.classList.remove('-translate-x-full', 'opacity-0');
                    mobileMenu.classList.add('translate-x-0', 'opacity-100');
                }, 10);

                // Disable scroll on body
                body.style.overflow = 'hidden';
            });

            // Close the menu
            closeMenuButton.addEventListener('click', () => {
                mobileMenu.classList.remove('translate-x-0', 'opacity-100');
                mobileMenu.classList.add('-translate-x-full', 'opacity-0');
                setTimeout(() => {
                    mobileMenu.classList.remove('block');
                    mobileMenu.classList.add('hidden');
                }, 500); // Ensure this matches the duration of the transition

                // Enable scroll on body
                body.style.overflow = 'auto';
            });
        </script>
    </section>
