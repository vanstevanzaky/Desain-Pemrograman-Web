<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST['input'];
    $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

    $email = $_POST['email'];
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Input yang Anda masukkan: " . $input . "<br>";
        echo "Email yang Anda masukkan: " . htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
    } else {
        echo "Email yang dimasukkan tidak valid.";
    }
} else {
    echo '
    <form method="post" action="">
        <label for="input">Masukkan teks:</label>
        <input type="text" id="input" name="input"><br><br>

        <label for="email">Masukkan email:</label>
        <input type="email" id="email" name="email"><br><br>

        <button type="submit">Kirim</button>
    </form>';
}

