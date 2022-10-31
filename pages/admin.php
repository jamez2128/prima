<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
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
                    echo "</tr>";
                }
            ?>
        <tbody>

        </tbody>
    </table>
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
        </tr>
        </thead>
            <?php
                $result = mysqli_query($link, "SELECT * FROM planes;");
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>"; echo $row["planeid"]; echo "</td>";
                    echo "<td>"; echo $row["image"]; echo "</td>";
                    echo "<td>"; echo $row["name"]; echo "</td>";
                    echo "<td>"; echo $row["capacity"]; echo "</td>";
                    echo "</tr>";
                }
            ?>
        <tbody>

        </tbody>
    </table>
    </div>

</body>
</html>
