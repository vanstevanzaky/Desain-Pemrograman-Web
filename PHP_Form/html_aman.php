<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST['input'];
    $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
    echo "Input yang Anda masukkan: " . $input;
} else {
    echo '
    <form method="post" action="">
        <label for="input">Masukkan teks:</label>
        <input type="text" id="input" name="input">
        <button type="submit">Kirim</button>
    </form>';
}

