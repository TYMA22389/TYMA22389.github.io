<?php
session_start();
if (isset($_POST['value'],$_SESSION['captcha']) && md5($_POST['value']) == $_SESSION['captcha'])
{
   echo "true";
}
else
{
   echo "false";
}
?>