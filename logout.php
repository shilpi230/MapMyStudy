<?php
session_start();
if(isset($login_session))
{
if(session_destroy())
{
header("Location: logout_1.php");
}
}
else
{
echo "you have to login";
}
?>
