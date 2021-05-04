<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url();?>assets/css/design.css">
        <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url();?>assets/css/style_header.css">
    </head>

    <nav id="nav-principale">
        <div class="navLogo">
            <a style="text-decoration:none;color:rgb(153, 18, 18)">COVITU-19</a>
        </div>
    
        <div class="nav4">
            <a class="textMenu" routerLink="/login" routerLinkActive="active" style="text-decoration:none;color:rgb(153, 18, 18)">Contact: 034 43 426 88</a>
        </div>
    </nav>

    <div id="floatMenu">
        <a href="covid19-dans-le-monde-en-2021.html" style="color:rgba(255, 255, 255);text-decoration:none;">
            <div id="fm1">
                MONDE
            </div>
        </a>
        <a href="covid19-a-madagascar-en-2021.html" style="color:rgb(255, 255, 255);text-decoration:none;">
            <div id="fm2">
                MADAGASCAR
            </div>
        </a>
    </div>
</html>
