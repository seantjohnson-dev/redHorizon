<header class="site-header">
    @if(session('status'))
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 mt-6">
        <div class="rounded-md bg-green-50 p-4 border border-green-200">
            <p class="text-sm text-green-800">{{ session('status') }}</p>
        </div>
    </div>
    @endif
    <div class="wrap">
        <h1 class="brand">
            {{ $companyName }}
        </h1>
        <p class="tagline">
            {{ $tagline }}
        </p>

        <!-- Simple nav; more pages can be added later -->
        <nav aria-label="Primary">
            <ul class="nav">
                <li><a class="nav__link{{ request()->is('/') ? ' is-active' : '' }}" href="/">Home</a></li>
                <li><a class="nav__link{{ request()->is('destinations') ? ' is-active' : '' }}"
                        href="/destinations">Destinations</a></li>
                <li><a class="nav__link{{ request()->is('pilots') ? ' is-active' : '' }}"
                        href="{{ route('pilots.create') }}">Pilots</a></li>
                <li><a class="nav__link{{ request()->is('contact') ? ' is-active' : '' }}" href="/contact">Contact</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
