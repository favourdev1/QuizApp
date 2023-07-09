<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }}</title>
    {{-- <link href="{{ mix('css/app.css') }}" rel="stylesheet"> --}}
    @vite('resources/css/app.css')
</head>

<body class="p-0 m-0 h-screen bg-gray-50 ">


    <nav class="   border-b   bg-white ">
        <div class="  sm:1/3 md:w-2/3 lg:w-3/4 xl:w-1/2 flex mx-auto p-4 font-bold">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 mr-4">
                <path fill-rule="evenodd" d="M11.484 2.17a.75.75 0 011.032 0 11.209 11.209 0 007.877 3.08.75.75 0 01.722.515 12.74 12.74 0 01.635 3.985c0 5.942-4.064 10.933-9.563 12.348a.749.749 0 01-.374 0C6.314 20.683 2.25 15.692 2.25 9.75c0-1.39.223-2.73.635-3.985a.75.75 0 01.722-.516l.143.001c2.996 0 5.718-1.17 7.734-3.08zM12 8.25a.75.75 0 01.75.75v3.75a.75.75 0 01-1.5 0V9a.75.75 0 01.75-.75zM12 15a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75v-.008a.75.75 0 00-.75-.75H12z" clip-rule="evenodd" />
              </svg>
              
         <x-text.title-text class="px-6">{{ env('APP_NAME') }}</x-text.title-text>
        </div>




    </nav>

    <!-- Example content section -->
    <div class="bg-white   border-x sm:1/3 md:w-2/3 lg:w-3/4 xl:w-1/2 mx-auto px-4 sm:p-6 lg:px-8 xl:px-16 h-full  py-4">

        @yield('content')
    </div>

    <!-- Add your scripts here -->
</body>

</html>
