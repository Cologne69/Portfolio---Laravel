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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/htmltypist.js/dist/typist.css">
    @livewireStyles
</head>

<body class="antialiased overflow-x-hidden">
    <div class="w-screen h-full">
        <div class="hidden md:block">
            <div class="tabs tabs-horizontal">
                <a class="tab tab-lg flex-auto tab-bordered" id="btnAboutTab" href="/">{{ __('About Me') }}</a>
                <a class="tab tab-lg flex-auto tab-bordered" id="btnProjectTab" href="/project">{{ __('Projects') }}</a>
                <a class="tab tab-lg flex-auto tab-bordered" id="btnContactTab" href="/contact">{{ __('Contacts') }}</a>
            </div>
        </div>
        <div class="glass card p-2 h-fit w-fit z-50 fixed shadow-2xl my-auto right-3 inset-y-0 xl:hidden">
            <ul class="menu menu-vertical card">
                <li>
                    <div class="dropdown dropdown-left dropdown-end">
                        <label tabindex="0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" />
                            </svg>
                        </label>
                        <ul tabindex="0" class="dropdown-content card shadow-2xl bg-base-100">
                            <li><a onclick="toggleTheme('light')">Light</a></li>
                            <li><a onclick="toggleTheme('dark')">Dark</a></li>
                            <li><a onclick="toggleTheme('cyberpunk')">Cyberpunk</a></li>
                            <li><a onclick="toggleTheme('night')">Night</a></li>
                        </ul>
                    </div>
                    <livewire:switch-language />
                </li>
            </ul>
        </div>

        <div class="btm-nav md:hidden z-50">
            <a href="/" class="" id="btnAbout">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                <span class="btm-nav-label">About Me</span>
            </a>
            <a href="/project" class="" id="btnProject">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span class="btm-nav-label">Projects</span>
            </a>
            <a href="/contact" class="" id="btnContact">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                </svg>
                <span class="btm-nav-label">Contact</span>
            </a>
        </div>
        <script>
            // get the current link, if / is active, then add active class to btnAbout
            var currentLink = window.location.pathname;
            if (currentLink == '/') {
                document.getElementById('btnAbout').classList.add('active');
            } else if (currentLink == '/project') {
                document.getElementById('btnProject').classList.add('active');
            } else if (currentLink == '/contact') {
                document.getElementById('btnContact').classList.add('active');
            }

            if (currentLink == '/') {
                document.getElementById('btnAboutTab').classList.add('tab-active');
            } else if (currentLink == '/project') {
                document.getElementById('btnProjectTab').classList.add('tab-active');
            } else if (currentLink == '/contact') {
                document.getElementById('btnContactTab').classList.add('tab-active');
            }
        </script>
        <div class="glass card p-2 h-fit w-fit z-50 fixed shadow-2xl bottom-3 inset-x-0 mx-auto hidden xl:block">
            <ul class="menu menu-horizontal card">
                <li>
                    <div class="dropdown dropdown-top dropdown-end">
                        <label tabindex="0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" />
                            </svg>
                        </label>
                        <ul tabindex="0" class="dropdown-content card shadow-2xl bg-base-100">
                            <li><a onclick="toggleTheme('light')">Light</a></li>
                            <li><a onclick="toggleTheme('dark')">Dark</a></li>
                            <li><a onclick="toggleTheme('cyberpunk')">Cyberpunk</a></li>
                            <li><a onclick="toggleTheme('night')">Night</a></li>
                        </ul>
                    </div>
                    <livewire:switch-language />
                </li>
            </ul>
        </div>
        <div class="h-screen w-screen p-4">
            {{ $slot }}
        </div>

    </div>

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
    <script src="https://cdn.jsdelivr.net/npm/htmltypist.js/dist/typist.js"></script>
    @livewireScripts
</body>

</html>
