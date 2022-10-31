<?php
    $link=mysqli_connect("localhost", "root", "password") or die(mysqli_error($link));
    mysqli_select_db($link, "prima");
?>