<?php include 'config.php'; ?>
<?php //echo $_SERVER['REQUEST_URI'] ?>
<navbar class="menu">
      <?php if($_SERVER['REQUEST_URI'] == '/PA3/' || $_SERVER['REQUEST_URI'] == '/u20485001/COS216/PA3/index.php'): ?>
            <a class="active" href="index.php">Home</a>
      <?php else: ?>
            <a href="index.php">Home</a>
      <?php endif ?>

      <?php if($_SERVER['REQUEST_URI'] == '/u20485001/COS216/PA3/today.php'): ?>
            <a class="active" href="today.php">Today</a>
      <?php else: ?>
            <a href="today.php">Today</a>
      <?php endif ?>

      <?php if($_SERVER['REQUEST_URI'] == '/u20485001/COS216/PA3/southafrica.php'): ?>
            <a class="active" href="southafrica.php">South Africa</a>
      <?php else: ?>
            <a href="southafrica.php">South Africa</a>
      <?php endif ?>
      <?php if($_SERVER['REQUEST_URI'] == '/u20485001/COS216/PA3/world.php'): ?>
            <a class="active" href="world.php">World</a>
      <?php else: ?>
            <a href="world.php">World</a>
      <?php endif ?>
      <?php if($_SERVER['REQUEST_URI'] == '/u20485001/COS216/PA3/covid19.php'): ?>
            <a class="active" href="covid19.php">Covid19</a>
      <?php else: ?>
            <a href="covid19.php">Covid19</a>
      <?php endif ?>
      <?php if($_SERVER['REQUEST_URI'] == '/u20485001/COS216/PA3/calender.php'): ?>
            <a class="active" href="calender.php">Calender</a>
      <?php else: ?>
            <a href="calender.php">Calender</a>
      <?php endif ?>
      
      
      <?php if($login == true): ?>
            <div style="float: right">
                  <a type="button" href="logout.php">Logout</a>
            </div>
      <?php else: ?>
            <div style="float: right">
                  <a type="button" href="login.php">Login</a>
                  <a type="button" href="signup.php">Signup</a>
            </div>
      <?php endif ?>
</navbar>