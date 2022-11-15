<!-- Marumo Thobejane u20485001-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="G-News, where games come to get inspired">
    <meta name="keywords" content="COS216,Lenny,Thobejane,G-News">
    <meta name="author" content="Marumo Thobejane">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/styles-home.css">
    <title>Signup-page</title>

  </head>
  <body>
    <?php include 'php/header.php';?>

      <section class="container" style="background-color:white; margin-top: 3%;">
        <img alt="G-news logo" src="img/logo original.png" style="width: 100%">
        <hr class="ld">
        <div class="menu">
          <!-- conditionally rendering an error tag message here -->
          
          <form id="signup-form" action="php/validate-signup.php" method="POST" id="login-form" style="width: 50%; margin:0 auto">
              <label for="#name">Enter Name:</label><br>
              <input id="name" type="text" name="name" placeholder="Name" style="margin-bottom: 10px;width: 100%; padding: 0 5px; font-size: 14px" required>
              <br>
              <label for="#surname">Enter Surname:</label><br>
              <input id="surname" name="surname" type="text" placeholder="Surname" style="margin-bottom: 10px;width: 100%; padding: 0 5px; font-size: 14px" required>
              <br>
              <label for="#email">Enter Email:</label><br>
              <input id="email" type="text" name="email" placeholder="Email" style="margin-bottom: 10px;width: 100%; padding: 0 5px; font-size: 14px" required>
              <br>
              <label for="#password">Password</label><br>
              <input id="password" type="password" name="password" placeholder="Password" style="margin-bottom: 10px;width: 100%; padding: 0 5px; font-size: 14px" required>
              <br>
              <button type="submit" style="width: 100%; font-weight: bold">Signup</button>
          </form>
        </div>
      </section>

    <script src="js/signup.js"></script>

  </body>
</html>