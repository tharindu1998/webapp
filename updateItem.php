<!doctype html>
<html lang=''>

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
  <?php
  $con = mysqli_connect("localhost", "root", "rootuser", "webbystore");
  if (!$con) {
      die("Cannot connect to DB server");
    }
  $sql = "SELECT * FROM `item` WHERE `itemId`=" . $_GET["id"] . "";


  if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $con->error;
  }

  $con->close();



  // $result = mysqli_query($con, $sql);

  // if (mysqli_num_rows($result) > 0) {
  //     $row = mysqli_fetch_assoc($result);
  //   }
  // mysqli_close($con);
  ?>



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
    <table width="835" height="265" border="0" align="center">

      <tr>
        <td height="215" colspan="2">
          <form action="update.php?id=<?php echo $_GET["id"]; ?>" method="post" enctype="multipart/form-data">

            <table width="383" border="0" align="center">
              <tr>
                <td colspan="2" bgcolor="#FFFFFF">
                  <div align="center"><img src="./img/update.png" width="165" height="166" /></div>
                  <h1>Add Item</h1>
                </td>
              </tr>
              <tr>
                <td width="146">Name</td>
                <td width="227"><input type="text" name="txtTitle" id="txtTitle" value="<?php echo $row["title"]; ?>">
                </td>
              </tr>
              <tr>
                <td>Images</td>
                <td><input type="file" name="fileImage" id="fileImage" value="<?php echo $row["path"]; ?>" /></td>
              </tr>
              <tr>
                <td>Description</td>
                <td><input type="text" name="txtDescription" id="txtDescription" value="<?php echo $row["description"]; ?>" /></td>
              </tr>
              <tr>
                <td>Price</td>
                <td><input type="text" name="txtPrice" id="txtPrice" /></td>
              </tr>
              <tr>
                <td height="43">Category</td>
                <td><input type="checkbox" name="chkMobile" id="chkMobile" <?php if ($row["category"] == "Mobile") {
                                                                              echo "checked";
                                                                            } ?> />
                  <label for="chkBooks">Mobile
                    <input type="checkbox" name="chkEarphone" id="chkEarphone" <?php if ($row["category"] == "Earphone") {
                                                                                  echo "checked";
                                                                                } ?> />
                    Earphone
                    <input type="checkbox" name="chkLaptop" id="chkLaptop" <?php if ($row["category"] == "Laptop") {
                                                                              echo "checked";
                                                                            } ?> />
                    Laptop</label></td>
              </tr>
              <tr>
                <td colspan="2"><br />
                  <label for="chkBooks">
                    <input type="checkbox" name="chkPublish" id="chkPublish" <?php if ($row["published"] == "1") {
                                                                                echo "checked";
                                                                              } ?> />
                    Publish this<br />
                    <br />
                    <br />
                  </label>


                  <br />
                  </label></td>
              </tr>
              <tr>
                <td colspan="2">
                  <blockquote>

                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    <input name="btnSubmit" type="submit" class="button" id="btnSubmit" value="Add Now" />
                    <input name="btnReset" type="reset" class="button" id="btnReset" value="reset" />
                  </blockquote>
                </td>
              </tr>
            </table>
  </div>
  <td>
    <tr>
      </table>

</body>