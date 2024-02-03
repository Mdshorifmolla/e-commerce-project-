<?php

if (isset($_POST['submit'])) {
    
    $total = count($_FILES['file']['name']);
    
    for ($x = 0; $x < total; $x++) {
        
        $filename = $_FILES['file']['name']['$x'];
        
        $tempname = $_FILES['file']['tmp_name']['$x'];
        
        $uploc = './images'.$filename;
        
        move_uploaded_file($tempname,$uploc);
         
    }
    
    
}

?>
