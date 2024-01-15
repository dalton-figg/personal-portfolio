<?php
$stylesheets = ['contact.css'];
$scripts = [];
?>

<?php include 'partials/navbar.php' ?>
<section class="contact">
  <aside class="contact__aside">
    <h2>I'd love to hear <span class="underlined">from you!</span></h2>
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore
      quaerat ut delectus magni, dignissimos corporis.
    </p>
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae ex
      saepe in.
    </p>
    <p><span class="emphasis">Phone: </span> 319135 310</p>
    <p><span class="emphasis">Address: </span> 33 Road Street, Road</p>
    <p><span class="emphasis">Email: </span> email@email.com</p>
  </aside>
  <form class="contact__form">
    <h1>Get in touch!</h1>
    <div class="contact__names">
      <div class="contact__name">
        <label for="firstname">First name</label>
        <input type="text" name="firstname" id="firstname" class="contact__input" required />
      </div>
      <div class="contact__name">
        <label for="lastname">Last name</label>
        <input type="text" name="lastname" id="lastname" class="contact__input" required />
      </div>
    </div>
    <label for="email">Email Address</label>
    <input type="email" name="email" id="email" class="contact__input" required />
    <label for="tel">Phone Number</label>
    <input type="tel" name="tel" id="tel" class="contact__input" required />
    <label for="message">Message</label>
    <textarea name="message" id="message" class="contact__input" required></textarea>
    <input type="submit" value="submit" class="contact__input contact__input--submit" />
  </form>
</section>
<?php include 'partials/footer.php' ?>