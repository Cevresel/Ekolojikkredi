<?php
session_start();

// Kullanıcı giriş formu
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Veritabanı kontrolü (Firebase veya başka bir veritabanı kullanılabilir)
    // Örnek: Firebase ile giriş yapma (önceden ayarlanan Firebase SDK ile)
    // Burada email ve şifre doğrulama yapılacak

    $_SESSION['user'] = $email;  // Giriş başarılıysa, kullanıcının e-posta bilgisi oturuma eklenir
    header("Location: profile.php");  // Kullanıcı profil sayfasına yönlendirilir
}
?>
