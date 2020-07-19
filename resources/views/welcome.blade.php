@extends('layouts.app')
@section('title') Accueil @endsection
@section('content')
    <div class="relative bg-white overflow-hidden mt-20">
        <div class="max-w-6xl mx-auto">
            <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <polygon points="50,0 100,0 50,100 0,100" />
                </svg>
                <div class="relative pt-6 px-4 sm:px-6 lg:px-8">
                </div>
                <main class="mx-auto max-w-screen-xl px-4 sm:mt-6 sm:px-6 md:mt-6 lg:mt-20 lg:px-8 xl:mt-6">
                    <div class="sm:text-center lg:text-left">
                        <h2 class="text-3xl tracking-wide leading-10 font-bold text-blue-900 sm:text-4xl sm:leading-none md:text-5xl">
                            Fresh juice <br>
                            Homemade smoothie <br>
                            <br class="xl:hidden">
                            <span class="text-indigo-600">From best fruits</span>
                        </h2>
                        <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                            Notre mission : donner de l’énergie et rendre les gens heureux grâce à des recettes saines élaborées avec des produits frais et de saison.
                        </p>
                        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                            <div class="rounded-md shadow">
                                <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">Get started</a>
                            </div>
                            <div class="mt-3 sm:mt-0 sm:ml-3">
                                <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-indigo-700 bg-indigo-100 hover:text-indigo-600 hover:bg-indigo-50 focus:outline-none focus:shadow-outline-indigo focus:border-indigo-300 transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">Live demo</a>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="https://images.unsplash.com/photo-1554068919-741e3c8bd213?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60" alt="">
        </div>
    </div>
    <section class="max-w-6xl mx-auto py-8">

    </section>
@endsection
