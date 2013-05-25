<?php

	$page = null;
	
	if(isset ($_GET['page'])) //inclut les pages.
	{
		$page = $_GET['page'];
	}
	
	$action = null;
	
	if(isset ($_GET['action'])) //inclut les actions.
	{
		$action = $_GET['action'];
	} 	

	include 'actiongroups/front.php'; //inclut le de nav.
	include 'actiongroups/member.php'; //inclut le de member.
	
	include 'views/main.php'; //inclut les views via la page main.

?>