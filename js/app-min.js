const mediaQuery=window.matchMedia("(min-width: 768px)"),chars="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@\xa3$%^&*()_+-={}[];':|,./<>?";let charCount=20;const randomChar=()=>chars[Math.floor(Math.random()*(chars.length-1))],randomString=e=>Array.from(Array(e)).map(randomChar).join(""),card=document.getElementById("js-blank-card"),letters=document.getElementById("js-letters");function screenSizer(e){charCount=e.matches?100:20,letters.innerText=randomString(charCount)}card&&(card.onclick=()=>{letters.innerText=randomString(charCount),letters.style.opacity=1,letters.style.color="var(--clr-accent-600)"},card.onmouseleave=()=>{letters.style.opacity="",letters.style.color=""},mediaQuery.addListener(screenSizer),screenSizer(mediaQuery));const navigationMobileMenu=document.getElementById("js-mobile-header"),navigationBurger=document.getElementById("js-nav-burger"),navigationClose=document.getElementById("js-nav-close");navigationBurger.onclick=()=>{navigationMobileMenu.style.right=0},navigationClose.onclick=()=>{navigationMobileMenu.style.right=""};const wantedCopy=["sit dolor.","ipsum amet.","adipisicing.","ipsum dolor","ipsum volus","beatae ipsum","esse illo",],typingElement=document.getElementById("js-typing"),typingSpeed=200;let i;const generateRandIndex=()=>Math.floor(Math.random()*wantedCopy.length),deleteCharacter=()=>{typingElement.innerHTML.length>0?(typingElement.innerHTML=typingElement.innerHTML.slice(0,-1),setTimeout(deleteCharacter,200)):setTimeout(()=>typeCharacter(i=0,generateRandIndex()),1e3)},typeCharacter=(e,t)=>{e<wantedCopy[t].length?(typingElement.innerHTML+=wantedCopy[t][e],e++,setTimeout(()=>typeCharacter(e,t),200)):setTimeout(()=>deleteCharacter(),1e3)};typingElement&&(""!==typingElement.innerHTML&&deleteCharacter(),""===typingElement.innerHTML&&typeCharacter());