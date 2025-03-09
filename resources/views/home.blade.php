@extends('layouts.app')

@section('content')
    {{-- HERO --}}
    <section>
        <div class="container mx-auto px-6 pt-6 pb-16 lg:px-0 xl:px-16">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 justify-center items-center">
                <div class="space-y-6">
                    <h3 class="text-primary uppercase text-sm tracking-widest font-semibold">Welcome to RenAcquire Limited

                    </h3>
                    <h1 class="font-bold text-[30px] md:text-[59px] leading-none w-full md:w-full text-primary">
                        Innovative Advisory & Investment Solutions</h1>
                    <p class="w-full md:w-3/4 text-base">
                        At RenAcquire Limited, we pride ourselves on providing cutting-edge advisory, lending, transaction
                        structuring, and wealth management services. Our expertise drives success for our clients across the
                        public and private sectors.
                    </p>

                    <div class="pt-0 md:pt-6">
                        <a href="{{ route('services') }}"
                            class="bg-primary inline-block py-4 px-10 font-semibold text-base text-white transition-all duration-150 hover:opacity-90">
                            Explore Now
                        </a>
                    </div>
                </div>
                <div class="">
                    <img class="w-[35rem] h-[20rem] md:h-[35rem] object-cover" src="{{ asset('assets/img/hero.png') }}"
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
                    <h3 class="text-primary uppercase text-sm tracking-widest font-semibold">commercial Service</h3>
                    <h1
                        class="font-bold text-[30px] md:text-[45px] lg:text-[59px] leading-none w-full xl:w-3/4 text-primary">
                        We help commercial business grow</h1>
                    <p class="w-full xl:w-3/4 text-base text-textGray">RenAcquire provides strategic advisory solutions to help businesses and public sector entities achieve their goals. From financial planning to public sector consulting, we ensure impactful outcomes.
</p>
                    <div>
                        <div class="font-semibold text-2xl text-black border-b-2 border-lightGray pb-4">
                            <span class="mr-2 text-lightGray">
                                01.
                            </span>
                           Public Sector


                        </div>


                        <div class="font-semibold text-2xl text-black pt-4">
                            <span class="mr-2 text-lightGray">
                                02.
                            </span>
                          Corporates


                        </div>



                    </div>
                    <div class="pt-6">
                        <a href="{{ route('services') }}"
                            class="bg-primary inline-block py-4 px-10 font-semibold text-base text-white transition-all duration-150 hover:opacity-90">
                            Explore Now
                        </a>
                    </div>
                </div>


                <div class="order-2 md:order-1">
                    <img class="w-[35rem] h-[20rem] md:h-[37rem] object-cover" src="{{ asset('assets/img/image.png') }}"
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
                        <h1 class="font-bold text-[30px] md:text-[45px] lg:text-[59px] leading-none w-full text-primary">
                            Your business goals <br>are our priority</h1>
                    </div>
                    <div class="text-textGray text-base tracking-wide md:tracking-wider space-y-4 md:space-y-8">
                        <p>RenAcquire provides strategic advisory solutions to help businesses and public sector entities achieve their goals. From financial planning to public sector consulting, we ensure impactful outcomes.


                        </p>
                        <p>Our lending services are designed to support public sector entities and government parastatals in achieving their objectives. We offer tailored financing solutions with flexible terms.

                        </p>
                    </div>

                </div>


                <div class="pt-16">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

                        <a href="{{ route('services') }}" class="group space-y-4 md:space-y-10 border-r-2 border-grayBorder pt-6">
                            <div>
                                <i class="fa-solid fa-briefcase text-7xl font-bold text-green group-hover:text-black"></i>
                            </div>
                            <p class="text-black font-bold text-xl tracking-wide w-4/5"> Advisory Services
</p>
                            <div>
                                <i
                                    class="fa-solid fa-arrow-right transition-all duration-500 group-hover:translate-x-8"></i>
                            </div>
                        </a>


                        <a href="{{ route('services') }}"
                            class="group space-y-4 md:space-y-10 border-r-2 border-grayBorder pt-6 pl-0 md:pl-6 cursor-pointer">
                            <div>
                                <i class="fa-solid fa-briefcase text-7xl font-bold text-green group-hover:text-black"></i>
                            </div>
                            <p class="text-black font-bold text-xl tracking-wide w-4/5"> Lending Solutions
