<?php require "views/partials/header.php" ?>
<body>
  <h1>Usernames</h1>
  <?php foreach($users as $user): ?>
    <li><?= $user->name; ?></li>
  <?php endforeach; ?>
  <h1>Submit your name</h1>
  <form action="/names" method="POST">
      <input type="text" name="name" >
      <input type="submit" value="submit">
  </form>
<?php require "views/partials/footer.php" ?>