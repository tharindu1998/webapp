<?php session_start();

if(!isset($_SESSION["username"]))
{
	header('Location:login.php');
}
?>

<html>

<head>
    <title></title>
    <link href="./css/Admin.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster|Raleway" rel="stylesheet">
    <style>
        .admin-container{
            margin-left: 30%;

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


    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>




    <div class="admin-container">
        <table>
            <th>
                <div class="card">

                        <img src="img/viewitem.jpg" width="20%">

                    <p><a href="./addItem.php"><button>Add Item</button></a></p>
                </div>
            <th>
            <th>
                <div class="card">

                        <img src="img/viewitem.jpg" width="20%">

                    <p><a href="viewItemScript.php"><button>Delete/Edit Items</button></a></p>
                </div>
            <th>
            <th>
                <div class="card">

                        <img src="img/viewitem.jpg" width="20%">

                    <p><a href="./viewItem.php"><button>View all Items</button></a></p>
                </div>
            <th>

        </table>
    </div>
</body>

</html>