<?php
// $con = mysqli_connect("localhost","root","","webbystore");
$con = new mysqli("localhost", "root", "rootuser", "webbystore");

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}


$sql = "SELECT * FROM  'item' ";

// $result = mysqli_query($con,$sql);
$result = $con->query($sql);


if ($result) {
    die("Connection failed: " . $con->connect_error);
}
while ($row = $result->fetch_assoc()) {

    echo   " <tr><td> <div class='image'> <img src='" . $row["path"] . "' width='161' height='164' /> </div></td>  ";
    echo "<td width='172'><a href='updateStuff.php?id=" . $row["itemId"] . "'><img src='./img/edit2.png' alt='' width='32' height='34' />Edit</a></td>  ";
    echo " <td width='171'><a href='editContent.php'><img src='./img/delete.jpg' alt='' width='32' height='34' /></a><a href='./deleteContent.php?id=" . $row["itemId"] . "'>Delete </a></td> ";
    echo " <td width='153'><img src='./img/publish2.png' alt='' width='32' height='34' /><a href='publishContent.php?id=" . $row["itemId"] . "'>Publish</a></td> </tr>";
}

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {

        echo   " <tr><td> <div class='image'> <img src='" . $row["path"] . "' width='161' height='164' /> </div></td>  ";
        echo "<td width='172'><a href='updateStuff.php?id=" . $row["itemId"] . "'><img src='./img/edit2.png' alt='' width='32' height='34' />Edit</a></td>  ";
        echo " <td width='171'><a href='editContent.php'><img src='./img/delete.jpg' alt='' width='32' height='34' /></a><a href='./deleteContent.php?id=" . $row["itemId"] . "'>Delete </a></td> ";
        echo " <td width='153'><img src='./img/publish2.png' alt='' width='32' height='34' /><a href='publishContent.php?id=" . $row["itemId"] . "'>Publish</a></td> </tr>";
    }
} else {
    echo "0 results";
}
