const chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@£$%^&*()_+-={}[];':|,./<>?";

const charCount = 100;

const randomChar = () => chars[Math.floor(Math.random() * (chars.length - 1))],
  randomString = length => Array.from(Array(length)).map(randomChar).join("");

const card = document.getElementById("js-blank-card"),
  letters = document.getElementById("js-letters");

letters.innerText = randomString(charCount);

card.onclick = () => {
  letters.innerText = randomString(charCount);
  letters.style.opacity = 1;
};

card.onmouseleave = () => {
  letters.style.opacity = '';
};
