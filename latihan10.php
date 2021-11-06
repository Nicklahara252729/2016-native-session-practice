<?php
session_start();
if(isset($_SESSION['username'])){ ?>
<h2>Control Panel</h2>
<p>Selamat datang user"<?php echo $_SESSION['username'];?>".
klik <a href="latihan13.php">disini</a>untuk logout.
</p>
<?php
}else{?>
<h2>Sorry..</h2>
<p>Anda tidak berhak mengakses halaman ini.
selahkan <a href="latihan11.php">login</a>terlebih dahulu.
</p>
<?php
}
?>