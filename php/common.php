<?php
//Ouputs the header for the page and opening body tag
function outputHeader($title)
{
    echo '<!DOCTYPE html>';
    echo '<html>';
    echo '<head>';
    echo '<title>' . $title . '</title>';

    //Link to external style sheet
    $path = '../css/style.css';
    echo '<link href="' . $path . '" type="text/css" rel="stylesheet">';
    echo '<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>';

    //Required meta tags
    echo '<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />';


    //Tailwind CSS
    echo '<link
    href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css"
    rel="stylesheet"
  />

  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
  />

  <link
    href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css"
    rel="stylesheet"
  />';
    echo '</head>';
}

/* Ouputs the banner and the navigation bar*/
function outputBannerNavigation($pageName)
{
    //Output banner and first part of navigation
    echo '<header>';
    echo '<div class="nav"';
    echo '<a id="top"></a>';
    echo '<a href=index.php><img src="../Images/hlogo.png"></a>';

    //Dictionary of pages to link to
    $links = array("HOME" => "index.php", "GAME" => "game.php",  "ABOUT US" => "aboutus.php",  "LEADERBORD" => "leaderboard.php", "LOGIN"=>"loginoption.php");
  
    //Output navigation
    echo '<div class="menu">';
    foreach ($links as $x => $xlink) {
        //Output login logo and dropdown menu for login option
        if ($x == "LOGIN") {
            echo '<div class="dropdown"';
            echo '<div class="loginbtn">';
            echo '<a href="' . $xlink . '"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAPBJREFUSEvdVUEOgjAQ3G28G5PqiVb5CfwEXiZP8Qn4AyhHOegD6JoSSUglshhI0F47O7PTTrsICy9cmB/WIXCrqgiJzgBwYjguCDHdK3VxWJaDuqoKIDoyyDtIIbUO+QLGkANLrUcbqj3saIEj9os+OfkNgdqYTGqdDDn5yoFP5EiQKBfWxrswvPf3ZxN4kd6tEPEhCPJOZFSgA0yIpIOmUutsKBBvKVpcgNN5r4mHFSKadERcAQK4bpommuWS/YubPab/95KX+Ivca91yAtBiEEupVDs7WL9pO3AAMtZMQCwJIJk0cNidDwBZDlYt8AR6MakZVMar+QAAAABJRU5ErkJggg=="/></a>';
            echo '   <br> <div class="dropdown-content"> 
                <a href="login.php">Login</a>
                <a href="signup.php">Signup</a>
                </div>
                </div>
                </div>';
        } else {
            echo '<a href="' . $xlink . '">' . $x . '</a>';
        }
    }
    echo '</div>';
    echo '</div>';
    echo '</header>';
    echo '<body>';
}
//Output the background and image for pages
function outputBody($page)
{
    //output body for game page 
    if ($page == "game" || $page == "game1") {
        echo '<div class="' . $page . '">
        <div class="background"></div>
        <br>
        <img src="../Images/gamelogo2.png">
        <br>';
    }
    //output body for how to play page
    else if ($page == "howtoplay")
        echo '<div class="' . $page . '">   
    <div class="background"></div>
    <br>
    <img src="../Images/game.jpg">';
    //output body for about us, terms and privacy page
    else if ($page == "aboutus" || $page == "terms" || $page == "privacy") {
        echo '<div class="' . $page . '">
        <div class="background"></div>
        <br>
        <div id="icon">
        <img src="../Images/Website logo.png">
        </div>';
    }
    //output body for login opition page
    else if ($page == "option") {
        echo '<div class="' . $page . '">
        <div class="background"></div>
        <br>
    
        <div id="icon1">
        <img src="../Images/gamelogo2.png">
        </div>';
    }
    //output body for the remaining pages
    else {
        echo '<div class="' . $page . '">
        <div class="background"></div>
        <br>
    
        <div id="icon">
        <img src="../Images/gamelogo2.png">
        </div>';
    }
}

