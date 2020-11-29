<!DOCTYPE html>
<html lang="ru">
<?php
require_once('../engine/calculator_class.php');
$arg2=isset($_POST['numberTwo'])?  $_POST['numberTwo'] : '';
$arg1=isset($_POST['numberOne'])? $_POST['numberOne'] : ''; 
$result='';
?>

<head>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript">
    $("document").ready(function() {
        $("#send").click(function() {
            var dannie = $("form").serialize();

            $.ajax({
                url: '/controller/result.php',
                type: 'POST',
                data: dannie,
                success: function(data) {
                    var res = document.getElementById('res');
                    res.innerHTML = data;
                }
            });
        });
    });
    </script>
    <style>
    #templatemo_body {
        background: url(img/templatemo_body.jpg) repeat;
    }
    </style>
    <meta charset="UTF-8">
    <title>Калькулятор</title>
    <link rel="stylesheet" href="./css/calc.css">
</head>

<body id='templatemo_body'>

    <?php // require_once('../templates/header.php');?>
    <center style="margin-top:5px;">
        <h1>Калькулятор</h1>
    </center>
    <?php require_once('../templates/calc_form.php'); //Форма
   ?>
    <div id='res'> </div>

    <?php
require_once('../controller/result.php');//Результат

    ?>
    </div>
    </div>
</body>

</html>