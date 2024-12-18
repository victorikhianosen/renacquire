<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap"
        rel="stylesheet">

    <title>Ren - Acquire</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body class="">

    {{-- Header --}}
    <section class="relative">
        <div class="container mx-auto px-6 py-8 lg:px-0 xl:px-16">
            <div class="flex justify-between items-center">
                <div>
                    <a href="">LOGO</a>
                </div>

                <div class="space-x-10 hidden lg:block">

                    <a href=""
                        class="relative font-semibold text-base text-gray transition-all duration-150 hover:text-primary pb-4 tracking-wider 
          before:content-[''] before:absolute before:bottom-0 before:left-0 before:h-[4px] before:w-0 before:bg-primary
          before:transition-all before:duration-300 hover:before:w-full">
                        Home
                    </a>

                    <a href=""
                        class="relative font-semibold text-base text-gray transition-all duration-150 hover:text-primary pb-4 tracking-wider 
          before:content-[''] before:absolute before:bottom-0 before:left-0 before:h-[4px] before:w-0 before:bg-primary
          before:transition-all before:duration-300 hover:before:w-full">
                        Our Serivces
                    </a>

                    <a href=""
                        class="relative font-semibold text-base text-gray transition-all duration-150 hover:text-primary pb-4 tracking-wider 
          before:content-[''] before:absolute before:bottom-0 before:left-0 before:h-[4px] before:w-0 before:bg-primary
          before:transition-all before:duration-300 hover:before:w-full">
                        Page
                    </a>

                    <a href=""
                        class="relative font-semibold text-base text-gray transition-all duration-150 hover:text-primary pb-4 tracking-wider 
          before:content-[''] before:absolute before:bottom-0 before:left-0 before:h-[4px] before:w-0 before:bg-primary
          before:transition-all before:duration-300 hover:before:w-full">
                        Portfolio
                    </a>

                    <a href=""
                        class="relative font-semibold text-base text-gray transition-all duration-150 hover:text-primary pb-4 tracking-wider 
          before:content-[''] before:absolute before:bottom-0 before:left-0 before:h-[4px] before:w-0 before:bg-primary
          before:transition-all before:duration-300 hover:before:w-full">
                        Blog
                    </a>

                    <a href=""
                        class="relative font-semibold text-base text-gray transition-all duration-150 hover:text-primary pb-4 tracking-wider 
          before:content-[''] before:absolute before:bottom-0 before:left-0 before:h-[4px] before:w-0 before:bg-primary
          before:transition-all before:duration-300 hover:before:w-full">
                        Contacts
                    </a>
                </div>


                {{--   Open Mobile Menu --}}
                <div class="openMenuButton cursor-pointer block lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px"
                        fill="#2E5A82">
                        <path
                            d="M666-440 440-666l226-226 226 226-226 226Zm-546-80v-320h320v320H120Zm400 400v-320h320v320H520Zm-400 0v-320h320v320H120Zm80-480h160v-160H200v160Zm467 48 113-113-113-113-113 113 113 113Zm-67 352h160v-160H600v160Zm-400 0h160v-160H200v160Zm160-400Zm194-65ZM360-360Zm240 0Z" />
                    </svg>
                </div>


            </div>



            {{-- Mobile Menu --}}



        </div>

        <div id="" class="mobileMenu absolute top-0 left-0 hidden z-50 bg-primary w-screen h-screen">

            <div class="container mx-auto p-6 flex justify-between  items-center">
                <div>LOGO</div>


                {{-- Close Mobile Menu --}}
                <div id="" class="closeMenuButton cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px"
                        fill="#fff">
                        <path
                            d="m336-280 144-144 144 144 56-56-144-144 144-144-56-56-144 144-144-144-56 56 144 144-144 144 56 56ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                    </svg>
                </div>
            </div>

            <div class="flex flex-col px-10 pt-12 space-y-8">

                <a href=""
                    class="relative font-semibold text-base text-white transition-all duration-300 hover:translate-x-5">
                    Home
                </a>

                <a href=""
                    class="relative font-semibold text-base text-white transition-all duration-300 hover:translate-x-5">
                    Our Serivces
                </a>


                <a href=""
                    class="relative font-semibold text-base text-white transition-all duration-300 hover:translate-x-5">
                    Pages
                </a>


                <a href=""
                    class="relative font-semibold text-base text-white transition-all duration-300 hover:translate-x-5">
                    Portfolio
                </a>

                <a href=""
                    class="relative font-semibold text-base text-white transition-all duration-300 hover:translate-x-5">
                    Blog
                </a>

                <a href=""
                    class="relative font-semibold text-base text-white transition-all duration-300 hover:translate-x-5">
                    Contacts
                </a>


            </div>


        </div>



        {{-- <script>
            const openMenuButton = document.querySelector('.openMenuButton');
            const mobileMenu = document.querySelector('.mobileMenu');
            const closeMenuButton = document.querySelector('.closeMenuButton');

            openMenuButton.addEventListener('click', () => {
                mobileMenu.classList.remove('hidden');
                mobileMenu.classList.add('block'); // Make the menu visible
            });

            closeMenuButton.addEventListener('click', () => {
                mobileMenu.classList.remove('block');
                mobileMenu.classList.add('hidden'); // Hide the menu again
            });
        </script> --}}


    </section>



    {{-- HERO --}}
    <section>
        <div class="container mx-auto px-6 pt-6 pb-16 lg:px-0 xl:px-16">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 justify-center items-center">
                <div class="space-y-6">
                    <h3 class="text-primary uppercase text-sm tracking-widest font-semibold">Optimize your business
                        growth</h3>
                    <h1 class="font-bold text-[30px] md:text-[59px] leading-none w-full md:w-1/2 text-primary">
                        Proffessional Personal Accountants</h1>
                    <p class="w-full md:w-3/4 text-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet
                        ut obcaecati deleniti asperiores
                        illo iure, corrupti molestiae consequatur! Aut, quasi!</p>
                    <button
                        class="bg-primary py-4 px-10 font-semibold text-base text-white transition-all duration-150 hover:opacity-90">
                        Explore Now
                    </button>
                </div>
                <div class="">
                    <img class="w-[35rem] h-[20rem] md:h-[35rem] object-cover" src="{{ asset('assets/hero.jpg') }}"
                        alt="">
                </div>

            </div>
        </div>
    </section>



    {{-- Coperate --}}
    <section class="bg-white">
        <div class="container mx-auto px-6 py-16 md:py-28 lg:px-0 xl:px-16">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 justify-center items-center">


                <div class="space-y-6 order-1 md:order-2 pl-0 lg:pl-12">
                    <h3 class="text-primary uppercase text-sm tracking-widest font-semibold">Corperate Service</h3>
                    <h1
                        class="font-bold text-[30px] md:text-[45px] lg:text-[59px] leading-none w-full xl:w-3/4 text-primary">
                        We help private business grow</h1>
                    <p class="w-full xl:w-3/4 text-base text-textGray">Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Amet
                        ut obcaecati deleniti asperiores
                        illo iure, corrupti molestiae.</p>
                    <div>
                        <div class="font-semibold text-2xl text-black border-b-2 border-lightGray pb-4">
                            <span class="mr-2 text-lightGray">
                                01.
                            </span>
                            Financial services
                        </div>


                        <div class="font-semibold text-2xl text-black pt-4">
                            <span class="mr-2 text-lightGray">
                                02.
                            </span>
                            Accounting & audit
                        </div>



                    </div>
                    <div class="pt-6">
                        <button
                            class="bg-primary py-4 px-10 font-semibold text-base text-white transition-all duration-150 hover:opacity-90">
                            Explore Now
                        </button>
                    </div>
                </div>


                <div class="order-2 md:order-1">
                    <img class="w-[35rem] h-[20rem] md:h-[37rem] object-cover" src="{{ asset('assets/hero.jpg') }}"
                        alt="">
                </div>




            </div>
        </div>
    </section>





    <section class="bg-softWhite">
        <div class="container mx-auto px-6 py-16 md:py-28 lg:px-0 xl:px-16">
            <div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 justify-center items-center">
                    <div class="space-y-6">
                        <h3 class="text-primary uppercase text-sm tracking-widest font-semibold">Our Services</h3>
                        <h1
                            class="font-bold text-[30px] md:text-[45px] lg:text-[59px] leading-none w-full text-primary">
                            Your business goals <br>are our priority</h1>
                    </div>
                    <div class="text-textGray text-base tracking-wide md:tracking-wider space-y-4 md:space-y-8">
                        <p>Adipiscing elit, sed do euismod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad
                            minim veniam, quis nostrud exercitation ullamco.

                        </p>
                        <p>Adipiscing elit, sed do euismod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad
                            minim veniam, quis nostrud exercitation ullamco.
                        </p>
                    </div>

                </div>


                <div class="pt-16">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

                        <div class="space-y-4 md:space-y-10 border-r-2 border-grayBorder pt-6">
                            <div>
                                <i class="fa-solid fa-briefcase text-7xl font-bold text-green"></i>
                            </div>
                            <p class="text-black font-bold text-xl tracking-wide w-4/5"> Papaer Delivery Services</p>
                            <div>
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>


                        <div class="space-y-4 md:space-y-10 border-r-2 border-grayBorder pt-6 pl-0 md:pl-6">
                            <div>
                                <i class="fa-solid fa-briefcase text-7xl font-bold text-green"></i>
                            </div>
                            <p class="text-black font-bold text-xl tracking-wide w-4/5"> Papaer Delivery Services</p>
                            <div>
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>


                        <div class="space-y-4 md:space-y-10 border-r-2 border-grayBorder pt-6 pl-0 xl:pl-6">
                            <div>
                                <i class="fa-solid fa-briefcase text-7xl font-bold text-green"></i>
                            </div>
                            <p class="text-black font-bold text-xl tracking-wide w-4/5"> Papaer Delivery Services</p>
                            <div>
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>


                        <div class="space-y-4 md:space-y-10 pt-6 pl-0 md:pl-6">
                            <div>
                                <i class="fa-solid fa-briefcase text-7xl font-bold text-green"></i>
                            </div>
                            <p class="text-black font-bold text-xl tracking-wide w-4/5"> Papaer Delivery Services</p>
                            <div>
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>


                    </div>
                </div>


            </div>
        </div>
    </section>






    <section>
        <div class="">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-0">


                <a href="" class="group p-0 m-0 relative overflow-hidden">
                    <img class="h-96 w-96 block" src="{{ asset('assets/photo.jpg') }}" alt="">
                    <div
                        class="absolute bottom-8 left-6 md:left-10 right-0 text-white space-y-2 transition-all duration-500 ease-in-out group-hover:translate-y-[-20px]">
                        <h1 class="font-bold text-2xl tracking-wide">Affiliate Program</h1>
                        <p class="text-base tracking-wide">Lorem ipsum dolor sit amet.</p>
                    </div>
                    <span
                        class="absolute bottom-4 left-6 md:left-10 opacity-0 transform translate-y-12 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500 ease-in-out">
                        <i class="fa-solid fa-arrow-right pt-4 text-white"></i>
                    </span>
                </a>


                <a href="" class="group p-0 m-0 relative overflow-hidden">
                    <img class="h-96 w-96 object-fit block" src="{{ asset('assets/photo.jpg') }}" alt="">
                    <div
                        class="absolute bottom-8 left-6 md:left-10 right-0 text-white space-y-2 transition-all duration-500 ease-in-out group-hover:translate-y-[-20px]">
                        <h1 class="font-bold text-2xl tracking-wide">Affiliate Program</h1>
                        <p class="text-base tracking-wide">Lorem ipsum dolor sit amet.</p>
                    </div>
                    <span
                        class="absolute bottom-4 left-6 md:left-10 opacity-0 transform translate-y-12 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500 ease-in-out">
                        <i class="fa-solid fa-arrow-right pt-4 text-white"></i>
                    </span>
                </a>
                <a href="" class="group p-0 m-0 relative overflow-hidden">
                    <img class="h-96 w-96 object-fit block" src="{{ asset('assets/photo.jpg') }}" alt="">
                    <div
                        class="absolute bottom-8 left-6 md:left-10 right-0 text-white space-y-2 transition-all duration-500 ease-in-out group-hover:translate-y-[-20px]">
                        <h1 class="font-bold text-2xl tracking-wide">Affiliate Program</h1>
                        <p class="text-base tracking-wide">Lorem ipsum dolor sit amet.</p>
                    </div>
                    <span
                        class="absolute bottom-4 left-6 md:left-10 opacity-0 transform translate-y-12 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500 ease-in-out">
                        <i class="fa-solid fa-arrow-right pt-4 text-white"></i>
                    </span>
                </a>
                <a href="" class="group p-0 m-0 object-fit relative overflow-hidden">
                    <img class="h-96 w-96 block" src="{{ asset('assets/photo.jpg') }}" alt="">
                    <div
                        class="absolute bottom-8 left-6 md:left-10 right-0 text-white space-y-2 transition-all duration-500 ease-in-out group-hover:translate-y-[-20px]">
                        <h1 class="font-bold text-2xl tracking-wide">Affiliate Program</h1>
                        <p class="text-base tracking-wide">Lorem ipsum dolor sit amet.</p>
                    </div>
                    <span
                        class="absolute bottom-4 left-6 md:left-10 opacity-0 transform translate-y-12 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500 ease-in-out">
                        <i class="fa-solid fa-arrow-right pt-4 text-white"></i>
                    </span>
                </a>
            </div>
        </div>
    </section>




    <section class="bg-softWhite">
        <div class="container mx-auto px-6 py-16 md:py-28 lg:px-0 xl:px-16">
            <div>
                <div class="space-y-6 flex flex-col justify-center items-center">
                    <h3 class="text-primary uppercase text-sm tracking-widest font-semibold">Testimonials
                    </h3>
                    <h1
                        class="text-center font-bold text-[30px] md:text-[45px] lg:text-[59px] leading-none w-full text-primary">
                        Our customer reviews
                    </h1>

                </div>

                <div class="text-center pt-12 space-y-8 flex flex-col justify-center items-center">
                    <span>
                        <i class="fa-solid fa-quote-right text-3xl text-green"></i>
                    </span>
                    <p class="text-base md:text-2xl text-black w-full md:w-4/5">
                        We are grateful for your high level of responsibility, understanding, and desire to help in any
                        situation! The company embodies competence and efficiency. We look forward to a fruitful and
                        long-term cooperation!

                    </p>
                    <div>
                        <h4 class="font-semibold text-xl">John Beck</h4>
                        <p class="tracking-wider text-textGray">Business Owner</p>
                    </div>
                    <div class="flex justify-center items-center gap-8 pt-4">
                        <img class="hidden md:block w-16 h-16 rounded-full" src="{{ asset('assets/hero.jpg') }}" alt="Customer">
                        <img class="w-24 h-24 rounded-full" src="{{ asset('assets/hero.jpg') }}" alt="Customer">
                        <img class="hidden md:block w-16 h-16 rounded-full" src="{{ asset('assets/hero.jpg') }}" alt="Customer">

                    </div>
                </div>




            </div>
        </div>
    </section>








</body>

</html>
