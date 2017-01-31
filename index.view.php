<html>
    <head>
        <title>Home</title>
    </head>
    <body>

    <ul>
        <?php foreach($articles as $article): ?>

        <h1><?= $article->title; ?></h1>
            <email style="background-color: aquamarine"><?= $article->email; ?></email>
            <p><?= $article->content; ?></p>

        <?php endforeach; ?>
    </ul>


    </body>
</html>
