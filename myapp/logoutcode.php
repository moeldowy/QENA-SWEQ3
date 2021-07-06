<?php
session_start();
unset($_SESSION["username"]);
//How to prevent Fixation Attacks(Hacker can see valid Session Id)
session_regenerate_id();
session_destroy();


header("Location: index.php");