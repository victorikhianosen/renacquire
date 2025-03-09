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
                    <h3 class="text-primary uppercase text-sm tracking-widest font-semibold">Who We Are
                    </h3>
                    <h1
                        class="font-bold text-[30px] md:text-[45px] lg:text-[59px] leading-none w-full text-primary">
                        Driving financial growth with strategic solutions.</h1>
                    <p class="w-full xl:w-3/4 text-base text-textGray">
                        RenAcquire Limited is a leading advisory and investment banking firm committed to fostering economic
                        growth and financial empowerment. With a focus on innovation and integrity, we deliver tailor-made
                        solutions that address the unique needs of our clients.
                        .</p>

                    <div class="hidden pt-6 md:flex justify-start items-center gap-8">

                    </div>
                </div>

                <div class="">
                    <img class="w-[35rem] h-[20rem] md:h-[37rem] object-cover" src="{{ asset('assets/img/image3.png') }}"
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
                            To be the most trusted partner for innovative financial solutions in Africa and beyond.

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
                            To empower our clients with financial strategies that drive sustainable growth and prosperity.
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
                            Our Leadership

                        </h3>
                        <p class="text-center text-lightGray">
                            Our team comprises seasoned professionals with decades of experience in advisory, lending,
                            transaction structuring, and wealth management. We bring a wealth of knowledge and expertise to
                            every client relationship.

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




    <section class="bg-softWhite">
        <div class="container mx-auto px-6 py-12 md:py-24 lg:px-0 xl:px-16">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 justify-center items-center">


                <div class="">
                    <img class="w-[35rem] h-[20rem] md:h-[37rem] object-cover" src="{{ asset('assets/img/image2.png') }}"
                        alt="">
                </div>
                <div class="space-y-6 pl-0 lg:pl-12">

                    <h1
                        class="font-bold text-[30px] md:text-[45px] lg:text-[59px] leading-none w-full xl:w-3/4 text-primary">
                        Message from the Managing Director
                    </h1>
                    <p class="w-full xl:w-3/4 text-base text-textGray">
                        Dear Stakeholders,



                        .</p>

                    <p class="w-full xl:w-3/4 text-base text-textGray">

                        At RenAcquire Limited, we are committed to delivering tailored financial solutions that help
                        businesses navigate complex challenges and achieve their strategic objectives. Drawing from decades
                        of experience, we work closely with our clients to unlock growth opportunities, structure innovative
                        transactions, and deliver measurable value.

                        Our goal is to partner with businesses and institutions to create innovative, client-focused
                        solutions that deliver real impact. In today’s dynamic environment, we believe collaboration is key
                        to unlocking full potential, and we welcome opportunities to work with visionary organisations
                        seeking sustainable growth.

                        Thank you for choosing RenAcquire as your trusted partner. Together, we can achieve extraordinary
                        results.

                    </p>



                    <div class="hidden pt-6 md:flex justify-start items-center gap-8">

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
