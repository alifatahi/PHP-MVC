<?php require('partials/head.php'); ?>

<h1>Users</h1>

<?php foreach ($users as $user) : ?>
    <li><?= $user->name ."<br>" ?></li>
<?php endforeach; ?>

<h1>Submit your name:</h1>

<form action="/users" method="post">
    <input type="text" name="name">
    <input type="submit" value="Send">
</form>

<?php require('partials/footer.php'); ?>
