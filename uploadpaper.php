<?php

session_start();
include_once('./includes/config.php');
$login = false;
if (isset($_SESSION["id"])) {
  $login = true;
  $id = $_SESSION['id'];
  $full_name=$_SESSION['full_name'];
 $email= $_SESSION['email'];
 date_default_timezone_set("Asia/Kolkata");
  $date=date("y-m-d,h:i:sa");
}
else{
    header("location:index.php?msg=login");
}
$papertitle=$_POST['ptitle'];
$catagory=$_POST["catagory"];
$author=$_POST["author"];
$subauthor=$_POST["subauthor"];
$paperid=str_replace(' ', '',substr($papertitle,0,20))."-".$id;
$version=1;
$document=upload_profile();


$sql="INSERT INTO paper_details (p_id, paper_id, paper_title, paper_catagory, member_id, author, sub_author, version, date, document) VALUES (NULL,'$paperid', '$papertitle', '$catagory', '$id', '$author', '$subauthor', '$version','$date', '$document');";
if (!mysqli_query($db1,$sql))
{
    echo("Error description: " . mysqli_error($db1));
}
else{
    echo $paperid;
}


function upload_profile()
{
   

    $filename = $_FILES["file"]["name"];
        $file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
         $file_ext = substr($filename, strripos($filename, '.')); // get file name
          $filesize = $_FILES["file"]["size"];
        $allowed_file_types = array('.pdf','.docx','.doc');
    
        if (in_array($file_ext,$allowed_file_types))
        {
            // Rename file
            $newfilename = substr($_POST['ptitle'],0,5)."-".substr($_SESSION['full_name'],0,5)."-".date("d-m-y")."-v1". $file_ext;
            if (!file_exists("uploads/document/" . $newfilename))
            {
                
    
                    move_uploaded_file($_FILES["file"]["tmp_name"], "uploads/document/" . $newfilename);
                
            }
            return $newfilename;
    
        }
        elseif (empty($file_basename))
        {
            // file selection error
            echo "Please select a file to upload.";
        }
        else
        {
            echo "Only these file typs are allowed for upload: " . implode(', ',$allowed_file_types);
            unlink($_FILES["file"]["tmp_name"]);
        }
    }

?>