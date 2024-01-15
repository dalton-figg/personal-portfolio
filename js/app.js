/* ------------------ Testimonial Text Effect */

const mediaQuery = window.matchMedia("(min-width: 768px)");

// chars can be changed to just be letters or include symbols, numbers etc

const chars =
  "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@£$%^&*()_+-={}[];':|,./<>?";

let charCount = 20;

// assignment of multiple variables at once

const randomChar = () => chars[Math.floor(Math.random() * (chars.length - 1))],
  randomString = length => Array.from(Array(length)).map(randomChar).join("");

const card = document.getElementById("js-blank-card"),
  letters = document.getElementById("js-letters");

// if there is a card on the page

if (card) {
  // on click, generate a new string and change some styles

  card.onclick = () => {
    letters.innerText = randomString(charCount);
    letters.style.opacity = 1;
    letters.style.color = "var(--clr-accent-600)";
  };

  // when you exit hover, the opacity fades out and the color changes back

  card.onmouseleave = () => {
    letters.style.opacity = "";
    letters.style.color = "";
  };

  // only add an event listener for screen resize if the page actually includes testimonials

  mediaQuery.addListener(screenSizer);

  // also ensures a string is generated by default

  screenSizer(mediaQuery);
}

function screenSizer(e) {
  // if we are above a certain screensize, increase the count
  e.matches ? (charCount = 100) : (charCount = 20);

  // and regenerate the string

  letters.innerText = randomString(charCount);
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

// ------------------ Typing Animation

// define array of words/strings to be randomly selected

const wantedCopy = [
  "sit dolor.",
  "ipsum amet.",
  "adipisicing.",
  "ipsum dolor",
  "ipsum volus",
  "beatae ipsum",
  "esse illo",
];

// set element to a variable

const typingElement = document.getElementById("js-typing");

// define timeout delays

const typingSpeed = 200;

// declare iterator

let i;

const generateRandIndex = () => Math.floor(Math.random() * wantedCopy.length);

const deleteCharacter = () => {
  // if there is still a string in the innerhtml

  if (typingElement.innerHTML.length > 0) {
    // replace it with itself, minus the last character
    typingElement.innerHTML = typingElement.innerHTML.slice(0, -1);
    // repeat with delay
    setTimeout(deleteCharacter, typingSpeed);
  } else {
    // once the elements innerHTML is empty, call to type a character (after an arbitrary delay) ensuring to reset the iterator and generate a random word from the array
    setTimeout(() => typeCharacter((i = 0), generateRandIndex()), 1000);
  }
};

const typeCharacter = (i, index) => {
  // while i is smaller than the length of the word

  if (i < wantedCopy[index].length) {
    // add the current character
    typingElement.innerHTML += wantedCopy[index][i];
    i++;
    // add delay
    setTimeout(() => typeCharacter(i, index), typingSpeed);
  } else {
    // once word is fully typed out, call for deletion after an arbitrary delay.
    setTimeout(() => deleteCharacter(), 1000);
  }
};

// call first instance of either function to start the loop depending on the static page state

if (typingElement.innerHTML !== "") deleteCharacter();

if (typingElement.innerHTML === "") typeCharacter();
