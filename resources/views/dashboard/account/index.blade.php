@extends('layouts.dashboard')
@section('header') Mon compte @endsection
@section('content')
    <section class="grid grid-cols-3 gap-2">
        <div class="col-span-1 mt-2">
            <h3 class="text-lg font-medium leading-6 text-gray-900">Informations personnelles</h3>
            <p class="mt-1 text-sm leading-5 text-gray-600">
                Mettez à jour votre profil
            </p>
        </div>
        <div class="col-span-2">
            <form  method="POST" action="{{ route('dashboard.profile')}}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="grid grid-cols-6 gap-3">
                    <div class="col-span-6 sm:col-span-3">
                        <label for="name" class="block text-sm font-medium leading-5 text-gray-700">Nom et Prénom</label>
                        <input name="name" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" value="{{ request()->user()->name }}"/>
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="poste" class="block text-sm font-medium leading-5 text-gray-700">Poste</label>
                        <input name="poste" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" value="{{ request()->user()->poste }}"/>
                    </div>
                    <div class="col-span-6">
                        <label for="email" class="block text-sm font-medium leading-5 text-gray-700">Adresse Email</label>
                        <input type="email" name="email" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" value="{{ request()->user()->email }}"/>
                    </div>
                    <div class="col-span-6">
                        <label for="phone_number" class="block text-sm font-medium leading-5 text-gray-700">Numéro de téléphone</label>
                        <input name="phone_number" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" value="{{ request()->user()->phone_number }}"/>
                    </div>
                    <div class="col-span-6 mt-2">
                        <div class="flex items-center">
                            <div class="h-32 w-32 object-cover object-top rounded-full shadow-lg overflow-hidden mr-4">
                                <img class="inline-block h-32 w-32 object-cover object-top rounded-full shadow-lg" src="{{ request()->user()->avatar }}" alt="Photo de {{ request()->user()->name }}">
                            </div>
                            <div class="relative flex items-center justify-center py-2 border border-gray-500 rounded-md text-sm leading-4 font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition duration-150 ease-in-out px-4 py-2">
                                <input type="file" name="avatar" class="absolute h-full opacity-0 left-0 top-O">Changer votre photo
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-end my-3">
                    <button type="submit" class="py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-blue-800 shadow-sm hover:bg-blue-500 focus:outline-none focus:shadow-outline-blue active:bg-blue-600 transition duration-150 ease-in-out">Enregistrer</button>
                </div>
            </form>
            <form class="mt-6" method="POST" action="">
                @csrf
                @method('PATCH')
                <div class="grid grid-cols-6 gap-3">
                    <div class="col-span-6">
                        <label for="password" class="block text-sm font-medium leading-5 text-gray-700">Mot de passe</label>
                        <input id="password" name="password" type="password" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"/>
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="password" class="block text-sm font-medium leading-5 text-gray-700">Nouveau Mot de passe</label>
                        <input id="password" name="password" type="password" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"/>
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="password_confirm" class="block text-sm font-medium leading-5 text-gray-700">Confrimation Mot de passe</label>
                        <input id="password_confirm" name="password_confirmation" type="password" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"/>
                    </div>
                </div>
                <div class="flex items-center justify-end my-3">
                    <button type="submit" class="py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-blue-800 shadow-sm hover:bg-blue-500 focus:outline-none focus:shadow-outline-blue active:bg-blue-600 transition duration-150 ease-in-out">Enregistrer</button>
                </div>
            </form>
        </div>
    </section>
@endsection
