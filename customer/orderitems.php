<?php
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,"CRdata");
session_start();
if(!isset($_SESSION['username'])){
    header('location: main.php');
}
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
    <!-- Custom styles for this template -->
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
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
    <div style="float: left;margin-top:-2%;"><h1>All Restraunts <span style="color: burlywood;font-style: italic;">Collective Menu</span></h1></div>
    <div style="float:right;margin-top:-2%;">
    <a class="btn btn-lg btn-primary" href="home.php" role="button">
        Go Back
      </a>
    </div>
    <!-- <a class="btn btn-lg btn-primary" href="/docs/4.5/components/navbar/" role="button">View navbar docs &raquo;</a> -->
  </div>
  <div class="container">
    <!-- Example row of columns -->
    <div>
    <?php 
        while($rows = mysqli_fetch_assoc($result))
        {
    ?>
    <form action="ordernow.php" method="post">
      <div style="margin-bottom:5%;background-color: floralwhite;
    padding: 2%;border-radius:5px;">
        <div>
          <h4 style="float:left;margin-right:2%;">
            Restrant Name:
          </h4>
          <h2>
            <span style="position: relative;top: -7px;text-transform: capitalize;color: burlywood;font-style: italic;"><?php echo $rows["restusername"] ?><span>
            <input style="display:none;"type="text" name="restusername" value="<?php echo $rows["restusername"] ?>" class="input-text js-input">
            <input style="display:none;"type="text" name="username" value="<?php echo $_SESSION['username'] ?>" class="input-text js-input">
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
            <input style="display:none;"type="text" name="itemname" value="<?php echo $rows2["itemname"] ?>" class="input-text js-input" required>
            <td class="paddings"><?php echo $rows2["type"] ?></td>
            <input style="display:none;"type="text" name="type" value="<?php echo $rows2["type"] ?>" class="input-text js-input" required>
            <td class="paddings" style="text-align:center;">
              <button type="submit" id="order" class="btn btn-secondary" style="color:white;">
                  Order Now &raquo;
              </button>
            </td>
          </tr>
          <?php 
          }
          ?>
        </table>
      </div>
      </form>
    <?php 
    }
    ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>	
    <script>
    function myFn(){
      $(function(){
        Swal.fire({
          'title': 'Success!',
          'text': 'Order Placed Successfully',
          'icon': 'success'
        })				
      });
    }
    
    </script>	
    <?php
      // session_start();
      if(isset($_SESSION['value'])){
      $name = $_SESSION['value'];
      echo '<script type="text/javascript">
        myFn();
        </script>';
      }
    ?>
</main>
</body>
</html>
