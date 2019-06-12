<?php session_start(); ?>

<html>

<head>
    <title>Sign Up</title>


    <link href="./css/login.css" rel="stylesheet">
    <script src="./js/register.js"></script>
   
<script type = "text/javascript">
      // Form validation code.
      function validate() {
      
        var FirstName=document.signup.FirstName.value; 
        var LastName=document.signup.LastName.value;   
        var password=document.signup.password.value;  

        if ((FirstName==null || FirstName=="") || (LastName==null || LastName=="")){  
        alert("Please enter both names");  
        return false;  
        }else if(password.length<8){  
        alert("Password must be at least 8 characters long.");  
        return false;  
        }  

        var x=document.signup.email.value;  
        var atposition=x.indexOf("@");  
        var dotposition=x.lastIndexOf(".");  
        if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
        alert("Please enter a valid e-mail address \n atpostion:"+atposition+"\n dotposition:"+dotposition);  
        return false;  
        } 
        
        var contact=document.signup.contact.value;  
        if (isNaN(contact) || (contact.length<10)){  
        document.getElementById("contact").innerHTML="Enter a valid phone number";  
        return false;  
        }else{  
        return true;  
        }
 
                



        </script>
</head>

<body background="img/background.jpg" git >

    <form class="login" method="post" name="signup">
        
        <h1 class="login-title"><a href="index.html"><img src="./img/webbystore.jpg" style="width: 15%"></a> <hr>&nbsp; Sign Up</h1>
        
        <input name="txtFirstName" type="text" class="login-input" name="FirstName" placeholder="First Name" autofocus required>
        <input name="txtLastName" type="text" class="login-input" name="LastName" placeholder="Last Name" autofocus required>
        <input name="txtEmail" type="email" class="login-input" name="email" placeholder="Email Address" autofocus>
        <input name="txtContact" type="text" id="contact" name="contact" class="login-input" placeholder="contact">
        <input name="txtEmail" type="password" id="pwd" class="login-input" placeholder="Password">
        

        <p>

        <?php

            if(isset($_POST["btnSubmit"]))
            {
            $email = $_POST["txtEmail"];
            $firstName = $_POST["txtFirstName"];
            $lastName = $_POST["txtLastName"];
            $contact = $_POST["txtContact"];
            $password = $_POST["txtPassword"];

            $con = mysqli_connect("localhost","root","rootuser","webbystore");
            if(!$con)
            {	
            die("Cannot connect to DB server");		
            }

            $sql = "INSERT INTO `user` (`email`, `firstName`,'lastName',`password`, `contactNo`) VALUES ('".$email."', '".$firstName."','".$lastName."','' '".$password."', '".$contact."',);";

            mysqli_query($con,$sql); 

            header('Location:Admin.php');		 

            }
        ?> 

        </p>

        <input type="submit" name="btnSubmit" value="Sign Up" class="login-button">
        <p class="login-lost"><a href="login.php">Already a member? signin!</a></p>

    </form>
    

</body>
</html>