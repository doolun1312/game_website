<?php
//Include the PHP functions to be used on the page 
include('common.php');
$titleName = "Playdom-How to Play";
$name = "How to Play";
//Output header and navigation 
outputHeader($titleName);
outputBannerNavigation($name);
?>
<div class="content">
    <!-- Contents of the page -->
    <?php
    //output the background and selected image of the box
    outputBody("game1");
    ?>

    <p>ABOUT THE GAME</p>
    <br>

    <p>Can you beat geometry laws? <br> Take a chance and embark on this <br> adventure! <br>
        You control the block movement by <br> jumping to avoid obstacles. <br> If you get in a collision the game stops <br>
        and you have to try again <br> Are you up for the challenge? </p>
    <!-- Minus button to go back to game page and remove the how to play part-->
    <div class="minusbtn">
        <button onclick="href=window.location.href='game.php'" type="button">-</button>
    </div>
    <br>
    <!--Button Play Now which leads to login option page-->
    <div class="submitbtn">
        <button onclick="href=window.location.href='loginoption.php'" type="submit">PLAY NOW</button>
    </div>
</div>
<?php
//output the background and selected image of the second box
outputBody("howtoplay");
?>
<br>
<p>HOW TO PLAY</p>
<br>
<br>
<!--Gif showing how to play-->
<div class="command"><img src="../Images/arrow.gif"></div>
<br>
<br>
</div>
</div>
<?php
//output the Footer
outputFooter();
?>