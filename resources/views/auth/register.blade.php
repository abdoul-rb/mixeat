@extends('layouts.auth')

@section('content')
    <div class="flex min-h-screen">
        <div class="w-5/12 py-24">
            <section class="container px-10">
                <h1 class="text-4xl text-gray-900 font-bold tracking-wide leading-9">Créer un compte</h1>
                <form class="mt-8" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="grid grid-cols-4 gap-3">
                        <div class="col-span-4 my-1">
                            <label for="name" class="block text-sm font-medium leading-5 text-gray-700">{{ __('Nom') }}</label>
                            <div class="mt-1 rounded-md shadow-sm">
                                <input id="name" name="name" type="text" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none  focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('name') border border-red-600 @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus/>
                            </div>
                            @error('name')
                            <div class="text-sm text-red-500 font-normal mt-1" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                            @enderror
                        </div>
                        <div class="col-span-4 my-1">
                            <label for="email" class="block text-sm font-medium leading-5 text-gray-700">{{ __('Adresse email') }}</label>
                            <div class="mt-1 rounded-md shadow-sm">
                                <input id="email" name="email" type="email" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('email') border border-red-600 @enderror" value="{{ old('email') }}" required autocomplete="email"/>
                            </div>
                            @error('email')
                            <div class="text-sm text-red-500 font-normal mt-1" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                            @enderror
                        </div>
                        <div class="col-span-4 my-1">
                            <label for="password" class="block text-sm font-medium leading-5 text-gray-700">{{ __('Mot de passe') }}</label>
                            <div class="mt-1 rounded-md shadow-sm">
                                <input id="password" name="password" type="password" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('password') border border-red-600 @enderror" required autocomplete="new-password"/>
                            </div>
                            @error('password')
                            <div class="text-sm text-red-500 font-normal mt-1" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                            @enderror
                        </div>
                        <div class="col-span-4 my-1">
                            <label for="password-confirm" class="block text-sm font-medium leading-5 text-gray-700">{{ __('Confirmation de mot de passe') }}</label>
                            <div class="mt-1 rounded-md shadow-sm">
                                <input id="password-confirm" name="password_confirmation" type="password" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" required autocomplete="new-password"/>
                            </div>
                        </div>
                    </div>
                    <p class="text-sm font-medium mt-1">
                        Vous avez déjà un compte ? <a href="{{ route('login') }}" class="font-medium text-gray-900 hover:text-gray-500 underline focus:outline-none focus:underline transition ease-in-out duration-150">Connectez-vous</a>.
                    </p>
                    <div class="mt-8">
                        <button type="submit" class="group relative w-full bg-indigo-900 flex justify-center py-3 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white focus:outline-none focus:border-blue-700 focus:shadow-outline-blue transition duration-500 ease-in-out">
                            {{ __('S\'inscrire') }}
                        </button>
                    </div>
                </form>
            </section>
        </div>
        <div class="w-7/12 bg-indigo-900"></div>
    </div>
@endsection
