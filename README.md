# koneksi1.php
&lt;?php $host = "localhost"; $user = "root"; $pass = ""; $name = "tari"; $koneksi = mysql_connect ($host, $user, $pass) or die ("Koneksi Ke Database Gagal"); mysql_select_db ($name, $koneksi) or die ("Tidak ada database yang dipilih"); ?>
