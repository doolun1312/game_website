<?php
//Include the PHP functions to be used on the page 
include('common.php');
$titleName = "Playdom-Game";
$name = "Game";
//Output header and navigation 
outputHeader($titleName);
outputBannerNavigation($name);
?>
<!-- Contents of the page -->
<?php
//output the background and selected image of the box
outputBody("game");
?>
<!--Content of the Game Page-->
<p>ABOUT THE GAME</p>

<br>
<p>Can you beat geometry laws? <br> Take a chance and embark on this <br> adventure! <br>
    You control the block movement by <br> jumping to avoid obstacles. <br> If you get in a collision the game stops <br>
    and you have to try again <br> Are you up for the challenge? </p>
<!-- Plus button to go to thee how to play page-->
<div class="plusbtn">
    <button onclick="href=window.location.href='howtoplay.php'" type="button">+</button>
</div>
<br>
<!--Button Play Now which leads to login option page-->
<div class="submitbtn">
    <button onclick="href=window.location.href='loginoption.php'" type="submit">PLAY NOW</button>
</div>
</div>

<?php
//output the Footer
outputFooter();
?>