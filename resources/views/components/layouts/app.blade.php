<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, viewport-fit=cover">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ isset($title) ? $title.' - '.config('app.name') : config('app.name') }}</title>

    {{-- PHOTOSWIPE --}}
    <script src="https://cdn.jsdelivr.net/npm/photoswipe@5.4.3/dist/umd/photoswipe.umd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/photoswipe@5.4.3/dist/umd/photoswipe-lightbox.umd.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/photoswipe@5.4.3/dist/photoswipe.min.css" rel="stylesheet">

    {{-- CURRENCY SCRIPT --}}
    <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/robsontenorio/mary@0.44.2/libs/currency/currency.js"></script>

    @livewireStyles()

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">

    {{-- The navbar with `sticky` and `full-width` --}}
    <x-nav sticky full-width shadow>

        <x-slot:brand>
            {{-- Drawer toggle for "main-drawer" --}}
            <label for="main-drawer" class="lg:hidden mr-3">
                <x-icon name="o-bars-3" class="cursor-pointer" />
            </label>

            {{-- Brand --}}
            <div><strong>BHD</strong></div>
        </x-slot:brand>

        @php
            $user = App\Models\User::first();
        @endphp
        {{-- Right side actions --}}
        {{-- <ul class="menu lg:menu-horizontal bg-base-200 rounded-box lg:mb-64">
            <li><a>Item 1</a></li>
            <li>
              <details open>
                <summary>Parent item</summary>
                <ul>
                  <li><a>Submenu 1</a></li>
                  <li><a>Submenu 2</a></li>
                  <li>
                    <details open>
                      <summary>Parent</summary>
                      <ul>
                        <li><a>item 1</a></li>
                        <li><a>item 2</a></li>
                      </ul>
                    </details>
                  </li>
                </ul>
              </details>
            </li>
            <li><a>Item 3</a></li>
        </ul> --}}
        <x-slot:actions>
            <x-button label="Home" icon="o-home" link="/" class="btn-ghost btn-sm" responsive />
            <x-button label="Browse Rooms" icon="o-building-office-2" link="/rooms/browse" class="btn-ghost btn-sm" responsive />
            {{-- <x-theme-toggle class="btn btn-circle btn-ghost" /> --}}
            @auth
            <x-dropdown label="Hi! {{ Auth::user()->firstname }}" class="btn-primary" right>
                <x-menu-item title="Credits: {{ Auth::user()->credits }}"/>
                <x-menu-separator />
                <x-menu-item title="Post Room" wire:navigate href="/post-room" />
                <x-menu-separator />
                <x-menu-item icon="o-user" title="Profile" wire:navigate href="/profile" />
                @if (Auth::user()->role_id === 1)
                    <x-menu-item icon="o-cog" title="Admin Panel" wire:navigate href="/admin" />
                @endif
                <x-menu-item icon="o-arrow-right-end-on-rectangle" title="Logout" wire:navigate href="/logout" />
            </x-dropdown>
            @endauth
            @guest
                {{-- <x-button icon="o-user" wire:navigate href="/auth/login" class="btn-circle btn-ghost" /> --}}
                <x-button label="Sign In" wire:navigate href="/auth/login" class="btn-outline" />
            @endguest

        </x-slot:actions>
    </x-nav>

    {{-- The main content with `full-width` --}}
    <x-main with-nav full-width>

        {{-- The `$slot` goes here --}}
        <x-slot:content>
            {{ $slot }}
        </x-slot:content>
    </x-main>
    @livewireScripts()
    {{-- FSLIGHTBOX --}}
    <script src="{{ asset('js/fslightbox.js') }}"></script>

    {{--  TOAST area --}}
    <x-toast position="toast-top toast-center" />
    <script src="https://cdn.jsdelivr.net/npm/theme-change@2.0.2/index.js"></script>
</body>
</html>
