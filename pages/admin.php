<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.min.css">
    <script src="../lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="../lib/jquery-3.6.1.js"></script>
    <?php
        include "connection.php";
    ?>
    <title>Admin | Prima Aeronautics</title>
</head>
<body>
    
    <div class="container mt-3">
    <h2>users</h2>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>userid</th>
            <th>firstname</th>
            <th>middlename</th>
            <th>lastname</th>
            <th>email</th>
            <th>contact</th>
            <th>Actions</th>
        </tr>
        </thead>
            <?php
                $result = mysqli_query($link, "SELECT * FROM users;");
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>"; echo $row["userid"]; echo "</td>";
                    echo "<td>"; echo $row["firstname"]; echo "</td>";
                    echo "<td>"; echo $row["middlename"]; echo "</td>";
                    echo "<td>"; echo $row["lastname"]; echo "</td>";
                    echo "<td>"; echo $row["email"]; echo "</td>";
                    echo "<td>"; echo $row["contact"]; echo "</td>";
                    echo "<td>"; ?> <a href="edit_user.php?userid=<?php echo $row["userid"]; ?>"> <button type="button" class="btn btn-success"> Edit </button> </a> <a href="delete_user.php?userid=<?php echo $row["userid"] ?>"> <button type="button" class="btn btn-danger"> Delete </button> </a> <?php echo "</td>";
                    echo "</tr>";
                }
            ?>
        <tbody>

        </tbody>
    </table>
    <a href="insert_user.php"><button class="btn btn-success">Insert user</button></a>
    </div>

    <div class="container mt-3">
    <h2>plane</h2>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>planeid</th>
            <th>image</th>
            <th>name</th>
            <th>capacity</th>
            <th>Actions</th>
        </tr>
        </thead>
            <?php
                $result = mysqli_query($link, "SELECT * FROM planes;");
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>"; echo $row["planeid"]; echo "</td>";
                    echo "<td>"; ?> <img height=100 width=100 src="<?php echo "../".$row["image"] ?>"> <?php echo "</td>";
                    echo "<td>"; echo $row["name"]; echo "</td>";
                    echo "<td>"; echo $row["capacity"]; echo "</td>";
                    echo "<td>"; ?> <a href="edit_plane.php?planeid=<?php echo $row["planeid"]; ?>"> <button type="button" class="btn btn-success"> Edit </button> </a> <a href="delete_plane.php?planeid=<?php echo $row["planeid"] ?>"> <button type="button" class="btn btn-danger"> Delete </button> </a> <?php echo "</td>";
                    echo "</tr>";
                }
            ?>
        <tbody>

        </tbody>
    </table>
    <a href="insert_plane.php"><button class="btn btn-success">Insert plane</button></a>
    </div>
</body>
</html>
