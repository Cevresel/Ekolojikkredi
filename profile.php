<?php
session_start();

// Eğer kullanıcı oturum açmamışsa, giriş sayfasına yönlendirilir
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

$userEmail = $_SESSION['user'];  // Kullanıcının e-posta adresi oturumdan alınır

// Firebase üzerinden kullanıcı verilerini çekme işlemi
// Burada Firebase SDK ile veri çekme işlemi yapılacak

?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="profile">
        <h2>Hoşgeldiniz, <?php echo $userEmail; ?>!</h2>
        <p>Kazandığınız Ekolojik Kredi: <span id="credit">0</span></p>
        <h3>Atık Türleri ve Kredileri</h3>
        <ul>
            <li>Plastik: 10 Puan/kg</li>
            <li>Kağıt: 5 Puan/kg</li>
            <li>Cam: 7 Puan/kg</li>
            <li>Metal: 8 Puan/kg</li>
            <li>Pil: 15 Puan/kg</li>
            <li>Elektronik: 20 Puan/kg</li>
        </ul>
    </div>

    <script>
        // Kullanıcının kazandığı krediyi Firebase'ten çekme ve gösterme işlemi
        // Örneğin:
        const userCredit = 100;  // Firebase'ten çekilen kredi verisi

        document.getElementById("credit").textContent = userCredit;
    </script>
</body>
</html>