</p>
                            <div>
                                <i
                                    class="fa-solid fa-arrow-right transition-all duration-500 group-hover:translate-x-8"></i>
                            </div>
                        </a>


                        <a href="{{ route('services') }}"
                            class="group space-y-4 md:space-y-10 border-r-2 border-grayBorder pt-6 pl-0 xl:pl-6">
                            <div>
                                <i class="fa-solid fa-briefcase text-7xl font-bold text-green group-hover:text-black"></i>
                            </div>
                            <p class="text-black font-bold text-lg tracking-wide w-4/5"> Transaction Structuring
</p>
                            <div>
                                <i
                                    class="fa-solid fa-arrow-right transition-all duration-500 group-hover:translate-x-8"></i>
                            </div>
                        </a>


                        <a href="{{ route('services') }}" class="group space-y-4 md:space-y-10 pt-6 pl-0 md:pl-6">
                            <div>
                                <i class="fa-solid fa-briefcase text-7xl font-bold text-green group-hover:text-black"></i>
                            </div>
                            <p class="text-black font-bold text-xl tracking-wide w-4/5"> Wealth Management
</p>
                            <div>
                                <i
                                    class="fa-solid fa-arrow-right transition-all duration-500 group-hover:translate-x-8"></i>
                            </div>
                        </a>


                    </div>
                </div>


            </div>
        </div>
    </section>






    <section>
        <div class="">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-0">

                <a href="" class="group p-0 m-0 relative overflow-hidden">
                    <img class="h-96 w-96 block" src="{{ asset('assets/img/image1.png') }}" alt="">
                    <div
                        class="absolute  bottom-8 left-6 md:left-10 right-0 text-white space-y-2 transition-all duration-500 ease-in-out group-hover:translate-y-[-20px]">
                        <h1 class="font-bold text-2xl tracking-wide">News & Updates</h1>
                        <p class="text-base tracking-wide">Stay informed of the latest company announcements and industry developments.[Read More]</p>
                    </div>
                    <span
                        class="absolute bottom-4 left-6 md:left-10 opacity-0 transform translate-y-12 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500 ease-in-out">
                        <i class="fa-solid fa-arrow-right pt-4 text-white"></i>
                    </span>
                </a>


                <a href="" class="group p-0 m-0 relative overflow-hidden">
                    <img class="h-96 w-96 object-fit block" src="{{ asset('assets/img/leader1.png') }}" alt="">
                    <div
                        class="absolute bottom-8 left-6 md:left-10 right-0 text-white space-y-2 transition-all duration-500 ease-in-out group-hover:translate-y-[-20px]">
                        <h1 class="font-bold text-2xl tracking-wide">Thought Leadership</h1>
                        <p class="text-base tracking-wide">Explore expert perspectives on the trends shaping the future of finance and investment banking.[Explore Our Insights]
</p>
                    </div>
                    <span
                        class="absolute bottom-4 left-6 md:left-10 opacity-0 transform translate-y-12 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500 ease-in-out">
                        <i class="fa-solid fa-arrow-right pt-4 text-white"></i>
                    </span>
                </a>
                <a href="" class="group p-0 m-0 relative overflow-hidden">
                    <img class="h-96 w-96 object-fit block" src="{{ asset('assets/img/leader4.png') }}" alt="">
                    <div
                        class="absolute bottom-8 left-6 md:left-10 right-0 text-white space-y-2 transition-all duration-500 ease-in-out group-hover:translate-y-[-20px]">
                        <h1 class="font-bold text-2xl tracking-wide">Case Studies
</h1>
                        <p class="text-base tracking-wide">Discover how we’ve helped clients achieve their goals through tailored solutions.[View Success Stories]
