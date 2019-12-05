<?php
session_start();
include_once('./includes/config.php');
$type=$_GET['type'];

if (isset($_POST['submit']))
{
    if($type=="image")
    {
        upload_image();
    }
    elseif($type=="file")
    {
        upload_resume();
    }
    elseif ($type=="logo") {
         upload_logo();
    }
    elseif($type=="profile"){
        upload_profile();
    }
}

function upload_image(){

    $filename = $_FILES["file"]["name"];
    $file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
     $file_ext = substr($filename, strripos($filename, '.')); // get file name
      $filesize = $_FILES["file"]["size"];
    $allowed_file_types = array('.jpeg','.png','.jpg','.JPEG','.JPG');

    if (in_array($file_ext,$allowed_file_types) && ($filesize < 600000))
    {
        // Rename file
        $newfilename = $_SESSION['full_name'].$_SESSION['id'] . $file_ext;
        if (!file_exists("uploads/images/" . $newfilename))
        {
            // file already exists error
            // unlink("uploads/images/".$newfilename);
    
            $imageInformation = getimagesize($_FILES['file']['tmp_name']);
            //print_r($imageInformation);

            $imageWidth = $imageInformation[0]; //Contains the Width of the Image

            $imageHeight = $imageInformation[1]; //Contains the Height of the Image

            if ($imageWidth <= 1700 && $imageHeight <= 1700) {


                move_uploaded_file($_FILES["file"]["tmp_name"], "uploads/images/" . $newfilename);
               echo $sql=" update account set photo= '$newfilename' WHERE u_id='$_SESSION[id]'";
                $cmd = mysqli_query($GLOBALS['db1'],$sql);
                if (!$cmd) {
                    echo "Error description: " . mysqli_error($GLOBALS['db1']);
                } else {
                    //echo "File uploaded succesfully ; <a href='jobseeker/profile.php'> Go back to profile </a>";
                    header('location:dashboard.php?msg=suc-img');
                }
            } else{
                echo "image size is too large";
            }
        }

    }
    elseif (empty($file_basename))
    {
        // file selection error
        echo "Please select a file to upload.";
    }
    elseif ($filesize > 200000)
    {
        // file size error
        echo "The file you are trying to upload is too large.";
    }
    else
    {
        // file type error
        echo "Only these file typs are allowed for upload: " . implode(', ',$allowed_file_types);
        unlink($_FILES["file"]["tmp_name"]);
    }
}

/* function upload image ends here */

function upload_logo()
{
    $filename = $_FILES["file"]["name"];
    $file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
    $file_ext = substr($filename, strripos($filename, '.')); // get file name
    $filesize = $_FILES["file"]["size"];
    $allowed_file_types = array('.jpeg','.png','.jpg','.JPEG','.JPG');

    if (in_array($file_ext,$allowed_file_types) && ($filesize < 1200000))
    {
        // Rename file
      echo  $newfilename = $_SESSION['name'].$_SESSION['eid'] . $file_ext;
        if (!file_exists("uploads/logo/" . $newfilename))
        {
            // file already exists error
            unlink("uploads/logo/".$newfilename);

            $imageInformation = getimagesize($_FILES['file']['tmp_name']);
            //print_r($imageInformation);

            $imageWidth = $imageInformation[0]; //Contains the Width of the Image

            $imageHeight = $imageInformation[1]; //Contains the Height of the Image

              echo "hell";
                move_uploaded_file($_FILES["file"]["tmp_name"], "uploads/logo/" . $newfilename);
                mysqli_select_db($GLOBALS['db1'], "jobportal");
                $cmd = mysqli_query($GLOBALS['db1'], "update employer set logo = '$newfilename' WHERE eid=$_SESSION[eid]");
                if (!$cmd) {
                    echo("Error description: " . mysqli_error($db1));
                } else {
                    //echo "File uploaded succesfully ; <a href='employer/profile.php'> Go back to profile </a>";
                    header('location:employer/profile.php?msg=suc-logo');
                }
            
        }

    }
    elseif (empty($file_basename))
    {
        // file selection error
        echo "Please select a file to upload.";
    }
    elseif ($filesize > 200000)
    {
        // file size error
        echo "The file you are trying to upload is too large.";
    }
    else
    {
        // file type error
        echo "Only these file typs are allowed for upload: " . implode(', ',$allowed_file_types);
        unlink($_FILES["file"]["tmp_name"]);
    }
}

