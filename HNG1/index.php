<?php 
date_default_timezone_set('Africa/Lagos')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HNG Project</title>
    <link rel="stylesheet"  href="style.css">


</head>

<body>
        <div class="div2">
            <div class="text-med-top">HNG4 Internship</div>
            <div class="text-reg">Today’s<br>
            <?php echo date("l, d/m/Y")?> <br> and the time is</div>
            <div class="text-med-bottom"><?php echo date ("h:i:sa"); ?></div>
            
        </div>


    
</body>
</html>