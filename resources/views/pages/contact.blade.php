@extends('layouts.app')

@section('content')
    <section class="bg-white">
        <div class="container mx-auto px-6 pt-4 pb-16 md:pt-28 md:pb-28 lg:px-0 xl:px-16 spac">

            <div class="space-y-16">
                <p class="text-4xltext-primary md:text-6xl font-bold text-center text-primary">Contact</p>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">


                    <div class="space-y-4 flex flex-col justify-center items-center">
                        <span>
                            <i class="fa-regular fa-clock font-bold text-6xl text-primary"></i>
                        </span>

                        <h3 class="text-2xl font-bold tracking-wide text-primary">Open Hours
                        </h3>
                        <div class="space-y-1 text-center">

                            <p class="text-base text-gray">Mon-Fri: 8 AM – 5 PM</p>
                            <p class="text-base text-gray">Saturday: 9 AM – 4 PM</p>
                            <p class="text-base text-gray">Sunday: Closed</p>
                        </div>
                    </div>


                    <div class="space-y-4 flex flex-col justify-center items-center">
                        <span>
                            <i class="fa-solid fa-location-dot font-bold text-6xl text-primary"></i>
                        </span>

                        <h3 class="text-2xl font-bold tracking-wide text-primary">Address
                        </h3>
                        <div class="space-y-1 text-center">

                            <p class="text-base text-gray">176 Street name, Lagos,</p>
                            <p class="text-base text-gray">LA 10014</p>
                            <p class="text-base text-gray">Check Location</p>
                        </div>
                    </div>




                    <div class="space-y-4 flex flex-col justify-center items-center">
                        <span>
                            <i class="fa-solid fa-headphones font-bold text-6xl text-primary"></i>
                        </span>

                        <h3 class="text-2xl font-bold tracking-wide text-primary">Get In Touch
                        </h3>
                        <div class="space-y-1 text-center">

                            <p class="text-base text-gray">Telephone: +1(800)123-4566</p>
                            <p class="text-base text-gray">Email: info@yoursite.com</p>
                            <p class="text-base text-gray">Contact Form</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>


    <section class="bg-white">
        <div class="container mx-auto px-6 pt-4 pb-16 md:pt-8 md:pb-28 lg:px-0 xl:px-16 spac">


            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 justify-center items-center">

                <di>
                    <h2 class="text-3xl md:text-4xl w-full font-bold">
                   Have questions or looking to partner with us? We’d love to hear from you.

                    </h2>
                    <div class="w-full pt-16">
                        {{-- <form class="space-y-6">

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 md:gap-8 justify-start items-start">
                                <div class="space-y-2 group">
                                    <label class="block text-gray" for="name">First Name</label>
                                    <div class="relative">
                                        <input type="text" id="name" name="name" required
                                            class="w-full border-b-2 border-lightGray outline-none peer focus:ring-0" />
                                        <div
                                            class="absolute bottom-0 left-0 w-0 h-[2px] bg-primary transition-all duration-300 group-hover:w-full">
                                        </div>
                                    </div>
                                </div>

                                <div class="space-y-2 group">
                                    <label class="block text-gray" for="name">Last Name</label>
                                    <div class="relative">
                                        <input type="text" id="name" name="name" required
                                            class="w-full border-b-2 border-lightGray outline-none peer focus:ring-0" />
                                        <div
                                            class="absolute bottom-0 left-0 w-0 h-[2px] bg-primary transition-all duration-300 group-hover:w-full">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 md:gap-8 justify-start items-start">
                                <div class="space-y-2 group">
                                    <label class="block text-gray" for="name">Email</label>
                                    <div class="relative">
                                        <input type="text" id="name" name="name" required
                                            class="w-full border-b-2 border-lightGray outline-none peer focus:ring-0" />
                                        <div
                                            class="absolute bottom-0 left-0 w-0 h-[2px] bg-primary transition-all duration-300 group-hover:w-full">
                                        </div>
                                    </div>
                                </div>

                                <div class="space-y-2 group">
                                    <label class="block text-gray" for="name">Phone</label>
                                    <div class="relative">
                                        <input type="text" id="name" name="name" required
                                            class="w-full border-b-2 border-lightGray outline-none peer focus:ring-0" />
                                        <div
                                            class="absolute bottom-0 left-0 w-0 h-[2px] bg-primary transition-all duration-300 group-hover:w-full">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="space-y-2 group pt-6">
                                <label class="block text-gray" for="name">Message</label>
                                <div class="relative">
                                    <input type="text" id="name" name="name" required
                                        class="w-full border-b-2 border-lightGray outline-none peer focus:ring-0" />
                                    <div
                                        class="absolute bottom-0 left-0 w-0 h-[2px] bg-primary transition-all duration-300 group-hover:w-full">
                                    </div>
                                </div>
                            </div>

                            <div class="pt-6">
                                <button class="py-4 px-10 text-lg bg-primary hover:opacity-90 text-white">
                                    Submit
                                </button>
                            </div>
                        </form> --}}

                        <livewire:contact />
                    </div>
                </di>

                <di>
                    <img src="{{ asset('assets/img/contact.png') }}" alt="" />
                </di>

            </div>

        </div>
    </section>
@endsection
