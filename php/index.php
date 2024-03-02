<?php
//Include the PHP functions to be used on the page 
include('common.php');
$titleName = "Playdom-Home";
$name = "Home";
//Output header and navigation 
outputHeader($titleName);
outputBannerNavigation($name);
?>

<!-- Contents of the page -->
<br>
<!--Caroussel commands-->
<div class=slideshow>
  <div class="container">
    <a id='top'> </a>
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="2500">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
      </ol>
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active"><a href=aboutus.php>
            <img src="../Images/slidewelcome.gif" alt="welcome">
          </a>
        </div>
        <div class="item"><a href=game.php>
            <img src="../Images/slidechallenge.gif" alt="challenge">
          </a>
        </div>

        <div class="item"><a href=loginoption.php>
            <img src="../Images/slideplay.gif" alt="play">
        </div>
        </a>
      </div>


      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <br>
  </div>
</div>
<!--Play button which leads to login option page-->
<div class="playbtn">
  <button onclick="href=window.location.href='loginoption.php'" style="cursor: pointer;" type="submit"><img src="../Images/startbtn.gif"></button>
</div>

<?php
//output the Footer
outputFooter();
?>