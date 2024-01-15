<?php
// Global Variables

$stylesheets = ['index.css'];
$scripts = ['tabs.js'];

// Project Variables

$projects = [
  ['image' => 'https://images.unsplash.com/photo-1682686581663-179efad3cd2f?q=80&w=3540&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'name' => 'Project 1', 'langs' => ['HTML', 'CSS', 'JS']],
  ['image' => 'https://images.unsplash.com/photo-1704234257809-9cbc16c6a7c7?q=80&w=3574&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'name' => 'Project 2', 'langs' => ['HTML', 'CSS']],
  ['image' => 'https://images.unsplash.com/photo-1537884944318-390069bb8665?q=80&w=3540&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'name' => 'Project 3', 'langs' => ['JS']]
];


$testimonials = [
  [
    'quote' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita
    esse illo officiis veritatis amet officia hic provident',
    'author' => 'Lorem, ipsum.'
  ],
  [
    'quote' => 'Lorem ipsum dolor sit amet, consectetur adipisicing.',
    'author' => 'Lorem, ipsum.'
  ],
  [
    'quote' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
    Laboriosam.',
    'author' => 'Lorem, ipsum.'
  ],
  [
    'quote' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita
    esse illo officiis veritatis amet officia hic provident quisquam.',
    'author' => 'Lorem, ipsum.'
  ],
  [
    'quote' => 'Lorem ipsum dolor sit amet, consectetur adipisicing.',
    'author' => 'Lorem, ipsum.'
  ],
];

?>

<?php include 'partials/navbar.php' ?>
<section class="hero | wrapper">
  <div class="hero__content">
    <h1>
      &lt;/ Lorem
      <span class="hero__typing | underlined" id="js-typing">sit dolor amet.</span>
    </h1>
    <p>
      I'm Dalton, adipisicing elit. Cupiditate
      <span class="emphasis">nihil veritatis</span> eos repellendus, esse
      perspiciatis?
    </p>
    <p>
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta qui
      aut ratione, autem, <span class="emphasis">repellendus odit numquam itaque</span> nesciunt minus
      maxime similique? Corporis rerum doloribus dolore.
    </p>
  </div>
</section>
<section class="about | bg-neutral-300" id="about">
  <div class="wrapper">
    <h2>About</h2>
    <div class="about__lists">
      <ul class="about__list">
        <li>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem
          ipsum dolor sit amet
          <span class="emphasis">consectetur adipisicing</span> elit.
        </li>
        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
        <li>Lorem ipsum dolor sit.</li>
      </ul>
      <ul class="about__list">
        <li>Lorem ipsum dolor sit amet consectetur.</li>
        <li>
          Lorem ipsum dolor
          <span class="emphasis">sit amet consectetur</span> adipisicing
          elit. Lorem ipsum dolor sit amet consectetur adipisicing elit.
        </li>
        <li>Lorem ipsum dolor sit amet.</li>
      </ul>
    </div>
    <h3>
      13 YEARS IN <span class="underlined">WEBSITE DEVELOPMENT</span>
    </h3>
    <div class="tabs">
      <div class="tabs__list" role="tablist" aria-label="Sample Tabs">
        <button class="tabs__btn | clr-neutral-900" role="tab" aria-selected="true" aria-controls="panel-1" id="tab-1" tabindex="0">
          2007 - Google
        </button>
        <button class="tabs__btn | clr-neutral-900" role="tab" aria-selected="false" aria-controls="panel-2" id="tab-2" tabindex="-1">
          2009 - Netflix
        </button>
        <button class="tabs__btn | clr-neutral-900" role="tab" aria-selected="false" aria-controls="panel-3" id="tab-3" tabindex="-1">
          2012 - Spotify
        </button>
        <button class="tabs__btn | clr-neutral-900" role="tab" aria-selected="false" aria-controls="panel-4" id="tab-4" tabindex="-1">
          2016 - Lorem
        </button>
        <button class="tabs__btn | clr-neutral-900" role="tab" aria-selected="false" aria-controls="panel-5" id="tab-5" tabindex="-1">
          2020 - Ipsum
        </button>
      </div>
      <div class="tabs__panel" id="panel-1" role="tabpanel" tabindex="0" aria-labelledby="tab-1">
        <p>
          Lorem, ipsum dolor sit amet consectetur adipisicing elit.
          Quisquam, ab?
          <span class="emphasis">Doloribus beatae</span> ipsum voluptas
          asperiores!
        </p>
        <p>
          Lorem, ipsum dolor sit amet consectetur adipisicing elit.
          Quisquam, ab? Doloribus beatae
          <span class="emphasis">ipsum voluptas</span> asperiores!
        </p>
      </div>
      <div class="tabs__panel" id="panel-2" role="tabpanel" tabindex="0" aria-labelledby="tab-2" hidden>
        <p>
          Lorem ipsum dolor sit amet
          <span class="emphasis">consectetur</span> adipisicing elit.
          Sequi perspiciatis possimus error.
        </p>
        <p>
          <span class="emphasis">Lorem ipsum</span> dolor, sit amet
          consectetur adipisicing.
        </p>
      </div>
      <div class="tabs__panel" id="panel-3" role="tabpanel" tabindex="0" aria-labelledby="tab-3" hidden>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
        <p>
          Lorem, ipsum dolor sit amet consectetur adipisicing elit.
          Quisquam, ab? Doloribus beatae ipsum voluptas asperiores!
        </p>
      </div>
      <div class="tabs__panel" id="panel-4" role="tabpanel" tabindex="0" aria-labelledby="tab-4" hidden>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
      </div>
      <div class="tabs__panel" id="panel-5" role="tabpanel" tabindex="0" aria-labelledby="tab-5" hidden>
        <p>
          Lorem, ipsum dolor sit amet consectetur adipisicing elit.
          Quisquam, ab? Doloribus beatae ipsum voluptas asperiores!
        </p>
      </div>
    </div>
  </div>
</section>
<section class="section--light" id="projects">
  <div class="wrapper">
    <h2>Projects</h2>
    <div class="projects">
      <!-- nested array loop to define each project with it's individual name, image, and languages token -->
      <?php foreach ($projects as $project) : ?>
        <div class="project">
          <img class="project__image" width="400" height="266" src="<?= $project['image'] ?>" alt="" />
          <h3 class="project__subtitle"><?= $project['name'] ?></h3>
          <div class="project__langs">
            <?php foreach ($project['langs'] as $language) : ?>
              <p><?= $language ?></p>
            <?php endforeach ?>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </div>
</section>
<section class="wrapper">
  <h2>Testimonials /></h2>
  <div class="testimonials">
    <?php foreach ($testimonials as $testimonial) : ?>
      <article class="testimonial | bg-neutral-100">
        <p>
          <?= $testimonial['quote'] ?>
        </p>
        <p class="emphasis"><?= $testimonial['author'] ?></p>
      </article>
    <?php endforeach ?>

    <!-- if there are less than 6 testimonials, the 6th testimonial can be equal to the letters card (or less than 3, then it is the third - so that it is always the last item) -->

    <?php if (count($testimonials) < 6 || count($testimonials) < 3) : ?>
      <article class="testimonial testimonial--blank | bg-neutral-100" id="js-blank-card">
        <div class="testimonial__letters" id="js-letters"></div>
      </article>
    <?php endif ?>
  </div>
</section>
<?php include 'partials/footer.php' ?>