<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["Name"];
    $phone = $_POST["Phone_Number"];
    $email = $_POST["Email"];
    $message = $_POST["Message"];

    // Mengatur alamat email tujuan
    $to = "ahmadmuniffirman@gmail.com";
    $subject = "Pesan dari Formulir Website";

    $headers = "From: $email" . "\r\n" .
        "Reply-To: $email" . "\r\n" .
        "X-Mailer: PHP/" . phpversion();

    $mailBody = "Nama: $name\n" .
                "Nomor Telepon: $phone\n" .
                "Email: $email\n" .
                "Pesan:\n$message";

    // Mengirim email
    mail($to, $subject, $mailBody, $headers);

    // Redirect ke halaman "terima kasih" setelah mengirim
    header("Location= index.html");
}
?>
