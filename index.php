<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RVF</title>
</head>
<body>
   <?php
        $presentTime = new DateTime();
        $destinationTime = new DateTime();
        $destinationTime->setDate(2036, 04, 20);
        $destinationTime->setTime(10, 10);
        $dif = $presentTime->diff($destinationTime); 

        echo "Le present est " . $presentTime->format('M d y H:i') . '<br>';
        echo "La destination temporel " . $destinationTime->format('M d y H:i') . '<br>';

        echo "la différence entre la date actuel et la future date est de : " . $dif->format('%y years %m months %d days %h hours %i mins %s secs');
   ?>
</body>
</html>