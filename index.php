<?php
$dir = "./hardware/";
$img = scandir($dir);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Image Viewer</title>
</head>
<body>
        <div class="container">
            <div class="row">
                    <?php for($i=3; $i<count($img); $i++) :?>
                        <div class="col-3">
                        <img src=<?php echo "$dir$img[$i]";?>>
                        <p><?php echo str_replace("-"," ",substr($img[$i],0,-4));?></p> 
                        </div>   
                    <?php endfor;?>
            </div>                            
        </div>   
</body>
</html>