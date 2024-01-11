/* ------------------ Testimonial Text Effect */

const chars =
  "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@£$%^&*()_+-={}[];':|,./<>?";

// TODO try and find a way to manipulate this back up to 100 based on the screensize?

let charCount = 20;

const randomChar = () => chars[Math.floor(Math.random() * (chars.length - 1))],
  randomString = length => Array.from(Array(length)).map(randomChar).join("");

const card = document.getElementById("js-blank-card"),
  letters = document.getElementById("js-letters");

if (card) {
  letters.innerText = randomString(charCount);

  card.onclick = () => {
    letters.innerText = randomString(charCount);
    letters.style.opacity = 1;
    letters.style.color = "var(--clr-accent-600)";
  };

  card.onmouseleave = () => {
    letters.style.opacity = "";
    letters.style.color = "";
  };
}

/* ------------------ Mobile Navigation */

const navigationMobileMenu = document.getElementById("js-mobile-header");
const navigationBurger = document.getElementById("js-nav-burger");
const navigationClose = document.getElementById("js-nav-close");

navigationBurger.onclick = () => {
  navigationMobileMenu.style.right = 0;
};

navigationClose.onclick = () => {
  navigationMobileMenu.style.right = "";
};
