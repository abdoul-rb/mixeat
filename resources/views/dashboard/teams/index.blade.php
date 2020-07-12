@extends('layouts.dashboard')
@section('header')
    <div class="flex items-center justify-between">
        <div>L'équipe</div>
        <a class="block" href="{{ route('dashboard.teams.create') }}">
            <button class="bg-transparent uppercase hover:bg-blue-700 text-xs text-blue-700 font-normal hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                add member
            </button>
        </a>
    </div>
@endsection
@section('content')
    <section class="grid grid-cols-3 gap-8">
        @foreach($users as $user)
        <aside class="bg-white max-w-sm rounded-lg overflow-hidden shadow-m border border-gray-200 py-6">
            <div class="flex flex-col items-center justify-center px-6">
                <a href="#">
                    @if($user->avatar)
                    <img class="h-32 w-32 rounded-full object-cover shadow-md mx-auto" src="{{ $user->avatar }}">
                    @else
                        <img class="h-32 w-32 rounded-full object-cover shadow-md mx-auto" src="{{ asset('images/sacha.jpg') }}">
                    @endif
                </a>
                <div class="text-center my-4">
                    <h2 class="text-sm font-medium tracking-wider leading-relaxed">{{ $user->name }}</h2>
                    <h2 class="text-gray-500 text-xs tracking-wider leading-relaxed font-normal mb-2">{{ $user->poste }}</h2>
                    <span class="bg-blue-200 text-xs text-blue-500 rounded-full px-5 py-1">Admin</span>
                </div>
                <div>
                    <div class="flex items-center my-2">
                        <svg class="w-4 h-4 stroke-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                        <span class="text-xs font-normal ml-1">{{ $user->email }}</span>
                    </div>
                    <div class="flex items-center my-2">
                        <svg class="w-4 h-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M20 18.35V19a1 1 0 0 1-1 1h-2A17 17 0 0 1 0 3V1a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v4c0 .56-.31 1.31-.7 1.7L3.16 8.84c1.52 3.6 4.4 6.48 8 8l2.12-2.12c.4-.4 1.15-.71 1.7-.71H19a1 1 0 0 1 .99 1v3.35z"/>
                        </svg>
                        <span class="text-xs font-normal ml-1">{{ $user->phone_number }}</span>
                    </div>
                    <div class="flex items-center justify-center my-4">
                        <a class="px-3 py-2" href="{{ route('dashboard.teams.edit', $user) }}">
                            <svg class="stroke-current text-blue-700 w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                            </svg>
                        </a>
                        <form class="px-3 py-2 mt-1" action="{{ route('dashboard.teams.destroy', $user) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit">
                                <svg class="stroke-current text-red-700 w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 4H8l-7 8 7 8h13a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2z"></path><line x1="18" y1="9" x2="12" y2="15"></line><line x1="12" y1="9" x2="18" y2="15"></line>
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </aside>
        @endforeach
    </section>
@endsection
