<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim</title>
</head>
<body>
    <div class="container">
        <h2>İletişim Formu</h2>
        <form id="contactForm">
            <label for="name">İsim:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">E-posta:</label>
            <input type="email" id="email" name="email" required>
            <label for="message">Mesaj:</label>
            <textarea id="message" name="message" rows="4" required></textarea>
            <input type="button" value="Gönder" onclick="submitForm()">
        </form>
    </div>

    <script>
        function submitForm() {
            var formData = {
                name: document.getElementById("name").value,
                email: document.getElementById("email").value,
                message: document.getElementById("message").value
            };

            // FormData nesnesini kullanarak JSON formatında gönderme
            fetch('sendmail.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(formData)
            })
            .then(response => response.json())
            .then(data => {
                console.log('Form gönderildi:', data);
                alert('Form gönderildi, teşekkür ederiz!');
            })
            .catch((error) => {
                console.error('Hata:', error);
                alert('Form gönderilirken bir hata oluştu!');
            });
        }
    </script>
</body>
</html>
