<?php

function Nilai_Akhir($kehadiran, $forum, $tugas_individu, $tugas_kelompok, $uts, $uas, $project) {
    $akhir = ($kehadiran * 0.1) + ($forum * 0.1) + ($tugas_individu * 0.15) +
             ($tugas_kelompok * 0.15) + ($uts * 0.2) + ($uas * 0.2) + ($project * 0.1);
    return round($akhir);
}

function Huruf_Mutu($n) {
    if ($n >= 85) {
        return "A";
    } elseif ($n >= 75) {
        return "B";
    } elseif ($n >= 65) {
        return "C";
    } elseif ($n >= 55) {
        return "D";
    } else {
        return "E";
    }
}

$nim = readline("Masukkan NIM: ");
$nama = readline("Masukkan Nama: ");
$kehadiran = readline("Nilai Kehadiran: ");
$forum = readline("Nilai Forum: ");
$tugas_individu = readline("Nilai Tugas Individu: ");
$tugas_kelompok = readline("Nilai Tugas Kelompok: ");
$uts = readline("Nilai UTS: ");
$uas = readline("Nilai UAS: ");
$project = readline("Nilai Project: ");
$nilai_akhir = Nilai_Akhir($kehadiran, $forum, $tugas_individu, $tugas_kelompok, $uts, $uas, $project);
$huruf_mutu = Huruf_Mutu($nilai_akhir);

echo "===============================\n";
echo "     MENGHITUNG NILAI AKHIR\n";
echo "===============================\n";
echo "NIM                : $nim\n";
echo "NAMA               : $nama\n";
echo "NILAI KEHADIRAN    : $kehadiran\n";
echo "NILAI FORUM        : $forum\n";
echo "NILAI TUGAS INDIVIDU: $tugas_individu\n";
echo "NILAI TUGAS KELOMPOK: $tugas_kelompok\n";
echo "NILAI UTS          : $uts\n";
echo "NILAI UAS          : $uas\n";
echo "NILAI PROJECT      : $project\n";
echo "\n[ $nim $nama ]\n";
echo "NILAI AKHIR        : $nilai_akhir\n";
echo "HURUF MUTU         : $huruf_mutu\n";
echo "===============================\n";
?>