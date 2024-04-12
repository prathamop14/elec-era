<?php
session_start();
session_destroy();
setcookie("userid", $row["id"], time() - 3600*10, "/");
setcookie("name", $row["name"], time() - 3600*10, "/");
header("Location: home.php");
?>