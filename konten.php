<?php
if(!defined('INDEX')) die("");

$halaman=[
    "dashboard",
    //menu siswa
    "siswa_tampil",
    "siswa_tambah",
    "siswa_insert",
    "siswa_edit",
    "siswa_update",
    "siswa_delete",
    //menu mapel
    "mapel_tampil",
    "mapel_tambah",
    "mapel_insert",
    "mapel_edit",
    "mapel_update",
    "mapel_delete",
    //menu kd
    "kd_tampil",
    "kd_tambah",
    "kd_insert",
    "kd_edit",
    "kd_update",
    "kd_delete",
    //menu guru
    "guru_tampil",
    "guru_tambah",
    "guru_insert",
    "guru_edit",
    "guru_update",
    "guru_delete",
    //menu kelas
    "kelas_tampil",
    "kelas_tambah",
    "kelas_insert",
    "kelas_edit",
    "kelas_update",
    "kelas_delete",
    //menu nilai
    "nilai_tampil",
    "nilai_tambah",
    "nilai_insert",
    "nilai_edit",
    "nilai_update",
    "nilai_delete",
    //menu user
    "user_tampil",
    "user_tambah",
    "user_insert",
    "user_edit",
    "user_update",
    "user_delete",
    //menu tambahan
    "nilai_tampil_mapel",
    "nilai_tampil_kd",
    "nilai_lihat"

    //
];
if(isset($_GET['hal'])) $hal = $_GET['hal'];
else $hal = "dashboard";

foreach($halaman as $h){
    if($hal == $h){
        include "content/$h.php";
        break;
    }
}
?>