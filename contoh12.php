<!--b.buat file untuk memanggil file php di atas-->

<?php
$a = "saya sedang belajar PHP";
//dalam file php ini
function tulistebal($teks)
{
echo"<br>";
echo "<b>$teks</b>"; //mengambil nilai dari require
}
tulistebal($a)
?>