<?php $body_class = $body_class ?? ''; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles/style.min.css">
    <title>CB341</title>
</head>

<body class="<?= $body_class ?>">
    <header>
        <?php include 'includes/nav.php'; ?>
    </header>
    <ul class="social">
        <li>
            <a href="https://www.github.com/CuddlyBunion341">
                <img src="assets/icons/github.svg" alt="GitHub">
            </a>
        </li>
        <li>
            <a href="https://www.codewars.com/users/CuddlyBunion341">
                <img src="assets/icons/codewars.svg" alt="Codewars">
            </a>
        </li>
        <li>
            <a href="#">
                <img src="assets/icons/linkedin.png" alt="LinkedIn">
            </a>
        </li>
    </ul>