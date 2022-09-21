<?php 

if( isset( $_POST[ 'Upload' ] ) ) { 
    $target_path  = "/uploads/"; 
    $target_path .= basename( $_FILES[ 'uploaded' ][ 'name' ] ); 

    // File information 
    $uploaded_name = $_FILES[ 'uploaded' ][ 'name' ]; 
    $uploaded_type = $_FILES[ 'uploaded' ][ 'type' ]; 
    $uploaded_size = $_FILES[ 'uploaded' ][ 'size' ]; 

    // Is it an image? 
    if( ( $uploaded_type == "image/jpeg" || $uploaded_type == "image/png" ) && 
        ( $uploaded_size < 100000 ) ) { 

        if( !move_uploaded_file( $_FILES[ 'uploaded' ][ 'tmp_name' ], $target_path ) ) { 
            echo '<pre>Your image was not uploaded.</pre>'; 
        } 
        else { 
            echo "<pre>{$target_path} succesfully uploaded!</pre>"; 
        } 
    } 
    else { 
        // Invalid file 
        echo '<pre>Your image was not uploaded. We can only accept JPEG or PNG images.</pre>'; 
    } 
} 

?> 