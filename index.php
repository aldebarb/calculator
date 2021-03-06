<?php 
    require 'includes/config.php';
    require 'includes/formUtility.php';
?>
<!DOCTYPE html>
<html>
    <head>
	    <title>Home</title>
        <link rel="stylesheet" type="text/css" href="style/main.css"> 
    </head>
    <body>
        <h2>Calculate the Web</h2>
        <div id="menu">
	        <a href="index.php">Home</a>
	        <a href="index.php?p=standardForm">Standard Calculator</a>
            <a href="index.php?p=mortgageForm">Mortgage Calculator</a>
            <a href="index.php?p=circleForm">Area of a Circle</a>
            <a href="index.php?p=rectangleForm">Area of a Rectangle</a>
            <a href="index.php?p=triangleForm">Area of a Triangle</a>
        </div>

        <div id="content">
            
            <?php 
            $pages_dir = 'pages';

            if (!empty($_GET['p'])) {
    	        $pages = scandir($pages_dir, 0);
    	        unset($pages[0], $pages[1]);
    	        $p = $_GET['p'];

    	        if (in_array($p . '.php', $pages)) {
    		        include ($pages_dir . '/' . $p . '.php');
    	
    	        } else {
    		        echo "Page not found";
    	        }

            } else {
                echo "Welcome to the online calculator!";
            }
            ?>
        </div>
    </body>
</html>