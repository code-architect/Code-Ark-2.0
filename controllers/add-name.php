<?php

//remove the submit value before passing the post values
unset($_POST['submit']);

$app['database']->insert('articals', $_POST);

header('Location: http://localhost:8000/about');