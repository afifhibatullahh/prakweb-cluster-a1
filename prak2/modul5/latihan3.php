<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    for($i=1;$i<=50;$i++){
        $a=0;
        for($j=1;$j<=$i;$j++){
            if($i % $j==0){
                $a++;
            }
        }
        if($a==2){
            echo $i." Adalah Bilangan Prima<br>";
        }
    }
    ?>
</body>
</html>