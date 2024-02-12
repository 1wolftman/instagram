<?php
// Formdan gelen cevapları alıyoruz
$cevaplar = $_POST['cevaplar'];

// Dosyaya yazmak için dosya yolunu belirliyoruz
$dosya_yolu = 'anket_cevaplari.txt';

// Dosyayı açıyoruz (yoksa oluşturur) ve yazma modunda açıyoruz
$dosya = fopen($dosya_yolu, 'a');

// Cevapları dosyaya yazıyoruz
fwrite($dosya, $cevaplar . "\n");

// Dosyayı kapatıyoruz
fclose($dosya);

echo "Cevaplarınız başarıyla kaydedildi!";
?>
