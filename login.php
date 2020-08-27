<?php

    if (array_key_exists('u', $_POST) AND array_key_exists('p', $_POST)) {
        
        $link = mysqli_connect("localhost", "root", "", "database");

            if (mysqli_connect_error()) {
        
                die ("There was an error connecting to the database");
        
            } 
        
        
        if ($_POST['u'] == '') {
            
            echo "<h1>Email address is required.</h1>";
            
        } else if ($_POST['p'] == '') {
            
            echo "<h1>Password is required.</h1>";
            
        } else {
            
            $query = "SELECT * FROM `userdata` WHERE email = '".mysqli_real_escape_string($link, $_POST['u'])."'";
            
            $result = mysqli_query($link, $query);
			$row = mysqli_fetch_array($result);
            
          if (mysqli_real_escape_string($link, $_POST['p'])==$row['Password']) {
				
			
				
		  echo "<h1>You have successfully logged in...Going to maskpp.com...</h1>"; 
		  header( "refresh:2; url=https://www.google.com" );}	
			else {
				echo "<h1>Password mismatched..Please enter the correct password</h1>";
			}
			 
			
	}}
				   


?>
