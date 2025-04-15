<?php
/** 
*Fungsi untuk menhitung nilai akhir mahasiswa 
*@param $nilai_uts NILAI UTS (0-100)
*@param $nilai_uas NILAI UAS (0-100)
*@param $nilai_tugas NILAI TUGAS/PRAKTIKUM (0-100)
*@return Nilai akhir Mahasiswa 
*/

function hitung_nilai($nilai_uts, $nilai_uas, $nilai_tugas){
    $nilai_akhir = (0.5*$nilai_uts) + (0.30*$nilai_uas) + (0.45*$nilai_tugas)
    return $nilai_akhir;
}
