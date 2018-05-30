<!DOCTYPE html>

<html>

<head>

	<title>TARI TRADISONAL</title>

</head>

<body>

	<h2>TARI TRADISONAL</h2>

	

	<p><a href="tari.php">Beranda</a> / <a href="tambah1.php">Tambah Data</a></p>

	

	<h3>Data Penari</h3>

	

	<table cellpadding="10" cellspacing="3" border="1">

		<tr bgcolor="#CCCCCC">

			<th>NO.</th>

			<th>Nama Penari</th>

			<th>Nama Tarian</th>

			<th>Asal Tarian</th>

		</tr>

		

		<?php

		

		include('koneksi1.php');

		

		$query = mysql_query("SELECT * FROM tarian ORDER BY nama_tarian DESC") or die(mysql_error());

		

		//cek, apakakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)

		if(mysql_num_rows($query) == 0){	//ini artinya jika data hasil query di atas kosong

			

			//jika data kosong, maka akan menampilkan row kosong

			echo '<tr><td colspan="6">Tidak ada data!</td></tr>';

			

		}else{	//else ini artinya jika data hasil query ada (data diu database tidak kosong)

			

			

			$no = 1;

			while($data = mysql_fetch_assoc($query)){	



			//perulangan while dg membuat variabel $data yang akan mengambil data di database

				

			//menampilkan row dengan data di database

			

				echo '<tr>';

					echo '<td>'.$no.'</td>';	//menampilkan nomor urut

					echo '<td>'.$data['nama_penari'].'</td>';	//menampilkan data nis dari database

					echo '<td>'.$data['nama_tarian'].'</td>';	//menampilkan data nama lengkap dari database

					echo '<td>'.$data['asal_tarian'].'</td>';

					 echo '<td><a href="edit1.php?id='.$data['penari_id'].'">Edit</a>  <a href="hapus-proses1.php?id='.$data['penari_id'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>';	

					//menampilkan link edit dimana tiap link terdapat GET id -> ?id=penari_id

				echo '</tr>';

				

				$no++;	//menambah jumlah nomor urut setiap row

				

			}

			

		}

		?>

	</table>

</body>

</html>
