<?php 
session_start(); 

session_destroy();

header("Location:login.php"); // direciona para o login

?> 