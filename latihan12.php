<?php
session_start();
include ("koneksi.php");
$name=$_POST['username'];
$pass=$_POST['password'];
$sql="select username from user where username='$name' and password='$pass'";
$hasil=mysql_query($sql) or exit("error query : <b>".$sql."</b>");
if (mysql_num_rows($hasil)>0){
    $data=mysql_fetch_array($hasil);
    $_SESSION['username']=$data['username'];
    header("location:latihan10.php");
    exit();
}else{?>
<h2>SOrry..</h2>
<p>username atau password salah.
klik <a href="latihan11.php">LOGIN</a> untuk login</p>
<?php
}
?>