<?php
// Este es el script 
//Config connection 
// lo que necesitamos para conectarnos 
//--------------------------------------------
/*
    $host = "localhost"; //Host, luego se cambia por la ip publica 
    $port="5432"; // puerto, en este caso de posgress
    $dbname="schoolar"; // nombre de la base de datos 
    $user="postgres"; // usuario
    $password ="postgres"; //contraseña, luego usamos variables de entorno
    //con es quien tiene la llave de toda la casa, tiene todos los privilegios. gi
    */

    
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
    //die("Connection error: ".pg_last_error());
}else{
    //echo"Success connection";

}

//pg_close(); // esta linea abre conexion y luego dada la conexion debe cerrar el puerto

?>