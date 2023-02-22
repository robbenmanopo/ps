<?php
if(!defined('INDEX')) die("");

$halaman=[
    "dashboard",
    //menu santri
    "santri_tampil",
    "santri_tambah",
    "santri_insert",
    "santri_edit",
    "santri_update",
    "santri_delete",
    //menu siswa
    "siswa_tampil"
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