<?php
$dir = "/images/";

// Sort in ascending order - this is default
$a = scandir($dir);

// Sort in descending order
$b = scandir($dir,1);

print_r($a);
print_r($b);
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <title>Image Viewer</title>
</head>
<body>
    <ul>
        <?php 
            for($i=0;$i<11;$i++)
                echo "<li style=\'display:inline;\'><img src=\"$img[$i]\" width=\"250\" height=\"250\"> </li>";
        ?>
        <li>
        <figure class="image is-128x128">
            <img src="hardware/ball-bearing-type.png" alt="ball-bearing-type" title="ball bearing type"/>
        </figure>
        </li>
    </ul>
</body>
</html>