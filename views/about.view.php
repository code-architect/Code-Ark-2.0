<?php require 'partials/header.php'; ?>

<div class="col-md-8">

    <h1>Submit Your Name</h1>

    <form class="form-inline" method="POST" action="/names">

        <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" name="name" >

        <input type="submit" class="btn btn-primary" name="submit"/>

    </form>
    
</div>


<!-- Blog Sidebar Widgets Column -->
<?php require 'partials/sidebar.php'; ?>
<!-- Sidebar ends -->

<!-- Footer Starts -->
<?php require 'partials/footer.php'; ?>
<!-- Footer Ends -->