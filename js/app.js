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
  letters.innerText = randomString(charCount);

  // deal with the on click and mouse leave events

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

// media queries to adapt charcount and card size on smaller screnes

function screenSizer(e) {
  if (e.matches) {
    charCount = 100;
    letters.innerText = randomString(charCount);
  } else {
    charCount = 20;
    letters.innerText = randomString(charCount);
  }
}

mediaQuery.addListener(screenSizer);

screenSizer(mediaQuery);

/* ------------------ Typing Animation */

// new TypeIt("#js-typing", {
//   lifeLike: true,
//   waitUntilVisible: true,
//   speed: 0,
//   loop: true,
//   loopDelay: 4000,
// })
//   .type("s")
//   .pause(100)
//   .type("i")
//   .pause(100)
//   .type("t")
//   .pause(100)
//   .type(" ")
//   .pause(100)
//   .type("d")
//   .pause(100)
//   .type("o")
//   .pause(100)
//   .type("l")
//   .pause(100)
//   .type("o")
//   .pause(100)
//   .type("r")
//   .pause(100)
//   .type(" ")
//   .pause(100)
//   .type("a")
//   .pause(100)
//   .type("m")
//   .pause(100)
//   .type("e")
//   .pause(100)
//   .type("t")
//   .pause(100)
//   .type(".")
//   .pause(1385)
//   .delete(1)
//   .pause(100)
//   .delete(1)
//   .pause(100)
//   .delete(1)
//   .pause(100)
//   .delete(1)
//   .pause(100)
//   .delete(1)
//   .pause(100)
//   .delete(1)
//   .pause(100)
//   .delete(1)
//   .pause(100)
//   .delete(1)
//   .pause(100)
//   .delete(1)
//   .pause(100)
//   .delete(1)
//   .pause(100)
//   .delete(1)
//   .pause(100)
//   .delete(1)
//   .pause(100)
//   .delete(1)
//   .pause(100)
//   .delete(1)
//   .pause(100)
//   .delete(1)
//   .pause(100)
//   .delete(1)
//   .pause(1000)
//   .type("d")
//   .pause(100)
//   .type("o")
//   .pause(100)
//   .type("l")
//   .pause(100)
//   .type("o")
//   .pause(100)
//   .type("r")
//   .pause(100)
//   .type(" ")
//   .pause(100)
//   .type("s")
//   .pause(100)
//   .type("i")
//   .pause(100)
//   .type("t")
//   .pause(100)
//   .type(" ")
//   .pause(100)
//   .type("a")
//   .pause(100)
//   .type("m")
//   .pause(100)
//   .type("e")
//   .pause(100)
//   .type("t")
//   .pause(100)
//   .type(".")
//   .pause(1000)
//   .delete(1)
//   .pause(100)
//   .delete(1)
//   .pause(100)
//   .delete(1)
//   .pause(100)
//   .delete(1)
//   .pause(100)
//   .delete(1)
//   .pause(100)
//   .delete(1)
//   .pause(100)
//   .delete(1)
//   .pause(100)
//   .delete(1)
//   .pause(100)
//   .delete(1)
//   .pause(100)
//   .delete(1)
//   .pause(100)
//   .delete(1)
//   .pause(100)
//   .delete(1)
//   .pause(100)
//   .delete(1)
//   .pause(100)
//   .delete(1)
//   .pause(100)
//   .delete(1)
//   .pause(100)
//   .type("i")
//   .pause(100)
//   .type("p")
//   .pause(100)
//   .type("s")
//   .pause(100)
//   .type("u")
//   .pause(100)
//   .type("m")
//   .pause(100)
//   .type(".")
//   .go();

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
