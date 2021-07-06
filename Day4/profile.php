<?php
if(isset($_GET["name"])){
    //echo $_GET["name"];
    echo htmlspecialchars($_GET["name"]);
}