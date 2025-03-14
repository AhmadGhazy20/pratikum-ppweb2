<?php
$ns1 = ["id" => 1, "nim" => "01101", "uts" => 80, "uas" => 84, "tugas" => 78];
$ns2 = ["id" => 2, "nim" => "01121", "uts" => 70, "uas" => 50, "tugas" => 68];
$ns3 = ["id" => 3, "nim" => "01131", "uts" => 60, "uas" => 86, "tugas" => 70];
$ns4 = ["id" => 4, "nim" => "01141", "uts" => 90, "uas" => 91, "tugas" => 82];

$ar_nilai = [ $ns1, $ns2, $ns3, $ns4,];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratikum 1</title>
</head>
<body>
    <h3>Daftar Nilai Siswa</h3>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nim</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>Tugas</th>
            </tr>
        </thead>
        <tbody>
            <?php
               $nomor = 1;
               foreach($ar_nilai as $ns) {
                   echo '<tr><td>' .$nomor.'</td>';
                   echo '<td>'.$ns['nim'].'</td>';
                   echo '<td>'.$ns['uts'].'</td>';
                   echo '<td>'.$ns['uas'].'</td>';
                   echo '<td>'.$ns['tugas'].'</td>';
                   $nilai_akhir = ($ns['uts'] + $ns['uas'] + $ns['tugas'])/3
                   echo '<td>'.number_formst($nilai_akhir,2,',','.').'</td>';
                   echo '<tr/>';
                   $nomor++;

               }
            ?>
</body>
</html>