/* function upload_logo ends here */

function upload_resume()
{

$filename = $_FILES["file"]["name"];
    $file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
    $file_ext = substr($filename, strripos($filename, '.')); // get file name
    $filesize = $_FILES["file"]["size"];
    $allowed_file_types = array('.doc','.docx','.pdf');

    if (in_array($file_ext,$allowed_file_types) && ($filesize < 600000))
    {
        // Rename file
        $newfilename = $_SESSION['full_name'].$_SESSION['id'] . $file_ext;
        if (file_exists("uploads/images/" . $newfilename))
        {
            // file already exists error
            unlink("uploads/resume/".$newfilename);
        }

            move_uploaded_file($_FILES["file"]["tmp_name"], "uploads/resume/" . $newfilename);
            mysqli_select_db($GLOBALS['db1'],"jobportal");
            $cmd=mysqli_query($GLOBALS['db1'],"update jobseeker set Resume= '$newfilename' WHERE user_id=$_SESSION[id]");
            if (!$cmd)
            {
                echo("Error description: " . mysqli_error($db1));
            }
            else{
               //echo "File uploaded succesfully ; <a href='jobseeker/profile.php'> Go back to profile </a>";
               header('location:jobseeker/profile.php?msg=suc-res');
            }

    }
    elseif (empty($file_basename))
    {
        // file selection error
        echo "Please select a file to upload.";
    }
    elseif ($filesize > 500000)
    {
        // file size error
        echo "The file you are trying to upload is too large.";
    }
    else
    {
        // file type error
        echo "Only these file typs are allowed for upload: " . implode(', ',$allowed_file_types);
        unlink($_FILES["file"]["tmp_name"]);
    }
}


 function upload_profile()
{
   

    $filename = $_FILES["file"]["name"];
        $file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
         $file_ext = substr($filename, strripos($filename, '.')); // get file name
          $filesize = $_FILES["file"]["size"];
        $allowed_file_types = array('.jpeg','.png','.jpg','.JPEG','.JPG');
    
        if (in_array($file_ext,$allowed_file_types) && ($filesize < 600000))
        {
            // Rename file
            $newfilename = $_SESSION['full_name'].$_SESSION['id'].uniqid(). $file_ext;
            if (!file_exists("uploads/images/" . $newfilename))
            {
                
        
                $imageInformation = getimagesize($_FILES['file']['tmp_name']);
                //print_r($imageInformation);
    
                $imageWidth = $imageInformation[0]; //Contains the Width of the Image
    
                $imageHeight = $imageInformation[1]; //Contains the Height of the Image
    
                if ($imageWidth <= 1700 && $imageHeight <= 1700) {
    
    
                    move_uploaded_file($_FILES["file"]["tmp_name"], "uploads/images/" . $newfilename);
                    $sql=" update account set photo= '$newfilename' WHERE member_id='$_SESSION[id]'";
                    $cmd = mysqli_query($GLOBALS['db1'],$sql);
                    if (!$cmd) {
                        echo "Error description: " . mysqli_error($GLOBALS['db1']);
                    } else {
                        //echo "File uploaded succesfully ; <a href='jobseeker/profile.php'> Go back to profile </a>";
                        header('location:user_dashboard.php?msg=suc-img');
                    }
                } else{
                    echo "image size is too large";
                }
            }
    
        }
        elseif (empty($file_basename))
        {
            // file selection error
            echo "Please select a file to upload.";
        }
        elseif ($filesize > 200000)
        {
            // file size error
            echo "The file you are trying to upload is too large.";
        }
        else
        {
            // file type error
            echo "Only these file typs are allowed for upload: " . implode(', ',$allowed_file_types);
            unlink($_FILES["file"]["tmp_name"]);
        }
    }
