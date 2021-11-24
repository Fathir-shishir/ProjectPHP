<?php

$filename="C:\\wamp64\\www\\earthquake\\file.txt";


function addmessage($name,$email,$subject,$message){
        
       
    file_put_contents( $filename,$name );
  file_put_contents( $filename,$email );
    file_put_contents( $filename,$subject );
     file_put_contents( $filename,$message );
    
}

?>
