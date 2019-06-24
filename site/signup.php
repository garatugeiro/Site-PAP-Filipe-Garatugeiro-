<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>smilingdog</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="imgbg">
<?php
include_once 'includes/nav.php';
 ?>
    <section class="main-container">
      <div class="main-wapper">
        <h2>Sign Up</h2>
        <br>
        <form class="signup-form" action="includes/signup.inc.php" method="POST">
          <input type="text" name="first" placeholder="First Name"><br>
          <input type="text" name="last" placeholder="Last Name"><br>
          <input type="text" name="email" placeholder="E-mail"><br>
          <input type="text" name="uid" placeholder="Username"><br>
          <input type="password" name="pwd" placeholder="Password"><br>
          <button type="submit" name="submit">Sign Up</button>
        </form>
      </div>
    </section>
    <?php
    include_once 'includes/footer.php';
     ?>
</body>
</html>