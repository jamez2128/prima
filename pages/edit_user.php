<?php
include "connection.php";
$userid=$_GET["userid"];

$firstname="";
$lastname="";
$middlename="";
$email="";
$contact="";

$res=mysqli_query($link, "select * from users where userid=$userid");
while($row=mysqli_fetch_array($res))
{
    $firstname=$row["firstname"];
    $lastname=$row["middlename"];
    $middlename=$row["lastname"];
    $email=$row["email"];
    $contact=$row["contact"];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.min.css">
    <script src="../lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="../lib/jquery-3.6.1.js"></script>
    <title> PHP mySQL</title>
</head>
<body>
<div class="container">
    <div class="col-lg-4">
  <h2>Update user</h2>
  <form action="" name="form1" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="firstname">First Name:</label>
      <input type="text" class="form-control" id="firstname" placeholder="Enter First Name" name="firstname" value="<?php echo $firstname ?>">
    </div>
    <div class="form-group">
      <label for="middlename">Middle Name:</label>
      <input type="text" class="form-control" id="middlename" placeholder="Enter Middle Name" name="middlename" value="<?php echo $middlename ?>">
    </div>
    <div class="form-group">
      <label for="lastname">Last Name:</label>
      <input type="text" class="form-control" id="lastname" placeholder="Enter Last Name" name="lastname" value="<?php echo $lastname ?>">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter Email" name="email" value="<?php echo $email ?>">
    </div>
    <div class="form-group">
      <label for="contact">Contact:</label>
      <input type="text" class="form-control" id="contact" placeholder="Enter Contact" name="contact" value="<?php echo $contact ?>">
    </div>
    <button type="submit" name="update" class="btn btn-success"> Update </button>
  </form>
</div>
</div>


<?php
if(isset($_POST["update"]))
{
    mysqli_query($link, "update users set firstname='$_POST[firstname]', middlename='$_POST[middlename]' , lastname='$_POST[lastname]', email='$_POST[email]', contact='$_POST[contact]' where userid=$userid");
    ?>
<script>
    window.location="admin.php";
</script>
<?php
}

?>
</body>
</html>
