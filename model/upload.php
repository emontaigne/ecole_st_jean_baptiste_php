<?php


/*
* Class: Upload
* uploads files to uploads directory
*/

class Upload
    {
        private $allowedExts;
        private $maxSize;
        private $file;
        private $uploadsDirectory;
        private $fileUrl;
    
    function __construct($file,$allowedExts,$uploadsDirectory,$maxSize)
    {
       if(is_array($allowedExts) AND is_int($maxSize))
       {
           $this->file = $file;
           $this->allowedExts = $allowedExts;
           $this->maxSize = $maxSize;
           $this->uploadsDirectory = $uploadsDirectory;
       }
    
    else{
        throw new Exception("File extensions must be in an array and max size value must be intger value.");
    }
}
    

    function uploadFiles()
    {
        $file = $this->file;
        $allowedExts = $this->allowedExts;
        $maxSize = $this->maxSize;
        $uploadsDirectory = $this->uploadsDirectory;
    
  //  $files = $_FILES['image'];
    
    for($i = 0; $i < count($file['name']);$i++)
{
//$allowedExts = array('doc','docx','pdf','jpg','png');
$errors = array();


$filename = $file['name'] [$i];
$fileext = (explode('.',$filename));
$file_extension = strtolower(end( $fileext));
$filesize = $file['size'] [$i];
$filetmpname = $file['tmp_name'] [$i];

if (in_array($file_extension, $allowedExts) === FALSE)
{
      $errors[] = "Extension is not allowed";
}

if($filesize > $maxSize)
 {
        $errors[] = "File Size must be less than ($maxSize) MB!";
 }


if(empty($errors))
{
         //$random = rand(0, 9999);
        // $random."_".date("d-m-Y")."_".
         $this->fileURL = $filename;
         $destination= $uploadsDirectory.$filename;
      move_uploaded_file($filetmpname, $destination);
      }
 
 else{
     
     foreach($errors as $error)
     {
        throw new Exception($error);
     }
 }
 return TRUE;
}


    }
function getFileUrl()
{
    return $this->fileURL;
}
}

?>