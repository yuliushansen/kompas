<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg id="Capa_1" enable-background="new 0 0 512 512" height="280" viewBox="0 0 512 512" width="280" xmlns="http://www.w3.org/2000/svg"><g><g><path d="m445.8 428.311-88.809 47.122-100.991 36.567h-96.57c-29.6 0-56.73-16.18-70.81-42.22l-22.42-41.47c-7.347-13.585 8.295-28.07 21.27-19.78 13.87 8.87 28.41 8.89 28.55 8.89.49-.01.97.01 1.46.05.43.03 46.24 3.38 85.8-14.37 29.049-13.035 76.339-13.045 105.43 0 39.56 17.75 85.38 14.4 85.83 14.37.52-.04.87-.06 1.38-.05.95-.01 15.23-.34 28.61-8.89 12.993-8.3 28.608 6.212 21.27 19.781z" fill="#add3d8"/></g><path d="m445.8 428.311-22.43 41.47c-14.07 26.039-41.2 42.219-70.81 42.219h-96.56v-118.679c19.09 0 38.17 3.26 52.71 9.78 39.56 17.75 85.38 14.4 85.83 14.37.52-.04.87-.06 1.38-.05.95-.01 15.23-.34 28.61-8.89 12.993-8.301 28.608 6.211 21.27 19.78z" fill="#81a1b1"/><g><path d="m467.99 100.824-54.09 34.93c-7.454 4.807-17.41 2.139-21.47-5.73-6.82-13.23-16.93-24.68-29.23-33.11-6.7-4.59-8.53-13.68-4.12-20.5l33.14-51.339c18.906-29.273 60.041-33.745 84.79-9.02 24.701 24.721 20.276 65.853-9.02 84.769z" fill="#5a7983"/></g><path d="m148.8 96.913c-12.235 8.387-22.332 19.732-29.24 33.11-4.027 7.804-13.973 10.555-21.47 5.72l-54.08-34.92c-13.97-9.03-23-23.69-24.76-40.23s3.97-32.77 15.73-44.53c24.785-24.785 65.921-20.197 84.79 9l33.14 51.349c4.41 6.822 2.58 15.912-4.11 20.501z" fill="#81a1b1"/><g><path d="m419.26 278.702c-1.5-.62-3.72-1.28-6.28-2.04-29.958-8.889-31.17-15.675-54.65-22.4-12.65-3.65-28.03-5.89-54.86 2.31-20.726 6.38-27.565 13.137-47.47 12.82-9.31-.15-18.6-2.25-27.2-6.27-34.063-15.931-61.13-17.4-101.94 3.33-18.096 9.226-27.096 9.365-34.11 12.24-10.303 4.254-21.528-3.831-20.69-15.01l7.61-99.269c2.235-37.483 21.702-71.343 52.15-92.239 11.85-8.13 24.97-14.04 39.01-17.53 27.87-6.94 56.51-10.4 85.17-10.4 28.65 0 77.573 33.282 77.573 33.282l79.395 94.606 26.972 91.55c.836 11.134-10.331 19.271-20.68 15.02z" fill="#add3d8"/></g><path d="m419.26 278.702c-1.5-.62-3.72-1.28-6.28-2.04-29.958-8.889-31.17-15.675-54.65-22.4-12.65-3.65-28.03-5.89-54.86 2.31-20.726 6.38-27.565 13.137-47.47 12.82v-225.148c28.65 0 57.29 3.46 85.14 10.39 14.05 3.5 27.18 9.4 39.03 17.55 16.37 11.22 29.83 26.47 38.92 44.1 7.78 15.02 12.23 31.23 13.23 48.129l7.62 99.269c.836 11.134-10.331 19.271-20.68 15.02z" fill="#81a1b1"/><g><path d="m440.689 433.821c-19.867 12.701-38.606 13.95-56.15 13.95-18.48 0-54.53-2.24-88.1-17.29-10.58-4.75-25.51-7.12-40.43-7.12-14.93-.01-29.86 2.37-40.44 7.12-44.47 19.94-93.32 17.39-99.85 16.94-4.64-.04-24.64-.98-44.39-13.6-18.78-11.98-40.92-37.1-39.7-88.719.937-39.427 13.341-79.154 49.68-94.139 10.699-4.419 16.505-3.364 31.96-11.25 10.32-5.24 20.67-9.47 30.78-12.58 25.62-7.91 47.2-8.16 72.15-.85 23.852 6.995 26.516 12.683 39.81 13.11 12.837.358 15.72-4.424 38.67-11.5 34.49-10.552 64.436-10.506 103.4 10.62 14.92 8.104 24.216 8.972 32.62 12.45 13.42 5.53 24.85 15.39 33.06 28.52 10.39 16.61 15.98 38.69 16.61 65.629 1.24 51.609-20.89 76.729-39.68 88.709z" fill="#81a1b1"/></g><g><path d="m146.245 334.522h-16.238c-8.284 0-15-6.716-15-15s6.716-15 15-15h16.238c4.955 0 8.985-4.031 8.985-8.986 0-8.284 6.716-15 15-15s15 6.716 15 15c0 21.497-17.489 38.986-38.985 38.986z" fill="#525e63"/></g><path d="m440.68 433.821c-19.867 12.701-38.606 13.95-56.15 13.95-18.48 0-54.53-2.24-88.1-17.29-10.58-4.75-25.51-7.12-40.43-7.12v-183.969c5.37.15 10.78-.86 15.84-3.04 7.69-3.32 15.37-6.16 22.83-8.46 34.49-10.552 64.436-10.506 103.4 10.62 14.92 8.104 24.216 8.972 32.62 12.45 13.42 5.53 24.85 15.39 33.06 28.52 10.39 16.61 15.98 38.69 16.61 65.629 1.24 51.61-20.89 76.73-39.68 88.71z" fill="#5a7983"/><g><path d="m381.992 334.522h-16.238c-21.497 0-38.986-17.489-38.986-38.986 0-8.284 6.716-15 15-15s15 6.716 15 15c0 4.955 4.031 8.986 8.986 8.986h16.238c8.284 0 15 6.716 15 15s-6.716 15-15 15z" fill="#414c51"/></g><g><circle cx="155.006" cy="161.619" fill="#525e63" r="15"/></g><g><circle cx="356.992" cy="161.619" fill="#414c51" r="15"/></g></g></svg>
                </div>

                <div class="flex justify-center">
                    @if (Route::has('login'))
                        <div class="hidden px-6 py-4 sm:block">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-500 underline">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="text-sm text-gray-500 underline">Login</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-500 underline">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>

                {{-- <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Documentation</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">Laracasts</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white">Laravel News</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline">Forge</a>, <a href="https://vapor.laravel.com" class="underline">Vapor</a>, <a href="https://nova.laravel.com" class="underline">Nova</a>, and <a href="https://envoyer.io" class="underline">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and more.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>

                            <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                                Shop
                            </a>

                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>

                            <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div> --}}
            </div>
        </div>
    </body>
</html>
