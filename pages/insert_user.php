<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.min.css">
    <script src="../lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="../lib/jquery.js"></script>
    <title> Insert user | Admin | Prima Aeronautics</title>
    <?php
      include "connection.php";
    ?>
</head>
<body>
<div class="container">
    <div class="col-lg-4">
  <h2>Insert users tables</h2>
  <form action="" name="form1" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="firstname">First Name:</label>
      <input type="text" class="form-control" id="firstname" placeholder="Enter First Name" name="firstname">
    </div>
    <div class="form-group">
      <label for="middlename">Middle Name:</label>
      <input type="text" class="form-control" id="middlename" placeholder="Enter Middle Name" name="middlename">
    </div>
    <div class="form-group">
      <label for="lastname">Last Name:</label>
      <input type="text" class="form-control" id="lastname" placeholder="Enter Last Name" name="lastname">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter Email" name="email">
    </div>
    <div class="form-group">
      <label for="contact">Contact:</label>
      <input type="text" class="form-control" id="contact" placeholder="Enter Contact" name="contact">
    </div>
    <button type="submit" name="insert" class="btn btn-success"> Insert </button>
  </form>
</div>
</div>

<?php
if(isset($_POST["insert"])) {
    mysqli_query($link, "insert into users (firstname, middlename, lastname, email, contact) values('$_POST[firstname]', '$_POST[middlename]', '$_POST[lastname]', '$_POST[email]', '$_POST[contact]');");
    ?>
<script>
    window.location="admin.php";
</script>
<?php
}

?>
</body>
</html>
