<?php 
ini_set("session.cookie_lifetime","7200");
ini_set("session.gc_maxlifetime","7200");
session_start();
$var = $_SESSION['user'];  
if($var != NULL){
    session_regenerate_id(true); 
} else{
   header("location:login.php");
}
?>
<?php include("head.php");?>
<?php include("header.php");?>

<div align="center">
	
	<embed src="condicionados/Condiciones Generales Interwelt_2018V2_.pdf" width="1000" height="600">
</div>

<div align="center" style="margin-top: 50px;"><a href="condiciones-generales.php"><img src="img/noticias/back.png" align="center"></div></a>

<?php include("footer.php"); ?>