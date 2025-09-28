<x-layout>
    <!-- Hero section with tasteful background and large CTA -->
    <section class="hero">
        <div class="wrap hero__content">
            <h2>See Mars up close.</h2>
            <p>
                From the crimson dunes of Arabia Terra to the dizzying cliffs of Valles Marineris,
                our expertly curated itineraries bring you face-to-face with the Red Planet's most
                jaw-dropping vistas.
            </p>
            <button
                class="cursor-pointer bg-brand-accent rounded-lg px-4 py-3 mt-3 font-bold text-slate-950 shadow-sm hover:bg-brand-accent-300"
                id="ctaButton" aria-describedby="ctaHelp">
                Explore Tours
            </button>
            <small id="ctaHelp" class="hint block text-[color:var(--muted)] text-sm mt-2">Press to reveal a preview of
                available tour types.</small>
        </div>
    </section>

    <!-- Short company description (requirement #3) -->
    <section class="section">
        <div class="wrap">
            <!--
              Red Horizon Tours — Minimalist SVG Logo
              - Pure vector, no external fonts required
              - Easily recolor via CSS variables below
              - Scales cleanly at any size
            -->
            <h3>About
                {{ $companyName }}
            </h3>
            <p>
                We're a pioneering travel company devoted to safe, sustainable, and awe-inspiring
                expeditions to Mars. Our flight partners, habitat designers, and exogeology guides
                are passionate experts who believe exploration should be both transformative and responsible.
            </p>

            <!-- Simple, static “tour preview” cards; pure HTML/CSS for now -->
            <div class="grid">
                <article class="card">
                    <h4>Valles Marineris Overlook</h4>
                    <p>Witness the solar system's grandest canyon from secured skywalks and scenic shuttles.</p>
                </article>
                <article class="card">
                    <h4>Polar Lights Retreat</h4>
                    <p>Stay near the northern ice cap and catch ethereal auroras beneath alien skies.</p>
                </article>
                <article class="card">
                    <h4>Olympus Mons Basecamp</h4>
                    <p>Step onto the slopes of the tallest volcano known—no summit bid required.</p>
                </article>
            </div>
        </div>
    </section>

    <!-- JS-driven announcement area (can be empty initially; requirement #5) -->
    <section class="section">
        <div class="wrap">
            <h3>Available Tours</h3>
            <div id="updates" class="updates grid gap-3 min-h-[2rem] grid-cols-[repeat(auto-fit,minmax(280px,1fr))]"
                aria-live="polite">
                <!-- Populated by app.js when the CTA is clicked -->
            </div>
        </div>
    </section>

</x-layout>