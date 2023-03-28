<?php
$uname = $_POST["txtUname"];
$Passwrd = $_POST["txtPwd"];
if( ($uname=="nnn" ) && ($Passwrd=="123"))
{
echo "valid user";
session_start();

header("location:display.php");
}
else
{
echo "Invalid Details";
//header("location:pass.html");
}
?>


