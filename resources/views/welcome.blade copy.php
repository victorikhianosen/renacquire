<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')

    <title>Ren - Acquire</title>
</head>

<body>

    {{-- Header --}}
    <section class="relative">
        <div class="container mx-auto p-6">
            <div class="flex justify-between items-center py-0 md:py-6">
                <div>
                    <a href="">LOGO</a>
                </div>

                <div class="space-x-10 hidden lg:block">

                    <a href=""
                        class="relative font-semibold text-base text-gray transition-all duration-150 hover:text-blue pb-4 tracking-wider 
          before:content-[''] before:absolute before:bottom-0 before:left-0 before:h-[4px] before:w-0 before:bg-blue
          before:transition-all before:duration-300 hover:before:w-full">
                        Home
                    </a>

                    <a href=""
                        class="relative font-semibold text-base text-gray transition-all duration-150 hover:text-blue pb-4 tracking-wider 
          before:content-[''] before:absolute before:bottom-0 before:left-0 before:h-[4px] before:w-0 before:bg-blue
          before:transition-all before:duration-300 hover:before:w-full">
                        Our Serivces
                    </a>

                    <a href=""
                        class="relative font-semibold text-base text-gray transition-all duration-150 hover:text-blue pb-4 tracking-wider 
          before:content-[''] before:absolute before:bottom-0 before:left-0 before:h-[4px] before:w-0 before:bg-blue
          before:transition-all before:duration-300 hover:before:w-full">
                        Page
                    </a>

                    <a href=""
                        class="relative font-semibold text-base text-gray transition-all duration-150 hover:text-blue pb-4 tracking-wider 
          before:content-[''] before:absolute before:bottom-0 before:left-0 before:h-[4px] before:w-0 before:bg-blue
          before:transition-all before:duration-300 hover:before:w-full">
                        Portfolio
                    </a>

                    <a href=""
                        class="relative font-semibold text-base text-gray transition-all duration-150 hover:text-blue pb-4 tracking-wider 
          before:content-[''] before:absolute before:bottom-0 before:left-0 before:h-[4px] before:w-0 before:bg-blue
          before:transition-all before:duration-300 hover:before:w-full">
                        Blog
                    </a>

                    <a href=""
                        class="relative font-semibold text-base text-gray transition-all duration-150 hover:text-blue pb-4 tracking-wider 
          before:content-[''] before:absolute before:bottom-0 before:left-0 before:h-[4px] before:w-0 before:bg-blue
          before:transition-all before:duration-300 hover:before:w-full">
                        Contacts
                    </a>
                </div>


                {{--   Open Mobile Menu --}}
                <div class="openMenuButton cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px"
                        fill="#2E5A82">
                        <path
                            d="M666-440 440-666l226-226 226 226-226 226Zm-546-80v-320h320v320H120Zm400 400v-320h320v320H520Zm-400 0v-320h320v320H120Zm80-480h160v-160H200v160Zm467 48 113-113-113-113-113 113 113 113Zm-67 352h160v-160H600v160Zm-400 0h160v-160H200v160Zm160-400Zm194-65ZM360-360Zm240 0Z" />
                    </svg>
                </div>


            </div>



            {{-- Mobile Menu --}}



        </div>

        <div id="" class="mobileMenu absolute top-0 left-0 hidden z-50 bg-blue w-screen h-screen">

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


        <style>
            .mobileMenu {
                position: fixed;
                top: 0;
                right: -100%;
                /* Initially hide the menu off-screen */
                width: 100%;
                height: 100%;
                background-color: #2E5A82;
                transition: transform 1s ease-in-out;
                /* Slower sliding effect */
                z-index: 50;
            }

            .mobileMenu.show {
                transform: translateX(0);
                /* Slide menu in from the right */
            }
        </style>

        <script>
            const openMenuButton = document.querySelector('.openMenuButton');
            const mobileMenu = document.querySelector('.mobileMenu');
            const closeMenuButton = document.querySelector('.closeMenuButton');

            openMenuButton.addEventListener('click', () => {
                mobileMenu.classList.remove('hidden');
                setTimeout(() => {
                    mobileMenu.classList.add('show'); // Add the class that makes it slide in
                }, 10);
            });

            closeMenuButton.addEventListener('click', () => {
                mobileMenu.classList.remove('show'); // Remove the class to slide it out
                setTimeout(() => {
                    mobileMenu.classList.add('hidden'); // Hide it completely after the slide out
                }, 1000); // Matches the new transition duration (1 second)
            });
        </script>


    </section>

</body>

</html>
