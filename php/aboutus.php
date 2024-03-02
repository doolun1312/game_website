<?php
//Include the PHP functions to be used on the page 
include('common.php');
$titleName = "Playdom-Aboutus";
$name = "About Us";
//Output header and navigation 
outputHeader($titleName);
outputBannerNavigation($name);
?>

<!-- Contents of the page -->
<?php
//output the background and selected image of the box
outputBody("aboutus");
?>
<!--Content of the About us page-->
<br>
<p>ABOUT US</p>

<br>
<p>Since 2022 <br> Playdom has been the source of entertainment of many! <br>
    From younsters to older we bring everyone together.<br> Based in Mauritius we are a small startup <br>
    that is constantly growing <br> and make our best to deliver content of quality. </p>
<br>
<br>
<button onclick="href=window.location.href='mailto:123playdom@gmail.com'" style="cursor: pointer;" type="submit">CONTACT US</button>

</div>
<?php
//output the Footer
outputFooter();
?>