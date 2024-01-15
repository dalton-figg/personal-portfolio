<?php
$stylesheets = ['contact.css'];
$scripts = [];
?>

<?php include 'partials/navbar.php' ?>
<section class="contact">
  <aside class="contact__aside | bg-neutral-100">
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
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19850.182418885834!2d0.6264093!3d51.5448965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8daf12d72a425%3A0x95a31d0dbfda950a!2sHadleigh%20Castle!5e0!3m2!1sen!2suk!4v1705330275480!5m2!1sen!2suk" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </aside>
  <form class="contact__form">
    <h1>Get in touch!</h1>
    <div class="contact__names">
      <div class="contact__name">
        <label for="firstname">First name</label>
        <input type="text" name="firstname" id="firstname" class="contact__input | clr-neutral-900" required />
      </div>
      <div class="contact__name">
        <label for="lastname">Last name</label>
        <input type="text" name="lastname" id="lastname" class="contact__input | clr-neutral-900" required />
      </div>
    </div>
    <label for="email">Email Address</label>
    <input type="email" name="email" id="email" class="contact__input | clr-neutral-900" required />
    <label for="tel">Phone Number</label>
    <input type="tel" name="tel" id="tel" class="contact__input | clr-neutral-900" required />
    <label for="message">Message</label>
    <textarea name="message" id="message" class="contact__input | clr-neutral-900" required></textarea>
    <input type="submit" value="submit" class="contact__input contact__input--submit | clr-neutral-900" />
  </form>
</section>
<?php include 'partials/footer.php' ?>