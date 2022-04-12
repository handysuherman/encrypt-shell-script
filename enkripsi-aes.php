<?php
	//koneksi database
	$conn = mysqli_connect('localhost','root','','buktiarsiap');
	
	//pilih tabel
    $result = $conn->prepare("SELECT * FROM buktis1");
    $result->execute();
    $row = $result->get_result();
	
	//array
	$nomor=1;
if ($row->num_rows > 0) {
	while($rowsql = $row->fetch_assoc()) {
    //$nik = $rowsql["nik"];
    //$user = $rowsql["user"];
    //$nama = $rowsql["nama"];
    $link = $rowsql["link"];

	//$data="ini adalah contoh enkripsi menggunakan php";	
	$method="AES-128-CTR";
	$key ="wikanproduction";
	$option=0;
	//cek dengan openssl_cipher_iv_length($method);
	$iv="1251632135716362";
	
	//enkripsi NIK
	//$dataTerenkripsi=openssl_encrypt($nik, $method, $key, $option, $iv);
	//update ke DATABASE
	//mysqli_query($conn, "UPDATE apl1s SET nik = '$dataTerenkripsi' WHERE user = '$user'");
	
	//enkripsi NAMA
	//$dataTerenkripsi2=openssl_encrypt($nama, $method, $key, $option, $iv);
	//update ke DATABASE
	//mysqli_query($conn, "UPDATE apl1s SET nama = '$dataTerenkripsi2' WHERE user = '$user'");
	
	//enkripsi LINK
	$dataTerenkripsi3=openssl_encrypt($link, $method, $key, $option, $iv);
	//update ke DATABASE
	mysqli_query($conn, "UPDATE buktis1 SET link = '$dataTerenkripsi3'");
	
	$dataDecrypt=openssl_decrypt($dataTerenkripsi3, $method, $key, $option, $iv);
	echo $nomor++ . ". Data " . $dataDecrypt . " terenkripsi menjadi = " . $dataTerenkripsi3 . "<br/><br/>";
	
	}
	
	echo "========== Ini akhir dari Enkripsi ==========";
	
}
?>