<?php
$var2 = "A computer science portal"; 
session_start();
// $_SESSION['restusername']
echo "<script>console.log('".$_SESSION['restusername']."' );</script>"; 
?>
<style type="text/css">

.get-in-touch {
  max-width: 800px;
  margin: 50px auto;
  position: relative;

}
.get-in-touch .title {
  text-align: center;
  text-transform: uppercase;
  letter-spacing: 3px;
  font-size: 3.2em;
  line-height: 48px;
  padding-bottom: 48px;
     color: #1295C9;
    background: #1295C9;
    background: -moz-linear-gradient(left,#f4524d  0%,#1295C9 100%) !important;
    background: -webkit-linear-gradient(left,#f4524d  0%,#1295C9 100%) !important;
    background: linear-gradient(to right,#f4524d  0%,#1295C9  100%) !important;
    -webkit-background-clip: text !important;
    -webkit-text-fill-color: transparent !important;
}

.contact-form .form-field {
  position: relative;
  margin: 32px 0;
}
.contact-form .input-text {
  display: block;
  width: 100%;
  height: 36px;
  border-width: 0 0 2px 0;
  border-color: #1295C9;
  font-size: 18px;
  line-height: 26px;
  font-weight: 400;
}
.contact-form .input-text:focus {
  outline: none;
}
.contact-form .input-text:focus + .label,
.contact-form .input-text.not-empty + .label {
  -webkit-transform: translateY(-24px);
          transform: translateY(-24px);
}
.contact-form .label {
  position: absolute;
  left: 20px;
  bottom: 11px;
  font-size: 18px;
  line-height: 26px;
  font-weight: 400;
  color: #1295C9;
  cursor: text;
  transition: -webkit-transform .2s ease-in-out;
  transition: transform .2s ease-in-out;
  transition: transform .2s ease-in-out, 
  -webkit-transform .2s ease-in-out;
}
.contact-form .submit-btn {
  display: inline-block;
  background-color: #000;
   background-image: linear-gradient(125deg,#1295C9,#1295C9);
  color: #fff;
  text-transform: uppercase;
  letter-spacing: 2px;
  font-size: 16px;
  padding: 8px 16px;
  border: none;
  width:200px;
  cursor: pointer;
}
</style>
<html>
<meta charset="utf-8">
<head>
<title>FoodShala</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
</head>
<body>

<!-- <div class="container">
	<div class="login-box">
	<div class="row">
	<div class="col-md-6">
		<h2> New Item of <?php echo $_SESSION['restusername']?></h2>
		<form action="restnewitemvalidation.php" method="post">
        <div class="form-group" style="display:none;">
		<label>Restraunt Name</label>
		<input type="text" name="username" value="<?php echo $_SESSION['restusername'] ?>">
		</div>
		<div class="form-group">
		<label>Item Name</label>
		<input type="text" name="itemname" class="form-control" required>
		</div>
        <div class="form-group">
		<label>Type</label>
		<input type="checkbox" name="type" value="veg" class="form-control">VEG
		<input type="checkbox" name="type" value="nonv" class="form-control">NON-VEG
		</div>
		<button type="submit" class="btn btn-primary">Sumbit</button>
		</form>
	</div>
	</div>
	</div>
</div> -->
<section class="get-in-touch">
   <h1 class="title">Add New Item</h1>
   <form class="contact-form row" action="restnewitemvalidation.php" method="post">
   	  <div class="form-field col-lg-6" style="display:none;">
         <input type="text" name="username" value="<?php echo $_SESSION['restusername'] ?>" class="input-text js-input" required>
         <label class="label" for="name">Restraunt Name</label>
      </div>
      <div class="form-field col-lg-12">
         <input type="text" name="itemname" class="input-text js-input" required>
         <label class="label" for="name">Item Name</label>
      </div>
	  <div class="form-field col-lg-6">
		 <input type="checkbox" class="input-text js-input" name="type" value="veg"><label>VEG</label>
      </div>
	  <div class="form-field col-lg-6">
		<input type="checkbox" class="input-text js-input" name="type" value="nonv"><label>NON-VEG</label>
      </div>
      <div class="form-field col-lg-12" style="color:#1295C9;">
         <input class="submit-btn" type="submit" value="Submit">
      </div>
   </form>
</section>
</body>
</html>
