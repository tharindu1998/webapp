<!doctype html>
<html lang=``>

<head>
  <title></title>
  <link href="./css/menu.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lobster|Raleway" rel="stylesheet">
  <style>
    .button {
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
  <br>
  <div class="container">
  <form action="addItem.php" method="post" enctype="multipart/form-data">
          
      <table width="383" border="0" align="center">
        <tr>
          <td colspan="2" bgcolor="#FFFFFF">
            <div align="center"><img src="./img/addItem.png" width="165" height="166" /></div>
            <h1>Add Item</h1>
          </td>
        </tr>
        <tr>
          <td width="146">Name</td>
          <td width="227"><input type="text" name="txtTitle" id="txtTitle" /></td>
        </tr>
        <tr>
          <td>Images</td>
          <td><input type="file" name="fileImage" id="fileImage" /></td>
        </tr>
        <tr>
          <td>Description</td>
          <td><input type="text" name="txtDescription" id="txtDescription" /></td>
        </tr>
        <tr>
          <td>Price</td>
          <td><input type="text" name="txtPrice" id="txtPrice" /></td>
        </tr>
        <tr>
          <td height="43">Category</td>
          <td><input type="checkbox" name="chkMobile" id="chkMobile" />
            <label for="chkBooks">Mobile
              <input type="checkbox" name="chkEarphone" id="chkEarphone" />
              Earphone
              <input type="checkbox" name="chkLaptop" id="chkLaptop" />
              Laptop</label></td>
        </tr>
        <tr>
          <td colspan="2"><br />
            <label for="chkBooks">
              <input type="checkbox" name="chkPublish" id="chkPublish" />
              Publish this<br />
              <br />
              <br />
            </label>
            <?php

            
            if (isset($_POST["btnSubmit"])) {
              
              $title = $_POST["txtTitle"];
              $price = $_POST["txtPrice"];
              echo $title;
              echo `<script language="javascript">`;
              echo `alert("message successfully sent"`.$title.`)`;
              echo `</script>`;
              $image = "uploads/" . basename($_FILES["fileImage"]["name"]);
              move_uploaded_file($_FILES["fileImage"]["tmp_name"], $image);

              $description = $_POST["txtDescription"];



              if (isset($_POST["chkBooks"])) {
                $category = "Mobile";
              }
              if (isset($_POST["chkEarphone"])) {
                $category = "Earphone";
              }
              if (isset($_POST["chkLaptop"])) {
                $category = "Laptop";
              }

              if (isset($_POST["chkPublish"])) {
                $status = 1;
              } else {
                $status = 0;
              }


              $servername = "localhost";
              $username = "root";
              $password = "rootuser";
              $dbname = "webbystore";

              // Create connection
              $con = new mysqli($servername, $username, $password, $dbname);
              if ($con->connect_error) {
                die("Connection failed: " . $con->connect_error);
              }


              $sql = "INSERT INTO `item` ( `title`, `description`, `category`, `path`, `published`, price) VALUES
               ( `" . $title . "`, `" . $description . "`, `" . $category . "`, `" . $image . "`, `" . $status . "`, `" . $price . "`);";

              if ($con->query($sql) === TRUE) {
                echo "New record created successfully";
              } else {
                echo "Error: " . $sql . "<br>" . $con->error;
              }

              $con->close();
            }

            ?>

            <br />
            </label></td>
        </tr>
        <tr>
          <td colspan="2">
            <blockquote>

              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

              <input name="btnSubmit" type="submit" class="button" id="btnSubmit" value="AddNow" />
              <input name="btnReset" type="reset" class="button" id="btnReset" value="reset" />
            </blockquote>
          </td>
        </tr>
      </table>
    </form>
  </div>



</body>

</html>