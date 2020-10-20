<?php
$nilai = 87;
if ($nilai > 85) {
	$grade ="selamat… proses belajarmu sangat baik, tingkatkan terus kemampuan codingnya…";
}
elseif ($nilai > 70) {
	$grade ="selamat… kamu sudah mulai memahami pemrgraman PHP, tingkatkan terus skil codingmu…";
}
elseif ($nilai > 60) {
	$grade ="uppsssss….. skil codingmu perlu diasah ini gaes, tetap semangat  belajar dan eksplore kemampuan ya…";
}

else {
	$grade = "semangat belajar nya di tambah lagi ya gaes";
}
echo "nilai anda = $nilai <br>";
echo "grade anda = $grade";
