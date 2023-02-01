<?php
$body_class = 'projects-page';
include 'includes/header.php';
?>

<h1>My Noteworthy Projects</h1>
<main class="projects">

    <?php

    $languages = array(
        'PHP' => 'php',
        'JavaScript' => 'js',
        'TypeScript' => 'ts',
        'Three.js' => 'threejs',
        'MySQL' => 'mysql',
        'Ruby on Rails' => 'rails',
        'React' => 'react',
    );

    $projects = array(
        array(
            'name' => 'CB341.NET',
            'description' => 'This website.',
            'url' => 'https://www.cb341.net',
            'github' => '',
            'languages' => array('PHP', 'JavaScript'),
        ),
        array(
            'name' => 'TS-MC',
            'description' => 'A Minecraft Clone written in TypeScript and Three.js.',
            'url' => 'https://cuddlybunion341.github.io/ts-mc/dist/client/',
            'github' => 'https://www.github.com/CuddlyBunion341/ts-mc',
            'languages' => array('TypeScript', 'Three.js'),
        ),
        array(
            'name' => 'Greendit',
            'description' => 'A Reddit Clone written in PHP and MySQL.',
            'url' => 'https://www.cb341.net/greendit',
            'github' => 'https://www.github.com/CuddlyBunion341/greendit',
            'languages' => array('PHP', 'MySQL', 'JavaScript'),
        ),
        array(
            'name' => 'RailDit',
            'description' => 'A Reddit Clone written in Ruby on Rails.',
            // 'url' => 'https://www.cb341.net/raildit',
            'github' => 'https://www.github.com/CuddlyBunion341/RedditOnRails',
            'languages' => array('Ruby on Rails', 'JavaScript'),
        ),
        array(
            'name' => 'MyQuery',
            'description' => 'A jQuery Clone written in JavaScript.',
            // 'url' => 'https://www.cb341.net/myquery',
            'github' => 'https://www.github.com/CuddlyBunion341/myquery',
            'languages' => array('JavaScript'),
        ),
        array(
            'name' => 'Trello Clone',
            'description' => 'A Trello Clone written in React.',
            // 'url' => 'https://www.cb341.net/trello-clone',
            'github' => 'https://www.github.com/CuddlyBunion341/trello-clone',
            'languages' => array('React', 'JavaScript'),
        ),
        array(
            'name' => 'Chess',
            'description' => 'A Chess Game written in JavaScript.',
            // 'url' => 'https://www.cb341.net/chess',
            // 'github' => 'https://www.github.com/CuddlyBunion341/chess',
            'languages' => array('JavaScript'),
        ),
        array(
            'name' => 'Wordle Clone',
            'description' => 'A Wordle Clone written in JavaScript.',
            // 'url' => 'https://www.cb341.net/wordle-clone',
            // 'github' => 'https://www.github.com/CuddlyBunion341/wordle-clone',
            'languages' => array('JavaScript'),
        ),
        array(
            'name' => 'MineSweeper',
            'description' => 'A MineSweeper Game written in JavaScript.',
            // 'url' => 'https://www.cb341.net/minesweeper',
            // 'github' => 'https://www.github.com/CuddlyBunion341/minesweeper',
            'languages' => array('JavaScript'),
        ),
        array(
            'name' => 'MC Block Viewer',
            'description' => 'A Minecraft Block Viewer written in JavaScript.',
            // 'url' => 'https://www.cb341.net/mc-block-viewer',
            // 'github' => 'https://www.github.com/CuddlyBunion341/mc-block-viewer',
            'languages' => array('JavaScript'),
        ),
        array(
            'name' => 'Crossy Clone',
            'description' => 'A Crossy Road Clone written in JavaScript.',
            'url' => 'https://cuddlybunion341.github.io/crossy-road-clone/public',
            'github' => 'https://www.github.com/CuddlyBunion341/crossy-road-clone',
            'languages' => array('JavaScript'),
        ),
        array(
            'name' => 'MC Inventory',
            'description' => 'A interactive Minecraft Inventory written in JavaScript.',
            // 'url' => 'https://www.cb341.net/mc-inventory',
            'github' => 'https://github.com/CuddlyBunion341/js-inventory',
            'languages' => array('JavaScript'),
        )
    );

    foreach ($projects as $project) {
        $project_languages = '';
        foreach ($project['languages'] as $language) {
            $project_languages .= '
            <span class="language ' . $languages[$language] . '">' . $language . '</span>
        ';
        }

        $github_link = array_key_exists('github', $project) ?
            '<a href="' . $project['github'] . '" class="github-link">'
            . '<img src="assets/icons/github.svg">'
            . '</a>' : '';

        $deployed_link = array_key_exists('url', $project) ?
            '<a href="' . $project['url'] . '">' .
            '<img src="assets/icons/arrow-up-right-square.svg">'
            . '</a>' : '';

        echo '
        <div class="card project">
            <img src="assets/images/projects/' . strtolower(str_replace(' ', '_', $project['name'])) . '.webp" alt="' . $project['name'] . '">
            <h2>' . $project['name'] . '</h2>
            <p>' . $project['description'] . '</p>
            <span class="languages">' . $project_languages . '</span>
            <span class="links">
                ' . $deployed_link . '
                ' . $github_link . '
            </span>
        </div>';
    }
    ?>
</main>

<?php include 'includes/footer.php'; ?>