//Outputs closing body tag and closing HTML tag
function outputFooter()
{
    //go back to the top button
    echo ' <a id="myBtn" href=#top ><img style="float:right;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAQ9JREFUSEvlleEVwUAQhGc6UAIVoAJSASpBBagAlUgHdIAKKEEH4613ySPJ5SKJX/bv3c7sfjcvIX5c/LE+/shAUgfA0SGNSD6q4K2MSNIOwNyJ7kkuWjOQNH6bPtG1LU4hk+AGDs0ZQDcjdgcwDKGqYhADmHgmjUnOyrYoNZA0BXAIYJiRtCEKy2vg0NwAWHrKytLU86EqM7AHHIUe0Z2fSEZFdwsNJFkEtxXFk2tLkhblj8oZSLK0WGpCaLJahspSZelKq8jgAqD/5fTJ9QvJoddA0hrAqqZ40rYhaTqvSjeQNHBoGuq/2g2VkfgwaIImO1SK6n2DNg2uJI3IP/1w6r588GtaVzgX06ZCvv4njFZOGRx3fOkAAAAASUVORK5CYII="></a>';
    echo'<script src="index.js"></script>';
    echo '</body>';
    echo '<footer>
		<div class="footer">
		<div class="part1">
		<br>';
    //Array of pages to link to
    $linkNames1 = array("About", "Contact",  "Privacy Policy",  "Terms of Use");
    $linkAddresses1 = array("aboutus.php", "mailto:123playdom@gmail.com", "privacypolicy.php", "terms.php");

    //Output footer links
    for ($x = 0; $x < count($linkNames1); $x++) {
        echo '<a href="' . $linkAddresses1[$x] . '">' . $linkNames1[$x] . '</a>';
    }
    echo '</div>';
    $mail = "href=window.location.href='mailto:123playdom@gmail.com'";
    echo '<div class="part2">
				<br>
				<form>
					<input type="text" placeholder="Your feedback" required> 
					<br>
					<br>
					<button onclick="' . $mail . '" type="submit">SEND US YOUR FEEDBACK</button>
				</form>
			</div>';

    echo '<div class="part3">
				<div class="socials">';
    //arrays of social media links and images to link to 
    $iconNames = array("insta", "mail",  "twitter");
    $iconAddresses = array("https://www.instagram.com/123playdom/", "mailto:123playdom@gmail.com", "https://twitter.com/123playdom");
    $iconLinks = array(
        "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAZ5JREFUSEvNlb1NA0EQhb/XARGpTQVABYaEFFMAEnRAB4YKEBkZuAJwSARUYKgAiwb4aWDQQ7tofbbvzoFlRjqddDc7b37evBUrNq04PusBiIguMAB20lNX6Avg50qS31M2U0FEnAA3yesZ+EwB5oE4gQ2gl36eSrotHacAIsIHxoAD9yU5eKOliu+BbWC3rKQKYPQ+0G0TPCKOgQvgCzgC3oChJHfh16oAE2Aiaa+adkQY2BnaXiSNIuIAeADeJXUi4gnoSNpaBBBpWGfZISLc48c5w3awa+Ab2JQ0TAA9SX+JVyswwIWk8wLAzDCrTiS5z6Rq3M6xpP3C16DtAVKgO/c3By+CZbb9/Vu6gohwJYOy5ErrPsqK/yWAmbO6FqWBesidNORR+ub+XwKvJaXbtsiaUqWp2ZF3II9hZtvbADQtmqUkL9ovZUtLAFYB03ruJpvbh8BWG6moBHfQRqnIYueWWBldUaMlsTMZfH6x2BUDzHJtoDq5zpqV3/VyXSyRM/GgfdAMqjMrqRM5b3XhNPZjSYf13MlLJlnr/gN1YvoZXCUOOQAAAABJRU5ErkJggg==",
        "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAR1JREFUSEvtldFRwzAQRN9WAB0AHdABdEDoACogVEBSAaQCKAE6gA4oISWECo5Zj5xRjGzFGcLwkfuRx9btu9uTxmLPoT3rcwBUHV5bFBE3wDOwAmaSFtXsbEPKf0yv7iW9+DkHLIGTLOcVuJVkYG9ExDFgYRfYxlLSWRcQBRVDryV9lggRcZ669roRkpri8w5KgDZp2rUss8Qd/IixAAs0liUlz2oyZN0uAOvZMsfpkHhjzUiLano7WfQGXAJHFfUv4B24yvdt08EceEreX/RAPtIspsDDaICkmZMiwuuGADAf+r5VB61AgtgunyTHRJJtaaJUwGhAEmrOfPd2/xqgb9j/BuATc5dVuR5i7RIUOlhI8sk6/NFq5v2BRd87VowZDYN9IAAAAABJRU5ErkJggg==",
        "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAVpJREFUSEvdVcFRwzAQ3K0AOoAOIBUAFRAqACoAKoBUQEpIB5AKoAOgA1IBUMEyy0geS5YV7Bl/cjP+SHe7d6u7MzGxcWJ87BiBpH2S3zXZ7APgBsAcwDGATwArkgvHSZqTfI4YiUSS7GyH9z4SSa8ATgr3jjHhHcllh0CSL98AuIILkgZKrOXTx2+SDwDLmGRegVqRzmLRlszlA3iqSPgTFGiSywms3XkG4DN/lm8G4LFCsCbpJBprCMLjHQawg5Hz4YofagRfI4FjWPLAPix10djsjTfLOzAncCf5gfZGVLIhaYkT66yK0CmXYZCG8HTk6UgUJvEUwMsQZAAbD1lpCxSXnSR3wv0AkrPSYBYriKChbT1slqtm1yRXfQ59FVimuND6Yj21tzXwpAJJBnXGR/+QZh3APd1VK3XRFQCTuWUjmReYl+Df2iC5FTiy7tgfbZueY+4nl+gX3293GUCOwckAAAAASUVORK5CYII="
    );
    //output footer social media links
    for ($x = 0; $x < count($iconNames); $x++) {
        echo '<i class="' . $iconNames[$x] . '">';
        echo '<a href="' . $iconAddresses[$x] . '"target="_blank"><img src="' . $iconLinks[$x] . '"/></a>';
        echo '</i>';
    }

    echo '</div>
			</div>
		</div>
	</footer>
    </html>';
}
