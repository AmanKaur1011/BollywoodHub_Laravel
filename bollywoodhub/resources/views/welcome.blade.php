<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

        

        <!-- Styles -->
        <style>
           
            .description-color {color: #e11d48; /* Tailwind's red-600 color */}
            .main-haeding {color: #e11d48; font-size: 46px; font-weight: bolder; /* Tailwind's red-600 color */}
        </style>
    </head>
    <body class="font-sans antialiased ">
        <div class="bg-gray-50 text-black/50  ">
            <!-- <img id="background" class="absolute -left-20 top-0 max-w-[877px]" src="https://laravel.com/assets/img/welcome/background.svg" /> -->
            <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                        <div class="flex lg:justify-center lg:col-start-2">
                            
                        </div>
                        @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Dashboard
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Log in
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                        >
                                            Register
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
                    </header>

                    <main class="mt-6 mx-auto max-w-6xl p-6 bg-gray-50 rounded-lg shadow-md">
    <!-- Hero Section -->
    <section class="flex flex-col md:flex-row items-center justify-between mb-12">
        <div class="md:w-1/2 text-center md:text-left">
            <h1 class="text-5xl font-bold description-color main-haeding ">Welcome to the Bollywood Hub</h1>
            <p class="mt-4 mb-4 text-lg description-color">Explore a world of movies and music that you love, all in one place!</p>
        </div>
        <div class="mt-8 md:mt-0 md:w-1/2">

            <img src="https://m.media-amazon.com/images/I/A1B+p2QqSfL._AC_UF1000,1000_QL80_.jpg" alt="Movies and Music" class="w-full rounded-lg shadow-lg mt-4">
        </div>
    </section>

    <!-- Featured Content Heading -->
    <h2 class="text-4xl font-bold main-haeding  text-center mb-12">Featured Content</h2>

    <!-- Movies Section -->
    <section id="explore" class="mb-12">
        <h2 class="text-3xl font-semibold text-red-600 mb-4">Movies</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-semibold heading-color">Movie: Tiger Zinda Hai</h3>
                <p class="mt-2 description-color">Genre: Action, Adventure, Thriller</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-semibold heading-color">Movie: Simmba</h3>
                <p class="mt-2 description-color">Genre: Action, Crime, Drama</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-semibold heading-color">Movie: Total Dhamaal</h3>
                <p class="mt-2 description-color">Genre: Action, Adventure, Comedy</p>
            </div>
        </div>
    </section>

    <!-- Music Section -->
    <section>
        <h2 class="text-3xl font-semibold text-red-600 mb-4">Music</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-semibold heading-color">Song: Aankh Marey</h3>
                <p class="mt-2 description-color">Artist: Kumar Sanu, Mika Singh, Neha Kakkar</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-semibold heading-color">Song: Apna Time Aayega</h3>
                <p class="mt-2 description-color">Artist: Ranveer Singh</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-semibold heading-color">Song: Proper Patola</h3>
                <p class="mt-2 description-color">Artist: Aastha Gill, Badshah, Diljit Dosanjh</p>
            </div>
        </div>
    </section>
</main>


                    <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                        BollyWood Hub
                    </footer>
                </div>
            </div>
        </div>
    </body>
</html>
