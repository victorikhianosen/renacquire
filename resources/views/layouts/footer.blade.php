<section class="bg-black text-white">
    <div class=" container mx-auto px-6 py-16 md:py-28 lg:px-0 xl:px-16">
        <div class="grid grid-col-1 gap-6 md:grid-cols-5">
            <div class="col-span-2 space-y-4">
                {{-- <h1 class="text-start font-bold text-[30px] md:text-[45px] lg:text-[59px] leading-none w-full ">
                        LOGO
                    </h1> --}}
                <a href="#" class="">
                    <img class="w-52 md:w-64" src="{{ asset('assets/img/white-logo.png') }}" alt="">
                </a>
                <div class="flex justify-start items-center gap-2">
                    <span><i class="fa-solid fa-location-dot text-2xl"></i></span>
                    <p class="wi-full md:w-3/5"> 111 RenAcquire , Off Isaac John Ikeja GRA, Ikeja Lagos
                    </p>
                </div>



            </div>

            {{-- Second DIv --}}
            <div class="col-span-3 pl-0 md:pl-4">
                <h1 class="text-start font-bold text-[30px] md:text-[45px] lg:text-[59px] leading-none w-full ">
                    Accounting services of a high quality
                </h1>
            </div>
        </div>



        <div class="grid grid-col-1 gap-6 md:grid-cols-7 pt-20">

            <livewire:news-letter />


            {{-- Second Div --}}

            <div class="col-span-4 pl-0">
                <div class="grid grid-cols-3">
                    <div class="space-y-10">
                        <h3 class="text-xl font-semibold">Socials
                        </h3>
                        <div class="flex flex-col items-start justify-start space-y-4">
                            <a href="https://www.facebook.com" target="_blank"
                                class="transition-all duration-500 ease-in-out hover:translate-x-6">
                                Facebook
                            </a>
                            <a href="https://www.instagram.com" target="_blank"
                                class="transition-all duration-500 ease-in-out hover:translate-x-6">
                                Instagram
                            </a>
                            <a href="https://www.twitter.com" target="_blank"
                                class="transition-all duration-500 ease-in-out hover:translate-x-6">
                                Twitter
                            </a>
                            <a href="https://www.linkedin.com" target="_blank"
                                class="transition-all duration-500 ease-in-out hover:translate-x-6">
                                LinkedIn
                            </a>
                        </div>


                    </div>
                    <div class="space-y-10">
                        <h3 class="text-xl font-semibold">Menu</h3>
                        <div class="flex  flex-col items-start justify-start space-y-4">
                            <a href=""
                                class="transition-all duration-500 ease-in-out hover:translate-x-6">Home</a>
                            <a href=""
                                class="transition-all duration-500 ease-in-out hover:translate-x-6">About</a>
                            <a href=""
                                class="transition-all duration-500 ease-in-out hover:translate-x-6">Service</a>
                            <a href=""
                                class="transition-all duration-500 ease-in-out hover:translate-x-6">Conact</a>

                        </div>
                    </div>
                    <div class="space-y-10">
                        <h3 class="text-xl font-semibold">Say Hello
                        </h3>

                        <div class="flex  flex-col items-start justify-start space-y-4">

                            <a href=""
                                class="transition-all duration-500 ease-in-out hover:translate-x-6 flex justify-start items-center gap-2">
                                <span class="hidden md:block">
                                    <i class="fa-solid fa-phone"></i>

                                </span>
                                <span class="block">
                                    info@email.com
                                </span>
                            </a>

                            <a href=""
                                class="transition-all duration-500 ease-in-out hover:translate-x-6 flex justify-start items-center gap-2">
                                <span class="hidden md:block">
                                    <i class="fa-solid fa-envelope"></i>
                                </span>
                                <span class="block text-sm md:text-base">
                                    +234 702-233-4455
                                </span>
                            </a>


                        </div>

                    </div>

                </div>
            </div>
        </div>


    </div>
</section>





<script>
    window.addEventListener('alert', (event) => {
        const data = event.detail;

        Swal.fire({
            icon: data.type,
            text: data.text,
            position: data.position,
            timer: data.timer,
            buttons: data.button,
        });
    });
</script>


</body>

</html>
