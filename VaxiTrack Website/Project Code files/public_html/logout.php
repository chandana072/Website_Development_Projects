<?php
include "db_connection";

session_start();
session_destroy();
header("location:index.php");
?>