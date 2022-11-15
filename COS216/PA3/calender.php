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
    <link rel="stylesheet" href="css/calender.css">
    <title>Calender</title>

  </head>
  <body onload="renderCalendar()" style="background-image: url('img/calenderB.jpg')">
    <?php include 'php/header.php';?>

    <section class="calender">
        <div class="c-header">
            <ul>
                <li class="next-icon"><i class="fa-solid fa-angle-right"></i></li>
                <li class="prev-icon"><i class="fa-solid fa-angle-left"></i></li>
                <li>March <br>
                    <span>2022</span>
                </li>
            </ul>
        </div>
        <ul class="week">
            <li>Sun</li>
            <li>Mon</li>
            <li>Tue</li>
            <li>Wed</li>
            <li>Thu</li>
            <li>Fri</li>
            <li>Sat</li>
          </ul>
          <div class="days">
              <div>27</div>
              <div>28</div>
              <div>29</div>
              <div>30</div>
              <div>31</div>
              <div>1</div>
              <div>2</div>
              <div>3</div>
              <div>4</div>
              <div>5</div>
              <div>6</div>
              <div>7</div>
              <div>8</div>
              <div>9</div>
              <div>10</div>
              <div>11</div>
              <div>12</div>
              <div>13</div>
              <div>14</div>
              <div>15</div>
              <div>16</div>
              <div>17</div>
              <div>18</div>
              <div>19</div>
              <div>20</div>
              <div>21</div>
              <div>22</div>
              <div>23</div>
              <div>24</div>
              <div>25</div>
              <div>26</div>
              <div>27</div>
              <div>28</div>
              <div>29</div>
              <div>30</div>
              
          </div>
    </section>

    <script src="js/calender.js"></script>
  </body>
</html>