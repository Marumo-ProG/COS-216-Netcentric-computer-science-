<!-- Marumo Thobejane u20485001-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="G-News, where games come to get inspired">
    <meta name="keywords" content="COS216,Lenny,Thobejane,G-News">
    <meta name="author" content="Marumo Thobejane">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/loader.css">
    <title>Today</title>

  </head>
  <body onload="LoadData()">
    <?php include 'php/header.php';?>

    <section id="content">
      <img src="img/logo original.png">
      <hr class="ld">
      

      <div class="controller">
        <div class="search">
          <input type="text" placeholder="Search" id="search-bar">
          <button id="search"><img src="img/search-orange icon.png"></button>
        </div>
      </div>

      <h2>Today, 
        <img src="img/164806.png">
      </h2>

      <hr>
      <div class="fil-sort">
        
        <p><strong>Filter</strong></p>
        <div class="dropdown">
          <button class="filter">Categories ↓</button>
          <div class="dropdown-content">
            <a id="fall" href="#">All</a>
            <a id="ftech" href="#">Tech</a>
            <a id="fbusiness" href="#">Business</a>
            <a id="fentertainment" href="#">Entertainment</a>
            <a id="fpolitics" href="#">Politics</a>
            <a id="fgeneral" href="#">General</a>
          </div>
          
        </div>
        <div class="dropdown3">
          <button class="auth">Author ↓</button>
          <div class="dropdown-content3">
            <a id ="f1" href="#">Happy B junior</a>
            <a id="f2" href="#">CT Mahlase</a>
            <a id="f3" href="#">Koos Mogafe</a>
            <a id ="f4" href="#">Malan Van der Merve</a>
            <a id="f5" href="#">JJ Markalen</a>
          </div>
        </div>
        <div style="float: right" class="dropdown2">
          <button class="sort">Sort ↓</button>
          <div class="dropdown-content2">
            <a href="#">A to Z (titles)</a>
            <a href="#">Z to A (titles)</a>
            <a href="#">Date(latest)</a>
            <a href="#">Date(old)</a>
          </div>
        </div>
        
      </div>
      <div class="cards">
        <div class="card">
          <img src="img/item1.jpg" alt="g-news game reasearch addicts" style="width:100%;margin: 0;">
          <div class="container">
            <p class="title">Video game addicts divorce more</p>
            <p class="description">Studies show video game addicts have high devorce rates</p>
            <ul class="tags"><li>#research,</li><li>#gamers,</li><li>#addiction</li></ul>
            <p class="author">JT Gabrels</p>
            <p class="category">Research</p>
            <p class="date">2020/06/16</p>
          </div>
        </div>

        <div class="card">
          <img src="img/item2.jpg" alt="g-news game oculus world" style="width:100%;margin: 0;">
          <div class="container">
            <p class="title">Oculus gaming gets new cool features</p>
            <p class="description">Oculus gets cool features from Meta, fans excited</p>
            <ul class="tags"><li>#market,</li><li>#gamers,</li><li>#tech</li></ul>
            <p class="author">Koos M</p>
            <p class="category">Tech</p>
            <p class="date">2021/02/24</p>
          </div>
        </div>

        <div class="card">
          <img src="img/item3.jpg" alt="g-news game cheaters" style="width:100%;margin: 0;">
          <div class="container">
            <p class="title">Epic Games To Sue 14-Year-Old Cheater</p>
            <p class="description">Epic Games has been tracking cheaters in their battle royal games</p>
            <ul class="tags"><li>#gamers,</li><li>#fraud</li></ul>
            <p class="author">Mercy XP</p>
            <p class="category">Gaming</p>
            <p class="date">2017/11/29</p>
          </div>
        </div>

        <div class="card">
          <img src="img/item4.jpg" alt="g-news game game limits" style="width:100%;margin: 0;">
          <div class="container">
            <p class="title">China limits gaming time and tik-tok</p>
            <p class="description">China has announced gaming time and tiktok time will be limited</p>
            <ul class="tags"><li>#tik-tok,</li><li>#china,</li><li>#dictator</li></ul>
            <p class="author">Trevor Noah</p>
            <p class="category">Gaming</p>
            <p class="date">2022/01/10</p>
          </div>
        </div>

        <div class="card">
          <img src="img/item5.jpg" alt="g-news game apple market" style="width:100%;margin: 0;">
          <div class="container">
            <p class="title">Apple enters the video games battle in 2022</p>
            <p class="description">The designing of Apple game console beggins</p>
            <ul class="tags"><li>#apple,</li><li>#console,</li><li>#markets</li></ul>
            <p class="author">Anonymous</p>
            <p class="category">Market</p>
            <p class="date">2022/02/28</p>
          </div>
        </div>
      </div>

      <?php include 'php/footer.php';?>
    </section>
    
  </body>
  <script src="js/today.js"></script>
</html>