<!-- Creare un array di array.
Ogni array figlio avrà come chiave una data in questo formato: DD/MM/YYYY (ad es 31/01/2007) e come valore un array di post associati a quella data.
Stampare ogni data con i relativi post. -->

<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Snack-3</title>
    </head>
    <body>
        <h1>Lista post:</h1>
        <?php
            foreach ($posts as $data => $date_post) { ?>
                <h2> <?php echo $data ?></h2>
                <?php
                foreach ($date_post as $post) { ?>
                    <h5><?php echo $post["title"]; ?></h5>
                    <p><?php echo $post["author"]; ?></p>
                    <p><?php echo $post["text"]; ?></p>
                <?php
                }
            } ?>
    </body>
</html>
