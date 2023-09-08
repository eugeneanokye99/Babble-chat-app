<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../assets/CSS/register.css" />
    <title>Babble Register Page</title>
  </head>
  <body>
    <section class="section">
      <form action="../private/auth/register_process.php" method="post" class="form">
        <h1>Register</h1>

        <div class="input_register">
          <div style="display: flex; justify-content: space-between">
            <div class="input_name">
              <label for="firstName">First Name:</label><br />
              <input type="text" name="firstName" placeholder="First Name" required />
            </div>
            <div class="input_name">
              <label for="lastName">Last Name:</label><br />
              <input type="text" name="lastName" placeholder="Last Name" required />
            </div>
          </div>

          <div class="input">
            <label for="email">Email:</label><br />
            <input type="email" name="email" placeholder="Email" required />
          </div>

          <div class="input_date">
            <label for="date">Date Of Birth:</label><br />
            <input name="date" type="date"required />
          </div>

          <div class="input">
            <label for="number">Phone Number:</label><br />
            <input name="number" type="text" placeholder="Number" />
          </div>

          <div class="input">
            <label for="password">Password:</label><br />
            <input name="password" type="password" placeholder="Password" required />
          </div>

          <div class="input">
            <label for="password">Repeat Password:</label><br />
            <input type="password" placeholder="Repeat Password" required />
          </div>
        </div>

        <div class="radio-button">
          <div>
            <label for="gender">Male</label>
            <input name="gender" type="radio" />
          </div>

          <div>
            <label for="gender">Female</label>
            <input name="gender" type="radio" />
          </div>

          <div>
            <label for="gender">Prefer not to say</label>
            <input name="gender" type="radio"  />
          </div>
        </div>

        <div class="button">
          <button type="submit" id="register-button">Start to chat</button>
        </div>
      </form>
    </section>

    <script src="../assets/JavaScript/register.js"></script>
  </body>
</html>
