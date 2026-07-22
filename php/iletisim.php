<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // baglanti dosyasını dahil et
    require_once("baglanti.php");

    // Form verilerini al
    $konu = $_POST['konu'];
    $ad = $_POST['ad'];
    $email = $_POST['email'];
    $telefon = $_POST['telefon'];
    $firma = $_POST['firma'];
    $mesaj = $_POST['mesaj'];

    // Veritabanına ekle
    $sql = "INSERT INTO iletisim_formu (konu, ad, email, telefon, firma, mesaj) 
            VALUES ('$konu', '$ad', '$email', '$telefon', '$firma', '$mesaj')";

    if ($conn->query($sql) === TRUE) {
        echo "Mesaj başarıyla kaydedildi.";
    } else {
        echo "Hata: " . $conn->error;
    }

    $conn->close();
}
?>
