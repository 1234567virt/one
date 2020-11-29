<?php
require_once('../engine/calculator_class.php');
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    if(isset($_POST['hero']) && isset($_POST['numberOne']) && isset($_POST['numberTwo'])){//Проверка на существования переменных
        if(is_numeric($_POST['numberOne']) &&  is_numeric($_POST['numberTwo'])){//Проверка на то что переменные числа
     $calc=new MathO();
     $result=$calc->mathOperation($_POST['numberOne'],$_POST['numberTwo'],$_POST['hero']);
     echo json_encode($result);//ответ
        }
        else{
            echo "<i>Ошибка неправильные данные</i>!!!";
        }
}
    else{
   //  header('Location:./error.html');
    echo "Напрямую зайти нельзя";   
}
     // header('Location:./error.html');
}

  
?>