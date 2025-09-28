@include('partials.head', ['title' => 'Home'])

<!-- Accessibility: Skip link for keyboard users -->
<a class="skip-link absolute top-0 -left-full bg-brand-accent rounded-lg px-3 py-4 text-slate-950" href="#main">Skip to
    content</a>

@include('partials.header')

<main id="main" class="w-full">

    @yield('content')

</main>

@include('partials.footer')