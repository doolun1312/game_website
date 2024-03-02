<?php
//Include the PHP functions to be used on the page 
include('common.php');
$titleName = "Playdom-Leaderboard";
$name = "Leaderboard";
//Output header and navigation 
outputHeader($titleName);
outputBannerNavigation($name);

?>

<!-- Contents of the page -->
<div class="leaderboard">
  <div class="background"></div>
  <br>
  <!--Caroussel commands-->
  <div class="container">
    <a id='top'> </a>
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="2700">
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <!--Profile picture and ranking of the player-->
          <div id="icon">
            <img src="../Images/profilepic.jpg">
          </div>
          <br>

          <h1>#1 <br> NAME OF PLAYER</h1>

          <br>
          <br>
          <p>Level:... <br> Score:...</p>
          <br>
          <br>
        </div>
        <div class="item">
          <!--Profile picture and ranking of the player-->
          <div id="icon">
            <img src="../Images/profilepic.jpg">
          </div>
          <br>

          <h1>#2 <br> NAME OF PLAYER</h1>

          <br>
          <br>
          <p>Level:... <br> Score:...</p>
          <br>
          <br>
        </div>

        <div class="item">
          <!--Profile picture and ranking of the player-->
          <div id="icon">
            <img src="../Images/profilepic.jpg">
          </div>
          <br>

          <h1>#3 <br> NAME OF PLAYER</h1>

          <br>
          <br>
          <p>Level:... <br> Score:...</p>
          <br>
          <br>
        </div>
      </div>
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


</div>

<?php
//output the Footer
outputFooter();
?>