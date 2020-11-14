<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nama= array("lanirme","aduh","qifuat","toda","anevi","samid","kifuat","lee","crag","ace");
    sort($nama);
    for ($i=0; $i<10; $i++) {
   echo $nama[$i]."<br />";
    }
    ?>
</body>
</html>