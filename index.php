<?php include 'includes/header.php'; ?>

<main>
    <h1>Welcome to CB341.NET</h1>
    <p>
        This is the home page of CB341.NET. This site is currently under construction.
        Please check back later for updates.
    </p>

    <h2>About Me</h2>
    <p>
        <a href="https://www.codewars.com/users/CuddlyBunion341">
            <img src="https://www.codewars.com/users/CuddlyBunion341/badges/large">
        </a><br>
        <a href="https://github.com/CuddlyBunion341">
            <img
                src="https://github-readme-stats.vercel.app/api?username=CuddlyBunion341&show_icons=true&theme=radical">
        </a>
    <h3>Technologies</h3>
    <ul class="lang-image__wrapper">
        <?php

        $langs = array('php', 'rails', 'react', 'typescript', 'sql', 'threejs', 'apple');

        foreach ($langs as $lang) {
            echo '<li><img src="assets/images/languages/' . $lang . '.png" alt="' . $lang . '" class="lang-image"></li>';
        }
        ?>
    </ul>
    </p>

    <h2>About my Projects</h2>
    <p>
    </p>
</main>

<?php include 'includes/footer.php'; ?>