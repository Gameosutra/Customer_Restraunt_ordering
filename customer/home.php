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
  <div style="float: left;margin-top:-2%;text-transform: capitalize;"><h1>Welcome <span style="color: burlywood;font-style: italic;"><?php echo $_SESSION['username'];?></span></h1></div>
    <div style="float:right;margin-top:-2%;">
    <a class="btn btn-lg btn-primary" href="myorders.php" role="button">
        My Orders
      </a>
    <a class="btn btn-lg btn-primary" href="orderitems.php" role="button">
        Order Now
      </a>
    </div>
    <!-- <a class="btn btn-lg btn-primary" href="/docs/4.5/components/navbar/" role="button">View navbar docs &raquo;</a> -->
  </div>
  <main role="main" class="container">
  <div class="row">
    <div class="col-md-8 blog-main">
      <h3 class="pb-4 mb-4 font-italic border-bottom">
      <span style="color: burlywood;font-style: italic;">From the Core</span>
      </h3>

      <div class="blog-post">
        <h2 class="blog-post-title">Grilled sausage and peppers with garlic aioli</h2>
        <p style="color: burlywood;font-style: italic;">Grilled Sausages, plus onions and peppers, all grilled and juicy and tucked into a toasted (but still fluffy) brioche bun swizzled with a punchy little aioli to tie it all up. SO GOOD.</p>
        <hr>
      </div><!-- /.blog-post -->
      <div class="blog-post">
        <h3 class="blog-post-title">The best easy peanut butter pie</h3>
        <p style="color: burlywood;font-style: italic;">Grilled Sausages, plus onions and peppers, all grilled and juicy and tucked into a toasted (but still fluffy) brioche bun swizzled with a punchy little aioli to tie it all up. SO GOOD.</p>
        <hr>
      </div><!-- /.blog-post -->
      <div class="blog-post">
        <h4 class="blog-post-title">The quarantine report: episode 5</h4>
        <p style="color: burlywood;font-style: italic;">Grilled Sausages, plus onions and peppers, all grilled and juicy and tucked into a toasted (but still fluffy) brioche bun swizzled with a punchy little aioli to tie it all up. SO GOOD.</p>
        <hr>
      </div><!-- /.blog-post -->
      <div class="blog-post">
        <h5 class="blog-post-title">Triple berry cheesecake muffins</h5>
        <p style="color: burlywood;font-style: italic;">Grilled Sausages, plus onions and peppers, all grilled and juicy and tucked into a toasted (but still fluffy) brioche bun swizzled with a punchy little aioli to tie it all up. SO GOOD.</p>
        <hr>
      </div><!-- /.blog-post -->
      <div class="blog-post">
        <h5 class="blog-post-title">Springy vegetable quiche</h5>
        <p style="color: burlywood;font-style: italic;">Grilled Sausages, plus onions and peppers, all grilled and juicy and tucked into a toasted (but still fluffy) brioche bun swizzled with a punchy little aioli to tie it all up. SO GOOD.</p>
        <hr>
      </div><!-- /.blog-post -->

    </div><!-- /.blog-main -->

    <aside class="col-md-4 blog-sidebar">
      <div class="p-4 mb-3 bg-light rounded">
        <h4 class="font-italic">About</h4>
        <p class="mb-0"> A <span style="color: burlywood;font-style: italic;">Customer</span> (sometimes known as a client, buyer, or purchaser) is the recipient of a good, service, product or an idea - obtained from a seller, vendor, or supplier via a financial transaction or exchange for money or some other valuable consideration.</p>
      </div>
    </aside><!-- /.blog-sidebar -->

  </div><!-- /.row -->

</main><!-- /.container -->
</main>
</body>
</html>
