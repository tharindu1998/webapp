<?php

  session_start();  
  $itemid = $_GET["id"]; 
  
		   
		   $con = mysqli_connect("localhost","root","rootuser","webbystore");
			if(!$con)
			{	
				die("Cannot publish please try again!");		
			}
			   
			   $sql="UPDATE `item` SET `published` = '1' WHERE `item`.`itemId` = '".$_GET["id"]."';";
			   
			  mysqli_query($con,$sql);

			 mysqli_close($con);

			   
           header('Location:Admin.php');

?>