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
    <link rel="stylesheet" href="css/fonts/fontawesome-free-6.0.0-web/css/all.min.css">
    <link rel="stylesheet" href="css/loader.css">
    <title>South Africa</title>

  </head>
  <body onload="LoadData()" style="background-image: url('img/south\ african\ flag.jpg')">
    <?php include 'php/header.php';?>

    <section id="content">
      <img src="img/logo original.png">
      <hr class="ld">
      

      <div class="controller">
        <div class="search">
          <input id="search-bar" type="text" placeholder="Search">
          <button id="search" ><img src="img/search-orange icon.png"></button>
        </div>
      </div>

      <h2>South Africa Latest, 
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

        <div class="card" id="c1" >
          <img src="img/sa1.jpg" alt="g-news game sa goliath" style="width:100%;margin: 0;">
          <div class="container">
            <p class="title">Goliath gaming announced #1</p>
            <p class="date">12 Feb, 2022</p>
            <p class="author">
                <i class="fa fa-user" aria-hidden="true">     </i>
                Mahlase Charlene</p>
            <p class="area"><i class="fa fa-building" aria-hidden="true">     </i>
                Johannesburg</p>
          </div>

          <span class="tooltip1">Goliath gaming announced #1, 4.5<i class="fa-solid fa-star"></i></span>
        </div>

        <div class="card" id="c2" >
          <img src="img/sa2.jpg" alt="g-news game oculus world" style="width:100%;margin: 0;">
          <div class="container">
            <p class="title">Takealot started funding e-sports events</p>
            <p class="date">15 Dec, 2021</p>
            <p class="author"><i class="fa fa-user" aria-hidden="true"></i>
                AK Moganedi</p>
            <p class="area"><i class="fa fa-building" aria-hidden="true"></i>
                Cape Town</p>
          </div>
          <span class="tooltip1">Takealot started funding e-sports events, 3.1<i class="fa-solid fa-star"></i></span>
        </div>

        <div class="card" id="c3" >
          <img src="img/sa3.jpg" alt="g-news game cheaters" style="width:100%;margin: 0;">
          <div class="container">
            <p class="title">Women empowerment act</p>
            <p class="date">17 Apr, 2020</p>
            <p class="author"><i class="fa fa-user" aria-hidden="true">     </i>
                Eunice Van der Walt</p>
            <p class="area"><i class="fa fa-building" aria-hidden="true">     </i>
                Johannesburg</p>
          </div>
          <span class="tooltip1">Women empowerment act, 4.8<i class="fa-solid fa-star"></i></span>

        </div>

        <div class="card" id="c4" >
          <img src="img/sa4.png" alt="g-news game game limits" style="width:100%;margin: 0;">
          <div class="container">
            <p class="title">AKA comments of Ricky Rick's death</p>
            <p class="date">12 Mar, 2022</p>
            <p class="author"><i class="fa fa-user" aria-hidden="true">     </i>
                Piet Motswaledi</p>
            <p class="area"><i class="fa fa-building" aria-hidden="true">     </i>
                Sandton</p>
          </div>
          <span class="tooltip1">AKA comments of Ricky Rick's death, 4.9<i class="fa-solid fa-star"></i></span>

        </div>

        <div class="card" id="c5" >
          <img src="img/sa5.jpg" alt="g-news game apple market" style="width:100%;margin: 0;">
          <div class="container">
            <p class="title">Johannesburg roads needs to be repaired</p>
            <p class="date">20 Aug, 2021</p>
            <p class="author"><i class="fa fa-user" aria-hidden="true">     </i>
                Cheryl Moyo</p>
            <p class="area"><i class="fa fa-building" aria-hidden="true">     </i>
                Pretoria</p>
          </div>
          <span class="tooltip1">Johannesburg roads needs to be repaired, 2.0<i class="fa-solid fa-star"></i></span>

        </div>
      </div>

      <?php include 'php/footer.php';?>
    </section>
    
    <script src="js/southafrica.js"></script>
  </body>
</html>