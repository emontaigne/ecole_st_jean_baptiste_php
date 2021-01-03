<?php 
    // verifie

    if($_POST)
    {
        if(isset($_FILES))
        {
           // print_r($_FILES);
    include_once './model/upload.php';

    $file = $_FILES['image'];
    $allowedExts = array('doc','docx','pdf','jpg','png');
    $uploadsDirectory = "public/uploads/";
    $maxSize = 40000000;
    $upload = new Upload($file,$allowedExts,$uploadsDirectory,$maxSize);
  echo $upload->uploadFiles();
 echo $upload->getFileUrl();
           }
    
         } 
         else
         {
            include_once "./view/page/traiteur.php";
            echo '<div class="clear"></div>';
            echo '<hr>';

            $uploadsDirectory = "public/uploads/";
            $dir = scandir($uploadsDirectory);
            $scdir = array_diff($dir,array('..','.'));
           
           
            echo '<div class="imglib"<form action="" method="POST">';
            foreach ($scdir as $value)
            {
                echo "<img class='img-traiteur' src='$uploadsDirectory$value' />";
            }
            echo '</div>';
        }
    
    
    
   //    require_once("view/page/traiteur.php");
    
    ?>
