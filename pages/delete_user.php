<?php
    include "connection.php";
    $userid=$_GET["userid"];
    mysqli_query($link, "delete from users where userid=$userid");
?>

<script>
    window.location="admin.php";
</script>