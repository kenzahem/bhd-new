<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="cupcake">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, viewport-fit=cover">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ isset($title) ? $title.' - '.config('app.name') : config('app.name') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">

    {{-- The navbar with `sticky` and `full-width` --}}
    <x-nav sticky full-width>

        <x-slot:brand>
            {{-- Drawer toggle for "main-drawer" --}}
            <label for="main-drawer" class="lg:hidden mr-3">
                <x-icon name="o-bars-3" class="cursor-pointer" />
            </label>

            {{-- Brand --}}
            <div><strong>BHD</strong></div>
        </x-slot:brand>

        {{-- Right side actions --}}
        <x-slot:actions>
            <x-button label="Home" icon="o-home" link="/" class="btn-ghost btn-sm" responsive />
            <x-button label="Browse Rooms" icon="o-building-office-2" link="/rooms/browse" class="btn-ghost btn-sm" responsive />
            @auth
            <x-dropdown>
                <x-slot:trigger>
                    <x-button icon="o-user" class="btn-circle btn-outline" />
                </x-slot:trigger>
                <x-menu-item title="Credits: {{ Auth::user()->credits }}"/>
                <x-menu-separator />
                <x-menu-item title="Profile" wire:navigate href="/profile" />
                <x-menu-item title="Logout" wire:navigate href="/logout"/>
            </x-dropdown>
            @endauth
            @guest
                <x-button label="Sign In" icon="o-user-circle" link="/auth/login" class="btn-ghost btn-sm" responsive />
            @endguest
            <x-theme-toggle class="btn-ghost" @theme-changed="console.log($event.detail)" />
        </x-slot:actions>
    </x-nav>

    {{-- The main content with `full-width` --}}
    <x-main with-nav full-width>

        {{-- The `$slot` goes here --}}
        <x-slot:content>
            {{ $slot }}
        </x-slot:content>
    </x-main>

    {{--  TOAST area --}}
    <x-toast />
</body>
</html>
