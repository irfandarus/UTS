<!DOCTYPE html>
<html>
	<head>
		<title>UTS PEMROGRAMAN WEB 2</title>
		<style type="text/css">
			#satu { width:400px; padding:20px 80px; margin:50px; float: left; }
			#dua { width:400px; padding:20px 80px; margin:50px; float: left; }
			.judul{ text-align:center; font-size:16px; }
			.table1 {
			  border-collapse: collapse;
			  width: 100%; 
			  padding: 50px 30px; 
			  margin: 0 auto;
			}

			.table1 tr{
			  border: 1px solid black;
			  padding-bottom: 10px;
			  margin-left: 2px;
			}
			.table1 td{
			  border: 1px solid black;
			  padding-bottom: 10px;
			}
		</style>
	</head>
	<body>
		<div id="satu">
			<h3 style="text-align: center;">Form Data Pasien <b>Covid-19</b></h3>
			<form action="proses.php" method="post" enctype="multipart/form-data">
				<p>Nama Wilayah &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 
					<select name="wilayah" required>
						<option value="">Pilih Wilayah</option>
						<option value="DKI Jakarta">DKI Jakarta</option>
						<option value="Jawa Barat">Jawa Barat</option>
						<option value="Banten">Banten</option>
						<option value="Jawa Tengah">Jawa Tengah</option>
					</select>
				</p>
				<p>
					Jumlah Positif &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 	
					<input type="text" name="jml_positif" placeholder="Jumlah Positif" required />
				</p>
				<p>
					Jumlah Dirawat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 
					<input type="text" name="jml_dirawat" placeholder="Jumlah Dirawat" />
				</p>
				<p>
					Jumlah Sembuh &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 
					<input type="text" name="jml_sembuh" placeholder="Jumlah Sembuh" />
				</p>
				<p>Jumlah Meninggal &nbsp;&nbsp;&nbsp;: 
					<input type="text" name="jml_meninggal" placeholder="Jumlah Meninggal" />
				</p>
				<p>Nama Operator &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 
					<input type="text" name="nama_operator" placeholder="Nama Operator" required />
				</p>
				<p>NIM Mahasiswa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 
					<input type="text" name="nim" placeholder="NIM Mahasiswa" required />
				</p>
				<p style="margin-left: 140px;"><input type="submit" name="kirim" value="kirim" />&nbsp;<input type="reset" name="del" value="Hapus" /></p>
			</form>
		</div>
		<div id="dua">
			<br><br>
			<?php
				$file = "data_pasien.txt";
				$fp = fopen($file,"r");

				while (!feof($fp)){
					$baca = fgets($fp,50);
					print("$baca");
				}
				fclose($fp);
			?>
		</div>
	</body>
</html>