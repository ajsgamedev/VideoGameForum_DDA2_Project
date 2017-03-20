<?php

//title tab 
$tab="L03";

//page heading
$pageHeading="L03 - User Registration";

//message (may not be used by view)
$msg='';

//nav section content
$contentStringNAV='';
$contentStringNAV.='<h3>NAV SECTION</h3>';
$contentStringNAV.='<a href="http://php.net/manual/en/book.mysqli.php">MySQLi Manual</a><br>';
$contentStringNAV.='<h4>Examples</h4>';
$contentStringNAV.='<a href="controller_main.php">HOME</a></br>';

//main section content:
$contentStringMAIN='';
$contentStringMAIN.='<h1>Choose an example</h1>';
$contentStringMAIN.='<form action="'.$_SERVER["PHP_SELF"].'" method="post">';
$contentStringMAIN.='<select name="selection">';
$contentStringMAIN.='  <option value="ex1">Example 1 - register a user - no encryption or validation</option>';
$contentStringMAIN.='  <option value="ex2">Example 2 - register a user - with encryption but no validation</option>';
$contentStringMAIN.='  <option value="ex3">Example 3 - register a user - with encryption and form validation</option>';
$contentStringMAIN.='  <option value="ex4">Example 4 - register a user - with password strength check</option>';
$contentStringMAIN.='  <option value="ex5">Example 5 - login a user whose password is encrypted</option>';
$contentStringMAIN.='</select>';
$contentStringMAIN.='<input type="submit" type="button" value="Choose Example" name="selectController">';
$contentStringMAIN.='</form>';

	
//RHS section content
$contentStringRHS='<h3>RHS SECTION</h3>';
$contentStringRHS.='Choose an example from the drop down menu.';

//footer section content
$contentStringFOOTER='';

if (__DEBUG==1) //construct the footer with debug information 
	{	
		$contentStringFOOTER.= '<footer class="debug">';

		$contentStringFOOTER.=  '<h3>***DEBUG INFORMATION***</h3>';
		
		$contentStringFOOTER.=  '<h4>$_COOKIE Array</h4>';
		foreach($_COOKIE as $key=>$value){
			$contentStringFOOTER.=  '$_COOKIE[\''.$key."'] = ".$value.'</br>';
		}
		
		$contentStringFOOTER.=  '<h4>$_SESSION Array</h4>';
		foreach($_SESSION as $key=>$value){
			$contentStringFOOTER.=  '$_SESSION[\''.$key."'] = ".$value.'</br>';
		}		

		$contentStringFOOTER.=  '<h4>$_POST Array</h4>';
		foreach($_POST as $key=>$value){
			$contentStringFOOTER.=  '$_POST[\''.$key."'] = ".$value.'</br>';
		}
		$contentStringFOOTER.=  "</footer>";
	}
else{ //construct the standard footer
	$contentStringFOOTER.='<footer class="copyright">';
	$contentStringFOOTER.= 'Copyright 2017 Gerry Guinane';
	$contentStringFOOTER.= "</footer>";
}


?>


















 



