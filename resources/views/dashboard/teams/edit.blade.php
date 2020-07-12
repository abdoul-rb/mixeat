@extends('layouts.dashboard')
@section('header') Teams @endsection
@section('content')
    <section class="grid grid-cols-3 gap-4">
        <div class="tracking-wide leading-relaxed">
            <h4 class="text-lg text-gray-900 font-medium">Information personnel</h4>
            <p class="text-sm text-gray-600">Mise a jour / <span class="text-blue-700">{{ $user->name }}</span></p>
        </div>
        <form class="col-span-2" method="POST" action="{{ route('dashboard.teams.update', $user) }}">
            @csrf
            @method('PATCH')
            <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6">
                    <label for="name" class="block text-sm font-medium leading-5 text-gray-700">Nom et Prénom</label>
                    <input name="name" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" value="{{ $user->name }}"/>
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="poste" class="block text-sm font-medium leading-5 text-gray-700">Poste</label>
                    <input name="poste" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" value="{{ $user->poste }}"/>
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="" class="block text-sm font-medium leading-5 text-gray-700">Role</label>
                    <input name="" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"/>
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="email" class="block text-sm font-medium leading-5 text-gray-700">Adresse Email</label>
                    <input type="email" name="email" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" value="{{ $user->email }}"/>
                </div>
                <div class="col-span-6  sm:col-span-3">
                    <label for="phone_number" class="block text-sm font-medium leading-5 text-gray-700">Numéro de téléphone</label>
                    <input name="phone_number" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" value="{{ $user->phone_number }}"/>
                </div>
                <div class="col-span-6 mt-2">
                    <div class="flex items-center">
                        <div class="h-32 w-32 object-cover object-top rounded-full shadow-lg overflow-hidden mr-4">
                            <img class="inline-block h-32 w-32 object-cover object-top rounded-full shadow-lg" src="{{ asset('images/sacha.jpg') }}" alt="Photo de {{ $user->name }}">
                        </div>
                        <div class="relative flex items-center justify-center py-2 border border-gray-500 rounded-md text-sm leading-4 font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition duration-150 ease-in-out px-4 py-2">
                            <input type="file" name="avatar" class="absolute h-full opacity-0 left-0 top-O">Changer votre photo
                        </div>
                    </div>
                </div>
                <div class="col-span-6">
                    <label for="password" class="block text-sm font-medium leading-5 text-gray-700">Nouveau mot de passe</label>
                    <input type="password" name="password" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"/>
                </div>
                <div class="col-span-6">
                    <label for="password-confirm" class="block text-sm font-medium leading-5 text-gray-700">Confirmation mot de passe</label>
                    <input id="password-confirm" type="password" name="password_confirmation" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"/>
                </div>
            </div>
            <div class="flex items-center justify-end my-6">
                <button type="submit" class="py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-blue-800 shadow-sm hover:bg-blue-500 focus:outline-none focus:shadow-outline-blue active:bg-blue-600 transition duration-150 ease-in-out">Enregistrer</button>
            </div>
        </form>
    </section>
@endsection
