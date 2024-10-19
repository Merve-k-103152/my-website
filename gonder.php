<?php
if ($_SERVER["REQUEST_METHOD"] == "post") {
    
    $isim = htmlspecialchars($_POST['isim']);
    $soyisim = htmlspecialchars($_POST['soyisim']);
    $telefon = htmlspecialchars($_POST['telefon']);
    $adres = htmlspecialchars($_POST['adres']);

    

    
    echo "<h1>Form Gönderildi!</h1>";
    echo "<p>İsim: $isim</p>";
    echo "<p>Soyisim: $soyisim</p>";
    echo "<p>Telefon: $telefon</p>";
    echo "<p>Adres: $adres</p>";
} else {
    echo "<h1>Form gönderimi başarısız oldu!</h1>";
}
?>
