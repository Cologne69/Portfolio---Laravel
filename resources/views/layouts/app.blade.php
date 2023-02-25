<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" data-theme="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ __('Kyrell | Portfolio') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.50.2/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    @vite([])
    @livewireStyles
</head>
<body class="antialiased">
    <main class="mockup-window w-screen h-screen">
        <div class="flex p-1">
            <div class="flex-auto">
                <input type="text" class="input rounded w-full" disabled readonly value="{{ request()->url() }}" />
            </div>
            <ul class="menu menu-horizontal bg-base-100 rounded pl-2">
                <livewire:switch-language />

                <li>
                    <button onclick="toggleTheme()">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" />
                        </svg>
                    </button>
                </li>
            </ul>
        </div>
        <livewire:tabs>
            <div class="overflow-y-auto p-8" style="height: 85.8%">
                {{ $slot }}
            </div>

    </main>

    <script>
        function toggleTheme() {
            //change data-theme attribute
            if (document.body.getAttribute('data-theme') == 'cyberpunk') {
                document.body.setAttribute('data-theme', 'light');
                localStorage.setItem('theme', 'light');
            } else {
                document.body.setAttribute('data-theme', 'cyberpunk');
                localStorage.setItem('theme', 'cyberpunk');
            }
        }
        if (localStorage.getItem('theme') == 'cyberpunk') {
            document.body.setAttribute('data-theme', 'cyberpunk');
        } else {
            document.body.setAttribute('data-theme', 'light');
        }
    </script>

    @livewireScripts
</body>

</html>
