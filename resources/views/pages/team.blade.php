@extends('layouts.app')

@section('content')
    <section class="bg-softWhite">
        <div class="container mx-auto px-6 pt-4 pb-16 md:pt-28 md:pb-28 lg:px-0 xl:px-16 spac">

            <div class="space-y-16">
                <p class="text-4xl md:text-6xl font-bold text-center text-primary">Our Team</p>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    {{-- <div class="relative">
                        <img class="" src="{{ asset('assets/img/team.jpg') }}" alt="Team Image">
                        <div class="absolute bottom-8 left-6 text-white">
                            <p class="font-bold text-2xl">John Does</p>
                            <p class="text-base">Managing Director</p>
                        </div>
                    </div> --}}


                    <div class="relative group overflow-hidden cursor-pointer">
                        <img class="transition-transform duration-500 ease-in-out transform group-hover:scale-105"
                            src="{{ asset('assets/img/team.jpg') }}" alt="Team Image">
                        <div
                            class="absolute text-white bottom-8 left-6 opacity-0 transform translate-y-12 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500 ease-in-out">
                            <p class="font-bold text-3xl">John Does</p>
                            <p class="text-lg">Managing Director</p>
                        </div>
                    </div>


                    <div class="relative group overflow-hidden cursor-pointer">
                        <img class="transition-transform duration-500 ease-in-out transform group-hover:scale-105"
                            src="{{ asset('assets/img/team.jpg') }}" alt="Team Image">
                        <div
                            class="absolute text-white bottom-8 left-6 opacity-0 transform translate-y-12 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500 ease-in-out">
                            <p class="font-bold text-3xl">John Does</p>
                            <p class="text-lg">Managing Director</p>
                        </div>
                    </div>

                    <div class="relative group overflow-hidden cursor-pointer">
                        <img class="transition-transform duration-500 ease-in-out transform group-hover:scale-105"
                            src="{{ asset('assets/img/team.jpg') }}" alt="Team Image">
                        <div
                            class="absolute text-white bottom-8 left-6 opacity-0 transform translate-y-12 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500 ease-in-out">
                            <p class="font-bold text-3xl">John Does</p>
                            <p class="text-lg">Managing Director</p>
                        </div>
                    </div>
                    <div class="relative group overflow-hidden cursor-pointer">
                        <img class="transition-transform duration-500 ease-in-out transform group-hover:scale-105"
                            src="{{ asset('assets/img/team.jpg') }}" alt="Team Image">
                        <div
                            class="absolute text-white bottom-8 left-6 opacity-0 transform translate-y-12 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500 ease-in-out">
                            <p class="font-bold text-3xl">John Does</p>
                            <p class="text-lg">Managing Director</p>
                        </div>
                    </div>

                    <div class="relative group overflow-hidden cursor-pointer">
                        <img class="transition-transform duration-500 ease-in-out transform group-hover:scale-105"
                            src="{{ asset('assets/img/team.jpg') }}" alt="Team Image">
                        <div
                            class="absolute text-white bottom-8 left-6 opacity-0 transform translate-y-12 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500 ease-in-out">
                            <p class="font-bold text-3xl">John Does</p>
                            <p class="text-lg">Managing Director</p>
                        </div>
                    </div>

                    <div class="relative group overflow-hidden cursor-pointer">
                        <img class="transition-transform duration-500 ease-in-out transform group-hover:scale-105"
                            src="{{ asset('assets/img/team.jpg') }}" alt="Team Image">
                        <div
                            class="absolute text-white bottom-8 left-6 opacity-0 transform translate-y-12 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500 ease-in-out">
                            <p class="font-bold text-3xl">John Does</p>
                            <p class="text-lg">Managing Director</p>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>
@endsection
