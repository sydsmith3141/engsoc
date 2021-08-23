<?php
error_reporting(E_ALL | E_WARNING | E_NOTICE);
ini_set('display_errors', TRUE);

if(isset($_GET["emailaddress"])){
    $f=fopen("data.txt","a");
    fputs($f,$_GET["emailaddress"].","."\r\n");
    fclose($f);
}

if(isset($_GET["list"]) && isset($_GET["pass"])){
    if($_GET["list"] == "true" && $_GET["pass"] == "panama")
    {
        echo file_get_contents("data.txt");
    }
} else {
    flush();
    header("Location:ContactUs.html");
    die('should have redirected by now');
}
?>
