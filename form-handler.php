<?php
$produk = $_POST['produk'];
$nama_lengkap = $_POST['nama'];
$nomor_whatsapp = $_POST['nomor'];
$bukti_transfer = $_POST['bukti'];
$alamat = $_POST['alamat'];

$email_from = 'TrendyTreasuresID2@gmail.com';

$email_subject = 'Pesanan Baru';

$email_body = "Produk: $produk.\n".
                "User Name: $nama_lengkap.\n".
                "User Whatsapp: $nomor_whatsapp.\n".
                "Bukti Transter: $bukti_transfer.\n".
                "Alamat: $alamat.\n";

$to = 'muhamadrezafaturahman39@gmail.com';

$headers = "from: $email_from \r\n";

$headers .= "Reply-To: $nomor_whatsapp \r\n";

mail($to,$email_subject,$email_body,$headers)

header("Location: pembayaran1.html");
header("Location: pembayaran2.html");
header("Location: pembayaran3.html");
?>