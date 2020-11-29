<!DOCTYPE html>
<html lang="ru">
<?php
 require_once("core/upload.php");
 $img=move_images();//Проверка на тип файла
?>

<head>
    <style>
    #templatemo_body {
        background: url(img/templatemo_body.jpg) repeat;
    }
    </style>
    <link href="./css/calc.css" rel="stylesheet" type="text/css" />
    <meta charset="UTF-8">
    <title>Изображение</title>
</head>

<body id="templatemo_body">
    <div style="margin:0 auto;">
        <img src=<?php include("core/index.php");?>>
        <img src=<?php include("core/index.php");?>>
    </div>
    <center> <?php echo $_COOKIE["count"];?></center>
    <!--Вывод результата количества изображений-->

</body>

</html>