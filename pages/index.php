<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="lib/jquery.js"></script>
    <title> PHP mySQL</title>
</head>
<body>
<div class="container">
    <div class="col-lg-4">
  <h2>Basic Database Connection</h2>
  <form action="" name="form1" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="firstname">First Name:</label>
      <input type="text" class="form-control" id="firstname" placeholder="Enter First Name" name="firstname">
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
    <div class="form-group">
      <label for="image">Image:</label>
      <input type="file" class="form-control" name="fl">
    </div>
    <button type="submit" name="insert" class="btn btn-success"> Insert </button>
  </form>
</div>
</div>

<table class="table table-bordered">
    <thead>
      <tr>
        <th>id</th>
        <th>firstname</th>
        <th>lastname</th>
        <th>email</th>
        <th>contact</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
        <?php
            $res=mysqli_query($link, "select * from table1");
            while($row=mysqli_fetch_array($res))
            {
                echo "<tr>";
                echo "<td>"; echo $row["id"]; echo "</td>";
                echo "<td>"; echo $row["firstname"]; echo "</td>";
                echo "<td>"; echo $row["lastname"]; echo "</td>";
                echo "<td>"; echo $row["email"]; echo "</td>";
                echo "<td>"; echo $row["contact"]; echo "</td>"; 
                echo "<td>"; ?> <a href="edit.php?id=<?php echo $row["id"]; ?>"> <button type="button" class="btn btn-success"> Edit </button> </a> <a href="delete.php?id=<?php echo $row["id"] ?>"> <button type="button" class="btn btn-danger"> Delete </button> </a> <?php echo "</td>";
                echo "</tr>";
            }
        ?>
    </tbody>
  </table>
<?php
if(isset($_POST["insert"]))
{
    $tm=md5(time());
    $fnm=$_FILES["fl"]["name"];
    $dst="./images/".$tm.$fnm;
    $dst1="images/".$tm.$fnm;
    move_uploaded_file($_FILES["fl"]["tmp_name"], $dst);

    mysqli_query($link, "insert table1 (firstname, lastname, email, contact, image) values('$_POST[firstname]', '$_POST[lastname]', '$_POST[email]', '$_POST[contact]', '$dst1')");
    ?>
<script>
    window.location="index.php";
</script>
<?php
}

?>
</body>
</html>
