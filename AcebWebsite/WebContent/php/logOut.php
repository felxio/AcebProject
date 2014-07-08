<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['form_name'] == 'logoutform')
{
   session_start();
   unset($_SESSION['username']);
}
?>