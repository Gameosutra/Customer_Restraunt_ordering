<?php
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,"CRdata");
session_start();
if(!isset($_SESSION['restusername'])){
    header('location: main.php');
}
$name = $_SESSION['restusername'];
$query  = "select * from allitems where username = '$name' ";
$result = mysqli_query($con, $query);
$query2  = "select * from orderitems where restusername = '$name' ";
$result2 = mysqli_query($con, $query2);
?>
<style type="text/css">
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}
.paddings{
  padding:2%;
}
</style>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>FoodShala</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
    

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top btn-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" style="color:#1295C9;font-size:25px;" href="./../main.php">FoodShala <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <!-- <a class="nav-link" href="newItem.php">Add New Item</a> -->
      </li>
      <li class="nav-item">
        <!-- <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a> -->
      </li>
    </ul>
    <form class="form-inline mt-2 mt-md-0">
      <a class="btn btn-outline-success my-2 my-sm-0" href="./../logout.php">Logout</a>
    </form>
  </div>
</nav>

<main role="main" class="container">
  <div class="jumbotron" style="margin-top:10%;background-color:aliceblue;">
    <div style="float: left;margin-top:-2%;"><h1>All <span style="color: burlywood;font-style: italic;">Orders</span></h1></div>
    <div style="float:right;margin-top:-2%;">
    <a class="btn btn-lg btn-primary" href="viewitems.php" role="button">
        View Menu
      </a>
    <a class="btn btn-lg btn-primary" href="resthome.php" role="button">
        Go Back
      </a>
    </div>
  </div>
  <div class="container" style="margin-bottom:5%;">
    <!-- Example row of columns -->
    <h3 style="text-align: center;
    font-weight: 500;
    font-size: 30px;">Your <span style="color: burlywood;font-style: italic;">Orders</span></h3>
    <table>
    <tr>
    <th class="paddings">Ordered By</th>
    <th class="paddings">Item Name</th>
    <th class="paddings">Type</th>
    </tr>
    <?php 
        while($rows = mysqli_fetch_assoc($result2))
        {
    ?>
    <tr>
      <td class="paddings"><?php echo $rows["username"] ?></td>
      <td class="paddings"><?php echo $rows["itemname"] ?></td>
      <td class="paddings"><?php echo $rows["type"] ?></td>
    </tr>
    <?php 
    }
    ?>
</table>
</div>
</main>
</body>
</html>
