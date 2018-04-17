<?php 
$email = $_post['email'];
$pass  = $_post['pass'];

include koneksi.php;

$sql  = "select * from user where email='$email'";
$user = mysqli_query($konek, $sql);

if(mysqli_num_rows($user)>0){
    session_start();
    $userData = mysqli_fetch_array($user);
    
    if(password_verify($pass,$userData['password'])){

        $_SESSION['status_login']="sudah_login";
        $_SESSION['nama_user']   = $userData['nama_lengkap'];
        header("location:../../index2.php");
    }else{
         header("location:../../index.php");
    }

}else{
    header("location:../../index.php");
}
 ?>