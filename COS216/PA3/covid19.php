<!-- Marumo Thobejane u20485001-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="G-News, where games come to get inspired">
    <meta name="keywords" content="COS216,Lenny,Thobejane,G-News">
    <meta name="author" content="Marumo Thobejane">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/fonts/fontawesome-free-6.0.0-web/css/all.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/loader.css">
    <title>Today</title>

  </head>
  <body onload="LoadData()" style="background-image: url('img/covid\ background.jpg')">
    <?php include 'php/header.php';?>
    
    </navbar>

    <section id="content">
        <div class="covid-head">
            <h1>SA covid-19 Stats</h1>
            <h3>Stay informed</h3>
        </div>

        <div class="cards">
            <div class="card" style="height: 300px; border-radius: 4%">
              <div class="container">
                <i class="fas fa-head-side-virus cov"></i> <br>
                <p class="title" style="text-align: center">3,693,532</p>
                <p class="description" style="text-align: center">Active cases</p>
              </div>
            </div>
            <div class="card" style="height: 300px; border-radius: 4%">
                <div class="container">
                  <i class="fas fa-stethoscope cov"></i> <br>
                  <p class="title" style="text-align: center">3,573,469</p>
                  <p class="description" style="text-align: center">Recoveries</p>
                </div>
            </div>
            <div class="card" style="height: 300px; border-radius: 4%">
                <div class="container">
                  <i class="fas fa-bed-pulse cov"></i> <br>
                  <p class="title" style="text-align: center">99,712</p>
                  <p class="description" style="text-align: center">Deaths</p>
                </div>
            </div>

            <div class="card" style="background-color: grey;color: white;width: 200%;height: 250px; border-radius: 2%;margin-top: 10px; margin-left: 50%">
                <div class="container">
                  <p class="title" style="text-align: center">Daily Stats</p>
                  <hr styl="wdith: 40%; margin: 0 auto">
                  <p class="description">Daily Cases: <strong>1 570</strong></p>
                  <p class="description">Daily Recoveries: <strong>425</strong></p>
                  <p class="description">Daily Deaths: <strong>96</strong></p>
                </div>
            </div>

        </div>
        <div id="graph" class="graph">
            <h2>Here are some Graph Statistics</h2>
            <hr>
            <canvas id="myChart" style="margin-left: 0;margin-top: 0;width: 100%;height: 30%"></canvas>
        </div>
        <div class="card" style="background-color: grey;color: white;width: 80%;height: 250px;margin: 0 auto;">
            <div class="container">
              <p class="title" style="text-align: center">Deductions</p>
              <hr styl="wdith: 40%; margin: 0 auto">
              <p class="description">Infection Fatality Ratio: <strong>77.562</strong></p>
              <p class="description">- Case Fatality Ratio: <strong>90.524</strong></p>
              <p class="description">Mortality Rate: <strong>12.333</strong></p>
              <p class="description">Cases:Recoveries:Death Ratio: <strong>99.2365</strong></p>
            </div>
        </div>
        <?php include 'php/footer.php';?>
    </section>
    <div class=".animate" style="background-color: blue; color:white; height: 50px;position: fixed; bottom: 0; width: 100%; padding: 4px">
      <p id="text" style="width: 40%">COVID-19 Newest Data, be safe and remember you are not alone!</p>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>
    <script src="js/covid19.js"></script>
  </body>
</html>