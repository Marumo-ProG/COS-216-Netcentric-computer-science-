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
    <title>Login-page</title>

  </head>
  <body>
    <?php include 'php/header.php';?>

    <section class="container" style="background-color:white; margin-top: 8%">
        <img src="img/logo original.png" style="width: 100%">
        <hr class="ld">
        <div class="menu">
        <form action="php/validate-login.php" method="POST" id="login-form" style="width: 50%; margin:0 auto">
            <label for="#username">Username / Email</label><br>
            <input id="#username" type="text" placeholder="Username / Email" style="margin-bottom: 10px;width: 100%; padding: 0 5px; font-size: 14px"><br>
            <label for="#password">Password</label><br>
            <input id="#password" type="text" placeholder="Password" style="margin-bottom: 10px;width: 100%; padding: 0 5px; font-size: 14px">
            <br>
            <button type="submit" style="width: 100%; font-weight: bold">Login</button>
        </form>
      </div>
    </section>

    
  </body>
</html>