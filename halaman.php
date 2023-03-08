<?php 

if(isset($_GET['url'])){
    switch ($_GET['url']) {
        case 'tulis-pengaduan':
            include 'tulis-pengaduan.php';
            break;

            case 'lihat-pengaduan';
            include 'lihat-pengaduan.php';
            break;

            case 'detail-pengaduan';
            include 'detail-pengaduan.php';
            break;

            case 'lihat-tanggapan';
        	include 'lihat-tanggapan.php';
            break;

             case 'edit-pengaduan';
            include 'edit-pengaduan.php';
            break;

        default:
          echo "Halaman Tidak Ditemukan";
            break;
    }
}else{
   echo "Selamat Datang di Aplikasi Pelaporan Pengaduan Masyarakat, Dimana Aplikasi ini dapat dipergunakan oleh masyarakat untuk menyampaikan pengaduan atau keluhan mengenai pelayanan publik tertentu.<br><br>";
}