<?php require 'partials/header.php'; ?>



<!-- Blog Entries Column -->
<div class="col-md-8">


    <h1>Submit Your Blog</h1>

    <form class="form-inline" method="POST" action="/addblog">

        <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" name="title" placeholder="title" >
        <input type="email" class="form-control mb-2 mr-sm-2 mb-sm-0" name="email" placeholder="email" >
        <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" name="content" placeholder="content" >

        <input type="submit" class="btn btn-primary" name="submit"/>

    </form>

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