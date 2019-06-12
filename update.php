<?php
session_start();  
$itemid = $_GET["id"]; 
$title=$_POST["txtTitle"];
$price=$_POST["txtPrice"];
$image = "uploads/".basename($_FILES["fileImage"]["name"]);
move_uploaded_file($_FILES["fileImage"]["tmp_name"],$image);

$description=$_POST["txtDescription"];
   
            
if(isset($_POST["chkBooks"]))
{			 $category = "Mobile";		 }
if(isset($_POST["chkEarphone"]))
{			 $category = "Earphone";		 }
if(isset($_POST["chkLaptop"]))
{			 $category = "Laptop";	}

if(isset($_POST["chkPublish"]))
{	  $status = 1;}
else { $status = 0;}

$con = new mysqli("localhost", "root", "rootuser", "webbystore");

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
 
   
   $sql="UPDATE `item` SET `email` = '".$_SESSION["username"]."', `title` = '".$title."', `description` = '".$description."', `category` = '".$category."', `path` = '".$image."', `published` = '".$status."' WHERE `item`.`itemId` = ".$itemid.";";
   
      if(  mysqli_query($con,$sql))
   {
         echo "File uploaded Successfully";
   }
   else
   {
      echo "Opps something is wrong, Please select the file again";
   }
   
header('Location:admin.php');

?>