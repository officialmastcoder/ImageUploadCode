<?php 

if( isset( $_POST[ 'Upload' ] ) ) { 
    $target_path  = "/uploads/"; 
    $target_path .= basename( $_FILES[ 'uploaded' ][ 'name' ] ); 

    if( !move_uploaded_file( $_FILES[ 'uploaded' ][ 'tmp_name' ], $target_path ) ) { 
        echo '<pre>Your image was not uploaded.</pre>'; 
    } 
    else { 
        echo "<pre>{$target_path} succesfully uploaded!</pre>"; 
    } 
} 

?> 