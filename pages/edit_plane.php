<?php
include "connection.php";
$planeid=$_GET["planeid"];

$image="";
$name="";
$capacity="";


$res=mysqli_query($link, "select * from planes where planeid=$planeid");
while($row=mysqli_fetch_array($res))
{
    $image=$row["image"];
    $name=$row["name"];
    $capacity=$row["capacity"];
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
    <script src="../lib/jquery.js"></script>
    <title> Edit plane | Admin | Prima Aeronautics </title>
</head>
<body>
<div class="container">
    <div class="col-lg-4">
  <h2>Update plane</h2>
  <form action="" name="form1" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="image">Image:</label>
      <input type="file" class="form-control" name="fl">
    </div>
    <div class="form-group">
    <div class="form-group">
      <label for="name">Plane name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Plane name" name="name" value="<?php echo $name ?>">
    </div>
    <div class="form-group">
      <label for="capacity">Capacity:</label>
      <input type="text" class="form-control" id="capacity" placeholder="Enter Capacity" name="capacity" value="<?php echo $capacity ?>">
    </div>
    <button type="submit" name="update" class="btn btn-success"> Update plane </button>
  </form>
</div>
</div>


<?php
if(isset($_POST["update"]))
{
  $tm=md5(time());
  $fnm=$_FILES["fl"]["name"];

  if($fnm=="")
  {
    mysqli_query($link, "update planes set name='$_POST[name]', capacity='$_POST[capacity]' where planeid=$planeid");
  }
  else
  {
    $dst="../assets/images/imagedb/".$tm.$fnm;
    $dst1="assets/images/imagedb/".$tm.$fnm;
    move_uploaded_file($_FILES["fl"]["tmp_name"], $dst);
    mysqli_query($link, "update planes set image='$dst1', name='$_POST[name]' where planeid=$planeid");
  }


    ?>
<script>
    window.location="admin.php";
</script>
<?php
}

?>
</body>
</html>
