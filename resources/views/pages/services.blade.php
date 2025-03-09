@extends('layouts.app')

@section('content')
    <section class="bg-softWhite">
        <div class="container mx-auto px-6 pt-4 pb-16 md:pt-28 md:pb-28 lg:px-0 xl:px-16 spac">

            <div class="space-y-16">
                <p class="text-4xl md:text-6xl font-bold text-center text-primary">Our Services</p>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">



                    <div class="space-y-4 flex flex-col justify-center items-center bg-white shadow-sm px-6 py-16">
                        <span><i class="fa-solid fa-briefcase text-6xl font-bold"></i></span>
                        <div>
                            <h4 class="text-2xl text-center font-bold text-primary">Advisory Services
                            </h4>
                            <p class="text-base text-center text-gray tracking-wide">RenAcquire provides strategic advisory
                                solutions to help businesses and public sector entities achieve their goals. From financial
                                planning to public sector consulting, we ensure impactful outcomes.
                            </p>
                        </div>
                        <p class="text-6xl text-gray">...</p>
                    </div>

                    <div class="space-y-4 flex flex-col justify-center items-center bg-white shadow-sm px-6 py-16">
                        <span><i class="fa-solid fa-briefcase text-6xl font-bold"></i></span>
                        <div>
                            <h4 class="text-2xl text-center font-bold text-primary">Lending Solutions

                            </h4>
                            <p class="text-base text-center text-gray tracking-wide">Our lending services are designed to
                                support public sector entities and government parastatals in achieving their objectives. We
                                offer tailored financing solutions with flexible terms.

                            </p>
                        </div>
                        <p class="text-6xl text-gray">...</p>
                    </div>


                    <div class="space-y-4 flex flex-col justify-center items-center bg-white shadow-sm px-6 py-16">
                        <span><i class="fa-solid fa-briefcase text-6xl font-bold"></i></span>
                        <div>
                            <h4 class="text-2xl text-center font-bold text-primary">Transaction Structuring

                            </h4>
                            <p class="text-base text-center text-gray tracking-wide">We specialise in structuring and
                                executing complex corporate transactions, ensuring optimal outcomes for all stakeholders
                                involved.

                            </p>
                        </div>
                        <p class="text-6xl text-gray">...</p>
                    </div>


                    <div class="space-y-4 flex flex-col justify-center items-center bg-white shadow-sm px-6 py-16">
                        <span><i class="fa-solid fa-briefcase text-6xl font-bold"></i></span>
                        <div>
                            <h4 class="text-2xl text-center font-bold text-primary">Wealth Management

                            </h4>
                            <p class="text-base text-center text-gray tracking-wide">For High Net-Worth Individuals (HNIs),
                                we provide personalised wealth management services designed to preserve and grow wealth
                                while aligning with individual financial objectives.

                            </p>
                        </div>
                        <p class="text-6xl text-gray">...</p>
                    </div>




                </div>
            </div>

        </div>
    </section>
@endsection
