<x-layout>
    <section class="hero">
        <div class="wrap hero__content">
            <h2>Help Us Chart the Future</h2>
            <p>
                <?php echo $companyName; ?> is looking for experienced pilots to lead humanity’s
                next great adventure: guided tours across the Martian skies.
                If you’ve logged hours commanding spacecraft simulators, orbital craft, or
                terrestrial jets, we want you at the helm of our missions.
            </p>
        </div>
    </section>

    <section class="section">
        <div class="wrap">
            <h3>Pilot Application Form</h3>
            <p>Please complete the form below. Our recruitment team will review your application and contact qualified
                candidates.</p>

            <!-- Contact form for pilot applications -->
            <form id="pilot-form" class="form" action="/pilots" method="post">
                <!-- First Name -->
                <label for="firstName">First Name</label>
                <input type="text" id="firstName" name="firstName" required />

                <!-- Last Name -->
                <label for="lastName">Last Name</label>
                <input type="text" id="lastName" name="lastName" required />

                <!-- Email -->
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required />

                <!-- Age -->
                <label for="age">Age</label>
                <input type="number" min="0" id="age" name="age" required />

                <!-- Flight Experience -->
                <label for="experience">Flight Experience</label>
                <select id="experience" name="experience" required>
                    <option value="">-- Select Experience Level --</option>
                    <option value="beginner">1-3 years</option>
                    <option value="intermediate">3-5 years</option>
                    <option value="advanced">5-10 years</option>
                    <option value="expert">10+ years</option>
                </select>

                <label for="bio">Short Bio</label>
                <textarea id="bio" name="bio" rows="4" required></textarea>

                <button type="submit" class="btn">Apply Now</button>
            </form>
            <div id="error-msg"></div>
        </div>
    </section>
</x-layout>