<?php require('partials/head.php'); ?>

<h1>Submit Your Name</h1>

<form method="POST" action="/names">
    <input name="name"></input>
    <button type="submit">Submit</button>
</form>

<form method="POST" action="/insert">
    <input type="text" name="description"></input>
    <button type="submit">Submit</button>
</form>

<?php require('partials/footer.php');
