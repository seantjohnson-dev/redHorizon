// Update the footer year automatically
document.addEventListener("DOMContentLoaded", () => {
  const yearEl = document.getElementById("year");
  if (yearEl) yearEl.textContent = new Date().getFullYear();
});

// Lightweight interaction: clicking the CTA reveals some “tour types”
// (No API calls; keeps the page static for now.)
document.addEventListener("DOMContentLoaded", () => {
  const btn = document.getElementById("ctaButton");
  const updates = document.getElementById("updates");

  if (!btn || !updates) return;

  btn.addEventListener("click", () => {
    // Clear existing content
    updates.innerHTML = "";

    // Simple list of previews; could later be replaced by fetched data
    const items = [
      { title: "Explorer", text: "5-day orbit + 2 surface landings." },
      { title: "Pioneer", text: "10-day expedition with habitat stay." },
      { title: "Visionary", text: "14-day deep-dive across three regions." }
    ];

    // Render them as small grid boxes
    items.forEach(({ title, text }) => {
      const chip = document.createElement("div");
      chip.className = "card";
      chip.innerHTML = `<strong>${title}</strong><p style="margin:.25rem 0 0;color:var(--muted)">${text}</p>`;
      updates.appendChild(chip);
    });

    // Nice little feedback: move focus to the first update for accessibility
    const first = updates.querySelector(".card");
    if (first) first.setAttribute("tabindex", "-1"), first.focus();
  });
});
