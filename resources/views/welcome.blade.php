<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mixeat - Homepage</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body class="bg-white">
        @include('components.nav')
        <article class="bg-pink-mix-1 w-full rounded-br-large">
            <div class="container flex">
                <div class="w-1/2 text-gray-900 py-16">
                    <strong class="block text-4xl font-medium tracking-wide">Fresh juice</strong>
                    <strong class="block text-4xl font-medium tracking-wide">Homemade smoothie</strong>
                    <em class="block text-4xl font-medium not-italic tracking-wide">from best fruits</em>
                    <p class="text-sm tracking-tighter mt-4 mr-32">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A animi autem dolor eligendi error ex fuga fugit iusto.</p>
                </div>
                <div class="w-1/2 px-20">
                    <img src="{{ asset('images/douglas-bagg.png') }}" alt="" class="w-1/2">
                </div>
            </div>
        </article>
        <section class="container py-8">
            <h1 class="font-noto text-green-700 text-4xl font-bold tracking-wide" id="menus">The Happiest hour of the year</h1>
            <p class="text-gray-700 text-sm font-medium leading-relaxed">
                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, asperiores autem cupiditate dolore ex exercitationem fuga iure labore magni minima minus nobis officia officiis, perspiciatis possimus similique velit. Libero, odit.</span>
            </p>
            <div class="my-10">
                <div class="bg-gray-200 h-24 max-w-xs shadow-md rounded-md transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 px-6 py-4">
                    <div class="text-sm font-medium font-black">Monster Mango</div>
                </div>
            </div>
        </section>
    </body>
</html>
