<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../assets/CSS/login.css" />
    <title>Babble Login Page</title>
  </head>
  <body>
    <section class="section">
      <form action="../private/auth/login_process.php" method="post" class="form">
        <h1>Login</h1>

        <div class="input_login">
          <div class="input">
            <label for="email">Email:</label><br>
            <input name="email" type="email" placeholder="Email" required />
          </div>

          <div class="input">
            <label for="password">Password:</label><br>
            <input name="password" type="password" placeholder="Password" required />
          </div>
        </div>

        <div class="text-container">
          <div>
            <input type="checkbox" style="margin-right: -1px" />
            Remember me
          </div>

          <div><a href="#">Forgot Password</a></div>
        </div>

        <div id="login-button">
          <button>Continue to chat</button>
        </div>

        <div>
          <p>Don't have an account? <a href="./register.php">Sign up</a></p>
        </div>
      </form>
    </section>

    <script src="../assets/JavaScript/login.js"></script>
  </body>
</html>
