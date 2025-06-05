<?php

    $host = "aws-0-us-east-1.pooler.supabase.com"; 
    $port="6543"; 
    $dbname="postgres";  
    $user="postgres.ojnwvpnaqszlwbmqdxjw"; 
    $password ="unicesmag@@"; 
    


// Create connetion 
$conn = pg_connect(" 
    host = $host
    port = $port
    dbname=$dbname
    user = $user
    password= $password


") ;

// verificamos si la conexion se dio 

if(!$conn){// si la conexion no se dio 
  //  die("Connection error: ".pg_last_error());
}else{
    //echo"Success connection";

}

//pg_close(); // esta linea abre conexion y luego dada la conexion debe cerrar el puerto

?>