</p>
                    </div>
                    <span
                        class="absolute bottom-4 left-6 md:left-10 opacity-0 transform translate-y-12 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500 ease-in-out">
                        <i class="fa-solid fa-arrow-right pt-4 text-white"></i>
                    </span>
                </a>
                <a href="" class="group p-0 m-0 object-fit relative overflow-hidden">
                    <img class="h-96 w-96 block" src="{{ asset('assets/img/leader3.png') }}" alt="">
                    <div
                        class="absolute bottom-8 left-6 md:left-10 right-0 text-white space-y-2 transition-all duration-500 ease-in-out group-hover:translate-y-[-20px]">
                        <h1 class="font-bold text-2xl tracking-wide">Transaction Structuring
</h1>
                        <p class="text-base tracking-wide">We specialise in structuring and executing complex corporate transactions, ensuring optimal outcomes for all stakeholders involved.
</p>
                    </div>
                    <span
                        class="absolute bottom-4 left-6 md:left-10 opacity-0 transform translate-y-12 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500 ease-in-out">
                        <i class="fa-solid fa-arrow-right pt-4 text-white"></i>
                    </span>
                </a>
            </div>
        </div>
    </section>




    <section class="bg-white">
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




                <div class="relative w-full max-w-6xl mx-auto">
                    <!-- Text Section (Sliding) -->
                    <div class="relative overflow-hidden">
                        <div class="flex transition-transform duration-500 ease-in-out" id="textSlider">
                            <!-- Slide 1 (John Beck) -->
                            <div class="flex-shrink-0 w-full flex flex-col items-center text-center space-y-8">
                                <span class="pt-8"><i class="fa-solid fa-quote-right text-3xl text-green"></i></span>
                                <p class="text-base md:text-2xl text-black w-full md:w-4/5 mx-auto">
                                    We are grateful for your high level of responsibility, understanding, and desire to
                                    help in any
                                    situation! The company embodies competence and efficiency. We look forward to a
                                    fruitful and
                                    long-term cooperation!
                                </p>
                                <div>
                                    <h4 class="font-semibold text-xl">John Beck</h4>
                                    <p class="tracking-wider text-textGray">Business Owner</p>
                                </div>
                            </div>
                            <!-- Slide 2 (Sara Smith) -->
                            <div class="flex-shrink-0 w-full flex flex-col items-center text-center space-y-8">
                                <span class="pt-8"><i class="fa-solid fa-quote-right text-3xl text-green"></i></span>
                                <p class="text-base md:text-2xl text-black w-full md:w-4/5 mx-auto">
                                    Excellent service! Your team is exceptional, and your solutions are innovative and
                                    reliable. Thank you!
                                </p>
                                <div>
                                    <h4 class="font-semibold text-xl">Sara Smith</h4>
                                    <p class="tracking-wider text-textGray">Entrepreneur</p>
                                </div>
                            </div>
                            <!-- Slide 3 (Chris Walker) -->
                            <div class="flex-shrink-0 w-full flex flex-col items-center text-center space-y-8">
                                <span class="pt-8"><i class="fa-solid fa-quote-right text-3xl text-green"></i></span>
                                <p class="text-base md:text-2xl text-black w-full md:w-4/5 mx-auto">
                                    The professionalism and quality of your work speak volumes. I appreciate the
                                    dedication to perfection!
                                </p>
                                <div>
                                    <h4 class="font-semibold text-xl">Chris Walker</h4>
                                    <p class="tracking-wider text-textGray">Startup Founder</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Image Section (Sliding with Text) -->
                    <div class="flex justify-center items-center gap-8 pt-4" id="imageSlider">
                        <!-- John Beck's Image -->
                        <img class="image-slide w-16 h-16 rounded-full" src="{{ asset('assets/hero.jpg') }}"
                            alt="John Beck">
                        <!-- Sara Smith's Image -->
                        <img class="image-slide w-24 h-24 rounded-full hidden" src="{{ asset('assets/img/partner.png') }}"
                            alt="Sara Smith">
                        <!-- Chris Walker's Image -->
                        <img class="image-slide w-16 h-16 rounded-full hidden" src="{{ asset('assets/photo.jpg') }}"
                            alt="Chris Walker">
                    </div>

                    <!-- Arrows (Optional) -->
                    <div class="hidden md:block absolute top-1/2 left-0 transform -translate-y-1/2">
                        <span>
                            <i class="fa-solid fa-arrow-left text-3xl text-green cursor-pointer"
                                onclick="moveSlider('prev')"></i>
                        </span>
                    </div>
                    <div class="hidden md:block absolute top-1/2 right-0 transform -translate-y-1/2">
                        <span>
                            <i class="fa-solid fa-arrow-right text-3xl text-green cursor-pointer"
                                onclick="moveSlider('next')"></i>
                        </span>
                    </div>
                </div>



                <script>
                    const textSlider = document.getElementById('textSlider');
                    const imageSlider = document.getElementById('imageSlider');
                    const textSlides = document.querySelectorAll('#textSlider .flex-shrink-0');
                    const imageSlides = Array.from(document.querySelectorAll('#imageSlider .image-slide'));
                    let currentIndex = 0;

                    // Cloning the first and last slides for an infinite loop
                    const firstTextSlide = textSlides[0].cloneNode(true);
                    const lastTextSlide = textSlides[textSlides.length - 1].cloneNode(true);
                    textSlider.appendChild(firstTextSlide);
                    textSlider.insertBefore(lastTextSlide, textSlides[0]);

                    const firstImageSlide = imageSlides[0].cloneNode(true);
                    const lastImageSlide = imageSlides[imageSlides.length - 1].cloneNode(true);
                    imageSlider.appendChild(firstImageSlide);
                    imageSlider.insertBefore(lastImageSlide, imageSlides[0]);

                    // Update the list of images to include the cloned slides
                    const updatedImageSlides = Array.from(document.querySelectorAll('#imageSlider .image-slide'));

                    // Adjust slider's initial position to the cloned "last" slide
                    const totalSlides = textSlides.length + 2; // Include cloned slides
                    const slideWidth = 100; // Each slide takes 100% width
                    textSlider.style.transform = `translateX(-${slideWidth}%)`;

                    // Infinite Slider Function
                    function moveSlider(direction) {
                        if (direction === 'next') {
                            currentIndex++;
                            textSlider.style.transition = 'transform 0.5s ease-in-out';
                            textSlider.style.transform = `translateX(-${(currentIndex + 1) * slideWidth}%)`;

                            if (currentIndex >= textSlides.length) {
                                setTimeout(() => {
                                    textSlider.style.transition = 'none';
                                    textSlider.style.transform = `translateX(-${slideWidth}%)`;
                                    currentIndex = 0;
                                    updateImage(currentIndex); // Reset to the first image
                                }, 500);
                            } else {
                                updateImage(currentIndex);
                            }
                        } else {
                            currentIndex--;
                            textSlider.style.transition = 'transform 0.5s ease-in-out';
                            textSlider.style.transform = `translateX(-${(currentIndex + 1) * slideWidth}%)`;

                            if (currentIndex < 0) {
                                setTimeout(() => {
                                    textSlider.style.transition = 'none';
                                    textSlider.style.transform = `translateX(-${(totalSlides - 2) * slideWidth}%)`;
                                    currentIndex = textSlides.length - 1;
                                    updateImage(currentIndex); // Reset to the last image
                                }, 500);
                            } else {
                                updateImage(currentIndex);
                            }
                        }
                    }

                    // Function to update the images based on the current index
                    function updateImage(index) {
                        updatedImageSlides.forEach((slide, i) => {
                            slide.classList.toggle('hidden', i !== index + 1); // Offset by 1 for cloned slides
                        });
                    }

                    // Initialize images to show the first visible slide
                    updateImage(currentIndex);

                    // Auto Slide every 3 seconds
                    setInterval(() => moveSlider('next'), 3000);
                </script>







            </div>
        </div>
    </section>






    <section>
        <div class="bg-softWhite">
            <div class="grid grid-cols-1 md:grid-cols-4 h-72 w-screen">

                <div class="relative flex flex-col justify-center items-center">
                    <h3 class="font-semibold text-xl md:text-3xl text-black z-10">Projects</h3>
                    <h1 class="absolute font-bold text-[6rem] lg:text-[12rem] mt-2 text-[#F0EEED]">10k+</h1>
                    <!-- 'mt-2' adds margin between Projects and 98 -->
                </div>

                <div class="relative flex flex-col justify-center items-center">
                    <h3 class="font-semibold text-xl md:text-3xl text-black z-10">People</h3>
                    <h1 class="absolute font-bold text-[6rem] lg:text-[12rem] mt-2 text-[#F0EEED]">15k+</h1>
                    <!-- 'mt-2' adds margin between Projects and 98 -->
                </div>
                <div class="relative flex flex-col justify-center items-center">
                    <h3 class="font-semibold text-xl md:text-3xl text-black z-10">Year</h3>
                    <h1 class="absolute font-bold text-[6rem] lg:text-[12rem] mt-2 text-[#F0EEED]">6</h1>
                    <!-- 'mt-2' adds margin between Projects and 98 -->
                </div>
                <div class="relative flex flex-col justify-center items-center">
                    <h3 class="font-semibold text-xl md:text-3xl text-black z-10">Offices</h3>
                    <h1 class="absolute font-bold text-[6rem] lg:text-[12rem] mt-2 text-[#F0EEED]">3</h1>
                    <!-- 'mt-2' adds margin between Projects and 98 -->
                </div>
            </div>
        </div>
    </section>



    <section>
        <div>
            <div>
                <img class="h-full object-fit object-contain object-cover md:h-[32rem] w-screen" src="{{ asset('assets/img/image5.png') }}" alt="">
            </div>
        </div>
    </section>


    <section>
        <div>
            <div class="flex justify-evenly items-center h-40 md:h-52 w-full">
                <div class="border-r-2 border-primary px-2">
                    <img src="{{ asset('assets/img/partner.png') }}" alt="">
                </div>
                <div class="border-r-2 border-primary px-2">
                    <img src="{{ asset('assets/img/partner.png') }}" alt="">
                </div>
                <div class="hidden lg:block border-r-2 border-primary px-2">
                    <img src="{{ asset('assets/img/partner.png') }}" alt="">
                </div>
                <div class="hidden lg:block border-r-2 border-primary px-2">
                    <img src="{{ asset('assets/img/partner.png') }}" alt="">
                </div>
                <div class="border-r-2 border-primary px-2">
                    <img src="{{ asset('assets/img/partner.png') }}" alt="">
                </div>
                <div class="px-2">
                    <img src="{{ asset('assets/img/partner.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>





    <section class="bg-white">
        <div class="container mx-auto px-6 py-16 md:py-28 lg:px-0 xl:px-16">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 justify-center items-center">


                <div class="space-y-6 order-1 md:order-2 pl-0 lg:pl-12">
                    <h3 class="text-primary uppercase text-sm tracking-widest font-semibold">Savings Money</h3>
                    <h1
                        class="font-bold text-[30px] md:text-[45px] lg:text-[59px] leading-none w-full xl:w-3/4 text-primary">
                        Cut your costs by up to 50%</h1>
                    <p class="w-full xl:w-3/4 text-base text-textGray">
                        Adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                        minim veniam, quis nostrud exercitation ullamco.</p>

                    <div class="pt-6">
                        <button
                            class="bg-primary py-4 px-10 font-semibold text-base text-white transition-all duration-150 hover:opacity-90">
                            Explore Now
                        </button>
                    </div>
                </div>


                <div class="order-2 md:order-1">
                    <img class="w-[35rem] h-[20rem] md:h-[37rem] object-cover" src="{{ asset('assets/img/leader.png') }}"
                        alt="">
                </div>

            </div>
        </div>
    </section>




    <section class="bg-softWhite">
        <div class="container mx-auto px-6 py-16 md:py-28 lg:px-0 xl:px-16">
            <div>
                <div class="space-y-6 flex flex-col justify-center items-center">
                    <h3 class="text-primary uppercase text-sm tracking-widest font-semibold">Loren ipsum
                    </h3>
                    <h1
                        class="text-center font-bold text-[30px] md:text-[45px] lg:text-[59px] leading-none w-full text-primary">
                        Lorem ipsum ipusn
                    </h1>

                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-12 pt-16">


                    <a href="" class="shadow-xl bg-white group">
                        <div class="px-6 py-8">
                            <div>
                                <span
                                    class="font-semibold text-sm tracking-wide uppercase group-hover:text-primary">Management</span>
                                <span class="text-2xl font-bold group-hover:text-primary">.</span>
                                <span class="text-xs text-textGray group-hover:text-green">{{ \Carbon\Carbon::now()->format('F d, Y') }}
