<?php session_start(); ?>

<html>

<head>
    <title>Login</title>

    <link href="./css/login.css" rel="stylesheet">
    <script type = "text/javascript">
      // Form validation code.
      function validate() {

        var pwdId = document.login.pwdId.value;

        if(pwdId.length<8){  
        alert("Password must be at least 8 characters long.");  
        return false;  
        }  

        var x=document.signup.mailId.value;  
        var atposition=x.indexOf("@");  
        var dotposition=x.lastIndexOf("."); 

        if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
        alert("Please enter a valid e-mail address \n atpostion:"+atposition+"\n dotposition:"+dotposition);  
        return false;  
        } 



      }

      </script>

</head>

<body background="img/background.jpg"git > 
    <form class="login" method="post" name="login" >
        
            <h1 class="login-title"><a href="index.html"><img src="./img/webbystore.jpg" style="width: 15%"> </a><hr>&nbsp; Login</h1>
        
        <input name="txtuname" type="text" id="mailId"class="login-input" placeholder="Email Adress" autofocus>
        <input name="txtpassword" type="password" id="pwdId" class="login-input" placeholder="Password" >
        <p>
            <?php
            if(isset($_POST["btnsubmit"]))
            {
               $userName=$_POST["txtuname"];
               $password=$_POST["txtpassword"];
               $valid=false;
               
               $con = mysqli_connect("localhost","root","rootuser","webbystore");
                if(!$con)
                 {	
                     die("Cannot connect to DB server");		
                 }
                 
                 $sql="SELECT * FROM `user` WHERE `email`='".$userName."' and `password`='".$password."'";
                 
                 $result = mysqli_query($con,$sql);
               
               
               if(mysqli_num_rows($result) >0)
             {
               
               
            //   if(($userName=="test@gmail.com") && ($password=="test@123"))
            //   {
                   $valid=true;
               }
               else
               {
                   $valid=false;
               }
               
               if($valid)
               {
                   $_SESSION["username"] =$userName;
                   header('Location:Admin.php');
               }
               
               else
               {
                   echo "Please enter the correct username and password";
               }
            }
            ?>

        </p>
        <input name="btnsubmit" type="submit" onclick="validate()" value="Lets Go" class="login-button">
      <p class="login-lost"><a href="register.php">Not a member? signup!</a></p>
      </form>
    

</body>
<script> 

</script>



</html>