<?php require('partials/head.php'); ?>

<h1>Submit your name:</h1>

<form action="/names" method="post">
    <input type="text" name="name">
    <input type="submit" value="Send">
</form>


<?php require('partials/footer.php'); ?>
