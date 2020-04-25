<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Certificate</title>
</head>
<body>
    <h1><Center><?php
        if ($percentaje > 50){
            echo "Congratulations!!";
        }else{
            echo "Oops!!";    
        }
    ?></Center></h1>
    <p style="background: #202020; width: 500px; height: 35px; border-radius: 20px;">Marks Obtained <?php
    
    echo $percentaje;

    ?> % </p>
    <?php
    
        if($percentaje > 50){
            echo "<h4>Amazing, You have cracked the test!!<br>You can opt for this field as your career choice</h4>
            <h3>ALL THE BEST FOR YOUR CAREER!!</h3>";
        }else{
            echo "<h4>You should try for some other field</h4>
            <h3>ALL THE BEST FOR YOUR CAREER!!</h3>";
        }

    ?>
</body>
</html>