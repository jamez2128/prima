<?php
    include "connection.php";
    $planeid=$_GET["planeid"];
    mysqli_query($link, "delete from planes where planeid=$planeid");
?>

<script>
    window.location="admin.php";
</script>