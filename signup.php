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
            
            $query = "SELECT `id` FROM `userdata` WHERE email = '".mysqli_real_escape_string($link, $_POST['u'])."'";
            
            $result = mysqli_query($link, $query);
            
            if (mysqli_num_rows($result) > 0) {
                
                echo "<h1>That email address has already been taken.</h1>";
                
            } else {
                
                $query = "INSERT INTO `userdata` (`email`, `password`) VALUES ('".mysqli_real_escape_string($link, $_POST['u'])."', '".mysqli_real_escape_string($link, $_POST['p'])."')";
                
                if (mysqli_query($link, $query)) {
                    
                    echo "<h1>You have been registered succesfully!</h1>";
                    
                } else {
                    
                    echo "<h1>There was a problem in registeration - please try again later.</h1>";
                    
                }
                
            }
            
        }
        
        
    }

    


?>


