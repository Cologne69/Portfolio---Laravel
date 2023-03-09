<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" data-theme="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ __('Kyrell | Portfolio') }}</title>
    @vite('resources/css/app.css')
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    @livewireStyles
</head>

<body class="antialiased">
    <main class="mockup-window w-screen h-screen">
        <div class="flex p-1">
            <div class="flex-auto">
                <input type="text" class="input rounded w-full" disabled readonly value="{{ request()->url() }}" />
            </div>
            <ul class="menu menu-horizontal bg-primary rounded ml-2 ">
                <livewire:switch-language />
                <li class="dropdown dropdown-bottom dropdown-end">
                    <label tabindex="0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" />
                        </svg>
                    </label>
                    <ul tabindex="0" class="dropdown-content shadow bg-base-100 rounded-box">
                        <li><a onclick="toggleTheme('light')">Light</a></li>
                        <li><a onclick="toggleTheme('dark')">Dark</a></li>
                        <li><a onclick="toggleTheme('cyberpunk')">Cyberpunk</a></li>
                        <li><a onclick="toggleTheme('night')">Night</a></li>
                    </ul>
                </li>
                {{-- <li tabindex="0" style="z-index: 1" class="right-0">
                    <a>

                    </a>

                    <ul class="p-2 bg-base-100">
                        <li><a onclick="toggleTheme('light')">Light</a></li>
                        <li><a onclick="toggleTheme('dark')">Dark</a></li>
                        <li><a onclick="toggleTheme('cyberpunk')">Cyberpunk</a></li>
                        <li><a onclick="toggleTheme('night')">Night</a></li>
                    </ul>
                </li> --}}
            </ul>
        </div>
        <livewire:tabs>
            <div class="overflow-y-auto p-8" style="height: 85.8%">
                {{ $slot }}
            </div>

    </main>

    <script>
        function toggleTheme(option) {
            let theme = document.documentElement.getAttribute('data-theme');
            if (option) {
                theme = option;
            }
            document.documentElement.setAttribute('data-theme', option);
            localStorage.setItem('theme', option);
        }
        if (localStorage.getItem('theme')) {
            toggleTheme(localStorage.getItem('theme'));
        }
    </script>
    <script src="https://platform.linkedin.com/badges/js/profile.js" async defer type="text/javascript"></script>
    @livewireScripts
</body>

</html>
