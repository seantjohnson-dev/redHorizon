<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-50">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>
            {{ $companyName }} —
            {{ $title }}
        </title>
        <meta name="description"
            content="{{ $companyName }} offers unforgettable, future-forward tour experiences on Mars." />
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
        @include('partials.tailwind')
        @endif
        <!-- Small UX touch: system-friendly favicon color using emoji (no assets needed) -->
        <link rel="icon"
            href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>🛰️</text></svg>">
    </head>

    <!-- Body with skip link, header, main content, and footer -->

    <body class="min-h-full flex flex-col justify-start items-stretch">