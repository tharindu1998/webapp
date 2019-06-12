<?php session_start();

if(!isset($_SESSION["username"]))
{
	header('Location:login.php');
}
?>

<!doctype html>
<html lang=''>

<head>
    <title></title>
    <link href="./css/menu.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster|Raleway" rel="stylesheet">
    <style>
    .button{
        color: white;
        border-radius: 6px;
        text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
        background: rgb(223, 117, 20);
        font-size: 110%;
        


    }
    
    </style>
</head>


<body>
 <header id="HomeMenuHead">
        <table style="width:100%">

            <th style="text-align:center;">
                <img src="./img/webbystore.jpg" style="width :100px">
            </th>

            <th class="SeperatorHeading">
                <h1 style="text-align:left;">TheWebbyStore</h1>
            </th>

       

        </table>

    </header>
    <hr style="color:red;">
    <nav class="mainNav"> 
        <ul id="mainMenu" class="nav">
            <li class="nav"><a href="./index.html">Home</a></li>

        </ul>
</nav>

<table width="835" height="377" border="0" align="center">
        <tr>
                <td width="400" height="44"><img src="images/Totebag/Cover2.png" width="400" height="70" /></td>
        </tr>            
        <td height="299" colspan="2"><table align="center">
                <tr>
                  <td width="521"><div class="imgcontainer"> <img src="images/shopping-bag-flat.png" alt=""  width="256" height="256" class="avatar" /> </div>
                    <div class="container">
                      <table width="512">
                        <tr>
                        <td>
                            <?php
                            // $con = mysqli_connect("localhost","root","","webbystore");
                            $con = new mysqli("localhost","root","rootuser","webbystore");

                            if ($con->connect_error) {
                                die("Connection failed: " . $con->connect_error);
                            } 


                            $sql ="SELECT * FROM  'item' ";	
                                
                            // $result = mysqli_query($con,$sql);
                            $result = $con->query($sql);

                            if ($result) {
                                die("Connection failed: " . $con->connect_error);
                            } 


                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
 
                                    echo   " <tr><td> <div class='image'> <img src='".$row["path"]."' width='161' height='164' /> </div></td>  "; 
                                    echo "<td width='172'><a href='updateItem.php?id=".$row["itemId"]."'><img src='./img/edit2.png' alt='' width='32' height='34' />Edit</a></td>  ";
                                    echo " <td width='171'><a href='deleteItem.php'><img src='./img/delete.jpg' alt='' width='32' height='34' /></a><a href='./deleteContent.php?id=".$row["itemId"]."'>Delete</a></td> ";
                                    echo " <td width='153'><img src='./img/publish2.png' alt='' width='32' height='34' /><a href='publishContent.php?id=".$row["itemId"]."'>Publish</a></td> </tr>";
        
                                }
                            } else {
                                echo "0 results";
                            }
                             
                   
                            ?>
                        </table>
                    </div>
                    <div class="container" style="background-color:#f1f1f1"></div>
                    
                    </td>
                </tr>
              </table></td>
            </tr>
          </table>
          </body>
          </html>
                            

          



