<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <!-- Meta Tags -->
    <title>Personal Portfolio Site</title>

    <meta charset="utf-8" />

    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#fafafa" />

    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />

    <!-- Favicon -->
    <link rel="icon" href="/favicon.ico" sizes="any" />
    <link rel="icon" href="/icon.svg" type="image/svg+xml" />
    <link rel="apple-touch-icon" href="icon.png" />

    <!-- CSS -->

    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/global.css" />
    <link rel="stylesheet" href="css/utility.css" />

    <?php foreach ($stylesheets as $stylesheet) : ?>
        <link rel='stylesheet' href='css/<?= $stylesheet ?>'>
    <?php endforeach; ?>

    <!-- JavaScript -->
    <?php foreach ($scripts as $script) : ?>
        <script src="/js/<?= $script ?>" defer></script>
    <?php endforeach; ?>


    <script src="js/app.js" defer></script>

</head>

<body>
    <header class="primary-header | wrapper">
        <nav class="primary-navbar">
            <ul class="primary-navbar__list">
                <li class="primary-navbar__item primary-navbar__item--left">
                    <a href="index.php" class="primary-navbar__link">
                        <svg width="24" height="24" viewBox="0 0 640 512">
                            <path fill="currentColor" d="M392.8 1.2c-17-4.9-34.7 5-39.6 22l-128 448c-4.9 17 5 34.7 22 39.6s34.7-5 39.6-22l128-448c4.9-17-5-34.7-22-39.6zm80.6 120.1c-12.5 12.5-12.5 32.8 0 45.3l89.3 89.4-89.4 89.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l112-112c12.5-12.5 12.5-32.8 0-45.3l-112-112c-12.5-12.5-32.8-12.5-45.3 0zm-306.7 0c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3l112 112c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256l89.4-89.4c12.5-12.5 12.5-32.8 0-45.3z" />
                        </svg>
                    </a>
                </li>
                <li class="primary-navbar__item">
                    <a href="index.php#about" class="primary-navbar__link">About Me</a>
                </li>
                <li class="primary-navbar__item">
                    <a href="index.php#projects" class="primary-navbar__link">Projects</a>
                </li>
                <li class="primary-navbar__item">
                    <a href="contact.php" class="primary-navbar__link">Contact</a>
                </li>
                <li class="primary-navbar__item">
                    <a href="#" id="js-nav-burger">
                        <svg width="24" height="24" viewBox="0 0 512 512">
                            <path fill="#fff" d="M0 96c0-17.7 14.3-32 32-32h384c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zm64 160c0-17.7 14.3-32 32-32h384c17.7 0 32 14.3 32 32s-14.3 32-32 32H96c-17.7 0-32-14.3-32-32zm384 160c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32h384c17.7 0 32 14.3 32 32z" />
                        </svg>
                    </a>
                </li>
            </ul>
        </nav>
    </header>
    <header class="mobile-header" id="js-mobile-header">
        <nav class="mobile-navbar">
            <ul class="mobile-navbar__list">
                <li class="mobile-navbar__item">
                    <a href="#" class="mobile-navbar__link" id="js-nav-close">
                        <svg width="24" height="24" viewBox="0 0 384 512">
                            <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path fill="#fff" d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3l105.4 105.3c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256l105.3-105.4z" />
                        </svg>
                    </a>
                </li>
                <li class="mobile-navbar__item">
                    <a href="index.php#about" class="mobile-navbar__link">About Me</a>
                </li>
                <li class="mobile-navbar__item">
                    <a href="index.php#projects" class="mobile-navbar__link">Projects</a>
                </li>
                <li class="mobile-navbar__item">
                    <a href="contact.php" class="mobile-navbar__link">Contact</a>
                </li>
            </ul>
        </nav>
    </header>
    <main>