<!DOCTYPE html>
<html lang="en">
<head>

    <title>Casino Royale</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
       
        html, body {
            height: 100%;
            overflow: hidden;
        }
    </style>
</head>
<body class="bg-gray-900 text-white overflow-hidden">

    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-2xl text-yellow-500 leading-tight">
                {{ __('Home') }}
            </h2>
        </x-slot>

        <div class="bg-gray-900 text-white h-screen py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-gray-800 shadow-lg sm:rounded-lg">
                    <div class="p-6 text-yellow-500">
                        <h3 class="text-4xl font-extrabold mb-4">Welcome, {{ Auth::user()->name }}!</h3>
                        <p class="text-lg">Remember, 99% of gamblers quit before they hit a big jackpot...</p>
                    </div>
                </div>
            </div>
        </div>

        <nav class="bg-gray-900 py-4 shadow-md fixed bottom-0 w-full">
            <div class="container mx-auto px-4 flex justify-between items-center">
                <div class="flex items-center"></div>
                <div class="flex items-center space-x-4"></div>
            </div>
        </nav>

        <script>
            console.log("hiiiiii");

            Echo.channel('chat')
                .listen('MessagingEvent', (e) => {
                    console.log(e.message);
                });
        </script>
    </x-app-layout>

</body>
</html>
