

<?php include ("header.php"); ?>
<?php 


session_start();

session_destroy();
$_SESSION= array( );



header('Location: login.php');


?>
<?php include ("footer.php"); ?>

