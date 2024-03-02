<?php
//Include the PHP functions to be used on the page 
include('common.php');
$titleName = "Playdom-Signup";
$name = "Signup";
//Output header and navigation 
outputHeader($titleName);
outputBannerNavigation($name);
?>

<!-- Contents of the page -->
<?php
//output the background and selected image of the box
outputBody("signup");
?>
<br>
<!--Back button to go back to login option page-->
<button onclick="href=window.location.href='loginoption.php'" style="cursor: pointer;">BACK</button>
<br>
<br>
<p>SIGNUP</p>
<!--Signup Form-->
<p>Username: </p>
<form>
    <input type="text" placeholder="Username" required>
    <p>Password: </p>
    <input type="password" placeholder="Password" required>
    <p>Re-enter password: </p>
    <input type="password" placeholder="Password" required>
    <br>
    <br>
    <button onclick="href='#signup'" style="cursor: pointer;" type="submit">SIGNUP</button>
</form>
 <!--Go to signup page-->
<p>Already have an account? <a href="login.php">Login here</a></p>
</div>

<?php
//output the Footer
outputFooter();
?>