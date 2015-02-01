<?php
define("DB_SERVER", "your_db_server");
define("DB_USER", "your_db_user");
define("DB_PASS", "your_db_pass");
define("DB_NAME", "your_db_finah");

include("database_class.php");

$db = new mysqli_ext(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
?>
