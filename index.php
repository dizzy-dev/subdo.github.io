<?php
include "tools.php";
if( !isset($_GET['id']) || empty($_GET['id']) ){
	redirect('./login.php');
	}else{
		$url = $_GET['id'];
		//echo $id;
		
	if( file_exists("db/$url.txt") ){
		$urlasli = file_get_contents("db/$url.txt");
		
		$parts = explode("|",$urlasli);

?>
<!DOCTYPE html>
<html><link type="text/css" rel="stylesheet" id="dark-mode-custom-link">
<link type="text/css" rel="stylesheet" id="dark-mode-general-link">
<style lang="en" type="text/css" id="dark-mode-custom-style"></style>
<style lang="en" type="text/css" id="dark-mode-native-style"></style>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $parts[0] ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/rndytech/backend/assets/css/shortlink2.css">
</head>
<br>
			<br>
				<br>
<body>
<h1><?= $parts[1] ?></h1>
<p class="paragraf" ><?= $parts[2] ?></p>
<?php

}else{
		redirect('./login.php');
	}
   
}
?>
