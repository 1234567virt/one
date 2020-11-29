<?php
function move_images(){
 if(isset($_FILES['file'])){
    $_FILES["file"]["type"] = strtolower($_FILES["file"]["type"]);
    if ($_FILES["file"]["type"] == "image/png"
        || $_FILES["file"]["type"] == "image/jpg"
        || $_FILES["file"]["type"] == "image/gif"
        || $_FILES["file"]["type"] == "image/jpeg"
        || $_FILES["file"]["type"] == "image/pjpeg")
    {
      $filename = md5(date("YmdHis")).".jpg";
      $_SESSION['file'] ='/img/'.$filename;
      $file=$_SERVER['DOCUMENT_ROOT'].$_SESSION['file'];
      move_uploaded_file($_FILES["file"]["tmp_name"],$file);
   
      $img=$_SESSION['file'];
     }
    else
     {
      
    $img='/img/error.jpg';
  }
  }
 else
 {
 $img='Ошибка нет файла';
 }
 return $img;
}

?>