</span>
                            </div>
                            <p class="font-bold text-3xl group-hover:text-primary pt-2">
                                Which card is better to have – debit or credit?
                            </p>
                        </div>
                        <div class="image-container overflow-hidden">
                            <img class="w-full h-82 transition-transform duration-500 ease-in-out transform group-hover:scale-105"
                                src="{{ asset('assets/img/leader5.png') }}" alt="">
                        </div>
                        <div class="p-6">
                            <div
                                class="flex justify-start items-center transition-all group-hover:translate-x-6 duration-500">
                                {{-- <p class="group-hover:text-primary">Read More</p> --}}
                                {{-- <span class="inline-block group-hover:text-primary"><i
                                        class="fa-solid fa-arrow-right ml-2"></i></span> --}}
                            </div>
                        </div>
                    </a>

                    <a href="" class="shadow-xl bg-white group">
                        <div class="px-6 py-8">
                            <div>
                                <span
                                    class="font-semibold text-sm tracking-wide uppercase group-hover:text-primary">Management</span>
                                <span class="text-2xl font-bold group-hover:text-primary">.</span>
                                <span class="text-xs text-textGray group-hover:text-green">{{ \Carbon\Carbon::now()->format('F d, Y') }}
</span>
                            </div>
                            <p class="font-bold text-3xl group-hover:text-primary pt-2">
                                Which card is better to have – debit or credit?
                            </p>
                        </div>
                        <div class="image-container overflow-hidden">
                            <img class="w-full h-82 transition-transform duration-500 ease-in-out transform group-hover:scale-105"
                                src="{{ asset('assets/img/leader7.png') }}" alt="">
                        </div>
                        <div class="p-6">
                            <div
                                class="flex justify-start items-center transition-all group-hover:translate-x-6 duration-500">
                                {{-- <p class="group-hover:text-primary">Read More</p> --}}
                                {{-- <span class="inline-block group-hover:text-primary"><i
                                        class="fa-solid fa-arrow-right ml-2"></i></span> --}}
                            </div>
                        </div>
                    </a>

                    <a href="" class="shadow-xl bg-white group">
                        <div class="px-6 py-8">
                            <div>
                                <span
                                    class="font-semibold text-sm tracking-wide uppercase group-hover:text-primary">Management</span>
                                <span class="text-2xl font-bold group-hover:text-primary">.</span>
                                <span class="text-xs text-textGray group-hover:text-green">{{ \Carbon\Carbon::now()->format('F d, Y') }}
</span>
                            </div>
                            <p class="font-bold text-3xl group-hover:text-primary pt-2">
                                Which card is better to have – debit or credit?
                            </p>
                        </div>
                        <div class="image-container overflow-hidden">
                            <img class="w-full h-82 transition-transform duration-500 ease-in-out transform group-hover:scale-105"
                                src="{{ asset('assets/img/leader6.png') }}" alt="">
                        </div>
                        <div class="p-6">
                            <div
                                class="flex justify-start items-center transition-all group-hover:translate-x-6 duration-500">
                                {{-- <p class="group-hover:text-primary">Read More</p> --}}
                                {{-- <span class="inline-block group-hover:text-primary"><i
                                        class="fa-solid fa-arrow-right ml-2"></i></span> --}}
                            </div>
                        </div>
                    </a>

                </div>



                {{-- <div class="space-y-6 flex flex-col justify-center items-center pt-16">
                    <button
                        class="text-white bg-primary uppercase text-sm tracking-widest
                    font-semibold px-8 py-3 transition-all duration-200 hover:opacity-90">Read
                        More

                </div> --}}

            </div>
        </div>
    </section>
@endsection
