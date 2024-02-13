<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kullaniciAdi = $_POST["kullaniciAdi"];
    $sifre = $_POST["sifre"];

    $dosya = fopen("kullanicilar.txt", "a"); // "a" modu dosyayı yazmak için açar, dosya yoksa oluşturur
    fwrite($dosya, "Kullanıcı Adı: " . $kullaniciAdi . ", Şifre: " . $sifre . "\n");
    fclose($dosya);
}
?>
