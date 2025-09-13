<?php
// Simple PHP variables to keep things tidy and easily changeable
$companyName = "Red Horizon Tours";
$tagline = "Your gateway to the Red Planet.";
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title><?php echo $companyName; ?> — Home</title>
        <meta name="description"
            content="<?php echo $companyName; ?> offers unforgettable, future-forward tour experiences on Mars." />
        <!-- Link to CSS right here -->
        <link rel="stylesheet" href="assets/app.css" />
        <!-- Small UX touch: system-friendly favicon color using emoji (no assets needed) -->
        <link rel="icon"
            href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>🛰️</text></svg>">
    </head>

    <body>
        <!-- Accessibility: Skip link for keyboard users -->
        <a class="skip-link" href="#main">Skip to content</a>

        <header class="site-header">
            <div class="wrap">
                <h1 class="brand"><?php echo $companyName; ?></h1>
                <p class="tagline"><?php echo $tagline; ?></p>

                <!-- Simple nav; more pages can be added later -->
                <nav aria-label="Primary">
                    <ul class="nav">
                        <li><a class="nav__link is-active" href="index.php">Home</a></li>
                        <li><a class="nav__link" href="#" aria-disabled="true">Destinations</a></li>
                        <li><a class="nav__link" href="#" aria-disabled="true">Packages</a></li>
                        <li><a class="nav__link" href="#" aria-disabled="true">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <main id="main">
            <!-- Hero section with tasteful background and large CTA -->
            <section class="hero">
                <div class="wrap hero__content">
                    <h2>See Mars up close.</h2>
                    <p>
                        From the crimson dunes of Arabia Terra to the dizzying cliffs of Valles Marineris,
                        our expertly curated itineraries bring you face-to-face with the Red Planet’s most
                        jaw-dropping vistas.
                    </p>
                    <button class="btn" id="ctaButton" aria-describedby="ctaHelp">
                        Explore Tours
                    </button>
                    <small id="ctaHelp" class="hint">Press to reveal a preview of available tour types.</small>
                </div>
            </section>

            <!-- Short company description (requirement #3) -->
            <section class="section">
                <div class="wrap">
                    <h3>About <?php echo $companyName; ?></h3>
                    <p>
                        We’re a pioneering travel company devoted to safe, sustainable, and awe-inspiring
                        expeditions to Mars. Our flight partners, habitat designers, and exogeology guides
                        are passionate experts who believe exploration should be both transformative and responsible.
                    </p>

                    <!-- Simple, static “tour preview” cards; pure HTML/CSS for now -->
                    <div class="grid">
                        <article class="card">
                            <h4>Valles Marineris Overlook</h4>
                            <p>Witness the solar system’s grandest canyon from secured skywalks and scenic shuttles.</p>
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
                    <div id="updates" class="updates" aria-live="polite">
                        <!-- Populated by app.js when the CTA is clicked -->
                    </div>
                </div>
            </section>
        </main>

        <footer class="site-footer">
            <div class="wrap">
                <p>
                    © <span id="year"></span> <?php echo $companyName; ?>. All rights reserved.
                </p>
            </div>
        </footer>

        <!-- Link to raw JS file (requirement #5) -->
        <script src="assets/app.js" defer></script>
    </body>

</html>