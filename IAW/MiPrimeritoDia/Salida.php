<html>

<head>
  <title>Dándolo Todo</title>
  <link rel="stylesheet" href="Bye.css">
</head>

<body>
	<h>El mono se ha cargado la sesión correctamente, puedes ir en paz.</>
</body>

﻿<?php
	
	session_start();

	session_unset();
	
	session_destroy();
	
?>