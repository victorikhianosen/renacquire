@extends('layouts.app')

@section('content')
    <section class="bg-white">
        <div class="container mx-auto px-6 pt-4 pb-16 md:pt-28 md:pb-28 lg:px-0 xl:px-16 spac">

            <div class="space-y-16">
                <p class="text-4xl md:text-6xl font-bold text-center text-primary">About Us</p>
            </div>

        </div>
    </section>


    <section class="bg-softWhite">
        <div class="container mx-auto px-6 py-12 md:py-24 lg:px-0 xl:px-16">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 justify-center items-center">

                <div class="space-y-6 pl-0 lg:pl-12">
                    <h3 class="text-primary uppercase text-sm tracking-widest font-semibold">More About Us</h3>
                    <h1
                        class="font-bold text-[30px] md:text-[45px] lg:text-[59px] leading-none w-full xl:w-3/4 text-primary">
                        Cut your costs by up to 50%</h1>
                    <p class="w-full xl:w-3/4 text-base text-textGray">
                        Adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                        minim veniam, quis nostrud exercitation ullamco.</p>

                    <div class="hidden pt-6 md:flex justify-start items-center gap-8">
                        <button
                            class="bg-primary py-4 px-10 font-semibold text-base text-white transition-all duration-150 hover:opacity-90">
                            Explore Now
                        </button>

                        <div>
                            <a href="">
                                {{-- <span
                                    class="bg-white mr-4 p-4 rounded-full font-semibold text-base text-primary transition-all duration-150 hover:opacity-90">
                                    <i class="fa-solid fa-phone"></i>

                                </span> --}}
                                {{-- <span> 0 800 555 44 33</span> --}}
                            </a>

                        </div>
                    </div>
                </div>

                <div class="">
                    <img class="w-[35rem] h-[20rem] md:h-[37rem] object-cover" src="{{ asset('assets/hero.jpg') }}"
                        alt="">
                </div>
            </div>
        </div>
    </section>






    <section class="bg-white">
        <div class="container mx-auto px-6 py-16 md:py-28 lg:px-0 xl:px-16">
            <div>
                <div class="space-y-6 flex flex-col justify-center items-center">
                    <h3 class="text-primary uppercase text-sm tracking-widest font-semibold">Our business services

                    </h3>
                    <h1
                        class="text-center font-bold text-[30px] md:text-[45px] lg:text-[59px] leading-none w-full text-primary">
                        Your results are our top priority!

                    </h1>

                </div>

                <div class="grid grid-cols-1 md:grid-cols-3  gap-x-6 gap-y-8 md:gap-y-6 pt-16 md:pt-20">
                    <a class="group relative cursor-pointer flex flex-col justify-center items-center space-y-6">
                        <p>
                            <span>
                                <i class="fa-regular fa-eye text-6xl group-hover:text-primary"></i>
                            </span>
                        </p>
                        <h3 class="text-3xl font-bold group-hover:text-primary">
                            Vision
                        </h3>
                        <p class="text-center text-lightGray">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi, quidem!
                        </p>
                        <button
                            class="hidden md:block absolute -bottom-10 opacity-0 transform translate-y-12 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500 ease-in-out">
                            <i class="fa-solid fa-arrow-right hover:text-primary"></i>
                        </button>
                    </a>

                    <a class="group relative cursor-pointer flex flex-col justify-center items-center space-y-6">
                        <p>
                            <span>
                                <i class="fa-regular fa-clock text-6xl group-hover:text-primary"></i>
                            </span>
                        </p>
                        <h3 class="text-3xl font-bold group-hover:text-primary">
                            Mission
                        </h3>
                        <p class="text-center text-lightGray">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi, quidem!
                        </p>
                        <button
                            class="hidden md:block absolute -bottom-10 opacity-0 transform translate-y-12 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500 ease-in-out">
                            <i class="fa-solid fa-arrow-right hover:text-primary"></i>
                        </button>
                    </a>


                    <a class="group relative cursor-pointer flex flex-col justify-center items-center space-y-6">
                        <p>
                            <span>
                                <i class="fa-solid fa-database text-6xl group-hover:text-primary"></i>

                            </span>
                        </p>
                        <h3 class="text-3xl font-bold group-hover:text-primary">
                            Core Values
                        </h3>
                        <p class="text-center text-lightGray">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi, quidem!
                        </p>
                        <button
                            class="hidden md:block absolute -bottom-10 opacity-0 transform translate-y-12 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500 ease-in-out">
                            <i class="fa-solid fa-arrow-right hover:text-primary"></i>
                        </button>
                    </a>

                </div>

            </div>
        </div>
    </section>
@endsection