<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login | Alpha Tutx GameVault</title>
  <link rel="stylesheet" href="style.css?v=2"> <!-- force reload -->
</head>

<body>

<div class="login-wrapper">

  <div class="login-box">

    <h2>Game Vault Login</h2>

    <form method="post" action="index.php">
      <?php include('errors.php'); ?>

      <div class="input-group">
        <label>Username</label>
        <input type="text" name="username" required>
      </div>

      <div class="input-group">
        <label>Password</label>
        <input type="password" name="password" required>
      </div>

      <button type="submit" class="btn" name="login_user">Login</button>

      <p class="signup">
        Not yet a member?
        <a href="https://www.facebook.com/profile.php?id=100087598551338" target="_blank">
          Contact us
        </a>
      </p>

    </form>

  </div>

</div>

</body>
</html>
