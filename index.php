<?php

if(isset($_GET['forward']) && !empty($_GET['forward'])) {
    $targets = [
        'archiv'  => 'https://www.youtube.com/channel/UCPJCKZY5coVTvMby9wr8J6A',
        'discord' => 'https://discord.com/invite/EB6BQPf',
        'grasp' => 'https://grasp.dialogik.tv/',
        'github' => 'https://www.github.com/dialogik-tv',
        'live' => 'https://www.twitch.tv/dialogikTV',
        'reddit' => 'https://www.reddit.com/r/dialogikTV',
        'twitter' => 'https://twitter.com/dialogikTV',
        'wissenschaft' => 'https://www.youtube.com/playlist?list=PLeFaG62UZOAbA9uGDi7GIhJbOUuZJ5Iwz',
        'youtube' => 'https://www.youtube.com/channel/UC3_VXw2npQMGZwfqMXuHRdA',
    ];
    $forward = $_GET['forward'];

    if(array_key_exists($forward, $targets)) {
        header('Location: ' . $targets[$forward]);
    }
}
?><!doctype html>
<html lang="de">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <title>dialogikTV</title>
        <!-- dialogikTV widmet sich der Entwicklung von modernen digitalen Informations- und Unterhaltungskonzepten. Wenn du hier im Quellcode herumwühlst, bist du vielleicht genau richtig für unser Team! Wenn du mitmachen willst schreib uns doch mal bei Twitter oder in unserem Discord – die Links dazu findet ihr easy hier auf unseren Seiten. Bis denne, Antenne! ;-) -->
    </head>
    <body>
        <div class="container-fluid cover-container text-center d-flex flex-column">
            <div class="row align-items-center justify-content-center flex-fill">
                <div>
                    <h1 class="display-1">dialogikTV</h1>
                    <p>
                        <a target="_blank" class="social-link text-light" href="https://dialogik.tv/twitter"><i class="fab fa-twitter fa-4x"></i></a>
                        <a target="_blank" class="social-link text-light" href="https://dialogik.tv/live"><i class="fab fa-twitch fa-4x"></i></a>
                        <a target="_blank" class="social-link text-light" href="https://dialogik.tv/youtube"><i class="fab fa-youtube fa-4x"></i></a>
                        <a target="_blank" class="social-link text-light" href="https://dialogik.tv/discord"><i class="fab fa-discord fa-4x"></i></a>
                        <a target="_blank" class="social-link text-light" href="https://dialogik.tv/github"><i class="fab fa-github fa-4x"></i></a>
                    </p>
                    <div class="list-group social-link mt-5">
                        <a target="_blank" class="text-light list-group-item" href="https://dialogik.tv/archiv">YouTube Archivkanal</a>
                        <a target="_blank" class="text-light list-group-item" href="https://dialogik.tv/wissenschaft">Twitch in der Wissenschaft</a>
                        <a target="_blank" class="text-light list-group-item" href="https://dialogik.tv/grasp">grasp</a>
                    </div>
                </div>
            </div>
        </div>

        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script src="js/fontawesome.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>