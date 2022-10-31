<?php
include "connection.php";
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
    <title> Insert planes table | Admin | Prima Aeronautics</title>
</head>
<body>
<div class="container">
    <div class="col-lg-4">
  <h2>Insert planes table</h2>
  <form action="" name="form1" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="image">Image:</label>
      <input type="file" class="form-control" name="fl">
    </div>
    <div class="form-group">
    <div class="form-group">
      <label for="name">Plane name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Plane name" name="name">
    </div>
    <div class="form-group">
      <label for="capacity">Capacity:</label>
      <input type="text" class="form-control" id="capacity" placeholder="Enter Capacity" name="capacity">
    </div>
    <button type="submit" name="insert" class="btn btn-success"> Insert </button>
  </form>
</div>
</div>

<?php
if(isset($_POST["insert"])) {
    $tm=md5(time());
    $fnm=$_FILES["fl"]["name"];
    $dst="./assets/images/imagedb/".$tm.$fnm;
    $dst1="assets/images/imagedb/".$tm.$fnm;
    move_uploaded_file($_FILES["fl"]["tmp_name"], $dst);

    mysqli_query($link, "insert into planes (image, name, capacity) values('$dst1', '$_POST[name]', '$_POST[capacity]')");
    ?>
<script>
    window.location="admin.php";
</script>
<?php
}

?>
</body>
</html>
