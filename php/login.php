<?php
//Include the PHP functions to be used on the page 
include('common.php');
$titleName = "Playdom-Login";
$name = "Login";
//Output header and navigation 
outputHeader($titleName);
outputBannerNavigation($name);
?>

<!-- Contents of the page -->
<?php

//output the background and selected image of the box
outputBody("login");
?>

<br>
<!--Back button to go back to login option page-->
<button onclick="href=window.location.href='loginoption.php'" style="cursor: pointer;">BACK</button>
<br>
<br>
<p>LOGIN</p>
<!--Login Form-->
<form>
    <p>Username: </p>
    <input type="text" placeholder="Username" required>
    <p>Password: </p>
    <input type="password" placeholder="Password" required>
    <br>
    <br>
    <button onclick="href='#signup'" style="cursor: pointer;" type="submit">LOGIN</button>
</form>
<!--Go to signup page-->
<p>Don't have an account? <a href="signup.php">Sign Up here</a></p>

</div>

<?php
//output the Footer
outputFooter();
?>