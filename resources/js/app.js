import "./bootstrap";

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

// Form validation logic function
function validatePilotForm() {
  // form validity flag
  let isValid = true;
  // Get form fields
  const firstName = document.getElementById("firstName");
  const lastName = document.getElementById("lastName");
  const email = document.getElementById("email");
  const age = document.getElementById("age");
  const experience = document.getElementById("experience");
  const bio = document.getElementById("bio");

  // Highlight each field based on validity state
  highlightField("firstName", firstName.value.trim() !== "");
  highlightField("lastName", lastName.value.trim() !== "");
  highlightField("age", !isNaN(age.value.trim()) && age.value.trim() >= 18);
  highlightField("experience", experience.value.trim() !== "");
  highlightField("email", isValidEmail(email.value.trim()));
  highlightField("bio", bio.value.trim().length >= 6);

  // if (
  //   firstName === "" ||
  //   lastName === "" ||
  //   email === "" ||
  //   age === "" ||
  //   experience === "" ||
  //   bio === ""
  // ) {
  //   showError("All fields are required.");
  //   return false;
  // }

  // Individual field validations with error messages
  if (firstName.value.trim() === "") {
    showError(firstName, "First name is required.");
    isValid = false;
  } else {
    firstName.parentElement.querySelector(".error-msg")?.remove();
  }
  if (lastName.value.trim() === "") {
    showError(lastName, "Last name is required.");
    isValid = false;
  } else {
    lastName.parentElement.querySelector(".error-msg")?.remove();
  }
  if (!isValidEmail(email.value.trim())) {
    showError(email, "Please enter a valid email.");
    isValid = false;
  } else {
    email.parentElement.querySelector(".error-msg")?.remove();
  }
  if (isNaN(age.value.trim()) || age.value.trim() < 18) {
    showError(age, "You must be at least 18 years old.");
    isValid = false;
  } else {
    age.parentElement.querySelector(".error-msg")?.remove();
  }
  if (experience.value.trim() === "") {
    showError(experience, "Experience level is required.");
    isValid = false;
  } else {
    experience.parentElement.querySelector(".error-msg")?.remove();
  }
  if (bio.value.trim().length < 6) {
    showError(bio, "Bio must be at least 6 characters.");
    isValid = false;
  } else {
    bio.parentElement.querySelector(".error-msg")?.remove();
  }
  return isValid;
}

// Email validation helper
function isValidEmail(email) {
  const pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return pattern.test(email);
}

// Function to show error messages below input fields
function showError(element, message) {
  let isInDom = true;
  let error = element.parentElement.querySelector(".error-msg");
  if (!error) {
    isInDom = false;
    error = document.createElement("p");
  }
  error.classList.add("error-msg", "mt-1", "text-sm", "text-red-600");
  error.textContent = message;
  error.style.color = "#ff6b3d";
  if (isInDom) return;
  element.parentElement.appendChild(error);
}

// Function to display invalid or valid styles via class names
function highlightField(inputId, isValid) {
  const input = document.getElementById(inputId);
  if (isValid) {
    input.classList.remove("invalid");
    input.classList.add("valid");
  } else {
    input.classList.remove("valid");
    input.classList.add("invalid");
  }
  // input.style.border = isValid ? "1px solid green" : "1px solid #ff6b3d";
}

// Pilot form validation and submission handling
const form = document.getElementById("pilot-form");
form.addEventListener("submit", function(e) {
  e.preventDefault();
  const isValid = validatePilotForm();
  if (isValid) {
    // alert("Form submitted successfully!");
    form.submit();
    // form.reset();
    // form.querySelectorAll("input,select,textarea").forEach(el => {
    //   el.classList.remove("valid");
    //   el.classList.remove("invalid");
    // });
  }
});
