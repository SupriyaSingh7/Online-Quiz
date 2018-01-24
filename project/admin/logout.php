<?php
session_start();
if(session_destroy())
{
header("location:login1.php");
}
?>