<?php
    //Lo primero es conectarnos a la bd 

    include('../../config/database.php');

    //session_start();

    if(isset($_SESSION['user_id'])){
        header('Refresh:0; url=http://localhost/schoolar2/src/index.html');
    }

// Aqui solo haremos esto, que es lo que necesita el usuario.
if(!empty($_POST['e_mail']) && !empty($_POST['p_sswd'])){   //valida que se halla enviado form

$email= $_POST['e_mail'];
$passwd = $_POST['p_sswd'];
$enc_pass = sha1($passwd);//aqui se llama nuevamente la contraseña y viene desencriotada


$sql = "
    select 
        id,
        COUNT(id) as total
    from 
        users
    where
        email= '$email' and
        password = '$enc_pass' and
        status = true
    group by 
        id;
";

$res= pg_query($conn, $sql);

if($res){
    $row = pg_fetch_assoc($res);
    if ($row && $row['total'] > 0) {
       //echo "Login Ok ";
        $_SESSION['user_id']=$row['id'];
        header('Refresh:0; url=http://localhost/schoolar2/src/index.html');
        exit;
    }else{
        echo"Login failed";
        header('Refresh:0; url=http://localhost/schoolar2/src/login.html');
    }
}
//Lo siguiente es solo para agregar como mejoras...
//else {
  //  echo "Error en la consulta: " . pg_last_error($conn);
//}
}
?>