<?php
$body_class = 'projects-page';
include 'includes/header.php';
?>

<h1>My Noteworthy Projects</h1>
<main class="projects">

    <?php

    // $github_svg = file_get_contents('assets/icons/github.svg');

    $projects = array(
        array(
            'name' => 'CB341.NET',
            'description' => 'This website.',
            'url' => 'https://www.cb341.net',
            'github' => '',
            'languages' => array('PHP', 'HTML', 'CSS', 'JavaScript'),
        ),
        array(
            'name' => 'TS-MC',
            'description' => 'A Minecraft Clone written in TypeScript and Three.js.',
            // 'url' => 'https://www.cb341.net/ts-mc',
            'github' => 'https://www.github.com/CuddlyBunion341/ts-mc',
            'languages' => array('TypeScript', 'Three.js'),
        ),
        array(
            'name' => 'Greendit',
            'description' => 'A Reddit Clone written in PHP and MySQL.',
            'url' => 'https://www.cb341.net/greendit',
            'github' => 'https://www.github.com/CuddlyBunion341/greendit',
            'languages' => array('PHP', 'MySQL', 'HTML', 'CSS', 'JavaScript'),
        ),
        array(
            'name' => 'RailDit',
            'description' => 'A Reddit Clone written in Ruby on Rails.',
            // 'url' => 'https://www.cb341.net/raildit',
            'github' => 'https://www.github.com/CuddlyBunion341/RedditOnRails',
            'languages' => array('Ruby on Rails', 'HTML', 'CSS', 'JavaScript'),
        ),
        array(
            'name' => 'MyQuery',
            'description' => 'A jQuery Clone written in JavaScript.',
            // 'url' => 'https://www.cb341.net/myquery',
            'github' => 'https://www.github.com/CuddlyBunion341/myquery',
            'languages' => array('JavaScript'),
        )
    );

    foreach ($projects as $project) {
        $languages = '';
        foreach ($project['languages'] as $language) {
            $languages .= '
            <span class="language">' . $language . '</span>
        ';
        }

        $github_link = array_key_exists('github', $project) ?
            '<a href="' . $project['github'] . '" class="github-link">
            <img src="assets/icons/github.svg">
            ' . $project['github'] . '
        </a>' : '';

        $deployed_link = array_key_exists('url', $project) ?
            '<a href="' . $project['url'] . '">' . $project['url'] . '</a>' : '';

        echo '
        <div class="card project">
            <h2>' . $project['name'] . '</h2>
            <p>' . $project['description'] . '</p>
            <p>' . $languages . '</p>
            <p>
                ' . $deployed_link . '
                ' . $github_link . '
            </p>
        </div>
    ';
    }
    ?>
</main>

<?php include 'includes/footer.php'; ?>