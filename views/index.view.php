<?php require 'partials/header.php'; ?>



        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <h1 class="page-header">
                TestSite Blog
                <small>Code-Architect</small>
            </h1>

            <?php foreach($articles as $article): ?>
            <!-- First Blog Post -->
            <h2>
                <a href="#"><?= $article->title; ?></a>
            </h2>
            <p class="lead">
                by <a href="index.php"><?= $article->email; ?></a>
            </p>

            <hr>
            <img class="img-responsive" src="http://placehold.it/900x300" alt="">
            <hr>
            <p><?= $article->content; ?></p>
            <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

            <hr>
            <?php endforeach; ?>

        </div>

        <!-- Blog Sidebar Widgets Column -->
        <?php require 'partials/sidebar.php'; ?>
        <!-- Sidebar ends -->


        <!-- Footer Starts -->
        <?php require 'partials/footer.php'; ?>
        <!-- Footer Ends -->