<?php
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,"CRdata");
// $name = $_SESSION['restusername'];
$query  = "select * from restregistrations";
$result = mysqli_query($con, $query);
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>FoodShala</title>
    <link rel="stylesheet" href="css/style.css" />
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
  </head>
  <body>
    <div class="container">
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1" style="font-size:30px;">
      <a class="blog-header-logo" style="color:#1295C9 !important;" href="main.php">FoodShala</a>
      </div>
      <div class="col-4 text-center">
        
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
      <a class="btn btn-outline-secondary" href="allitems.php" style="margin-right:4%;">View Items</a>
      <a class="btn btn-outline-secondary" href="customer/login.php" style="margin-right:4%;">Customer</a>
      <a class="btn btn-outline-secondary" href="restraunt/restlogin.php">Restraunt</a>
      </div>
    </div>
  </header>
  <div class="jumbotron p-4 p-md-5 text-white rounded" style="background-color:#1295C9;">
    <div class="col-md-6 px-0">
      <h1 class="display-4 font-italic">Where food speaks with your palate</h1>
      <p class="lead my-3">If more of us valued food and cheer and song above hoarded gold, it would be a merrier world.</p>
    </div>
  </div>

 <div>
    <?php 
        while($rows = mysqli_fetch_assoc($result))
        {
    ?>
      <div style="margin-bottom:5%;background-color: floralwhite;
    padding: 2%;border-radius:5px;">
        <div>
          <h4 style="float:left;margin-right:2%;">
            Restrant Name:
          </h4>
          <h2>
            <span style="position: relative;top: -7px;text-transform: capitalize;color: burlywood;font-style: italic;"><?php echo $rows["restusername"] ?><span>
          </h2>
        </div>
        
        <table>
          <tr>
          <th class="paddings">Item Name</th>
          <th class="paddings">Type</th>
          <th class="paddings"></th>
          </tr>
          <?php 
            $name = $rows["restusername"];
            $query2  = "select * from allitems where username = '$name'";
            $result2 = mysqli_query($con, $query2);

            while($rows2 = mysqli_fetch_assoc($result2))
        {
        ?>
          <tr>
            <td class="paddings"><?php echo $rows2["itemname"] ?></td>
            <td class="paddings"><?php echo $rows2["type"] ?></td>
            <td class="paddings" style="text-align:center;"><a class="btn btn-secondary" href="customer/login.php"  role="button" style="color:white;">Order Now &raquo;</a></td>
          </tr>
          <?php 
          }
          ?>
        </table>
      </div>
    <?php 
    }
    ?>
    </div>

</body>
</html>
